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
                                  <li class="d-inline-block col-sm-3 col-6"><select class="border-0 border-radius25px bg-white fontsize11px pl-3 pr-3 pt-2 pb-2 font-gothambook outline-none w-100" style="box-shadow: 1px 1px 10px #d6d6d6;"><option>HCP Name </option>
                                              <option>HCP Name </option>
                                          <option>HCP Name </option>
                                      <option>HCP Name </option></select></li>
                                  
                                  <li class="d-inline-block col-sm-3 col-6"><select class="border-0 border-radius25px bg-white fontsize11px pl-3 pr-3 font-gothambook pt-2 pb-2 outline-none w-100" style="box-shadow: 1px 1px 10px #d6d6d6;"><option>Speciality </option>
                                              <option>Speciality </option>
                                          <option>Speciality </option>
                                      <option>Speciality </option></select></li>
                            
                                  <li class="d-inline-block col-sm-3 col-12 mt-sm-0 mt-3" style="max-width: 243px;">
                                      <div class="bg-white border-radius25px d-flex position-relative" style="box-shadow: 1px 1px 10px #d6d6d6;padding: 7px 15px;">
                                          <label class="checkcustom checksmall fontsize12px font-gothambook col-sm-5 checklabel text-left border-right mr-2 mb-0">Karachi
                                                    <input type="checkbox" required>
                                                    <span class="checkmark"></span>
                                                  </label>
                                            <label class="checkcustom checksmall fontsize12px font-gothambook col-sm-6 checklabel text-left mb-0">Lahore
                                                    <input type="checkbox" required>
                                                    <span class="checkmark"></span>
                                                  </label>
                                      </div>
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
                                            <h6 class="text-dark fontsize13px mb-0 font-gothambook"><strong>31</strong> Total HCP</h6>
                                    </div>
                                    <div class="w-100 bg-white border-radius10px text-center pt-2 pb-2 mt-4">
                                            <img src="{{ asset ('images/Asset86.png') }}" width="35" class="mb-1">
                                            <h6 class="font-montserrat text-dark fontsize13px mb-0 font-gothambook"><strong>12</strong>  Total Events</h6>
                                    </div>
                                     <div class="w-100 bg-white border-radius10px text-center pt-2 pb-2 mt-4">
                                            <img src="{{ asset ('images/Asset85.png') }}" width="30" class="mb-1">
                                            <h6 class="text-dark fontsize13px mb-0 font-gothambook"><strong>10</strong>  No of HCP Interact PDF</h6>
                                    </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                             <div class="col-sm-4 pl-2 pr-1">   
                                    <div class="d-flex mb-1">
                                             <h6 class="p-0 col-sm-4 font-gothambook">HCP Name</h6>
                                              <h6 class="p-0 font-gothambook">Events </h6>
                                    </div>
                                    <div class="w-100 bg-white border-radius10px d-flex flex-wrap pt-2 pb-2 pl-1 pr-1 scroll-style" style="overflow-y: scroll;height: 220px;">
                                        <div class="col-sm-4 fontsize9px pr-0 text-dark" style="border-right: 1px dotted #ccc">
                                                <p class="mb-2">Dr. Cardiology</p>
                                                <p class="mb-2">Dr. Dermatology</p>
                                                <p class="mb-2">Dr. Gastroenterology</p>
                                                <p class="mb-2">Dr. Hematology.</p>
                                                <p class="mb-2">Dr. Immunology </p>
                                                <p class="mb-2">Dr. Infectious Diseas..</p>
                                                <p class="mb-2">Dr. Metabolism and..</p>
                                                <p class="mb-2">Dr. Neurology.</p>
                                                <p class="mb-2">Dr. Respirology.</p>
                                                <p class="mb-2">Dr. Substance Abus...</p>
                                        </div>
                                        <div class="col-sm-8 fontsize9px pr-0 text-dark font-gothambook">
                                            <p class="mb-2">Lorem ipsum dolor sit amet, consectetuer</p>
                                            <p class="mb-2">Lorem ipsum dolor sit amet, consectetuer</p>
                                            <p class="mb-2">Lorem ipsum dolor sit amet, consectetuer</p>
                                            <p class="mb-2">Lorem ipsum dolor sit amet, consectetuer</p>
                                            <p class="mb-2">Lorem ipsum dolor sit amet, consectetuer</p>
                                            <p class="mb-2">Lorem ipsum dolor sit amet, consectetuer</p>
                                            <p class="mb-2">Lorem ipsum dolor sit amet, consectetuer</p>
                                            <p class="mb-2">Lorem ipsum dolor sit amet, consectetuer</p>
                                            <p class="mb-2">Lorem ipsum dolor sit amet, consectetuer</p>
                                            <p class="mb-2">Lorem ipsum dolor sit amet, consectetuer</p>
                                            <p class="mb-2">Lorem ipsum dolor sit amet, consectetuer</p>
                                            <p class="mb-2">Lorem ipsum dolor sit amet, consectetuer</p>
                                        </div>
                                    </div>
                             </div>

                            <!-- bars -->
                             <div class="col-sm-4">
                                    <h6 class="p-0 w-100 font-gothambook">No of HCP Belong to Specialization</h6>

                                    <div class="w-100 bg-white border-radius10px p-2 scroll-style" style="height: 220px;overflow-y: scroll;">
                                            <ul class="p-0 m-0 list-unstyled">
                                                <li class="w-100 d-flex flex-wrap pb-1"><div class="text-dark fontsize10px text-right col-sm-4 p-0 m-auto font-gothambook">Cardiology</div>
                                                <div class="col-sm-8"> <div class="progress bg-transparent rounded-0">
                                                        <div class="progress-bar bg-blue" style="width:100%;height:14px"></div>
                                                      </div></li>
                                                <li class="w-100 d-flex flex-wrap pb-1"><div class=" text-dark fontsize10px text-right col-sm-4 p-0 m-auto font-gothambook">Dermatology.</div>
                                                <div class="col-sm-8"> <div class="progress bg-transparent rounded-0">
                                                        <div class="progress-bar bg-blue" style="width:90%;height:14px"></div>
                                                      </div></li>
                                                  <li class="w-100 d-flex flex-wrap pb-1"><div class="text-dark fontsize10px text-right col-sm-4 p-0 m-auto">Gastroenterology.</div>
                                                <div class="col-sm-8"> <div class="progress bg-transparent rounded-0">
                                                        <div class="progress-bar bg-blue" style="width:84%;height:14px"></div>
                                                      </div></li>

                                                  <li class="w-100 d-flex flex-wrap pb-1"><div class="text-dark fontsize10px text-right col-sm-4 p-0 m-auto font-gothambook">Hematology.</div>
                                                <div class="col-sm-8"> <div class="progress bg-transparent rounded-0">
                                                        <div class="progress-bar bg-blue" style="width:70%;height:14px"></div>
                                                      </div></li>

                                                  <li class="w-100 d-flex flex-wrap pb-1"><div class="font-gothambook text-dark fontsize10px text-right col-sm-4 p-0 m-auto">Immunology.</div>
                                                <div class="col-sm-8"> <div class="progress bg-transparent rounded-0">
                                                        <div class="progress-bar bg-blue" style="width:60%;height:14px"></div>
                                                      </div></li>

                                                  <li class="w-100 d-flex flex-wrap pb-1"><div class="font-gothambook text-dark fontsize10px text-right col-sm-4 p-0 m-auto">Infectious Diseases.</div>
                                                <div class="col-sm-8"> <div class="progress bg-transparent rounded-0">
                                                        <div class="progress-bar bg-blue" style="width:60%;height:14px"></div>
                                                      </div></li>
                                                     <li class="w-100 d-flex flex-wrap pb-1"><div class="font-montserrat text-dark fontsize10px text-right col-sm-4 p-0 m-auto">Metabolism and En...</div>
                                                <div class="col-sm-8"> <div class="progress bg-transparent rounded-0">
                                                        <div class="progress-bar bg-blue" style="width:60%;height:14px"></div>
                                                      </div></li>

                                                       <li class="w-100 d-flex flex-wrap pb-1"><div class="font-montserrat text-dark fontsize10px text-right col-sm-4 p-0 m-auto">Neurology.</div>
                                                <div class="col-sm-8"> <div class="progress bg-transparent rounded-0">
                                                        <div class="progress-bar bg-blue" style="width:60%;height:14px"></div>
                                                      </div></li>

                                                         <li class="w-100 d-flex flex-wrap pb-1"><div class="font-montserrat text-dark fontsize10px text-right col-sm-4 p-0 m-auto">Respirology</div>
                                                <div class="col-sm-8"> <div class="progress bg-transparent rounded-0">
                                                        <div class="progress-bar bg-blue" style="width:60%;height:14px"></div>
                                                      </div></li>

                                                      <li class="w-100 d-flex flex-wrap pb-1"><div class="font-montserrat text-dark fontsize10px text-right col-sm-4 p-0 m-auto">Respirology</div>
                                                <div class="col-sm-8"> <div class="progress bg-transparent rounded-0">
                                                        <div class="progress-bar bg-blue" style="width:60%;height:14px"></div>
                                                      </div></li>

                                                      <li class="w-100 d-flex flex-wrap pb-1"><div class="font-montserrat text-dark fontsize10px text-right col-sm-4 p-0 m-auto">Lorem Ipsum</div>
                                                <div class="col-sm-8"> <div class="progress bg-transparent rounded-0">
                                                        <div class="progress-bar bg-blue" style="width:60%;height:14px"></div>
                                                      </div></li>

                                                      <li class="w-100 d-flex flex-wrap pb-1"><div class="font-montserrat text-dark fontsize10px text-right col-sm-4 p-0 m-auto">Lorem Ipsum</div>
                                                <div class="col-sm-8"> <div class="progress bg-transparent rounded-0">
                                                        <div class="progress-bar bg-blue" style="width:60%;height:14px"></div>
                                                      </div></li>

                                                      <li class="w-100 d-flex flex-wrap pb-1"><div class="font-montserrat text-dark fontsize10px text-right col-sm-4 p-0 m-auto">Lorem Ipsum</div>
                                                <div class="col-sm-8"> <div class="progress bg-transparent rounded-0">
                                                        <div class="progress-bar bg-blue" style="width:60%;height:14px"></div>
                                                      </div></li>
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

