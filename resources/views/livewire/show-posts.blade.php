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
        <a href="{{url('/post/'.$post->id)}}">
        <div class="w-100 col-sm-3 p-2">
        <div class="card p-2 border-0 border-radius10px" style="box-shadow: 1px 1px 13px #b2cfda;">
            <img class="card-img-top w-100 mb-2" src="{{ $post->post_image }}">
            <div class="card-body pt-1 pb-0 pl-1 pr-1">
            <p class="card-text text-black fontsize12px mb-2 font-gothambook">{{$post->title}}</p>
                <div class="text-left float-left"><a href="{{url('/post/'.$post->id)}}" class="text-orange font-gothamlight fontsize12px hoverlink"> Leave a Comment </a>
                </div>
                <div class="col-auto float-right p-0"><a href="#" class="fontsize14px text-black" data-toggle="modal" data-target="#editpost"><i class="fa fa-pencil"></i></a>
                <a href="#" class="fontsize14px text-black ml-1 delete"><i class="fa fa-trash"></i></a></div>
            </div>
        </div>
        </div>
        </a>
        @endforeach
    @endif
    {{-- @endif --}}
    
    
</div>            
    {{-- <div class="col-12">
        {{$posts->links()}}
    </div> --}}
</div>



       <!-- Edit Post Modal -->
  <div class="modal fade" id="editpost" role="dialog">
    <div class="modal-dialog modal-lg" style=" max-width: 605px;">
    
      <!-- Modal content-->
      <div class="modal-content border-0 border-radius10px overflow-hiden">
        <div class="modal-header pl-4 pr-4 border-0" style="background: #4d8ac0;">
            <h6 class="modal-title text-left text-white font-gothambook"> Edit Post </h6>
          <button type="button" class="close text-white font-weight-light" data-dismiss="modal" style="opacity: 1;">&times;</button>
        </div>
        <div class="modal-body border-0 pl-4 pr-4 pt-3 pb-3">
                <form class="w-100 uploader" action="" id="postForm" method="post" enctype="multipart/form-data">
                     @csrf
                    <div class="w-100">
                        <label class="font-gothamlight fontsize10px text-dark w-100"> Upload Thumbnail </label>
                        <input id="file-upload" type="file" name="post_image" accept="image/*" />

                              <label for="file-upload" id="file-drag" class="file-upload">
                                <img id="file-image" src=".#" alt="Preview" class="hidden">
                                <div id="start">
                                  <img src="{{ asset('images/Asset88.png') }}">
                                  <div class="text-blue fontsize11px font-gothamlight font-weight-bold"> Upload Image </div>
                                  <div id="notimage" class="hidden">Upload Image</div>
                                </div>
                                <div id="response" class="hidden">
                                  <div id="messages"></div>
                                  <progress class="progress" id="file-progress" value="0">
                                    <span>0</span>%
                                  </progress>
                                </div>
                              </label>
                    </div>

                    <div class="w-100 mt-2">
                        <label class="font-gothamlight fontsize10px text-dark"> Post Title </label>
                        <input placeholder="Post Title" name="title" class="font-gothamlight w-100 border-radius10px fontsize11px p-3 bg-gray border-0 outline-none" style="box-shadow: 2px 3px 11px #d2d2d2; ">
                    </div>

                    <div class="w-100 mt-3">
                        <label class="font-gothamlight fontsize10px text-dark"> Post Description </label>
                        <textarea placeholder="Post Description" name="description" class="font-gothamlight w-100 border-radius10px fontsize11px p-3 bg-gray border-0 outline-none" style="box-shadow: 2px 3px 11px #d2d2d2; resize: none; height: 100px;"></textarea>
                    </div>
                <div class="w-100 text-center p-3 pb-4">
                    <button type="button" onclick="submitPost()" class="btn w-100 bg-orange border-radius25px pt-2 pb-2 text-uppercase font-gothambook text-white ml-auto mr-auto mt-4 hoverbtn" style="max-width: 380px;"> Edit Post </button>
                </div>
            </form>
        </div>
       
      </div>
      
    </div>
  </div>
  <!--Edit Post -->


@section('afterScript')
<script type="text/javascript">
    $(document).on('click','.delete',function(e){
        e.preventDefault();
        var id = $(this).attr('id');
        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#0CC27E',
            cancelButtonColor: '#FF586B',
            confirmButtonText: 'Yes, Delete it',
            cancelButtonText: "No, Cancel"
        }).then(function (isConfirm) {
            if (isConfirm) {
                $.ajax(
                {
                    url: "/product/"+id,
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (){
                        $('#dTable').DataTable().ajax.reload();
                        swal("Deleted!", "Action has been performed successfully!", "success");
                    }
                });
            }
        }).catch(swal.noop);
    });
</script>

@endsection