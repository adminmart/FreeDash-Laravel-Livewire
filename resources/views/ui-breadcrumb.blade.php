@extends('layouts.app')

@section('content')

      
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Breadcrumb</h4>
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
                            <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Default bootstrap breadcrumb</h4>
                                <h6 class="card-subtitle">use class <code>.breadcrumb to ol</code></h6>
                                <ol class="breadcrumb mb-2 px-3 py-6">
                                    <li class="breadcrumb-item active">Home</li>
                                </ol>
                                <ol class="breadcrumb mb-2 px-3 py-6">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                    <li class="breadcrumb-item active">Library</li>
                                </ol>
                                <ol class="breadcrumb mb-2 px-3 py-6">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Library</a></li>
                                    <li class="breadcrumb-item active">Data</li>
                                </ol>
                                <br>
                                <br>
                                <h4 class="card-title">Nav breadcrumb</h4>
                                <h6 class="card-subtitle">use class <code>.breadcrumb to nav</code> similar to
                                    navigation</h6>
                                <nav class="breadcrumb  px-3 py-6">
                                    <a class="breadcrumb-item" href="javascript:void(0)">Home</a>
                                    <a class="breadcrumb-item" href="javascript:void(0)">Library</a>
                                    <a class="breadcrumb-item" href="javascript:void(0)">Data</a>
                                    <span class="breadcrumb-item active">Bootstrap</span>
                                </nav>

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
            <!-- ============================================================== -->
            
        </div>
   

@endsection