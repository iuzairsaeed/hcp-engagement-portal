<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Repository;
use App\Models\Event;

class EventController extends Controller
{

    protected $model;

    public function __construct(Event $model)
    {

        // $this->middleware('permission:event-list|event-create|event-edit|event-delete', ['only' => ['index','show']]);
        // $this->middleware('permission:event-create', ['only' => ['create','store']]);
        // $this->middleware('permission:event-edit', ['only' => ['edit','update']]);
        // $this->middleware('permission:event-delete', ['only' => ['destroy']]);
        $this->model = new Repository($model);
    }

    public function getList(Request $request)
    {
        $orderableCols = ['created_at'];
        $searchableCols = ['title'];
        $whereChecks = [];
        $whereOps = [];
        $whereVals = [];
        $with = [];
        $withCount = [];

        $data = $this->model->getData($request, $with, $withCount, $whereChecks, $whereOps, $whereVals, $searchableCols, $orderableCols);

        $serial = ($request->start ?? 0) + 1;
        collect($data['data'])->map(function ($item) use (&$serial) {
            $item['serial'] = $serial++;
            return $item;
        });
        
        return response($data, 200);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = $this->model->all();
        return view('event.index', compact('events'));
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
            $data = $request->all();
            $data['user_id'] = auth()->id();
            $this->model->create($data);
            return redirect()->back()->with('success', 'Event has been created.');
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
    public function show(Event $event)
    {
        try {
            view('event.show', compact('event'));
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
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
    public function update(Request $request, Event $event)
    {
        try { 
            $data = $request->all();
            $this->model->update($data , $event);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        try {
            $this->model->delete($event);
            return redirect()->back()->with('success', 'Event deleted Successfully');
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
