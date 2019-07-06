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
                          <h2 class="pageheader-title">Smart Track Dashboard</h2>
                          <div class="page-breadcrumb">
                              <nav aria-label="breadcrumb">
                                  <ol class="breadcrumb">
                                      <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                      <li class="breadcrumb-item active" aria-current="page">Smart Track Home</li>
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
              <!-- influencer profile  -->
              <!-- ============================================================== -->
              <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                      <div class="card influencer-profile-data">
                          <div class="card-body">
                              <div class="row">
                                  <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
                                      <div class="text-center">
                                          <img src="{{asset('concept/assets/images/avatar-1.jpg')}}" alt="User Avatar" class="rounded-circle user-avatar-xxl">
                                          </div>
                                      </div>
                                      <div class="col-xl-10 col-lg-8 col-md-8 col-sm-8 col-12">
                                          <div class="user-avatar-info">
                                              <div class="m-b-20">
                                                  <div class="user-avatar-name">
                                                      <h2 class="mb-1">Michael Saiba</h2>
                                                  </div>
                                              </div>
                                              <!--  <div class="float-right"><a href="#" class="user-avatar-email text-secondary">www.henrybarbara.com</a></div> -->
                                              <div class="user-avatar-address">
                                                  <div class="mt-3">
                                                      <a href="#" class="badge badge-light mr-1">Curing</a> <a href="#" class="badge badge-light mr-1">Team Building</a> <a href="#" class="badge badge-light">Innovation</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- ============================================================== -->
                  <!-- end influencer profile  -->
                  <!-- ============================================================== -->
              <div class="row">
                         <!-- ============================================================== -->
                         <!-- four widgets   -->
                         <!-- ============================================================== -->
                         <!-- ============================================================== -->
                         <!-- Todays Collections   -->
                         <!-- ============================================================== -->
                         <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                             <div class="card">
                                 <div class="card-body">
                                     <div class="d-inline-block">
                                         <h5 class="text-muted">Today's Collection</h5>
                                         <h2 class="mb-0"> 10,28,056</h2>
                                     </div>
                                     <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                                         <i class="fa fa-eye fa-fw fa-sm text-info"></i>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <!-- ============================================================== -->
                         <!-- end Todays Collection   -->
                         <!-- ============================================================== -->
                         <!-- ============================================================== -->
                         <!-- Months's Collection   -->
                         <!-- ============================================================== -->
                         <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                             <div class="card">
                                 <div class="card-body">
                                     <div class="d-inline-block">
                                         <h5 class="text-muted">Month's Collect</h5>
                                         <h2 class="mb-0"> 24,763</h2>
                                     </div>
                                     <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
                                         <i class="fa fa-user fa-fw fa-sm text-primary"></i>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <!-- ============================================================== -->
                         <!-- end Months's Collection   -->
                         <!-- ============================================================== -->
                         <!-- ============================================================== -->
                         <!-- Set Target   -->
                         <!-- ============================================================== -->
                         <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                             <div class="card">
                                 <div class="card-body">
                                     <div class="d-inline-block">
                                         <h5 class="text-muted">Set Target</h5>
                                         <h2 class="mb-0">14</h2>
                                     </div>
                                     <div class="float-right icon-circle-medium  icon-box-lg  bg-secondary-light mt-1">
                                         <i class="fa fa-handshake fa-fw fa-sm text-secondary"></i>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <!-- ============================================================== -->
                         <!-- end Set Target   -->
                         <!-- ============================================================== -->
                         <!-- ============================================================== -->
                         <!-- Target Deviation   -->
                         <!-- ============================================================== -->
                         <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                             <div class="card">
                                 <div class="card-body">
                                     <div class="d-inline-block">
                                         <h5 class="text-muted">Target Deviation</h5>
                                         <h2 class="mb-0"> $149.00</h2>
                                     </div>
                                     <div class="float-right icon-circle-medium  icon-box-lg  bg-brand-light mt-1">
                                         <i class="fa fa-money-bill-alt fa-fw fa-sm text-brand"></i>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <!-- ============================================================== -->
                         <!-- end Target Deviation   -->
                         <!-- ============================================================== -->
                     </div>

              <div class="row">
                          <!-- ============================================================== -->
                          <!-- Yesterday's Collection  -->
                          <!-- ============================================================== -->
                          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                              <div class="card border-3 border-top border-top-primary">
                                  <div class="card-body">
                                      <h5 class="text-muted">Yesterday's Collection</h5>
                                      <div class="metric-value d-inline-block">
                                          <h1 class="mb-1">$12099</h1>
                                      </div>
                                      <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                          <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">5.86%</span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- ============================================================== -->
                          <!-- end Yesterday's Collection  -->
                          <!-- ============================================================== -->
                          <!-- ============================================================== -->
                          <!-- This Week's Collections  -->
                          <!-- ============================================================== -->
                          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                              <div class="card border-3 border-top border-top-primary">
                                  <div class="card-body">
                                      <h5 class="text-muted">This Week's Collections</h5>
                                      <div class="metric-value d-inline-block">
                                          <h1 class="mb-1">1245</h1>
                                      </div>
                                      <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                          <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">10%</span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- ============================================================== -->
                          <!-- end this Week's Collections  -->
                          <!-- ============================================================== -->
                          <!-- ============================================================== -->
                          <!-- last week's Collections  -->
                          <!-- ============================================================== -->
                          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="card border-3 border-top border-top-primary">
                              <div class="card-body">
                                <h5 class="text-muted">Last week's Collections</h5>
                                <div class="metric-value d-inline-block">
                                  <h1 class="mb-1">13000</h1>
                                </div>
                                <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                  <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">5%</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- ============================================================== -->
                          <!-- end last week's Collections  -->
                          <!-- ============================================================== -->
                          <!-- ============================================================== -->
                          <!-- Last Months Collections  -->
                          <!-- ============================================================== -->
                          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                              <div class="card border-3 border-top border-top-primary">
                                  <div class="card-body">
                                      <h5 class="text-muted">Last Month's Collections</h5>
                                      <div class="metric-value d-inline-block">
                                          <h1 class="mb-1">1340</h1>
                                      </div>
                                      <div class="metric-label d-inline-block float-right text-danger font-weight-bold">
                                          <span class="icon-circle-small icon-box-xs text-danger bg-danger-light bg-danger-light "><i class="fa fa-fw fa-arrow-down"></i></span><span class="ml-1">4%</span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- ============================================================== -->
                          <!-- end last months collections  -->
                          <!-- ============================================================== -->
              </div>


              <div class="row">
                  <!-- ============================================================== -->
                  <!-- basic table  -->
                  <!-- ============================================================== -->
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                      <div class="card">
                          <h5 class="card-header">Daily Collections Ranking</h5>
                          <div class="card-body">
                              <div class="table-responsive">
                                  <table class="table table-striped table-bordered first">
                                      <thead>
                                          <tr>
                                              <th>Position</th>
                                              <th>Name</th>
                                              <th>Today's Collections</th>
                                              <th>Yesterday's Collections</th>
                                              <th>Month's Collection</th>

                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>1
                                                <div class="metric-label d-inline-block float-right">
                                                  <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-caret-up"></i></span>
                                                </div>
                                              </td>
                                              <td>Lucia Kamau</td>
                                              <td>30,000</td>
                                              <td>30,000</td>
                                              <td>600,000</td>

                                          </tr>
                                          <tr>
                                              <td>2
                                                <div class="metric-label d-inline-block float-right ">
                                                  <span class="icon-circle-small icon-box-xs text-danger bg-danger-light"><i class="fa fa-fw fa-caret-down"></i></span>
                                                </div>
                                              </td>
                                              <td>Goodness Mkanyika</td>
                                              <td>30,000</td>
                                              <td>30,000</td>
                                              <td>600,000</td>

                                          </tr>
                                          <tr>
                                              <td>3
                                                <div class="metric-label d-inline-block float-right ">
                                                  <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-caret-up"></i></span>
                                                </div>
                                              </td>
                                              <td>Dick Oburu</td>
                                              <td>30,000</td>
                                              <td>30,000</td>
                                              <td>600,000</td>

                                          </tr>
                                          <tr>
                                              <td>4
                                                <div class="metric-label d-inline-block float-right ">
                                                  <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-caret-up"></i></span>
                                                </div>
                                              </td>
                                              <td>Grace Gitari</td>
                                              <td>30,000</td>
                                              <td>30,000</td>
                                              <td>600,000</td>

                                          </tr>
                                          <tr>
                                              <td>5
                                                <div class="metric-label d-inline-block float-right ">
                                                  <span class="icon-circle-small icon-box-xs text-danger bg-danger-light"><i class="fa fa-fw fa-caret-down"></i></span>
                                                </div>
                                              </td>
                                              <td>Douglas Mwami</td>
                                              <td>30,000</td>
                                              <td>30,000</td>
                                              <td>600,000</td>

                                          </tr>
                                          <tr>
                                              <td>6
                                                <div class="metric-label d-inline-block float-right ">
                                                  <span class="icon-circle-small icon-box-xs text-danger bg-danger-light"><i class="fa fa-fw fa-caret-down"></i></span>
                                                </div>
                                              </td>
                                              <td>Dan Wanjohi</td>
                                              <td>30,000</td>
                                              <td>30,000</td>
                                              <td>600,000</td>

                                          </tr>
                                          <tr>
                                              <td>7
                                                <div class="metric-label d-inline-block float-right ">
                                                  <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-caret-up"></i></span>
                                                </div>
                                              </td>
                                              <td>Dorcus Mumbua</td>
                                              <td>30,000</td>
                                              <td>30,000</td>
                                              <td>600,000</td>

                                          </tr>
                                          <tr>
                                              <td>8
                                                <div class="metric-label d-inline-block float-right ">
                                                  <span class="icon-circle-small icon-box-xs text-danger bg-danger-light"><i class="fa fa-fw fa-caret-down"></i></span>
                                                </div>
                                              </td>
                                              <td>Charlse Katitia</td>
                                              <td>30,000</td>
                                              <td>30,000</td>
                                              <td>600,000</td>

                                          </tr>
                                          <tr>
                                              <td>9
                                                <div class="metric-label d-inline-block float-right ">
                                                  <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-caret-up"></i></span>
                                                </div>
                                              </td>
                                              <td>Anne Mumbi</td>
                                              <td>30,000</td>
                                              <td>30,000</td>
                                              <td>600,000</td>

                                          </tr>
                                      </tbody>
                                      <tfoot>
                                          <tr>
                                              <th>Position</th>
                                              <th>Name</th>
                                              <th>Today's Collections</th>
                                              <th>Yesterday's Collections</th>
                                              <th>Month's Collection's</th>

                                          </tr>
                                      </tfoot>
                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- ============================================================== -->
                  <!-- end basic table  -->
                  <!-- ============================================================== -->
              </div>

              <div class="row">
                  <!-- ============================================================== -->
                  <!-- basic table  -->
                  <!-- ============================================================== -->
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                      <div class="card">
                          <h5 class="card-header">Monthly Collections Ranking</h5>
                          <div class="card-body">
                              <div class="table-responsive">
                                  <table class="table table-striped table-bordered first">
                                      <thead>
                                          <tr>
                                              <th>Position</th>
                                              <th>Name</th>
                                              <th>Today's Collections</th>
                                              <th>Yesterday's Collections</th>
                                              <th>Month's Collection</th>

                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>1
                                                <div class="metric-label d-inline-block float-right">
                                                  <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-caret-up"></i></span>
                                                </div>
                                              </td>
                                              <td>Lucia Kamau</td>
                                              <td>30,000</td>
                                              <td>30,000</td>
                                              <td>600,000</td>

                                          </tr>
                                          <tr>
                                              <td>2
                                                <div class="metric-label d-inline-block float-right ">
                                                  <span class="icon-circle-small icon-box-xs text-danger bg-danger-light"><i class="fa fa-fw fa-caret-down"></i></span>
                                                </div>
                                              </td>
                                              <td>Goodness Mkanyika</td>
                                              <td>30,000</td>
                                              <td>30,000</td>
                                              <td>600,000</td>

                                          </tr>
                                          <tr>
                                              <td>3
                                                <div class="metric-label d-inline-block float-right ">
                                                  <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-caret-up"></i></span>
                                                </div>
                                              </td>
                                              <td>Dick Oburu</td>
                                              <td>30,000</td>
                                              <td>30,000</td>
                                              <td>600,000</td>

                                          </tr>
                                          <tr>
                                              <td>4
                                                <div class="metric-label d-inline-block float-right ">
                                                  <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-caret-up"></i></span>
                                                </div>
                                              </td>
                                              <td>Grace Gitari</td>
                                              <td>30,000</td>
                                              <td>30,000</td>
                                              <td>600,000</td>

                                          </tr>
                                          <tr>
                                              <td>5
                                                <div class="metric-label d-inline-block float-right ">
                                                  <span class="icon-circle-small icon-box-xs text-danger bg-danger-light"><i class="fa fa-fw fa-caret-down"></i></span>
                                                </div>
                                              </td>
                                              <td>Douglas Mwami</td>
                                              <td>30,000</td>
                                              <td>30,000</td>
                                              <td>600,000</td>

                                          </tr>
                                          <tr>
                                              <td>6
                                                <div class="metric-label d-inline-block float-right ">
                                                  <span class="icon-circle-small icon-box-xs text-danger bg-danger-light"><i class="fa fa-fw fa-caret-down"></i></span>
                                                </div>
                                              </td>
                                              <td>Dan Wanjohi</td>
                                              <td>30,000</td>
                                              <td>30,000</td>
                                              <td>600,000</td>

                                          </tr>
                                          <tr>
                                              <td>7
                                                <div class="metric-label d-inline-block float-right ">
                                                  <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-caret-up"></i></span>
                                                </div>
                                              </td>
                                              <td>Dorcus Mumbua</td>
                                              <td>30,000</td>
                                              <td>30,000</td>
                                              <td>600,000</td>

                                          </tr>
                                          <tr>
                                              <td>8
                                                <div class="metric-label d-inline-block float-right ">
                                                  <span class="icon-circle-small icon-box-xs text-danger bg-danger-light"><i class="fa fa-fw fa-caret-down"></i></span>
                                                </div>
                                              </td>
                                              <td>Charlse Katitia</td>
                                              <td>30,000</td>
                                              <td>30,000</td>
                                              <td>600,000</td>

                                          </tr>
                                          <tr>
                                              <td>9
                                                <div class="metric-label d-inline-block float-right ">
                                                  <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-caret-up"></i></span>
                                                </div>
                                              </td>
                                              <td>Anne Mumbi</td>
                                              <td>30,000</td>
                                              <td>30,000</td>
                                              <td>600,000</td>

                                          </tr>
                                      </tbody>
                                      <tfoot>
                                          <tr>
                                              <th>Position</th>
                                              <th>Name</th>
                                              <th>Today's Collections</th>
                                              <th>Yesterday's Collections</th>
                                              <th>Month's Collection's</th>

                                          </tr>
                                      </tfoot>
                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- ============================================================== -->
                  <!-- end basic table  -->
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
