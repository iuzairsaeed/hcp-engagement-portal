<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Repository;
use App\Models\Activity;
use App\Models\Interact;
use App\Http\Requests\ActivityRequest;

class ActivityController extends Controller
{

    protected $model;

    public function __construct(Activity $model)
    {

        // $this->middleware('permission:activity-list|activity-create|activity-edit|activity-delete', ['only' => ['index','show']]);
        // $this->middleware('permission:activity-create', ['only' => ['create','store']]);
        // $this->middleware('permission:activity-edit', ['only' => ['edit','update']]);
        // $this->middleware('permission:activity-delete', ['only' => ['destroy']]);
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
        $gamifications = $this->model->all()->where('type', 'gamification');
        $clinicals = $this->model->all()->where('type', 'clinical');
        return view('activity.index', compact('gamifications', 'clinicals'));
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
    public function store(ActivityRequest $request)
    {
        try {
            $data = $request->all();
            if($request->hasFile('activity_image')){
                $file_name = uploadFile( $request->activity_image, ($request->type == 'gamification' ? gamificationPath() : clinicalPath()) );
                $data['activity_image'] = $file_name;
            }
            if($request->hasFile('activity_doc')){
                $file_name = uploadFile($request->activity_doc, ($request->type == 'gamification' ? gamificationDocPath() : clinicalDocPath()) );
                $data['activity_doc'] = $file_name;
            }
            $data['user_id'] = auth()->id();
            $this->model->create($data);
            return redirect()->back()->with('success', 'Activity has been created.');
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
    public function show(Activity $activity)
    {
        try {
            view('activity.show', compact('activity'));
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
    public function update(Request $request, Activity $activity)
    {
        try { 
            $data = $request->all();
            $this->model->update($data , $activity);
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
    public function destroy(Activity $activty)
    {
        try {
            $this->model->delete($activty);
            return redirect()->back()->with('success', 'Activity deleted Successfully');
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
    
    public function download(Activity $activity) {
        try {
            $interactModel = Interact::where('user_id', auth()->id())
            ->where('model_id' , $activity->id)
            ->where('model_type', Activity::class);
            if($interactModel->exists()){
                return \Redirect::to($activity->activity_doc);
            } else {
                $data = new Interact([
                    "user_id" => auth()->id(),
                ]);
                $activity->interact()->save($data);
                return \Redirect::to($activity->activity_doc);
            }
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
