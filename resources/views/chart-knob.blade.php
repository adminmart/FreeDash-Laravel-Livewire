@extends('layouts.app')

@section('content')

      
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Knob Chart</h4>
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
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-4 col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Disable display input</h4>
                                <div class="text-center">
                                    <input data-plugin="knob" data-width="150" data-height="150" data-bgColor="#ebeff2"
                                        data-fgColor="#5f76e8" data-displayInput=false value="50" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-4 col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Cursor mode</h4>
                                <div class="text-center">
                                    <input data-plugin="knob" data-width="150" data-height="150" data-cursor=true
                                        data-fgColor="#6174d5" value="75" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-4 col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Display previous value</h4>
                                <div class="text-center">
                                    <input data-plugin="knob" data-width="150" data-height="150" data-min="-100"
                                        data-fgColor="#768bf4" data-displayPrevious=true value="89" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Angle offset and arc</h4>
                                <div class="text-center">
                                    <input data-plugin="knob" data-width="250" data-height="250" data-min="-100"
                                        data-fgColor="#01caf1" data-displayPrevious=true data-angleOffset=-125
                                        data-angleArc=250 value="56" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Angle offset</h4>
                                <div class="text-center">
                                    <input data-plugin="knob" data-width="250" data-height="250" data-angleOffset="90"
                                        data-linecap="round" data-fgColor="#6edef4" value="90" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">5-digit values, step 1000</h4>
                                <div class="text-center">
                                    <input data-plugin="knob" data-width="150" data-height="150" data-min="-15000"
                                        data-displayPrevious=true data-max="15000" data-step="1000" value="10000"
                                        data-fgColor="#8fa0f3" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Readonly</h4>
                                <div class="text-center">
                                    <input data-plugin="knob" data-width="150" data-height="150" data-linecap=round
                                        data-fgColor="#5f76e8" value="40" data-skin="tron" data-angleOffset="180"
                                        data-readOnly=true data-thickness=".1" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Angle offset and arc</h4>
                                <div class="text-center">
                                    <input data-plugin="knob" data-width="150" data-height="150"
                                        data-displayPrevious=true data-fgColor="#6174d5" data-skin="tron"
                                        data-cursor=true value="75" data-thickness=".2" data-angleOffset=-125
                                        data-angleArc=250 />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Readonly</h4>
                                <div class="text-center">
                                    <input data-plugin="knob" data-width="220" data-height="220" data-linecap=round
                                        data-fgColor="#01caf1" value="90" data-skin="tron" data-angleOffset="180"
                                        data-readOnly=true data-thickness=".2" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Readonly</h4>
                                <div class="text-center">
                                    <input data-plugin="knob" data-width="180" data-height="180" data-linecap=round
                                        data-fgColor="#6edef4" value="67" data-skin="tron" data-angleOffset="180"
                                        data-readOnly=true data-thickness=".1" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Readonly</h4>
                                <div class="text-center">
                                    <input data-plugin="knob" data-width="120" data-height="120" data-linecap=round
                                        data-fgColor="#5ac4d9" value="70" data-skin="tron" data-angleOffset="180"
                                        data-readOnly=true data-thickness=".1" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
             
        </div>

       
   

@endsection