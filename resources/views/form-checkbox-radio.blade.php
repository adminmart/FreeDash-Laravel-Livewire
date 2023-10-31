@extends('layouts.app')

@section('content')


<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Checkbox and Radio
                            buttons</h4>
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
                <h4 class="card-title">Simple Checkboxes</h4>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Default Checkbox</h4>
                                <fieldset class="checkbox">
                                    <label>
                                        <input type="checkbox" value=""> I am unchecked Checkbox
                                    </label>
                                </fieldset>
                                <fieldset class="checkbox">
                                    <label>
                                        <input type="checkbox" value="" checked> I am checked Checkbox
                                    </label>
                                </fieldset>
                                <fieldset class="checkbox disabled">
                                    <label>
                                        <input type="checkbox" value="" disabled> I am disabled Checkbox
                                    </label>
                                </fieldset>
                                <fieldset class="checkbox disabled">
                                    <label>
                                        <input type="checkbox" value="" disabled checked> I am checked &amp; disabled
                                        Checkbox
                                    </label>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Custom Checkbox</h4>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">I am unchecked
                                        Checkbox</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2" checked>
                                    <label class="custom-control-label" for="customCheck2">I am checked Checkbox</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck3" disabled>
                                    <label class="custom-control-label" for="customCheck3">I am disabled
                                        Checkbox</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck4" disabled
                                        checked>
                                    <label class="custom-control-label" for="customCheck4">I am disabled
                                        Checkbox</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="card-title mt-5">Simple Radio Buttons</h4>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Default Radio Buttons</h4>
                                <fieldset class="radio">
                                    <label for="radio1">
                                        <input type="radio" id="radio1" name="radio" value=""> I am unchecked Radio
                                        Button
                                    </label>
                                </fieldset>
                                <fieldset class="radio">
                                    <label>
                                        <input type="radio" name="radio" value="" checked> I am checked Radio Button
                                    </label>
                                </fieldset>
                                <fieldset class="radio disabled">
                                    <label>
                                        <input type="radio" name="radio" value="" disabled> I am disabled Radio Button
                                    </label>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Custom Radio Buttons</h4>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="customRadio"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">Toggle this custom
                                        radio</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="customRadio"
                                        class="custom-control-input" checked>
                                    <label class="custom-control-label" for="customRadio2">Or toggle this other custom
                                        radio</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio3" name="customRadio"
                                        class="custom-control-input" disabled>
                                    <label class="custom-control-label" for="customRadio3">Or toggle this other custom
                                        radio</label>
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