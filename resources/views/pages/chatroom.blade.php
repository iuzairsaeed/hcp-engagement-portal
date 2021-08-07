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
                                        <div class="col-sm-4 pl-0">
                                            <div class="w-100 bg-white border-radius10px">
                                                  <div class="headind_srch d-flex flex-wrap pt-4 pb-4">
                                                    <div class="recent_heading col-sm-2">
                                                      <!-- <h4>Recent</h4> -->
                                                    </div>
                                                    <div class="srch_bar col-sm-10 text-right">
                                                      <div class="stylish-input-group">
                                                        <input type="text"  placeholder="Search" class="search-bar border border-radius25px pl-3 pr-3 pt-2 pb-2 fontsize12px outline-none w-100">
                                                        <span class="input-group-addon">
                                                        <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                                                        </span> </div>
                                                    </div>
                                                  </div>
                                          <div class="inbox_chat">
                                            <div class="chat_list active_chat">
                                              <div class="chat_people">
                                                <div class="chat_img"> <img src="images/Asset72.png"> </div>
                                                <div class="chat_ib">
                                                  <h5>Dr Zulekha Daud <span class="chat_date">10:00 PM</span></h5>
                                                  <p>Julphar resumes sales of products...</p>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="chat_list">
                                              <div class="chat_people">
                                                <div class="chat_img"> <img src="images/Asset78.png"> </div>
                                                <div class="chat_ib">
                                                  <h5>Hamdy El Gallad <span class="chat_date">10:00 PM</span></h5>
                                                  <p>Sounds good</p>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="chat_list">
                                              <div class="chat_people">
                                                <div class="chat_img"> <img src="images/Asset77.png"> </div>
                                                <div class="chat_ib">
                                                  <h5>Mohamed El-Sharaby <span class="chat_date">10:00 PM</span></h5>
                                                  <p>We can Discuss on Call</p>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="chat_list">
                                              <div class="chat_people">
                                                <div class="chat_img"> <img src="images/Asset76.png" > </div>
                                                <div class="chat_ib">
                                                  <h5>Ashraf Mady <span class="chat_date">10:00 PM</span></h5>
                                                  <p>I Manage the Derma, Gyna & Cons...</p>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="chat_list">
                                              <div class="chat_people">
                                                <div class="chat_img"> <img src="images/Asset75.png"> </div>
                                                <div class="chat_ib">
                                                  <h5>Dr Farahat <span class="chat_date">10:00 PM</span></h5>
                                                  <p>This might be a case of COVID</p>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="chat_list">
                                              <div class="chat_people">
                                                <div class="chat_img"> <img src="images/Asset74.png"> </div>
                                                <div class="chat_ib">
                                                  <h5>Dr Katherine <span class="chat_date">10:00 PM</span></h5>
                                                  <p>I want to discuss the test results...</p>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="chat_list">
                                              <div class="chat_people">
                                                <div class="chat_img"> <img src="images/Asset73.png"> </div>
                                                <div class="chat_ib">
                                                  <h5>Dr Fernandez <span class="chat_date">10:00 PM</span></h5>
                                                  <p>Call ended</p>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                      </div>
                                 </div>
                                        <div class="mesgs col-sm-8">
                                            <div class="w-100 bg-white border-radius10px p-3" style="box-shadow: 1px 1px 10px #a7c5d2;">
                                                <!-- chat-header -->
                                                <div class="w-100 d-flex flex-wrap mb-3">
                                                        <div class="col-sm-6">
                                                                <div class="media">
                                                                  <img src="images/Asset72.png" class="mr-2 rounded-circle" style="width:50px;">
                                                                  <div class="media-body m-auto">
                                                                    <h6 class="text-dark fontsize14px">Dr Zulekha Daud</h6>
                                                                    
                                                                  </div>
                                                                </div>
                                                        </div>
                                                        <div class="col-sm-6 text-right pr-0">
                                                                <!-- <div class="w-100 bg-lightgray border-radius25px p-1 float-right" style=" max-width: 85px;">
                                                                    <a href="#" class="pl-1 pr-1"><img src="images/Asset79.png" width="15"></a>
                                                                    <a href="#" class="pl-1 pr-1"><img src="images/Asset81.png" width="15"></a>
                                                            
                                                                    <div class="dropdown d-inline-block pr-2">
                                                                      <button class="btn bg-transparent dropdown-toggle outline-none p-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <img src="images/Asset80.png" width="4">
                                                                      </button>
                                                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                        <a class="dropdown-item" href="#">Chat</a>
                                                                        <a class="dropdown-item" href="#">Disabled</a>
                                                                        <a class="dropdown-item" href="#">Live</a>
                                                                      </div>
                                                                    </div>
                                                                </div> -->
                                                        </div>
                                                </div>
                                                 <!-- chat-header -->

                                                  <div class="msg_history">
                                                    <div class="incoming_msg">
                                                   
                                                      <div class="received_msg">
                                                        <div class="received_withd_msg">
                                                          <p>Sure Anthony! Let’s Discuss</p>
                                                          <span class="time_date"> 11:01 AM    |    June 9</span></div>
                                                      </div>
                                                    </div>
                                                    <div class="outgoing_msg">
                                                      <div class="sent_msg">
                                                        <p>Hi Zulekha! Hope You are Doing Good. Would you mind to hop on a short call. I have some confusions on a COVID Case. I could really use your views on the situation</p>
                                                        <span class="time_date"> 11:01 AM    |    June 9</span> </div>
                                                    </div>
                                                    <div class="incoming_msg">
                                                      
                                                      <div class="received_msg">
                                                        <div class="received_withd_msg">
                                                          <p>Lorem Ipsum test Covid</p>
                                                          <span class="time_date"> 11:01 AM    |    Yesterday</span></div>
                                                      </div>
                                                    </div>
                                                    <div class="outgoing_msg">
                                                      <div class="sent_msg">
                                                        <p>Sure Anthony! Let’s Discuss</p>
                                                        <span class="time_date"> 11:01 AM    |    Today</span> </div>
                                                    </div>
                                                    <div class="incoming_msg">
                                                     
                                                      <div class="received_msg">
                                                        <div class="received_withd_msg">
                                                          <p>We work directly with our designers and suppliers,
                                                            and sell direct to you, which means quality, exclusive
                                                            products, at a price anyone can afford.</p>
                                                          <span class="time_date"> 11:01 AM    |    Today</span></div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="type_msg mt-2">
                                                    <div class="input_msg_write">
                                                        <a href="#" class="position-absolute" style="left: 16px;top: 10px;"><img src="images/Asset84.png" width="20"></a>
                                                      <input type="text" class="write_msg bg-gray border-radius25px fontsize12px font-montserrat text-dark outline-none" placeholder="Type a message" />
                                                      <button class="msg_send_btn" type="button"><img src="images/Asset83.png"></button>
                                                    </div>
                                                  </div>
                                                </div>
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
    <!-- Scroll to Top Button-->
</div>





@endsection