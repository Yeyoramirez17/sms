<?php

declare(strict_types=1);

namespace Src\SMS\Students\Infrastructure\Controllers\Api;

use Illuminate\Http\Request;
use Src\SMS\Students\Application\DTOs\SearchStudentsDTO;
use Src\SMS\Students\Application\UseCases\SearchStudentsUseCase;

final class GetStudentByCriteriaController
{
    public function __construct(
        private SearchStudentsUseCase $searchStudentsUseCase
    ) {}

    public function __invoke(Request $request)
    {
        $dto = SearchStudentsDTO::fromArray($request->query());
        $result = $this->searchStudentsUseCase->execute($dto);

        return response()->json([
            'data' => array_map(fn ($item) => $item->toArray(), $result->items),
            'meta' => [
                'current_page' => $result->currentPage,
                'per_page' => $result->perPage,
                'total' => $result->total,
                'last_page' => $result->lastPage,
            ],
        ]);
    }
}
