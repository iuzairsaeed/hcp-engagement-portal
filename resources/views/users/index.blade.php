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

                                   <div class="container-fluid pr-sm-4 pl-sm-4 pr-1 pl-1 pb-3">
                                           <div class="row">

                                             <div class="w-100 d-flex flex-wrap mt-4">
                                                  <h6 class="mb-1 pt-1 pb-1 col-sm-6 font-gothambook text-black"> HCPs Profiles </h6>
                                                      <div class="col-sm-6 text-right">
                                                           <select class="border-0 bg-white font-gothambook fontsize11px pl-3 pr-3 pt-2 pb-2 outline-none" style="box-shadow: -1px 1px 10px -2px #9fa5a7;">
                                                                        <option>Select</option>
                                                                        <option>Last 10 Days</option>
                                                                        <option>Last 15 Days</option>
                                                                        <option>Last 20 Days</option>
                                                                        <option>Last 25 Days</option>
                                                                        <option>Last 30 Days</option>
                                                                    </select>
                                                                </div>
                                                             </div>

                                                             
                                                    <div class="w-100 d-flex flex-wrap">
                                                       @foreach ($users as $user)
                                                                <!-- first Dr card -->

                                                         <div class="col-sm-3 p-2">
                                                            <div class="w-100 p-2 card border-0 border-radius10px" style="box-shadow: 1px 1px 13px #b2cfda;">
                                                                    <div class="overflow-hiden w-100 position-relative h-img rounded">
                                                                          <img class="card-img-top w-100 center" src="{{asset($user->avatar) }}">
                                                                           <div class="text-center position-absolute overlay-effect">
                                                                                    <h6 class="font-gothamlight fontsize14px mb-0 text-white p-2" > {{ $user->name }} </h6>
                                                                                </div>
                                                                             </div>
                                                                              <div class="card-body text-left pt-2 pb-0 pl-2 pr-2">
                                                                               <ul class="list-unstyled d-inline-block pb-2 d-flex flex-wrap w-100 mb-2 border-bottom border-gray">
                                                                                    <li class="col-sm-5 col-5 p-0 m-auto"><h6 class="bg-transparent border-0 text-dark fontsize10px font-gothambook mb-0"><i class="fa fa-bookmark-o fontsize12px mr-1 float-left"></i> <span class="float-left text-left w-fix">{{$user->speciality}} </span></h6> </li>
                                                                                     <li class="col-sm-4 col-4 p-0 m-auto"><h6 class="bg-transparent border-0 text-dark fontsize10px font-gothambook mb-0"><i class="fa fa-star-o fontsize12px mr-1"></i> 7 Years </h6></li>
                                                                                     <li class="col-sm-3 col-3 p-0 text-right">
                                                                                        <a href="#" data-toggle="modal" onclick="openPopUp(this)" data-target="#Messagemodal"><i class="fa fa-envelope-o mr-1 text-gray-200 fontsize15px"></i></a>
                                                                                        {{-- <a href="#" class="fontsize15px text-orange"><i class="fa fa-heart-o"></i> --}}
                                                                                     </a>
                                                                                     </li>
                                                                                 </ul>

                                                                                  <div class="text-left">
                                                                                    <p class="fontsize13px mb-0 pt-2 text-black font-gothammedium"> {{$user->name}} </p>
                                                                                    <p class="text-gray font-gothamlight fontsize10px"> {{$user->profile->clinic_name ?? ""}} </p>
                                                                                </div>

                                                                                </div>

                                                                        </div>
                                                                  </div>
                                                        @endforeach


                                


                                                         

                                                            </div>
                                                        <!-- /.container-fluid -->

                                        </div>
                                        <!-- End of Main Content -->


                                    </div>
                                    <!-- End of Content Wrapper -->

                                </div>
                                <!-- End of Page Wrapper -->

                            </div>
                                <!-- Scroll to Top Button-->
                                <a class="scroll-to-top rounded" href="#page-top">
                                    <i class="fas fa-angle-up"></i>
                                </a>


                            <!-- /.container-fluid -->


    <!-- Message Dr Modal -->
<div class="modal fade" id="Messagemodal" style="background: rgb(77 138 192 / 56%);">
    <div class="modal-dialog h-100 d-flex">
      <div class="modal-content border-0 m-auto border-radius10px overflow-hiden">


        <div class="modal-header flex-wrap" style="background: #4d8ac0;">
          <h5 class="modal-title font-gothamlight w-100 text-white fontsize16px MessagemodalName">Dr Zulekha Daud</h5>
          <p class="d-block font-gothamlight w-100 text-white mb-0 fontsize13px Messagemodaldatafield">Neurology</p>
          <button type="button" class="close position-absolute font-weight-light" data-dismiss="modal" style="opacity: 1;color: #fff;right: 14px;">&times;</button>
        </div>

         <div class="modal-body pl-4 pr-4" style=" height: 399px;">
            <div class="w-100">
                    <label class="font-gothamlight fontsize13px w-100">Message Body</label>
                    <textarea placeholder="Message goes here" class="fontsize12px text-darkgray font-gothambook bg-gray border-0 w-100 border-radius10px p-3 outline-none" style="height: 230px;resize: none;box-shadow: 2px 4px 10px #ccc;"></textarea>
            </div>
                <div class="w-100 text-center p-3 pb-4">
                    <button class="btn w-100 bg-orange border-radius25px pt-2 pb-2 text-uppercase font-gothambook text-white ml-auto mr-auto mt-3 hoverbtn fontsize14px" style="max-width: 330px;"> Send </button>
                </div>
        </div>


      </div>
    </div>
</div>
 <!-- Message Dr Modal -->



  <script type="text/javascript">
                                // var sendername;
                                // var id;
                                //  function openPopUp(vart){
                                //      debugger;

                                //      var $this = $(vart);
                                //     var $this = $(vart);
                                //     id = $this.attr('data-id')??"";
                                //     var title = $this.attr('data-title')??"";
                                //     var datafield = $this.attr('data-field')??"";
                                //     sendername=$this.attr('data-sendername')??"";
                                //     $('.MessagemodalName').text(title);
                                //     $('.Messagemodaldatafield').text(datafield);
                                //  }


                                //     function sendmessage() {
                                //       // debugger;
                                //       var currentTimeInMilliseconds=Date.now();
                                //       var inputVal = document.getElementById("myInput").value;

                                //       var usersRef = firebase.database().ref().child("Chat").push().set(
                                //         {
                                //           "message":String(inputVal),
                                //           "recieverid":String(id),
                                //           "time":currentTimeInMilliseconds  ,
                                //           "senderid":'<?=auth()->id()?>',
                                //           "sendername":String(sendername)
                                //         });
                                //        var usersRef = firebase.database().ref('MyChat/').child(String(id)).child('<?=auth()->id()?>');
                                //        usersRef.update({ //With completion callback.
                                //           "time":currentTimeInMilliseconds,
                                //           "message":String(inputVal),

                                //         },  function(error) {
                                //           if (error) {
                                           
                                //           } else {
                                           
                                //           }
                                //       });  var usersRef = firebase.database().ref('MyChat/').child('<?=auth()->id()?>').child(String(id));
                                //        usersRef.update({ //With completion callback.
                                //           "time":currentTimeInMilliseconds,
                                //           "message":String(inputVal),

                                //         },  function(error) { 
                                //           if (error) {
                                    
                                //           } else {
                                            
                                //           }
                                //       });
                                //     document.getElementById('myInput').value = '';

                                //     }



                               </script>
                               <!-- Message Dr Modal -->
                   


          @endsection

                           
