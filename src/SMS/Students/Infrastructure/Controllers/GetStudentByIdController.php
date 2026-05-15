<?php

declare(strict_types=1);

namespace Src\SMS\Students\Infrastructure\Controllers;

use Illuminate\Http\JsonResponse;
use Src\SMS\Students\Application\UseCases\GetStudentByIdUseCase;
use Src\SMS\Students\Domain\Exceptions\StudentNotFoundException;

final class GetStudentByIdController
{
    public function __construct(
        private GetStudentByIdUseCase $getStudentByIdUseCase
    ) {}

    public function __invoke(string $id): JsonResponse
    {
        try {
            $response = $this->getStudentByIdUseCase->execute($id);

            return response()->json([
                'data' => $response->toArray(),
            ]);
        } catch (StudentNotFoundException $e) {
            return response()->json([
                'error' => $e->getMessage(),
            ], 404);
        }
    }
}
