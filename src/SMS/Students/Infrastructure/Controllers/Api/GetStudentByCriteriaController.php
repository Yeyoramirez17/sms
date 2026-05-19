<?php

declare(strict_types=1);

namespace Src\SMS\Students\Infrastructure\Controllers\Api;

use Illuminate\Http\Request;
use Src\SMS\Students\Application\DTOs\SearchStudentsDTO;
use Src\SMS\Students\Application\DTOs\StudentResponseDTO;
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

        $items = array_map(
            fn ($student) => StudentResponseDTO::fromEntity($student)->toArray(),
            $result->items
        );

        return response()->json([
            'data' => $items,
            'meta' => [
                'current_page' => $result->currentPage,
                'per_page' => $result->perPage,
                'total' => $result->total,
                'last_page' => $result->lastPage,
            ],
        ]);
    }
}
