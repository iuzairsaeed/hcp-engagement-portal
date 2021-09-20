<div>
    <input wire:model="search" type="text" placeholder="Search Posts"/>

    @if ($search == "")
        @foreach ($posts as $post)
        <!-- card -->
        <a href="{{url('/post/'.$post->id)}}">
        <div class="w-100 col-sm-3 p-2">
            <div class="card p-2 border-0 border-radius10px" style="box-shadow: 1px 1px 13px #b2cfda;">
            <img class="card-img-top w-100 mb-2" src="{{ $post->post_image }}">
            <div class="card-body pt-1 pb-0 pl-1 pr-1">
                <p class="card-text text-black fontsize12px mb-2 font-gothambook">{{$post->title}}</p>
                <div class="text-left"><a href="{{url('/post/'.$post->id)}}" class="text-orange font-gothamlight fontsize12px hoverlink"> Leave a Comment </a>
                </div>
            </div>
            </div>
        </div>
        </a>

        @endforeach
    @else
        @if($posts->isEmpty())
            <div class="text-gray-500 text-sm">
                No matching result was found.
            </div>
            @else
            @foreach ($posts as $post)
                <!-- card -->
                <a href="{{url('/post/'.$post->id)}}">
                <div class="w-100 col-sm-3 p-2">
                    <div class="card p-2 border-0 border-radius10px" style="box-shadow: 1px 1px 13px #b2cfda;">
                    <img class="card-img-top w-100 mb-2" src="{{ $post->post_image }}">
                    <div class="card-body pt-1 pb-0 pl-1 pr-1">
                        <p class="card-text text-black fontsize12px mb-2 font-gothambook">{{$post->title}}</p>
                        <div class="text-left"><a href="{{url('/post/'.$post->id)}}" class="text-orange font-gothamlight fontsize12px hoverlink"> Leave a Comment </a>
                        </div>
                    </div>
                    </div>
                </div>
                </a>
            @endforeach
        @endif
    @endif
    <div class="px-4 mt-4">
        {{$posts->links()}}
    </div>
                    
</div>