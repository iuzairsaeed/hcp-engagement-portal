<div class="w-100">
    <div id="accordion">
        <div class="row mb-2">
            <div class="col-lg-4 col-sm-12">
                <input wire:model="search" type="text" class="bg-lightgray w-100 border-radius25px border-0 fontsize14px pl-3 pt-2 pb-2 outline-none" placeholder="Search Faq"/>
            </div>
        </div>
        <div class="w-100 d-flex flex-wrap">

            @if($faqs->isEmpty())
                <br>
                <div class="text-gray-700 text-sm">
                    No matching result was found.
                </div>
            @else
                <div class="card text-left border-0 w-100">
                    @foreach ($faqs as $faq)
                        <div class="card-header bg-transparent pl-2 pr-2">
                        <a class="card-link font-gothambook text-dark fontweight500 mb-3 collapsed" data-toggle="collapse" href="#collapse1" aria-expanded="false">
                                {{$faq->question}}
                            </a>
                            <div class="float-right col-auto p-0"><a href="#" class="text-black fontsize14px" data-toggle="modal" data-target="#editpost"><i class="fa fa-pencil"></i></a><button href="#" class="text-black fontsize14px bg-transparent border-0 ml-1 delete"><i class="fa fa-trash"></i></button> </div>
                        </div>
                        <div id="collapse1" class="collapse" data-parent="#accordion" style="">
                            <div class="card-body font-gothamlight">
                                {{$faq->answer}}
                            </div>
                        </div>
                        
                    @endforeach
                </div>
            @endif
            {{-- @endif --}}
            
        </div>            
        {{-- <div class="col-12">
            {{$faqs->links()}}
        </div> --}}
    </div>
</div>




     <!-- Edit Post Modal -->
  <div class="modal fade" id="editpost" role="dialog">
    <div class="modal-dialog modal-lg" style=" max-width: 605px;">
    
      <!-- Modal content-->
      <div class="modal-content border-0 border-radius10px overflow-hiden">
        <div class="modal-header pl-4 pr-4 border-0" style="background: #4d8ac0;">
            <h6 class="modal-title text-left text-white font-gothambook"> Edit Faq's </h6>
          <button type="button" class="close text-white font-weight-light" data-dismiss="modal" style="opacity: 1;">&times;</button>
        </div>
        <div class="modal-body border-0 pl-4 pr-4 pt-3 pb-3">
                <form class="w-100 uploader" action="" id="postForm" method="post" enctype="multipart/form-data">
                     @csrf
                    
                    <div class="w-100 mt-2">
                        <label class="font-gothamlight fontsize10px text-dark"> Post Title </label>
                        <input placeholder="Post Title" name="title" class="font-gothamlight w-100 border-radius10px fontsize11px p-3 bg-gray border-0 outline-none" style="box-shadow: 2px 3px 11px #d2d2d2; ">
                    </div>

                    <div class="w-100 mt-3">
                        <label class="font-gothamlight fontsize10px text-dark"> Post Description </label>
                        <textarea placeholder="Post Description" name="description" class="font-gothamlight w-100 border-radius10px fontsize11px p-3 bg-gray border-0 outline-none" style="box-shadow: 2px 3px 11px #d2d2d2; resize: none; height: 100px;"></textarea>
                    </div>
                <div class="w-100 text-center p-3 pb-4">
                    <button type="button" onclick="submitPost()" class="btn w-100 bg-orange border-radius25px pt-2 pb-2 text-uppercase font-gothambook text-white ml-auto mr-auto mt-4 hoverbtn" style="max-width: 380px;"> Edit Faqs </button>
                </div>
            </form>
        </div>
       
      </div>
      
    </div>
  </div>
  <!-- Edit Post -->




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