@extends('layouts.app')

@section('content')



  @if(session()->has('message'))
                      <div class="alert alert-success">
                          {{ session()->get('message') }}
                      </div>
                  @endif



        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                  <div class="container-fluid pr-sm-0 pr-sm-4 pl-sm-4 pl-1 pb-2">
                        <div class="row">
                            <div class="w-100 d-flex flex-wrap mt-3">
                                <h6 class="mb-1 col-sm-6 font-gothambook text-darkgray pl-3 m-auto"> FAQs </h6>
                                <div class="text-right pl-3 pr-3 col-sm-6">
                                    <a href="#" class="bg-orange border-radius25px text-uppercase border text-white font-gothambook pl-4 pr-4 pt-2 pb-2 fontsize13px border-orange d-inline-block hoverbtn" data-toggle="modal" data-target="#addfaq"> Add Faq</a>
                                </div>
                            </div>

                            <div class="col-sm-12 mt-4">
                                <div class="w-100 border-radius10px pt-4 pb-5 pl-4 pr-4 text-center bg-white">

                                    

                                        @livewire('show-faq')

                                    

                                </div>
                            </div>

                        <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
   </div>




     <!-- Add Post Modal -->
  <div class="modal fade" id="addfaq" role="dialog">
    <div class="modal-dialog modal-lg" style=" max-width: 605px;">
    
      <!-- Modal content-->
      <div class="modal-content border-0 border-radius10px overflow-hiden">
        <div class="modal-header pl-4 pr-4 border-0" style="background: #4d8ac0;">
            <h6 class="modal-title text-left text-white font-gothambook"> Add Faq's </h6>
          <button type="button" class="close text-white font-weight-light" data-dismiss="modal" style="opacity: 1;">&times;</button>
        </div>
        <div class="modal-body border-0 pl-4 pr-4 pt-3 pb-3">
                <form class="w-100 uploader" id="faqForm" >
                     @csrf
                    
                    <div class="w-100 mt-2">
                        <label class="font-gothamlight fontsize10px text-dark"> Question </label>
                        <input placeholder="Question" name="question" class="font-gothamlight w-100 border-radius10px fontsize11px p-3 bg-gray border-0 outline-none" style="box-shadow: 2px 3px 11px #d2d2d2; ">
                    </div>

                    <div class="w-100 mt-3">
                        <label class="font-gothamlight fontsize10px text-dark"> Answer </label>
                        <textarea placeholder="Answer" name="answer" class="font-gothamlight w-100 border-radius10px fontsize11px p-3 bg-gray border-0 outline-none" style="box-shadow: 2px 3px 11px #d2d2d2; resize: none; height: 100px;"></textarea>
                    </div>
                <div class="w-100 text-center p-3 pb-4">
                    <button type="button" onclick="submitFaq()" class="btn w-100 bg-orange border-radius25px pt-2 pb-2 text-uppercase font-gothambook text-white ml-auto mr-auto mt-4 hoverbtn" style="max-width: 380px;"> Add Faqs </button>
                </div>
            </form>
        </div>
       
      </div>
      
    </div>
  </div>
  <!-- Add Post -->

@endsection

@section("afterScript")

<script type="text/javascript">

function submitFaq(){
  event = $("#faqForm");
  var form_data = new FormData($("#faqForm")[0]);
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $.ajax({
    url : "{{ route('faq.store') }}",
    type: "POST",
    data : form_data,
    async: false,
    cache: false,
    contentType: false,
    enctype: 'multipart/form-data',
    processData: false,
    success: function (res) {
      swal('Success','Your Record Has Been Successfully Addded','success');
      location.reload(true);
    },
    error: function(err) {
      swal('Not Valid',err.responseJSON.message,'error')
    }
  });
}
</script>

@endsection