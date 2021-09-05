@extends('layouts.app')

@section('content')

    
	<!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                  <div class="container-fluid pr-sm-0 pr-sm-4 pl-sm-4 pl-1 pb-2">
                        <div class="row">   
                          <div class="col-sm-12 text-right">
                              <ul class="pl-0 pr-0 pt-2 pb-2 m-0 text-right d-flex flex-wrap" style="flex-direction: row-reverse;">
                                
                                  <li class="d-inline-block col-sm-3 col-6">
                                    <select id="hcp" class="border-0 border-radius25px bg-white fontsize11px pl-3 pr-3 pt-2 pb-2 font-gothambook outline-none w-100" style="box-shadow: 1px 1px 10px #d6d6d6;"></select>
                                  </li>
                                  
                                  <li class="d-inline-block col-sm-3 col-6">
                                    <select id="speciality" class="border-0 border-radius25px bg-white fontsize11px pl-3 pr-3 pt-2 pb-2 font-gothambook outline-none w-100" style="box-shadow: 1px 1px 10px #d6d6d6;"></select>
                                  </li>

                                  <li class="d-inline-block col-sm-3 col-6">
                                    <select id="location" class="border-0 border-radius25px bg-white fontsize11px pl-3 pr-3 pt-2 pb-2 font-gothambook outline-none w-100" style="box-shadow: 1px 1px 10px #d6d6d6;"></select>
                                  </li>
                                  
                              </ul>
                          </div>
                        </div>
                        <div class="row">

                            <!-- Graph 1 -->
                            <div class="col-lg-5 col-sm-12 " >
                                <h6 class="mb-2 pt-1 pb-1 font-gothambook">Top 10 HCP Rating on Their Activity </h6>
                                <div class="w-100 bg-white border-radius10px p-2" style="box-shadow: 1px 1px 10px #afc5ce;">
                                         <div class="chart-container w-100">
                                            <canvas id="chart"></canvas>
                                        </div>

                                </div>
                            </div>
                            <!-- Graph 1 -->


                            <!-- Graph 2-->
                            <div class="col-lg-5 col-sm-12 " >
                                <h6 class="mb-2 pt-1 pb-1 font-gothambook">Top 10 HCP w.r.t Experience </h6>
                                <div class="w-100 bg-white border-radius10px p-2" style="box-shadow: 1px 1px 10px #afc5ce;">
                                        <div class="chart chart-container w-100">
                                        <canvas id="myChart" width="100%" height="62%"></canvas>
                                    </div>

                                </div>
                            </div>
                            <!-- Graph 1 -->

                            <div class="col-lg-2 col-sm-12  " >
                                    <div class="w-100 bg-white border-radius10px text-center pt-2 pb-2" 
                                    style="margin-top: 2.1em;">
                                            <img src="{{ asset ('images/Asset87.png') }}" width="32" class="mb-1">
                                            <h6 class="text-dark fontsize13px mb-0 font-gothambook"><strong>{{$hcp}}</strong> Total HCP</h6>
                                    </div>
                                    <div class="w-100 bg-white border-radius10px text-center pt-2 pb-2 mt-4">
                                            <img src="{{ asset ('images/Asset86.png') }}" width="35" class="mb-1">
                                            <h6 class="font-montserrat text-dark fontsize13px mb-0 font-gothambook"><strong>{{$events}}</strong>  Total Events</h6>
                                    </div>
                                     <div class="w-100 bg-white border-radius10px text-center pt-2 pb-2 mt-4">
                                            <img src="{{ asset ('images/Asset85.png') }}" width="30" class="mb-1">
                                            <h6 class="text-dark fontsize13px mb-0 font-gothambook"><strong id="pdf">{{$pdf}}</strong>  No of HCP Interact PDF</h6>
                                    </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-sm-4 pl-2 pr-1">   
                              <div class="d-flex mb-1">
                                <h6 class="p-0 font-gothambook">Events </h6>
                                <h6 class="p-0 col-sm-4 font-gothambook">Total HCP Joined</h6>
                              </div>
                              <div class="w-100 bg-white border-radius10px d-flex flex-wrap pt-2 pb-2 pl-1 pr-1 scroll-style total_hcp_joined" style="overflow-y: scroll;height: 220px;">
                                @if(!$events_and_hcps->isEmpty())
                                  @foreach ($events_and_hcps as $row )
                                    <div class="col-sm-10 fontsize9px pr-0 text-dark" style="border-right: 1px dotted #ccc">
                                      <p class="mb-2">{{$row->title}}</p>
                                    </div>
                                    <div class="col-sm-2 fontsize9px pr-0 text-dark font-gothambook">
                                      <p class="mb-2">{{$row->interact_count}}</p>
                                    </div>
                                  @endforeach
                                @else
                                  <div class="col-sm-10 fontsize9px pr-0 text-dark" >
                                    <p class="mb-2">No Data Available</p>
                                  </div>
                                @endif
                              </div>
                            </div>
                            <!-- bars -->
                            <div class="col-sm-4">
                              <h6 class="p-0 w-100 font-gothambook">No of HCP Belong to Specialization</h6>

                              <div class="w-100 bg-white border-radius10px p-2 scroll-style" style="height: 220px;overflow-y: scroll;">
                                <ul class="p-0 m-0 list-unstyled hcp_specialization">
                                    @foreach ($specialities as $speciality )
                                      
                                      <li class="w-100 d-flex flex-wrap pb-1"><div class="text-dark fontsize10px text-right col-sm-4 p-0 m-auto font-gothambook">{{$speciality->name}}</div>
                                        <div class="col-sm-8"> <div class="progress bg-transparent rounded-0">
                                          <div class="progress-bar bg-blue" style="width:{{$speciality->users_count}}%;height:14px"></div>
                                        </div>
                                      </li>
                                    @endforeach
                                </ul>   
                              </div>
                            </div>
                             <!-- bars -->


                              <!-- Circle Location -->
                             <div class="col-sm-4">
                                    <h6 class="p-0 w-100 font-gothambook">No of HCP belong to Location</h6>
                                    <div class="bg-white border-radius10px p-2">
                                          <canvas id="oilChart" width="400" height="250"></canvas>
                                    </div>
                                </div>


                        </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

