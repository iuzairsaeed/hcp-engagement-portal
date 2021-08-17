<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Experience;
use App\Repositories\Repository;

class ExperienceController extends Controller
{
    protected $model;

    public function __construct(Experience $model)
    {

        // $this->middleware('permission:experience-list|experience-create|experience-edit|experience-delete', ['only' => ['index','show']]);
        // $this->middleware('permission:experience-create', ['only' => ['create','store']]);
        // $this->middleware('permission:experience-edit', ['only' => ['edit','update']]);
        // $this->middleware('permission:experience-delete', ['only' => ['destroy']]);
        $this->model = new Repository($model);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $this->model->create($request->all());
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Experience $experience)
    {
        try {
            $this->model->delete($experience);
            return response('Experience Deleted Successfully',200);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
