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
                        <h2 class="pageheader-title">Strategies Hub</h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Smart Track</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Strategies Hub</li>
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

            <!-- ============================================================== -->
            <!-- overview  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-section" id="overview">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h2>Motivational Quotes</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- accrodions style four -->
            <!-- ============================================================== -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="section-block">
                    <h5 class="section-title">Accordions with Color</h5>
                    <p>Takes the basic nav from above and adds the .nav-tabs class to generate a tabbed interface..</p>
                </div>
                <div class="accrodion-regular">
                    <div id="accordion4">
                        <div class="card bg-primary">
                            <div class="card-header" id="headingTen">
                                <h5 class="mb-0">
                                   <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                                     <span class="fas fa-angle-down mr-3"></span>Accordion Heading Title Here
                                   </button>
                                  </h5>
                            </div>
                            <div id="collapseTen" class="collapse show" aria-labelledby="headingTen" data-parent="#accordion4">
                                <div class="card-body">
                                    <p class="lead text-white"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.</p>
                                    <p> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
                                    <a href="#" class="btn btn-secondary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-brand ">
                            <div class="card-header" id="headingEleven">
                                <h5 class="mb-0">
                                   <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                     <span class="fas fa-angle-down mr-3"></span>Accordion Heading Title Here
                                 </button>       </h5>
                            </div>
                            <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordion4">
                                <div class="card-body">
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card bg-secondary">
                            <div class="card-header" id="headingTwelve">
                                <h5 class="mb-0">
                <button class="btn btn-link collapsed text-white" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                      <span class="fas fa-angle-down mr-3"></span>Accordion Heading Title Here
                                 </button>
                                           </h5>
                            </div>
                            <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordion4">
                                <div class="card-body">
                                    Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-tabhetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end accrodions style four -->
            <!-- ============================================================== -->
            <div class="row">
              <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="card">
                      <div class="card-body">
                          <h3 class="card-title border-bottom pb-2">Card title - Bottom Line</h3>
                          <p class="card-text">Vestibulumin augue posuere congue.</p>
                          <p class="card-text">Peneit amet, porta semper nisi. Simple card title bottom line</p>
                      </div>
                  </div>
              </div>
            </div>

            <!-- ============================================================== -->
            <!-- end overview  -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- basic media -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">Title of Strategy</h5>
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">Title of second strategy</h5>
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end basic media -->
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
