@extends('layouts.app')

@section('content')

    
<div id="content-wrapper" class="d-flex flex-column">
  <div id="content">
      <iframe class="col-lg-12 col-sm-12 border-white border-0 h-100"  src="https://app.powerbi.com/view?r=eyJrIjoiOWJkNDZkZGUtMzdmYy00Njg1LWI4ZDctMDJmYThhNGRjM2Y0IiwidCI6Ijc1ZGYwOTZjLThiNzItNDhlNC05YjkxLWNiZjc5ZDg3ZWUzYSIsImMiOjl9&pageName=ReportSection" title="HCP Admin Dashboard">
      </iframe>
  </div>
</div>

    
@endsection

@section("afterScript")
<script>
  $(document).ready(function(){
    event.preventDefault();  
  });
</script>
@endsection