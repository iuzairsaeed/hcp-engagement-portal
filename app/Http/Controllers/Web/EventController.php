<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Repository;
use App\Models\Event;
use App\Models\Reaction;
use App\Http\Requests\EventRequest;

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
        $webinars = $this->model->all()->where('type', 'webinar');
        $virtuals = $this->model->all()->where('type', 'virtual');
        $trainings = $this->model->all()->where('type', 'training');
        return view('event.index', compact('webinars', 'virtuals', 'trainings'));
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
    public function store(EventRequest $request)
    {
        try {
            $data = $request->all();
            if($request->hasFile('event_attachment')){
                $file_name = uploadFile( $request->event_attachment,  $request->type == 'webinar'  ? webinarPath() : ( $request->type == 'virtual' ? virtualPath() : trainingPath()) );
                $data['event_attachment'] = $file_name;
                $data['event_mime_type'] = $request->event_attachment->getClientMimeType();
            }
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
            if($event->type == "webinar" || $event->type == "virtual" ){
                $date_from = $event->date_from->format('l, M d,Y');
                $date_to = $event->date_to->format('l, M d, Y');
                $now = strtotime($event->time);
                $time = date('h:i (T)', $now);
                return view('event.show', compact('event', 'date_from', 'date_to', 'time'));
            } else {
                return view('event.show', compact('event'));
            }
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
    
    public function libraries()
    {
        try {
            $webinars = Event::where('type', 'webinar')->whereHas('eventReaction', function ($query){
                $query->where('user_id', '=', auth()->id())->where('favorite',true);
            })->get();
            $virtuals = Event::where('type', 'virtual')->whereHas('eventReaction', function ($query){
                $query->where('user_id', '=', auth()->id())->where('favorite',true);
            })->get();
            return view('event.libraries', compact('webinars', 'virtuals'));
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
    
    public function trainings()
    {
        try {
            $trainings = Event::where('type', 'training')->whereHas('eventReaction', function ($query){
                $query->where('user_id', '=', auth()->id())->where('favorite',true);
            })->get();
            return view('event.trainings', compact('trainings'));
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
    
    public function react(Request $request) {
        try {
            
            $event = $this->model->all()->where('id', $request->event_id )->first();
            $reactionModel = Reaction::where('user_id', auth()->id())
            ->where('reactionable_id' , $request->event_id)
            ->where('reactionable_type', Event::class);
            if($reactionModel->exists()){
                $reactionModel->update(array('favorite' => $reactionModel->value('favorite') ? false : true));
            } else {
                $data = new Reaction([
                    "user_id" => auth()->id(),
                    "event_id"=>$request->event_id,
                    "favorite"=>true
                ]);
                $event->eventReaction()->save($data);
            }
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
