<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Repository;
use App\Models\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{

    protected $model;

    public function __construct(Post $model)
    {
        // $this->middleware('permission:post-list|post-create|post-edit|post-delete', ['only' => ['index','show']]);
        // $this->middleware('permission:post-create', ['only' => ['create','store']]);
        // $this->middleware('permission:post-edit', ['only' => ['edit','update']]);
        // $this->middleware('permission:post-delete', ['only' => ['destroy']]);
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
        $posts = $this->model->all();
        return view('post.index', compact('posts'));
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
    public function store(PostRequest $request)
    {
        try {
            $data = $request->all();
            $data['user_id'] = auth()->id();
            if($request->hasFile('post_image')){ 
                $file_name = uploadFile($request->post_image, postPath());
                $data['post_image'] = $file_name;
            }
            $this->model->create($data);
            return redirect()->back()->with('success', 'Post has been created.');
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
    public function show(Post $post)
    {
        try {
            $comments = $post->comments;
            return view('post.show', compact('post', 'comments'));
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
    public function edit(Post $post)
    {
        return response($post , 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        try { 
            $data = $request->all();
            $this->model->update($data , $post);
            return redirect()->back()->with('success', 'Post has been updated.');
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
    public function destroy(Post $post)
    {
        try {
            $this->model->delete($post);
            return response(['success'=>'Post deleted Successfully', 200]);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
