<script src="{{ asset('js/app.js')}}"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script -->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('/js/custom.js')}}"></script>

    <script type="text/javascript" src="{{asset('/js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/Chart.min.js') }}"></script>

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

