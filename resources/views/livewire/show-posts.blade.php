<div class="w-100">
    {{-- <input wire:model="search" type="text" placeholder="Search Posts"/> --}}
    <div class="w-100 d-flex flex-wrap overflow-y pl-sm-2 pr-sm-2">

    @if($posts->isEmpty())

        <br>
        <div class="text-gray-700 text-sm">
            No matching result was found.
        </div>
    @else
        @foreach ($posts as $post)
        <!-- card -->

        <div class="w-100 col-sm-3 p-2">
        <div class="card p-2 border-0 border-radius10px" style="box-shadow: 1px 1px 13px #b2cfda;">
             <a href="{{url('/post/'.$post->id)}}" class="h-img w-100">
                <img class="card-img-top w-100 mb-2" src="{{ $post->post_image }}"> </a>
            <div class="card-body pt-1 pb-0 pl-1 pr-1">
            <p class="card-text text-black fontsize12px mb-2 font-gothambook">{{$post->title}}</p>
                <div class="text-left float-left"><a href="{{url('/post/'.$post->id)}}" class="text-orange font-gothamlight fontsize12px hoverlink"> Leave a Comment </a>
                </div>
                <div class="col-auto float-right p-0"><a href="#" class="fontsize14px text-black" data-toggle="modal" data-target="#editpost"><i class="fa fa-pencil"></i></a>
                <a href="#" class="fontsize14px text-black ml-1 delete"><i class="fa fa-trash"></i></a></div>
            </div>
        </div>
        </div>
        @endforeach 
    @endif
    
    
    </div>            
    {{-- <div class="col-12">
        {{$posts->links()}}
    </div> --}}
</div>