@section("afterScript")
<script type="text/javascript">
  $('.owl-carousel.recent-carousel').owlCarousel({
        loop: true,
        margin: 15,
        nav: false,
        autoplayTimeout:6000,
        stagePadding: 0,
        navText: [
          "<i class='fa fa-caret-left'></i>",
          "<i class='fa fa-caret-right'></i>"
        ],
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 3
          },
          1000: {
            items: 4
          }
        }
      })

    $('.owl-carousel.upcoming-carousel').owlCarousel({
        loop: true,
        margin: 15,
        nav: false,
        autoplayTimeout:5000,
        stagePadding: 0,
        navText: [
          "<i class='fa fa-caret-left'></i>",
          "<i class='fa fa-caret-right'></i>"
        ],
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 3
          },
          1000: {
            items: 4
          }
        }
      })

    $('.owl-carousel.activity-carousel').owlCarousel({
        loop: true,
        margin: 7,
        nav: false,
        stagePadding: 0,
        autoplayTimeout:3000,
        navText: [
          "<i class='fa fa-caret-left'></i>",
          "<i class='fa fa-caret-right'></i>"
        ],
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 2
          },
          1000: {
            items: 2
          }
        }
      })
</script>



<script type="text/javascript">
  var data = {
    labels: ["Dr Kath", "Dr Zuleha", "Dr Sharaby", "Dr Ashraf", "Dr Fernan", "Dr Fara"],
    datasets: [{
      label: "Experience",
      backgroundColor: "rgb(4 95 170)",
      borderColor: "rgb(4 95 170)",
      borderWidth: 1,
      hoverBackgroundColor: "rgb(228 228 228)",
      hoverBorderColor: "rgb(228 228 228)",
      data: [43, 38, 30, 33, 28, 25 ],
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

  Chart.Bar('chart', {
    options: options,
    data: data
  });

</script>

<script type="text/javascript">
  var ctx = document.getElementById('myChart').getContext('2d');
          var chart = new Chart(ctx, {
              type: 'line', // also try bar or other graph types

              data: {
                  labels: ["Dr Kath", "Dr Zuleha", "Dr Sharaby", "Dr Ashraf", "Dr Fernan", "Dr Fara"],
                  // Information about the dataset
              datasets: [{
                      label: "Experience",
                      backgroundColor: 'rgb(4 95 170)',
                      borderColor: 'rgb(241 113 33)',
                      borderCapStyle:'butt',
                      drawTicks: false,
                      data: [999, 899, 750, 650, 610, 530 ],
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
</script>
@endsection