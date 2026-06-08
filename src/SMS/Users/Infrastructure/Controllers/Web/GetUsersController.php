<?php

declare(strict_types=1);

namespace Src\SMS\Users\Infrastructure\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Src\SMS\Users\Application\DTOs\UserCriteriaDTO;
use Src\SMS\Users\Application\UseCases\GetUsersByCriteriaUseCase;

final class GetUsersController extends Controller
{
    public function __construct(
        private GetUsersByCriteriaUseCase $useCase
    ) {}

    public function __invoke(Request $request)
    {
        $result = $this->useCase->execute(
            UserCriteriaDTO::fromArray($request->query())
        );

        $students = new LengthAwarePaginator(
            items: $result->items,
            total: $result->total,
            perPage: $result->perPage,
            currentPage: $result->currentPage,
            options: [
                'path'  => $request->url(),
                'query' => $request->query(),
            ]
        );
        return view('students.index', compact('students'));
    }
}
