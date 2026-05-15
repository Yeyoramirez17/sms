<?php

declare(strict_types=1);

namespace Src\SMS\Students\Infrastructure\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Src\SMS\Students\Application\DTOs\UpdateStudentDTO;
use Src\SMS\Students\Application\UseCases\UpdateStudentUseCase;
use Src\SMS\Students\Domain\Exceptions\StudentNotFoundException;

final class UpdateSudentController
{
    public function __construct(
        private UpdateStudentUseCase $updateStudentUseCase
    ) {}

    /**
     * Update a student by ID.
     *
     * @throws StudentNotFoundException
     * @throws \InvalidArgumentException
     */
    public function __invoke(Request $request, string $id): JsonResponse
    {
        try {
            $dto = UpdateStudentDTO::fromArray($request->all());
            $response = $this->updateStudentUseCase->execute($id, $dto);

            return response()->json([
                'data' => $response->toArray(),
                'message' => 'Student updated successfully',
            ]);
        } catch (StudentNotFoundException $e) {
            return response()->json([
                'error' => $e->getMessage(),
            ], 404);
        } catch (\InvalidArgumentException $e) {
            return response()->json([
                'error' => $e->getMessage(),
            ], 422);
        }
    }
}
