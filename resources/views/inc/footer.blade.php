<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script -->
<script src="{{ asset('js/app.js')}}"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<!--   <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script> -->

<!-- Core plugin JavaScript-->
<script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/js/custom.js')}}"></script>

<script type="text/javascript" src="{{asset('/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/Chart.min.js') }}"></script>



<script src="https://js.pusher.com/4.1/pusher.min.js"></script>
<script src="{{ asset('js/chat.js') }}"></script>


<script src="{{asset('app-assets/vendors/js/select2/select2.js')}}"></script>



<script type="text/javascript">
            $(document).ready(function() {
                $("#chat_box").hide();
            });
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

<script>
    function sendMarkRequest(id = null) {
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        return $.ajax("{{ route('markNotification') }}", {
            method: 'POST',
            data: {
                id
            }
        });
    }
        console.log(1);
        $('.mark-as-read').click(function() {
            let request = sendMarkRequest($(this).data('id'));
            request.done(() => {
                $(this).parents('div.alert').remove();
            });
        });
        $('#mark-all').click(function() {
            let request = sendMarkRequest();
            request.done(() => {
                $('div.alert').remove();
            })
        });
</script>

<script>

$(".action").click(function(){
    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var id = $(this).data('id');
    
    $.ajax("{{ route('markNotification') }}", {
        method: 'POST',
        data: {
            id
        }
    });
})

</script>

