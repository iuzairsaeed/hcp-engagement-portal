@extends('layouts.app')

@section('content')

    

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">


            <div class="container-fluid pr-sm-0 pr-sm-4 pl-sm-4 pl-1 pb-2">

                <!-- Recent Activities -->
                @if (!$activities->isEmpty())
                <div class="w-100 pt-3 d-flex flex-wrap">
                    <h6 class="font-gothambook text-darkgray mb-1 p-1 col-sm-12">My Recent Activities </h6>
                        <div class="carousel-wrap pl-sm-0 col-sm-11">
                            <div class="owl-carousel activity-carousel">
                                @foreach ($activities as $activity )
                                <div class="item">
                                    <div class="media p-1 bg-white"
                                            style="border-radius: 7px 7px;box-shadow: -1px 1px 10px -2px #9fa5a7;">
                                        <img
                                            src="{{asset($activity->activity_image) }}"
                                            class="mr-3 rounded" style="width:105px; height: 102px">
                                        <div class="media-body m-auto">
                                            <h6 class="text-black font-gothambook fontsize13px"
                                                style="line-height: 1.3">{{ $activity->title }}</h6>
                                            {{-- <p
                                                class="fontsize13px text-orange mb-0 font-gothamlight"> Leave a
                                                Comment </p> --}}
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        
                    @endif
                    @if (!$activities->isEmpty())
                        <div class="col-sm-1 p-0 m-auto">
                            <a href="{{url('/activity') }}"
                                class="text-uppercase bg-orange btn border-radius25px text-white border border-orange font-gothammedium fontsize10px">View
                                All</a>
                        </div>
                    @endif
                </div>
                <!-- Recent Activities -->



                    <!-- Upcoming Events -->
                    @if (!$events->isEmpty())
                    <div class="w-100 pt-3 d-flex flex-wrap">
                        <h6 class="mb-1 p-1 font-gothambook text-darkgray col-sm-12">Upcoming Events </h6>
      
                        <div class="carousel-wrap col-sm-11 pl-sm-1">
                            <div class="owl-carousel upcoming-carousel">
                                      @foreach ($events as $event )
                                      <a href="{{ route('event.show', $event->id) }}">
                                        <div class="item">
                                            <div class="bg-white border-radius15px p-2">
                                                <div class="w-100 h-img"><img src="{{asset($event->event_attachment) }}" class="img-fluid"></div>
                                                <div class="card-body text-left pt-2 pb-0 pl-1 pr-1">
                                                    <ul class="list-unstyled d-inline-block p-0 d-flex flex-wrap w-100 mb-3 border-bottom border-gray">
                                                        <li class="col-sm-4 col-4 p-0"><h6
                                                                class="text-darkgray fontsize9px font-gothambook"><i
                                                                    class="fa fa-calendar-check fontsize11px mr-1 float-left"></i>
                                                                {{ $event->created_at->format('l')}}</li>
                                                        <li class="col-sm-5 col-5 p-0"><h6 class="text-darkgray fontsize9px font-gothambook"><i
                                                                    class="fa fa-calendar mr-1 fontsize11px float-left"></i>
                                                                <span class="float-left text-left w-fix"> {{ $event->created_at->format('d-m-Y')}} </span>
                                                            </h6></li>
                                                        <li class="col-sm-3 col-3 p-0 text-center">
                                                            <h6 class="text-darkgray fontsize9px font-gothambook">
                                                                <i class="fa fa-clock mr-1 fontsize12px float-left"></i>
                                                                <span class="float-left text-left w-fix"> {{ $event->created_at->format('h:i A')}} </span>
                                                            </h6>
                                                        </li>
                                                    </ul>
                                                    <h6 class="text-black font-gothambook mt-1 mb-2 fontsize12px"> {{ $event->title }}  </h6>
                                                </div>
                                            </div>
                                        </div>
                                      </a>
                                    @endforeach
                            </div>
                        </div>
                        @if (!$events->isEmpty())
                            <div class="col-sm-1 p-0 m-auto">
                                <a href="event"
                                class="text-uppercase bg-orange btn border-radius25px text-white border border-orange font-gothammedium fontsize10px">View
                                    All</a>
                            </div>
                        @endif
                    </div>

                    @endif
                    
                    <!-- Upcoming Events -->

                        <!-- Content Row -->
                        @if (!$posts->isEmpty())
                        <div class="w-100 mt-3 d-flex flex-wrap col-sm-12 pl-3 pr-3">
                            <h6 class="mb-1 p-1 font-gothambook text-darkgray col-sm-12"> Recent Posts</h6>
                            <div class="carousel-wrap col-sm-11 pl-sm-1">
                                <div class="owl-carousel recent-carousel">
                                    @foreach ($posts as $post )
                                    <div class="item">
                                        <a href="{{ route('post.show', $post->id) }}">
                                        <div class="bg-white border-radius15px p-2">
                                            <div class="w-100 h-img"><img src="{{asset($post->post_image) }}" class="mb-2 rounded w-100"></div>
                                            <p class="text-black font-gothambook fontsize12px mb-2 pl-2 pr-2">
                                            {{ $post->title}} </p>
                                            <a href="{{ route('post.show', $post->id) }}"
                                                class="text-orange font-gothambook fontsize12px pl-2 pr-2 mb-2 d-block">View
                                                Comment</a></div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-sm-1 p-0 m-auto">
                                <a href="{{url('/post') }}" class="text-uppercase bg-orange btn border-radius25px text-white border border-orange font-gothammedium fontsize10px">View
                                    All</a>
                            </div>
                            <!-- Content Row -->
                        </div>
                        @endif
                    

                    <!-- Users -->
                    @if (!$users->isEmpty())
                    <div class="w-100 pt-3 d-flex flex-wrap">
                        <h6 class="mb-1 p-1 font-gothambook text-darkgray col-sm-12">Users </h6>
      
                        <div class="carousel-wrap col-sm-11 pl-sm-1">
                            <div class="owl-carousel upcoming-carousel">
                                      @foreach ($users as $user )
                                        <div class="item">
                                            <div class="bg-white border-radius15px p-2">
                                                <div class="w-100 h-img"><img src="{{asset($user->avatar) }}" class="img-fluid"></div>
                                                <div class="card-body text-left pt-2 pb-0 pl-1 pr-1">
                                                    <p>{{ $user->name }}</p>
                                                    <ul class="list-unstyled d-inline-block p-0 d-flex flex-wrap w-100 mb-3 border-bottom border-gray">
                                                        <li class="col-sm-6 col-6 p-0"><h6
                                                                class="text-darkgray fontsize9px font-gothambook"><i
                                                                    class="fa fa-calendar-check fontsize11px mr-1 float-left"></i>
                                                                {{ $user->speciality[0]->name }}</li>
                                                        <li class="col-sm-6 col-6 p-0 text-center">
                                                            <h6 class="text-darkgray fontsize9px font-gothambook">
                                                                <i class="fa fa-clock mr-1 fontsize12px float-left"></i>
                                                                <span class="float-left text-left w-fix">  {{ $user->location[0]->name }}</span>
                                                            </h6>
                                                        </li>
                                                    </ul>
                                                    <h6 class="text-black font-gothambook mt-1 mb-2 fontsize12px"> {{ $user->title }}  </h6>
                                                </div>
                                            </div>
                                        </div>
                                      </a>
                                    @endforeach
                            </div>
                        </div>
                        @if (!$users->isEmpty())
                            <div class="col-sm-1 p-0 m-auto">
                                <a href="user"
                                class="text-uppercase bg-orange btn border-radius25px text-white border border-orange font-gothammedium fontsize10px">View
                                    All</a>
                            </div>
                        @endif
                    </div>

                    @endif

                        <!-- /.container-fluid -->
                    </div>
                    <!-- End of Main Content -->
                </div>
                <!-- End of Content Wrapper -->
            </div>
            <!-- End of Page Wrapper -->
        </div>
    </div>

  
@endsection

@section('afterScript')
<script type="text/javascript">
    $('.owl-carousel.recent-carousel').owlCarousel({
          loop: false,
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
          loop: false,
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
          loop: false,
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



@endsection

