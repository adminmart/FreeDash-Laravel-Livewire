@extends('layouts.app')

@section('content')

      
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Toasts</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                        <div class="customize-input float-end">
                            <select
                                class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                                <option selected>Aug 23</option>
                                <option value="1">July 23</option>
                                <option value="2">Jun 23</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Basic Toast</h4>
                                <div class="bg-light p-3">
                                    <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                        <div class="toast-header">
                                            <svg class="bd-placeholder-img rounded me-2" width="20" height="20"
                                            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                                            focusable="false" role="img">
                                            <rect fill="#007aff" width="100%" height="100%"></rect>
                                             </svg>
                                          <strong class="me-auto">Bootstrap</strong>
                                          <small>11 mins ago</small>
                                          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body">
                                          Hello, world! This is a toast message.
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Translucent</h4>
                                <div class="bg-light p-3">
                                    <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                        <div class="toast-header">
                                            <svg class="bd-placeholder-img rounded me-2" width="20" height="20"
                                            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                                            focusable="false" role="img">
                                            <rect fill="#007aff" width="100%" height="100%"></rect>
                                             </svg>
                                          <strong class="me-auto">Bootstrap</strong>
                                          <small class="text-muted">11 mins ago</small>
                                          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body">
                                          Hello, world! This is a toast message.
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Stacking</h4>
                                <div class="bg-light p-3">
                                    <div class="toast-container position-static">
                                        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                          <div class="toast-header">
                                            <svg class="bd-placeholder-img rounded me-2" width="20" height="20"
                                            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                                            focusable="false" role="img">
                                            <rect fill="#007aff" width="100%" height="100%"></rect>
                                             </svg>
                                            <strong class="me-auto">Bootstrap</strong>
                                            <small class="text-muted">just now</small>
                                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                          </div>
                                          <div class="toast-body">
                                            See? Just like this.
                                          </div>
                                        </div>
                                      
                                        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                          <div class="toast-header">
                                            <svg class="bd-placeholder-img rounded me-2" width="20" height="20"
                                            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                                            focusable="false" role="img">
                                            <rect fill="#007aff" width="100%" height="100%"></rect>
                                             </svg>
                                            <strong class="me-auto">Bootstrap</strong>
                                            <small class="text-muted">2 seconds ago</small>
                                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                          </div>
                                          <div class="toast-body">
                                            Heads up, toasts will stack automatically
                                          </div>
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Placement</h4>
                                <div class="bg-light p-2">
                                    <div aria-live="polite" aria-atomic="true" class="bg-body-secondary position-relative bd-example-toasts rounded-3">
                                        <div class="toast-container position-relative p-3" id="toastPlacement">
                                          <div class="toast fade show">
                                            <div class="toast-header">
                                                <svg class="bd-placeholder-img rounded me-2" width="20" height="20"
                                                xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                                                focusable="false" role="img">
                                                <rect fill="#007aff" width="100%" height="100%"></rect>
                                                 </svg>
                                              <strong class="me-auto">Bootstrap</strong>
                                              <small>11 mins ago</small>
                                            </div>
                                            <div class="toast-body">
                                              Hello, world! This is a toast message.
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Placement</h4>
                                <div class="bg-light p-2">
                                    <div aria-live="polite" aria-atomic="true"
                                        style="position: relative; min-height: 200px;">
                                        <!-- Position it -->
                                        <div style="position: absolute; top: 0; right: 0;">

                                            <!-- Then put toasts within -->
                                            <div class="toast fade show mb-3" role="alert" aria-live="assertive" aria-atomic="true">
                                                <div class="toast-header">
                                                  <svg class="bd-placeholder-img rounded me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#007aff"></rect></svg>
                                                  <strong class="me-auto">Bootstrap</strong>
                                                  <small class="text-muted">just now</small>
                                                  <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close" fdprocessedid="mlog2p"></button>
                                                </div>
                                                <div class="toast-body">
                                                  See? Just like this.
                                                </div>
                                              </div>
                                              <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                                <div class="toast-header">
                                                  <svg class="bd-placeholder-img rounded me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#007aff"></rect></svg>
                                                  <strong class="me-auto">Bootstrap</strong>
                                                  <small class="text-muted">2 seconds ago</small>
                                                  <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close" fdprocessedid="mkuq0x"></button>
                                                </div>
                                                <div class="toast-body">
                                                  Heads up, toasts will stack automatically
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Placement with Flexbox</h4>
                                <div class="bg-light p-2">
                                    <!-- Flexbox container for aligning the toasts -->
                                    <div aria-live="polite" aria-atomic="true"
                                        class="d-flex justify-content-center align-items-center"
                                        style="min-height: 200px;">

                                        <!-- Then put toasts within -->
                                        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                            <div class="toast-header">
                                              <svg class="bd-placeholder-img rounded me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#007aff"></rect></svg>
                                              <strong class="me-auto">Bootstrap</strong>
                                              <small>11 mins ago</small>
                                              <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close" fdprocessedid="7b8gmw"></button>
                                            </div>
                                            <div class="toast-body">
                                              Hello, world! This is a toast message.
                                            </div>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
           
        </div>
   

@endsection