</div>

    
@endsection

@section('afterScript')
  
<script type="text/javascript">

    var data = {
      labels: [],
      datasets: [{
        label: "Interacted",
        backgroundColor: "rgb(4 95 170)",
        borderColor: "rgb(4 95 170)",
        borderWidth: 1,
        hoverBackgroundColor: "rgb(228 228 228)",
        hoverBorderColor: "rgb(228 228 228)",
        data: [1,1],
      }]
    };
  
    var options = {
      maintainAspectRatio: false,
      scales: {
        yAxes: [{
          stacked: true,
          gridLines: {
            display: true,
            color: "rgb(228 228 228)"
          }
        }],
        xAxes: [{
          gridLines: {
            display: false
          }
        }]
      }
    };

    var chart_i = new Chart.Bar('chart', {
      options: options,
      data: data
    });

    ajax_chart(chart_i);
    // function to update our chart
    function ajax_chart(chart, data) {
        var data = data || {};
        $.getJSON("{{ route('dashboard.getInteract') }}", data).done(function(response) {
          console.log(response);
          response.user.forEach((element, key) => {
            chart.data.labels[key] = element;
          });
          response.count.forEach((element, key) => {
            chart.data.datasets[0].data[key] = element;
          });
          chart.update(); // finally update our chart
        });
    }

