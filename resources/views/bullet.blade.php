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
                                    <li class="breadcrumb-item" aria-current="page">Bulleting Board</li>
                                    <li class="breadcrumb-item active" aria-current="page">Title of the bullet</li>
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

            <div class="col-12 container-fluid p-0">
                <div class="email-head">
                    <div class="email-head-subject">
                        <div class="title"><a class="active" href="#"><span class="icon"><i class="fas fa-star"></i></span></a> <span>Development Files</span></div>
                        <div class="email-head-sender">
                            <div class="date">August 23, 3:37</div>
                        </div>
                    </div>

                </div>
                <div class="email-body">
                    <p>Hello,</p>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                    <p>Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.</p>
                    <p><strong>Regards</strong>,
                        <br> Justine Myranda</p>
                </div>
                <div class="email-attachments">
                    <div class="title">Attachments <span>(2 files, 16,24 KB)</span></div>
                    <ul>
                        <li><a href="#"><span class="icon mdi mdi-attachment-alt"></span> new-release.zip <span>(5.12 KB)</span></a></li>
                        <li><a href="#"><span class="icon mdi mdi-attachment-alt"></span> guidelines.pdf <span>(11.3 MB)</span></a></li>
                    </ul>
                </div>
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
