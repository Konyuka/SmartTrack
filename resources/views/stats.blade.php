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
                        <h2 class="pageheader-title">Performance Statistics</h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Smart Track</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Performance Statistics</li>
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

            <div class="row">
                <!-- ============================================================== -->
                <!-- line chart  -->
                <!-- ============================================================== -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">This week's collection in comparison to last week's</h5>
                        <div class="card-body">
                            <canvas id="chartjs_line"></canvas>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end line chart  -->
                <!-- ============================================================== -->
            </div>












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