</script>
<script type="text/javascript">
          var ctx = document.getElementById('myChart').getContext('2d');
          var chart_e = new Chart(ctx, {
              type: 'line', // also try bar or other graph types

              data: {
                  labels: [],
                  // Information about the dataset
              datasets: [{
                      label: "Experience",
                      backgroundColor: 'rgb(4 95 170)',
                      borderColor: 'rgb(241 113 33)',
                      borderCapStyle:'butt',
                      drawTicks: false,
                      data: [0],
                  }]
              },

              // Configuration options
              options: {
              layout: {
                padding: 0,
              },
                  legend: {
                      position: 'bottom',
                  },
                  title: {
                      display: true,
                      text: ''
                  },
                  scales: {
                      yAxes: [{
                          scaleLabel: {
                              display: false,
                              labelString: ''
                          }
                      }],
                      xAxes: [{
                          scaleLabel: {
                              display: false,
                              labelString: ''
                          }
                      }]
                  }
              }
          });

          ajax_chart(chart_e);
          // function to update our chart
          function ajax_chart(chart, data) {
              var data = data || {};
              $.getJSON("{{ route('dashboard.getExperience') }}", data).done(function(response) {
                response.user.forEach((element, key) => {
                  chart.data.labels[key] = element;
                });
                response.count.forEach((element, key) => {
                  chart.data.datasets[0].data[key] = element;
                });
                chart.update(); // finally update our chart
              });
          }

</script>
<script type="text/javascript">
  var oilCanvas = document.getElementById("oilChart");

      // Chart.defaults.global.defaultFontFamily = "Lato";
      Chart.defaults.global.defaultFontSize = 12;

      var oilData = {
          labels: [
              "Karachi",
              "Lahore"
          ],
          datasets: [
              {
                  data: [133.3, 31],
                  backgroundColor: [
                      "#0058a5",
                      "#f17121"
                  ]
              }]
      };

      var pieChart = new Chart(oilCanvas, {
        type: 'pie',
        data: oilData
      });

      ajax_chart(pieChart);
      // function to update our chart
      function ajax_chart(chart, data) {
          var data = data || {};
          $.getJSON("{{ route('dashboard.getLocations') }}", data).done(function(response) {
            response.country.forEach((element, key) => {
              chart.data.labels[key] = element;
            });
            response.count.forEach((element, key) => {
              chart.data.datasets[0].data[key] = element;
            });
            chart.update(); // finally update our chart
          });
      }

