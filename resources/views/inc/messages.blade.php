<div id="toast-container" class="toast-container toast-top-right">
    @if(count($errors) > 0)
        <script>
			toastr.error('{{$errors->first()}}', 'Invalid!', toasterAnimationObject);
		</script>
    @endif

    @if(session('success'))
        <script>
			toastr.success('{{session('success')}}', 'Success!', toasterAnimationObject);
		</script>
    @endif

    @if(session('error'))
        <script>
			toastr.error('{{session('error')}}', 'Invalid!', toasterAnimationObject);
		</script>
    @endif
</div>
@if(session('success'))
    <script>
        swal('Success!',"{{session('success')}}",'success');
    </script>
@endif
@if(session('error'))
    <script>
        swal('Invalid!',"{{session('error')}}",'error');
    </script>
@endif
