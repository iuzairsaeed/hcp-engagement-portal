<script src="{{ asset('js/app.js')}}"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script -->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
   <!--  <script src="{{asset('/js/bootstrap.min.js')}}"></script> -->
      <script src="{{asset('/js/custom.js')}}"></script>

    <script type="text/javascript" src="{{asset('/js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/Chart.min.js') }}"></script>






     <script type="text/javascript">
        $(document).on('click', '.upload-field', function(){
              var file = $(this).parent().parent().parent().find('.input-file');
              file.trigger('click');
            });
            $(document).on('change', '.input-file', function(){
              $(this).parent().find('.fileinput').val($(this).val().replace(/C:\\fakepath\\/i, ''));
            });
    </script>



         <script type="text/javascript">
                $(document).ready(function() {    
                var readURL = function(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            $('#profile-pic').attr('src', e.target.result);
                        }
                
                        reader.readAsDataURL(input.files[0]);
                    }
                }

                $("#file-upload").on('change', function(){
                    readURL(this);
                });
                
                $("#upload-button").on('click', function() {
                   $("#file-upload").click();
                });




                var readURL2 = function(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            $('#profile-pic2').attr('src', e.target.result);
                        }
                
                        reader.readAsDataURL(input.files[0]);
                    }
                }

                $("#file-upload2").on('change', function(){
                    readURL2(this);
                });
                
                $("#upload-button2").on('click', function() {
                   $("#file-upload2").click();
                });


                  var readURL3 = function(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            $('#profile-pic3').attr('src', e.target.result);
                        }
                
                        reader.readAsDataURL(input.files[0]);
                    }
                }

                $("#file-upload3").on('change', function(){
                    readURL3(this);
                });
                
                $("#upload-button3").on('click', function() {
                   $("#file-upload3").click();
                });
        
            });



            </script>