</script>
<script>
  $('#hcp').select2({
    placeholder: "HCP Name",
    allowClear: true,
    ajax: {
      url: "{{ route('users.get-user') }}",
      type: "GET",
      dataType: 'json',
      data: function (params) {
          return {
              search: params.term
          };
      },
      processResults: function (response) {
          return {
              results: response
          };
      },
      cache: true
    } 
  });

  $('#speciality').select2({
    placeholder: "Specialty",
    allowClear: true,
    ajax: {
      url: "{{ route('user.getSpeciality') }}",
      type: "GET",
      dataType: 'json',
      data: function (params) {
          return {
              search: params.term
          };
      },
      processResults: function (response) {
          return {
              results: response
          };
      },
      cache: true
    }
  });

  $('#location').select2({
    placeholder: "Search Location",
    allowClear: true,
    ajax: {
        url: "{{ route('user.getLocation') }}",
        type: "GET",
        dataType: 'json',
        data: function (params) {
            return {
                search: params.term
            };
        },
        processResults: function (response) {
            return {
                results: response
            };
        },
        cache: true
    }
  });

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $('#location').on('select2:select', function(e){
    $('#hcp').val(null).trigger('change');
    $('#speciality').val(null).trigger('change');
    var data = e.params.data;
    $.ajax({
      url : "{{ route('dashboard.searchByLoc') }}",
      type: "POST",
      data : { data  :data },
      success: function (res) {
        console.log(res.response[5]);
        update_pie_chart(res.response[0]);
        update_line_chart(res.response[1]);
        update_bar_chart(res.response[2]);
        $('#pdf').text(res.response[3]);
        update_total_hcp_joined(res.response[4]);
        update_specialities(res.response[5]);
        // $('#location').val(null).trigger('change');
        
        swal('Success','Your Record Has Been Successfully Addded','success');
      },
      error: function(err) {
        swal('Not Valid',err.responseJSON.message,'error')
      }
    });
  }); 

  $('#speciality').on('select2:select', function(e){
    $('#location').val(null).trigger('change');
    $('#hcp').val(null).trigger('change');
    var data = e.params.data;
    $.ajax({
      url : "{{ route('dashboard.searchBySpec') }}",
      type: "POST",
      data : { data  :data },
      success: function (res) {
        console.log(res.response);
        if(res.response==201)
        {
          swal('Not Valid','No Record Found','error')
        } else{
          console.log(res.response[0])
        // update_pie_chart(res.response[0]);
        var oilCanvas = document.getElementById("oilChart");

        // Chart.defaults.global.defaultFontFamily = "Lato";
        Chart.defaults.global.defaultFontSize = 12;
         var oilData = {
          labels: [
              "Karachi",
              "Lahore"
          ],
          datasets: [
              {
                  data: [133.3, 31],
                  backgroundColor: [
                      "#0058a5",
                      "#f17121"
                  ]
              }]
      };

      var pieChart = new Chart(oilCanvas, {
        type: 'pie',
        data: oilData
      });

      ajax_chart(pieChart);
        // function to update our chart
        function pie_chart(chart, data) {
            var data = data || {};
            res.response[0].forEach((element, key) => {
              chart.data.labels[key] = element[0].name;
            });
            res.response[0].forEach((element, key) => {
                chart.data.labels[key] = element[0].users_count;
            });
            chart.update(); // finally update our chart
        }
          // res.response[0].forEach((element, key) => {
          //     chart.data.labels[key] = element[0].name;
          // });
          // res.response[0].forEach((element, key) => {
          //     chart.data.labels[key] = element[0].users_count;
          // });
          // chart.update(); // finally update our chart
          // console.log(name,users_count);
        update_line_chart(res.response[1]);
        update_bar_chart(res.response[2]);
        $('#pdf').text(res.response[3]);
        update_total_hcp_joined(res.response[4]);
        update_specialities(res.response[5]);
        
        $('#speciality').val(null).trigger('change');
        swal('Success','Your Record Has Been Successfully Addded','success');
        }
      },
      error: function(err) {
        swal('Not Valid',err.responseJSON.message,'error')
      }
    });
  }); 



  $('#hcp').on('select2:select', function(e){
    $('#location').val(null).trigger('change');
    $('#speciality').val(null).trigger('change');
    var data = e.params.data;
    $.ajax({
      url : "{{ route('dashboard.searchByHCP') }}",
      type: "POST",
      data : { data  :data },
      success: function (res) {
        console.log(res.response[5]);
        update_line_chart(res.response[0]);
        update_bar_chart(res.response[1]);
        $('#pdf').text(res.response[2]);
        update_total_hcp_joined(res.response[3]);
        update_specialities(res.response[4]);
        update_pie_chart(res.response[5]);
        

        swal('Success','Your Record Has Been Successfully Addded','success');
      },
      error: function(err) {
        swal('Not Valid',err.responseJSON.message,'error')
      }
    });
  }); 

  $('#hcp').on('select2:unselect', function(e){
    location.reload(true);    
  });
  $('#speciality').on('select2:unselect', function(e){
    location.reload(true);    
  });
  $('#location').on('select2:unselect', function(e){
    location.reload(true);    
  });

  function update_pie_chart(res){
    console.log(res.country);
      var oilCanvas = document.getElementById("oilChart");

    // Chart.defaults.global.defaultFontFamily = "Lato";
    Chart.defaults.global.defaultFontSize = 12;
    if(res.country[0]=="Karachi")
    {
      var color="#0058a5";
    }
    if(res.country[0]=="Lahore")
    {
      var color="#f17121";
    }
    var oilData = {
      labels: [
        res.country[0]
      ],
      datasets: [
          {
              data: [100],
              backgroundColor: [
                  color,
              ]
          }]
      };

      var pieChart = new Chart(oilCanvas, {
        type: 'pie',
        data: oilData
      });

    pie_chart(pieChart,res);
    // function to update our chart
    function pie_chart(chart,res, data) {
        var data = data || {};
          res.country.forEach((element, key) => {
            chart.data.labels[key] = element;
          });
          res.count.forEach((element, key) => {
            chart.data.datasets[0].data[key] = element;
          });
          chart.update(); // finally update our chart
    }
  }

  function update_line_chart(res){
    var ctx = document.getElementById('myChart').getContext('2d');
          var chart_e = new Chart(ctx, {
              type: 'line', // also try bar or other graph types

              data: {
                  labels: [],
                  // Information about the dataset
              datasets: [{
                      label: "Experience",
                      backgroundColor: 'rgb(4 95 170)',
                      borderColor: 'rgb(241 113 33)',
                      borderCapStyle:'butt',
                      drawTicks: false,
                      data: [0],
                  }]
              },

              // Configuration options
              options: {
              layout: {
                padding: 0,
              },
                  legend: {
                      position: 'bottom',
                  },
                  title: {
                      display: true,
                      text: ''
                  },
                  scales: {
                      yAxes: [{
                          scaleLabel: {
                              display: false,
                              labelString: ''
                          }
                      }],
                      xAxes: [{
                          scaleLabel: {
                              display: false,
                              labelString: ''
                          }
                      }]
                  }
              }
          });

          ajax_chart(chart_e,res);
          // function to update our chart
          function ajax_chart(chart,res, data) {
            console.log(res);
              var data = data || {};
                res.user.forEach((element, key) => {
                  chart.data.labels[key] = element;
                });
                res.count.forEach((element, key) => {
                  chart.data.datasets[0].data[key] = element;
                });
                chart.update(); // finally update our chart
          }
  }

  function update_bar_chart(res){
    var data = {
      labels: [],
      datasets: [{
        label: "Interacted",
        backgroundColor: "rgb(4 95 170)",
        borderColor: "rgb(4 95 170)",
        borderWidth: 1,
        hoverBackgroundColor: "rgb(228 228 228)",
        hoverBorderColor: "rgb(228 228 228)",
        data: [1,1],
      }]
    };
  
    var options = {
      maintainAspectRatio: false,
      scales: {
        yAxes: [{
          stacked: true,
          gridLines: {
            display: true,
            color: "rgb(228 228 228)"
          }
        }],
        xAxes: [{
          gridLines: {
            display: false
          }
        }]
      }
    };

    var chart_i = new Chart.Bar('chart', {
      options: options,
      data: data
    });

    ajax_chart(chart_i,res);
    // function to update our chart
    function ajax_chart(chart,res, data) {
        var data = data || {};
          console.log(res);
          res.user.forEach((element, key) => {
            chart.data.labels[key] = element;
          });
          res.count.forEach((element, key) => {
            chart.data.datasets[0].data[key] = element;
          });
          chart.update(); // finally update our chart
    }
  }

  function update_total_hcp_joined(res){
      var hcp_html="";
      if(res.length==0)
      {
          hcp_html +="<div class='col-sm-10 fontsize9px pr-0 text-dark' >"
          +"<p class='mb-2'>No Data Available</p>"
          +"</div>"
      } else {
        for (let index = 0; index < res.length; index++) {
            hcp_html +="<div class='col-sm-10 fontsize9px pr-0 text-dark' style='border-right: 1px dotted #ccc'>"
            +"<p class='mb-2'>"+res[index].title+"</p>"
            +"</div>"
            +"<div class='col-sm-2 fontsize9px pr-0 text-dark font-gothambook'>"
            +"<p class='mb-2'>"+res[index].interact_count+"</p>"
            +"</div>";
        }

      }

        $('.total_hcp_joined').html(hcp_html);
  }

  function update_specialities(res)
  {
    console.log("Specialization:"+ res);
    var sp_html="";
      if(res.length==0)
      {
          sp_html +="<div class='col-sm-10 fontsize9px pr-0 text-dark' >"
          +"<p class='mb-2'>No Data Available</p>"
          +"</div>"
      } else {
        for (let index = 0; index < res.length; index++) {
            sp_html += "<li class='w-100 d-flex flex-wrap pb-1'>"
            +"<div class='text-dark fontsize10px text-right col-sm-4 p-0 m-auto font-gothambook'>"+res[index].name+"</div>"
            +"<div class='col-sm-8'> <div class='progress bg-transparent rounded-0'>"
            +"<div class='progress-bar bg-blue' style='width:"+res[index].users_count+"%;height:14px'></div>"
            +"</div>"
            +"</li>";
        }

      }

        $('.hcp_specialization').html(sp_html);
  }

</script>
@endsection