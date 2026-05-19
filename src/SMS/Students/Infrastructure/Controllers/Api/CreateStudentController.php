<?php

declare(strict_types=1);

namespace Src\SMS\Students\Infrastructure\Controllers\Api;

use App\Http\Requests\Student\CreateStudentRequest;
use Illuminate\Http\JsonResponse;
use Src\SMS\Students\Application\DTOs\CreateStudentDTO;
use Src\SMS\Students\Application\UseCases\CreateStudentUseCase;
use Src\SMS\Students\Domain\Exceptions\DuplicateDocumentException;
use Src\SMS\Students\Domain\Exceptions\DuplicateStudentCodeException;
use Src\SMS\Students\Domain\Exceptions\StudentNotFoundException;

final class CreateStudentController
{
    public function __construct(
        private CreateStudentUseCase $createStudentUseCase
    ) {}

    public function __invoke(CreateStudentRequest $request): JsonResponse
    {
        try {
            $dto = CreateStudentDTO::fromArray($request->validated());
            $response = $this->createStudentUseCase->execute($dto);

            return response()->json([
                'data' => $response->toArray(),
                'message' => 'Student created successfully',
            ], 201);
        } catch (DuplicateDocumentException $e) {
            return response()->json([
                'error' => $e->getMessage(),
            ], 422);
        } catch (DuplicateStudentCodeException $e) {
            return response()->json([
                'error' => $e->getMessage(),
            ], 422);
        } catch (\InvalidArgumentException $e) {
            return response()->json([
                'error' => $e->getMessage(),
            ], 422);
        }
    }
}