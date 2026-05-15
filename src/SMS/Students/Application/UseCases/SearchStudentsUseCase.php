<?php

declare(strict_types=1);

namespace Src\SMS\Students\Application\UseCases;

use Src\SMS\Students\Application\DTOs\SearchStudentsDTO;
use Src\SMS\Students\Domain\Repositories\StudentPaginatedResult;
use Src\SMS\Students\Domain\Repositories\StudentQueryInterface;
use Src\SMS\Students\Domain\Repositories\StudentSearchCriteria;

final readonly class SearchStudentsUseCase
{
    public function __construct(
        private StudentQueryInterface $studentQuery,
    ) {}

    public function execute(SearchStudentsDTO $dto): StudentPaginatedResult
    {
        $criteria = new StudentSearchCriteria(
            name: $dto->name,
            documentNumber: $dto->documentNumber,
            studentCode: $dto->studentCode,
            gender: $dto->gender,
            minAge: $dto->minAge,
            maxAge: $dto->maxAge,
            eps: $dto->eps,
            orderBy: $dto->orderBy,
            orderDirection: $dto->orderDirection,
        );

        return $this->studentQuery->searchWithPagination($criteria, $dto->page, $dto->perPage);
    }
}
