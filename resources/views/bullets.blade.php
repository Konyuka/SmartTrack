@extends('layouts.concept')

@section('content')

<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Bulleting Board</h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Smart Track</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Bulleting Board</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- contents  -->
            <!-- ============================================================== -->

            <!-- timeline  -->
            <!-- ============================================================== -->

            <section class="cd-timeline js-cd-timeline">
                <div class="cd-timeline__container">
                    <div class="cd-timeline__block js-cd-block">
                        <div class="cd-timeline__img cd-timeline__img--picture js-cd-img">
                            <img src="{{asset('concept/assets/vendor/timeline/img/cd-icon-picture.svg')}}" alt="Picture">
                        </div>
                        <!-- cd-timeline__img -->
                        <div class="cd-timeline__content js-cd-content">
                            <h3>Team Building</h3>
                            <a href="/bullet" class="btn btn-primary btn-lg">Read More</a>
                            <span class="cd-timeline__date">12 July, 2016</span>
                        </div>
                        <!-- cd-timeline__content -->
                    </div>
                    <!-- cd-timeline__block -->
                    <div class="cd-timeline__block js-cd-block">
                        <div class="cd-timeline__img cd-timeline__img--movie js-cd-img">
                            <img src="{{asset('concept/assets/vendor/timeline/img/cd-icon-movie.svg')}}" alt="Movie">
                        </div>
                        <!-- cd-timeline__img -->
                        <div class="cd-timeline__content js-cd-content">
                            <h3>Withdrawal of batches</h3>
                         <a href="/bullet" class="btn btn-primary btn-lg">Read More</a>
                            <span class="cd-timeline__date">20 July, 2017</span>
                        </div>
                        <!-- cd-timeline__content -->
                    </div>
                    <!-- cd-timeline__block -->
                    <div class="cd-timeline__block js-cd-block">
                        <div class="cd-timeline__img cd-timeline__img--picture js-cd-img">
                            <img src="{{asset('concept/assets/vendor/timeline/img/cd-icon-picture.svg')}}" alt="Picture">
                        </div>
                        <!-- cd-timeline__img -->
                        <div class="cd-timeline__content js-cd-content">
                            <h3>Visitors from Tala</h3>
                          <a href="/bullet" class="btn btn-primary btn-lg">Read More</a>
                            <span class="cd-timeline__date">24 July, 2018</span>
                        </div>
                        <!-- cd-timeline__content -->
                    </div>
                    <!-- cd-timeline__block -->
                    <div class="cd-timeline__block js-cd-block">
                        <div class="cd-timeline__img cd-timeline__img--location js-cd-img">
                            <img src="{{asset('concept/assets/vendor/timeline/img/cd-icon-location.svg')}}" alt="Location">
                        </div>
                        <!-- cd-timeline__img -->
                        <div class="cd-timeline__content js-cd-content">
                            <h3>Tommorow's Dressing Theme</h3>
                         <a href="/bullet" class="btn btn-primary btn-lg">Read More</a>
                            <span class="cd-timeline__date">12 September, 2018</span>
                        </div>
                        <!-- cd-timeline__content -->
                    </div>
                    <!-- cd-timeline__block -->
                    <div class="cd-timeline__block js-cd-block">
                        <div class="cd-timeline__img cd-timeline__img--location js-cd-img">
                            <img src="{{asset('concept/assets/vendor/timeline/img/cd-icon-location.svg')}}" alt="Location">
                        </div>
                        <!-- cd-timeline__img -->
                        <div class="cd-timeline__content js-cd-content">
                            <h3>Moving to 6th floor</h3>
                         <a href="/bullet" class="btn btn-primary btn-lg">Read More</a>

                            <span class="cd-timeline__date">20 September, 2018</span>
                        </div>
                        <!-- cd-timeline__content -->
                    </div>
                    <!-- cd-timeline__block -->
                    <div class="cd-timeline__block js-cd-block">
                        <div class="cd-timeline__img cd-timeline__img--movie js-cd-img">
                            <img src="{{asset('concept/assets/vendor/timeline/img/cd-icon-movie.svg')}}" alt="Movie">
                        </div>
                        <!-- cd-timeline__img -->
                        <div class="cd-timeline__content js-cd-content">
                            <h3>Final Section</h3>
                            <span class="cd-timeline__date">1 October, 2018</span>
                        </div>
                        <!-- cd-timeline__content -->
                    </div>
                    <!-- cd-timeline__block -->
                </div>
            </section>
            <!-- cd-timeline -->

          <!-- ============================================================== -->
            <!-- end timeline  -->
            <!-- ============================================================== -->









            <!-- ============================================================== -->
            <!-- End contents  -->
            <!-- ============================================================== -->



        </div>
    </div>
    <!-- ============================================================== -->
    @include('includes.footer')
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- end wrapper  -->


@endsection
