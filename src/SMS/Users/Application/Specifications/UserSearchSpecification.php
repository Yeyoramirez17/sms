<?php

declare(strict_types=1);

namespace Src\SMS\Users\Application\Specifications;

use Src\SMS\Shared\Domain\Persistence\Criteria\Contracts\CriteriaInterface;
use Src\SMS\Shared\Domain\Persistence\Criteria\Criteria;
use Src\SMS\Shared\Domain\Persistence\Criteria\Criterion;
use Src\SMS\Shared\Domain\Persistence\Criteria\Paginate;
use Src\SMS\Shared\Domain\Persistence\Criteria\Sort;
use Src\SMS\Users\Application\DTOs\UserCriteriaDTO;

final class UserSearchSpecification
{
    public static function fromDTO(UserCriteriaDTO $dto): CriteriaInterface
    {
        $criteria = new Criteria();

        if ($dto->firstName) {
            $criteria = $criteria->addFilter(
                Criterion::like('first_name', $dto->firstName)
            );
        }

        if ($dto->lastName) {
            $criteria = $criteria->addFilter(
                Criterion::like('last_name', $dto->lastName)
            );
        }

        if ($dto->email) {
            $criteria = $criteria->addFilter(
                Criterion::like('email', $dto->email)
            );
        }

        if ($dto->status) {
            $criteria = $criteria->addFilter(
                Criterion::equals('status', $dto->status)
            );
        }

        if ($dto->role) {
            $criteria = $criteria->addFilter(
                Criterion::equals('role', $dto->role)
            );
        }

        $criteria = $criteria->sort(
            Sort::new($dto->sort, $dto->order)
        );

        $limit  = $dto->limit  ?? $dto->perPage;
        $offset = $dto->offset ?? max(0, ($dto->page - 1) * $dto->perPage);

        $criteria = $criteria->paginate(
            Paginate::create($limit, $offset)
        );

        return $criteria;
    }
}
