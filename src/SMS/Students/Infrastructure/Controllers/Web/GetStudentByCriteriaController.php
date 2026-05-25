<?php

declare(strict_types=1);

namespace Src\SMS\Students\Infrastructure\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Src\SMS\Students\Application\DTOs\SearchStudentsDTO;
use Src\SMS\Students\Application\UseCases\SearchStudentsUseCase;

final class GetStudentByCriteriaController extends Controller
{
    public function __construct(
        private SearchStudentsUseCase $searchStudentsUseCase
    ) {}

    public function __invoke(Request $request)
    {
        $dto = SearchStudentsDTO::fromArray($request->query());
        $result = $this->searchStudentsUseCase->execute($dto);

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

        return view('students.index', compact($students));
    }
}
