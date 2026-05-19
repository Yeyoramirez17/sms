<?php

declare(strict_types=1);

namespace Src\SMS\Students\Infrastructure\Controllers\Api;

use Illuminate\Http\JsonResponse;
use Src\SMS\Students\Application\UseCases\DeleteStudentUseCase;
use Src\SMS\Students\Domain\Exceptions\StudentNotFoundException;

final class DeleteStudentController
{
    public function __construct(
        private DeleteStudentUseCase $deleteStudentUseCase
    ) {}

    public function __invoke(string $id): JsonResponse
    {
        try {
            $this->deleteStudentUseCase->execute($id);

            return response()->json([
                'message' => 'Student deleted successfully',
            ]);
        } catch (StudentNotFoundException $e) {
            return response()->json([
                'error' => $e->getMessage(),
            ], 404);
        }
    }
}
