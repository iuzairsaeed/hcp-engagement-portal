@extends('layouts.app')

@section('content')

        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
          <div id="content">
            <div class="container-fluid pr-sm-0 pr-sm-4 pl-sm-4 pl-1 pb-2">
              <div class="row">
                <div class="w-100 mt-2 text-right pl-3 pr-3 mb-3">
                    <a href="#" class="bg-orange border-radius25px text-uppercase border text-white font-montserrat pl-4 pr-4 pt-2 pb-2 fontsize13px border-orange d-inline-block hoverbtn" data-toggle="modal" data-target="#addpost"> Add Post</a>
                </div>
                              
                <div class="w-100 d-flex flex-wrap overflow-y pl-sm-2 pr-sm-2">
                  @foreach ($posts as $post)
                    <!-- card -->
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
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>


   <!-- Add Post Modal -->
  <div class="modal fade" id="addpost" role="dialog">
    <div class="modal-dialog modal-lg" style=" max-width: 605px;">
    
      <!-- Modal content-->
      <div class="modal-content border-0 border-radius10px overflow-hiden">
        <div class="modal-header pl-4 pr-4 border-0" style="background: #4d8ac0;">
            <h6 class="modal-title text-left text-white font-gothambook"> Add Post </h6>
          <button type="button" class="close text-white font-weight-light" data-dismiss="modal" style="opacity: 1;">&times;</button>
        </div>
        <div class="modal-body border-0 pl-4 pr-4 pt-3 pb-3">
                <form class="w-100 uploader" action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
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
                    <button type="submit" class="btn w-100 bg-orange border-radius25px pt-2 pb-2 text-uppercase font-gothambook text-white ml-auto mr-auto mt-4 hoverbtn" style="max-width: 380px;"> Add Post </button>
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
    function ekUpload(){
      function Init() {

        console.log("Upload Initialised");

        var fileSelect    = document.getElementById('file-upload'),
            fileDrag      = document.getElementById('file-drag'),
            submitButton  = document.getElementById('submit-button');

        fileSelect.addEventListener('change', fileSelectHandler, false);

        // Is XHR2 available?
        var xhr = new XMLHttpRequest();
        if (xhr.upload) {
          // File Drop
          fileDrag.addEventListener('dragover', fileDragHover, false);
          fileDrag.addEventListener('dragleave', fileDragHover, false);
          fileDrag.addEventListener('drop', fileSelectHandler, false);
        }
      }

      function fileDragHover(e) {
        var fileDrag = document.getElementById('file-drag');

        e.stopPropagation();
        e.preventDefault();

        fileDrag.className = (e.type === 'dragover' ? 'hover' : 'modal-body file-upload');
      }

      function fileSelectHandler(e) {
        // Fetch FileList object
        var files = e.target.files || e.dataTransfer.files;

        // Cancel event and hover styling
        fileDragHover(e);

        // Process all File objects
        for (var i = 0, f; f = files[i]; i++) {
          parseFile(f);
          uploadFile(f);
        }
      }

      // Output
      function output(msg) {
        // Response
        var m = document.getElementById('messages');
        m.innerHTML = msg;
      }

      function parseFile(file) {

        console.log(file.name);
        output(
          '<strong>' + encodeURI(file.name) + '</strong>'
        );
        

                var imageName = file.name;

                var isGood = (/\.(?=gif|jpg|png|jpeg)/gi).test(imageName);
                if (isGood) {
                  document.getElementById('start').classList.add("hidden");
                  document.getElementById('response').classList.remove("hidden");
                  document.getElementById('notimage').classList.add("hidden");
                  // Thumbnail Preview
                  document.getElementById('file-image').classList.remove("hidden");
                  document.getElementById('file-image').src = URL.createObjectURL(file);
                }
                else {
                  document.getElementById('file-image').classList.add("hidden");
                  document.getElementById('notimage').classList.remove("hidden");
                  document.getElementById('start').classList.remove("hidden");
                  document.getElementById('response').classList.add("hidden");
                  document.getElementById("file-upload-form").reset();
                }
              }

              function setProgressMaxValue(e) {
                var pBar = document.getElementById('file-progress');

                if (e.lengthComputable) {
                  pBar.max = e.total;
                }
              }

              function updateFileProgress(e) {
                var pBar = document.getElementById('file-progress');

                if (e.lengthComputable) {
                  pBar.value = e.loaded;
                }
              }

              function uploadFile(file) {

                var xhr = new XMLHttpRequest(),
                  fileInput = document.getElementById('class-roster-file'),
                  pBar = document.getElementById('file-progress'),
                  fileSizeLimit = 1024; // In MB
                if (xhr.upload) {
                  // Check if file is less than x MB
                  if (file.size <= fileSizeLimit * 1024 * 1024) {
                    // Progress bar
                    pBar.style.display = 'inline';
                    xhr.upload.addEventListener('loadstart', setProgressMaxValue, false);
                    xhr.upload.addEventListener('progress', updateFileProgress, false);

                    // File received / failed
                    xhr.onreadystatechange = function(e) {
                      if (xhr.readyState == 4) {
                    
                      }
                    };

                    // Start upload
                    xhr.open('POST', document.getElementById('file-upload-form').action, true);
                    xhr.setRequestHeader('X-File-Name', file.name);
                    xhr.setRequestHeader('X-File-Size', file.size);
                    xhr.setRequestHeader('Content-Type', 'multipart/form-data');
                    xhr.send(file);
                  } else {
                    output('Please upload a smaller file (< ' + fileSizeLimit + ' MB).');
                  }
                }
              }

             
              if (window.File && window.FileList && window.FileReader) {
                Init();
              } else {
                document.getElementById('file-drag').style.display = 'none';
              }
            }
            ekUpload();
        </script>

@endsection