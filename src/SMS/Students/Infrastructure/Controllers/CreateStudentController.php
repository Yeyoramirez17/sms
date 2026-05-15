<?php

declare(strict_types=1);

namespace Src\SMS\Students\Infrastructure\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Src\SMS\Students\Application\DTOs\CreateStudentDTO;
use Src\SMS\Students\Application\UseCases\CreateStudentUseCase;
use Src\SMS\Students\Domain\Exceptions\DuplicateDocumentException;
use Src\SMS\Students\Domain\Exceptions\DuplicateStudentCodeException;

final class CreateStudentController
{
    public function __construct(
        private CreateStudentUseCase $createStudentUseCase
    ) {}

    public function __invoke(Request $request): JsonResponse
    {
        try {
            $dto = CreateStudentDTO::fromArray($request->all());
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
