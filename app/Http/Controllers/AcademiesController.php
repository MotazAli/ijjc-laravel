<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAcademyRequest;
use App\Interfaces\Services\AcademiesServiceInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class AcademiesController extends Controller
{


    private int $rowsPerPage = 6;


    public function __construct(protected AcademiesServiceInterface $academiesService){

    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $academies = $this->academiesService->getAllAcademiesAscendingPagination($this->rowsPerPage);
        return view('dashboard.academies.index',[ 'academies' => $academies ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        //
        return view('dashboard.academies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreAcademyRequest $request
     * @return RedirectResponse|Redirector|Application
     */
    public function store(StoreAcademyRequest $request): Application|RedirectResponse|Redirector
    {
        //

        //dd( $request->get('is_active'));
        $data = $request->all();
        //dd($data);
        $request->Validated($data);
        $academy = $this->academiesService->createAcademy($data);
        return redirect(route('dashboard.academies.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
