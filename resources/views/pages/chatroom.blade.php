@extends('layouts.app')

@section('content')



        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                  <div class="container-fluid pr-sm-0 pr-sm-4 pl-sm-4 pl-1 pb-2">
                        <div class="row">

                        	  <div class="w-100 d-flex flex-wrap mt-3">
                                 <h6 class="mb-1 pt-1 pb-1 col-sm-6 font-gothambook text-black"> Messages or Recent Chats </h6>
                            </div>
                        
                            <div class="col-sm-12 pt-3">
                                      <div class="w-100 d-flex flex-wrap">
                                        <div class="col-sm-4 col-12 pl-sm-0 pr-sm-2 p-0">
                                            <div class="w-100 bg-white border-radius10px">
                                                  <div class="headind_srch d-flex flex-wrap pt-4 pb-4">
                                                    <div class="recent_heading col-sm-2">
                                                      <!-- <h4>Recent</h4> -->
                                                    </div>
                                                    <div class="srch_bar col-lg-10 col-sm-12 text-right">
                                                      <div class="stylish-input-group">
                                                        <input type="text"  placeholder="Search" class="search-bar border border-radius25px pl-3 pr-3 pt-2 pb-2 fontsize12px outline-none w-100">
                                                        <span class="input-group-addon">
                                                        <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                                                        </span> </div>
                                                    </div>
                                                  </div>
                                          <div class="inbox_chat">
                                            <div class="chat_list">
                                              @if($users)
                                                @foreach($users as $user)
                                                 <a href="javascript:void(0);" class="chat-toggle" data-id="{{ $user->id }}" data-user="{{ $user->name }}"><div class="chat_people">
                                                  <div class="chat_img"> <img src="https://tech.celeritasdigital.com/hcp-engagement-portal/storage/avatars/{{ $user->avatar }}"> </div>
                                                  <div class="chat_ib">
                                                   
                                                     <h5>{{ $user->name }}                                       
                                                    @if($user->up_at!=null)
                                                    <span class="chat_date">{{date('h:i A', strtotime($user->up_at))}}</span></h5> 
                                                    @endif
                                                    <p>{{$user->content}}</p>
                                                  </div>
                                              </div></a>
                                                @endforeach
                                               @endif
                                            
                                            </div>
                                            <!-- <div class="chat_list">
                                              <div class="chat_people">
                                                <div class="chat_img"> <img src="images/Asset78.png"> </div>
                                                <div class="chat_ib">
                                                  <h5>Hamdy El Gallad <span class="chat_date">10:00 PM</span></h5>
                                                  <p>Sounds good</p>
                                                </div>
                                              </div>
                                            </div> -->
                                            <!-- <div class="chat_list">
                                              <div class="chat_people">
                                                <div class="chat_img"> <img src="images/Asset77.png"> </div>
                                                <div class="chat_ib">
                                                  <h5>Mohamed El-Sharaby <span class="chat_date">10:00 PM</span></h5>
                                                  <p>We can Discuss on Call</p>
                                                </div>
                                              </div>
                                            </div> -->
                                            <!-- <div class="chat_list">
                                              <div class="chat_people">
                                                <div class="chat_img"> <img src="images/Asset76.png" > </div>
                                                <div class="chat_ib">
                                                  <h5>Ashraf Mady <span class="chat_date">10:00 PM</span></h5>
                                                  <p>I Manage the Derma, Gyna & Cons...</p>
                                                </div>
                                              </div>
                                            </div> -->
                                            <!-- <div class="chat_list">
                                              <div class="chat_people">
                                                <div class="chat_img"> <img src="images/Asset75.png"> </div>
                                                <div class="chat_ib">
                                                  <h5>Dr Farahat <span class="chat_date">10:00 PM</span></h5>
                                                  <p>This might be a case of COVID</p>
                                                </div>
                                              </div>
                                            </div> -->
                                            <!-- <div class="chat_list">
                                              <div class="chat_people">
                                                <div class="chat_img"> <img src="images/Asset74.png"> </div>
                                                <div class="chat_ib">
                                                  <h5>Dr Katherine <span class="chat_date">10:00 PM</span></h5>
                                                  <p>I want to discuss the test results...</p>
                                                </div>
                                              </div>
                                            </div> -->
                                            <!-- <div class="chat_list">
                                              <div class="chat_people">
                                                <div class="chat_img"> <img src="images/Asset73.png"> </div>
                                                <div class="chat_ib">
                                                  <h5>Dr Fernandez <span class="chat_date">10:00 PM</span></h5>
                                                  <p>Call ended</p>
                                                </div>
                                              </div>
                                            </div> -->
                                          </div>
                                      </div>
                                 </div>

                                 @include('chat-box')

                  <input type="hidden" id="current_user" value="{{ Auth::id() }}" />
                  <input type="hidden" id="pusher_app_key" value="{{ env('PUSHER_APP_KEY') }}" />
                  <input type="hidden" id="pusher_cluster" value="{{ env('PUSHER_APP_CLUSTER') }}" />
<!--               dfdsf             dfsdf                          dfsdfsdf          fsdf -->
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
</div>





@endsection

@section('script')
    <script src="https://js.pusher.com/4.1/pusher.min.js"></script>
    <script src="{{ asset('js/chat.js') }}"></script>
    <!-- <script type="text/javascript">
$(document).ready(function() {
  $(window).on('load', function() {
    $("#chat_box").hide();
  });
});
    $('document').ready(function() {
      $("#chat_box").hide();
});
</script> -->
@endsection