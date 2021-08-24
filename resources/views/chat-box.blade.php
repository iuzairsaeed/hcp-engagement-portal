                                        <div id="chat_box" class="chat_box  col-sm-12 ">
                                            <div class="w-100 bg-white border-radius10px p-3" style="box-shadow: 1px 1px 10px #a7c5d2;">
                                                <!-- chat-header -->
                                                    <div class="w-100 d-flex flex-wrap mb-3">
                                                        <div class="col-sm-6">
                                                                <div class="media">
                                                                  <img src="https://tech.celeritasdigital.com/hcp-engagement-portal/storage/avatars/{{ $user->avatar }}" class="mr-2 rounded-circle" style="width:50px;">
                                                                  <div class="media-body m-auto">
                                                                    <h6 class="text-dark fontsize14px"><i class="chat-user"></i></h6>
                                                                    <span class="glyphicon glyphicon-remove close-chat"></span>

                                                                  </div>
                                                                </div>
                                                        </div>
                                                        <div class="col-sm-6 text-right pr-0">

                                                        </div>
                                                    </div>
                                                 <!-- chat-header -->

                                                  <div class="msg_history chat-area">

                                                  </div>
                                                  <div class="type_msg mt-2">
                                                    <div class="input_msg_write input-group form-controls">
                                                        <a href="#" class="position-absolute" style="left: 16px;top: 10px;"><img src="images/Asset84.png" width="20"></a>
                                                      <input type="text" class="write_msg bg-gray border-radius25px fontsize12px font-montserrat text-dark outline-none form-control input-sm chat_input" placeholder="Type a message" />
                                                      <span class="input-group-btn">
                                                       <button class="btn btn-primary btn-sm btn-chat" type="button" data-to-user="" disabled><img src="images/Asset83.png"></button>
                                                      </span>
                                                    </div>
                                                  </div>
                                            </div>
                                            <input type="hidden" id="to_user_id" value="" />
                                        </div>

