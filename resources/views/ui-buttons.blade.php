@extends('layouts.app')

@section('content')

<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Buttons</h4>
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
                    <div class="col-lg-12 ">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">General Buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-success</code> to quickly create a
                                    General btn.</h6>
                                <div class="btn-list">
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-primary">Primary</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-secondary">Secondary</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-success">Success</button>
                                    <button type="button" class="btn waves-effect waves-light btn-info">Info</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-warning">Warning</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-danger">Danger</button>
                                    <button type="button" class="btn waves-effect waves-light btn-light">Light</button>
                                    <button type="button" class="btn waves-effect waves-light btn-dark">Dark</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 ">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Button Tags</h4>
                                <h6 class="card-subtitle">The <code>.btn</code> classes are designed to be used with the
                                    <code>.&lt;button&gt;</code> element.</h6>
                                <a class="btn btn-primary" href="#" role="button">Link</a>
                                <button class="btn btn-primary" type="submit">Button</button>
                                <input class="btn btn-primary" type="button" value="Input">
                                <input class="btn btn-primary" type="submit" value="Submit">
                                <input class="btn btn-primary" type="reset" value="Reset">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 ">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Button with outline</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-outline-success</code> to quickly
                                    create a General btn.</h6>
                                <div class="btn-list">
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-outline-primary">Primary</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-outline-secondary">Secondary</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-outline-success">Success</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-outline-info">Info</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-outline-warning">Warning</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-outline-danger">Danger</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-outline-light">Light</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-outline-dark">Dark</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 ">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Rounded Buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-rounded btn-success</code> to
                                    quickly create a General btn.</h6>
                                <div class="btn-list">
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-primary">Primary</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-secondary">Secondary</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-success">Success</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-info">Info</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-warning">Warning</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-danger">Danger</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-light">Light</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-dark">Dark</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 ">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Rounded outlined Buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-rounded btn-outline-success</code>
                                    to quickly create a General btn.</h6>
                                <div class="btn-list">
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-outline-primary">Primary</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-outline-secondary">Secondary</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-outline-success">Success</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-outline-info">Info</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-outline-warning">Warning</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-outline-danger">Danger</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-outline-light">Light</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-outline-dark">Dark</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Button Sizes</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-lg btn-success</code> to quickly
                                    create a General btn.</h6>
                                <div class="btn-list">
                                    <button type="button" class="btn waves-effect waves-light btn-lg btn-primary">Large
                                        .btn-lg </button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary">Normal
                                        .btn</button>
                                    <button type="button" class="btn waves-effect waves-light btn-sm btn-success">Small
                                        .btn-sm</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Button Sizes with rounded</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-lg btn-rounded btn-success</code>
                                    to create a btn.</h6>
                                <div class="btn-list">
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-lg btn-rounded btn-primary">Large
                                        .btn-lg </button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-secondary">Normal
                                        .btn</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-sm btn-success">Small
                                        .btn-sm</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Block buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-block btn-success</code> to
                                    quickly create a General btn.</h6>
                                <button type="button" class="btn d-block w-100 mb-2 btn-primary">Block Button</button>
                                <button type="button" class="btn d-block w-100 mb-2 btn-sm btn-info">Block Button</button>
                                <button type="button" class="btn d-block w-100 btn-xs btn-success">Block Button</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Button with icon</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-success</code> &amp;
                                    <code>i class ="fa fa-heart"</code> to quickly create a General btn.</h6>
                                <div class="row">
                                    <div class="col-lg-6 mb-4">
                                        <div class="btn-list">
                                            <button type="button" class="btn btn-primary"><i class="fas fa-check"></i>
                                                Primary</button>
                                            <button type="button" class="btn btn-secondary"><i class="far fa-heart"></i>
                                                Secondary</button>
                                            <button type="button" class="btn btn-success"><i class="fas fa-check"></i>
                                                Success</button>
                                            <button type="button" class="btn btn-info"><i class="far fa-heart"></i>
                                                Info</button>
                                            <button type="button" class="btn btn-warning"><i class="far fa-heart"></i>
                                                Warning</button>
                                            <button type="button" class="btn btn-danger"><i class="far fa-heart"></i>
                                                Danger</button>
                                            <button type="button" class="btn btn-light"><i class="far fa-heart"></i>
                                                Light</button>
                                            <button type="button" class="btn btn-dark"><i class="far fa-heart"></i>
                                                Dark</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-4">
                                        <div class="btn-list">
                                            <button class="btn btn-primary waves-effect waves-light" type="button"><span
                                                    class="btn-label"><i class="far fa-envelope"></i></span>
                                                Mail</button>
                                            <button class="btn btn-secondary waves-effect waves-light"
                                                type="button"><span class="btn-label"><i
                                                        class="fas fa-check"></i></span> Check</button>
                                            <button class="btn btn-info waves-effect waves-light" type="button"><span
                                                    class="btn-label"><i class="fas fa-heart"></i></span> Heart</button>
                                            <button class="btn btn-warning waves-effect waves-light" type="button"><span
                                                    class="btn-label"><i class="far fa-envelope"></i></span>
                                                Mail</button>
                                            <button class="btn btn-danger waves-effect waves-light" type="button"><span
                                                    class="btn-label"><i class="far fa-heart"></i></span> Heart</button>
                                            <button class="btn btn-light waves-effect waves-light" type="button"><span
                                                    class="btn-label"><i class="far fa-heart"></i></span> Heart</button>
                                            <button class="btn btn-dark waves-effect waves-light" type="button"><span
                                                    class="btn-label"><i class="fas fa-heart"></i></span> Heart</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 mb-4">
                                        <div class="btn-list">
                                            <button type="button" class="btn btn-primary btn-rounded"><i
                                                    class="fas fa-check"></i> Primary</button>
                                            <button type="button" class="btn btn-secondary btn-rounded"> <i
                                                    class="far fa-heart"></i> Secondary</button>
                                            <button type="button" class="btn btn-success btn-rounded"><i
                                                    class="fas fa-check"></i> Success</button>
                                            <button type="button" class="btn btn-info btn-rounded"><i
                                                    class="far fa-heart"></i> Info</button>
                                            <button type="button" class="btn btn-warning btn-rounded"><i
                                                    class="far fa-heart"></i> Warning</button>
                                            <button type="button" class="btn btn-danger btn-rounded"><i
                                                    class="far fa-heart"></i> Danger</button>
                                            <button type="button" class="btn btn-light btn-rounded"><i
                                                    class="far fa-heart"></i> Light</button>
                                            <button type="button" class="btn btn-dark btn-rounded"><i
                                                    class="far fa-heart"></i> Dark</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-4">
                                        <div class="btn-list">
                                            <button type="button" class="btn btn-outline-primary"><i
                                                    class="fa fa-check"></i> Primary</button>
                                            <button type="button" class="btn btn-outline-secondary"><i
                                                    class="fa fa-heart"></i> Secondary</button>
                                            <button type="button" class="btn btn-outline-success"><i
                                                    class="fa fa-check"></i> Success</button>
                                            <button type="button" class="btn btn-outline-info"><i
                                                    class="fa fa-heart"></i>
                                                Info</button>
                                            <button type="button" class="btn btn-outline-warning"><i
                                                    class="fa fa-heart"></i> Warning</button>
                                            <button type="button" class="btn btn-outline-danger"><i
                                                    class="fa fa-heart"></i>
                                                Danger</button>
                                            <button type="button" class="btn btn-outline-light"><i
                                                    class="fa fa-heart"></i>
                                                Light</button>
                                            <button type="button" class="btn btn-outline-dark"><i
                                                    class="fa fa-heart"></i>
                                                Dark</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 mb-4">
                                        <div class="btn-list">
                                            <button class="btn btn-outline-primary waves-effect waves-light"
                                                type="button"><span class="btn-label"><i
                                                        class="far fa-envelope"></i></span>
                                                Mail</button>
                                            <button class="btn btn-outline-secondary waves-effect waves-light"
                                                type="button"><span class="btn-label"><i class="fa fa-check"></i></span>
                                                Check</button>
                                            <button class="btn btn-outline-info waves-effect waves-light"
                                                type="button"><span class="btn-label"><i class="fa fa-heart"></i></span>
                                                Heart</button>
                                            <button class="btn btn-outline-warning waves-effect waves-light"
                                                type="button"><span class="btn-label"><i
                                                        class="far fa-envelope"></i></span>
                                                Mail</button>
                                            <button class="btn btn-outline-danger waves-effect waves-light"
                                                type="button"><span class="btn-label"><i class="fa fa-heart"></i></span>
                                                Heart</button>
                                            <button class="btn btn-outline-light waves-effect waves-light"
                                                type="button"><span class="btn-label"><i class="fa fa-heart"></i></span>
                                                Heart</button>
                                            <button class="btn btn-outline-dark waves-effect waves-light"
                                                type="button"><span class="btn-label"><i class="fa fa-heart"></i></span>
                                                Heart</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6  mb-4">
                                        <div class="btn-list">
                                            <button type="button" class="btn btn-outline-primary btn-rounded"><i
                                                    class="fas fa-check"></i> Primary</button>
                                            <button type="button" class="btn btn-outline-secondary btn-rounded"><i
                                                    class="far fa-heart"></i> Secondary</button>
                                            <button type="button" class="btn btn-outline-success btn-rounded"><i
                                                    class="fas fa-check"></i> Success</button>
                                            <button type="button" class="btn btn-outline-info btn-rounded"><i
                                                    class="fas fa-heart"></i> Info</button>
                                            <button type="button" class="btn btn-outline-warning btn-rounded"><i
                                                    class="far fa-heart"></i> Warning</button>
                                            <button type="button" class="btn btn-outline-danger btn-rounded"><i
                                                    class="far fa-heart"></i> Danger</button>
                                            <button type="button" class="btn btn-outline-light btn-rounded"><i
                                                    class="fas fa-heart"></i> Light</button>
                                            <button type="button" class="btn btn-outline-dark btn-rounded"><i
                                                    class="fas fa-heart"></i> Dark</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 mt-4">
                                        <h4 class="card-title">Button with Dropdown</h4>
                                        <div class="btn-list">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-danger dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Another
                                                        action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Something else
                                                        here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="javascript:void(0)">Separated
                                                        link</a>
                                                </div>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Another
                                                        action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Something else
                                                        here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="javascript:void(0)">Separated
                                                        link</a>
                                                </div>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Another
                                                        action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Something else
                                                        here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="javascript:void(0)">Separated
                                                        link</a>
                                                </div>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-warning dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Another
                                                        action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Something else
                                                        here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="javascript:void(0)">Separated
                                                        link</a>
                                                </div>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Another
                                                        action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Something else
                                                        here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="javascript:void(0)">Separated
                                                        link</a>
                                                </div>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-secondary dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Another
                                                        action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Something else
                                                        here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="javascript:void(0)">Separated
                                                        link</a>
                                                </div>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-light dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Another
                                                        action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Something else
                                                        here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="javascript:void(0)">Separated
                                                        link</a>
                                                </div>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-dark dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Another
                                                        action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Something else
                                                        here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="javascript:void(0)">Separated
                                                        link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-4">
                                        <h4 class="card-title">Split-button-dropdowns</h4>
                                        <div class="">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-danger">Action</button>
                                                <button type="button"
                                                    class="btn btn-danger dropdown-toggle dropdown-toggle-split"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Another
                                                        action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Something else
                                                        here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="javascript:void(0)">Separated
                                                        link</a>
                                                </div>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-warning">Action</button>
                                                <button type="button"
                                                    class="btn btn-warning dropdown-toggle dropdown-toggle-split"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Another
                                                        action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Something else
                                                        here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="javascript:void(0)">Separated
                                                        link</a>
                                                </div>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success">Action</button>
                                                <button type="button"
                                                    class="btn btn-success dropdown-toggle dropdown-toggle-split"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Another
                                                        action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Something else
                                                        here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="javascript:void(0)">Separated
                                                        link</a>
                                                </div>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info">Action</button>
                                                <button type="button"
                                                    class="btn btn-info dropdown-toggle dropdown-toggle-split"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Another
                                                        action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Something else
                                                        here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="javascript:void(0)">Separated
                                                        link</a>
                                                </div>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-secondary">Action</button>
                                                <button type="button"
                                                    class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Another
                                                        action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Something else
                                                        here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="javascript:void(0)">Separated
                                                        link</a>
                                                </div>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-light">Action</button>
                                                <button type="button"
                                                    class="btn btn-light dropdown-toggle dropdown-toggle-split"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Another
                                                        action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Something else
                                                        here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="javascript:void(0)">Separated
                                                        link</a>
                                                </div>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-dark">Action</button>
                                                <button type="button"
                                                    class="btn btn-dark dropdown-toggle dropdown-toggle-split"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Another
                                                        action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Something else
                                                        here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="javascript:void(0)">Separated
                                                        link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-4">
                                        <h4 class="card-title">Large button dropdowns</h4>
                                        <h6 class="card-subtitle">Use a classes to create instant button</h6>
                                        <div class="btn-list">
                                            <div class="btn-group">
                                                <button class="btn btn-secondary btn-lg dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Large button
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Another
                                                        action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Something else
                                                        here</a>
                                                </div>
                                            </div>
                                            <div class="btn-group">
                                                <button class="btn btn-secondary btn-lg" type="button"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Large button
                                                </button>
                                                <button type="button"
                                                    class="btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Another
                                                        action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Something else
                                                        here</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Circle buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-circle btn-success</code> to
                                    quickly create a General btn.</h6>
                                <button type="button" class="btn btn-secondary btn-circle"><i class="fa fa-check"></i>
                                </button>
                                <button type="button" class="btn btn-primary btn-circle"><i class="fa fa-list"></i>
                                </button>
                                <button type="button" class="btn btn-success btn-circle"><i class="fa fa-link"></i>
                                </button>
                                <button type="button" class="btn btn-info btn-circle"><i class="fa fa-check"></i>
                                </button>
                                <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-times"></i>
                                </button>
                                <button type="button" class="btn btn-danger btn-circle"><i class="fa fa-heart"></i>
                                </button>
                                <br>
                                <br>
                                <h4 class="card-title">Circle Large buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-circle btn-lg btn-success</code>
                                    to quickly create a General btn.</h6>
                                <button type="button" class="btn btn-secondary btn-circle-lg"><i
                                        class="fa fa-check"></i> </button>
                                <button type="button" class="btn btn-primary btn-circle-lg"><i class="fa fa-list"></i>
                                </button>
                                <button type="button" class="btn btn-success btn-circle-lg"><i class="fa fa-link"></i>
                                </button>
                                <button type="button" class="btn btn-info btn-circle-lg"><i class="fa fa-check"></i>
                                </button>
                                <button type="button" class="btn btn-warning btn-circle-lg"><i class="fa fa-times"></i>
                                </button>
                                <button type="button" class="btn btn-danger btn-circle-lg"><i class="fa fa-heart"></i>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="row">
                                <!-- column -->
                                <div class=" col-lg-6">
                                    <div class="card-body">
                                        <h4 class="card-title">Group buttons</h4>
                                        <h6 class="card-subtitle">Wrap a series of buttons with <code
                                                class="highlighter-rouge">.btn</code> in <code
                                                class="highlighter-rouge">.btn-group</code></h6>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-secondary">Left</button>
                                            <button type="button" class="btn btn-secondary">Middle</button>
                                            <button type="button" class="btn btn-secondary">Right</button>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-info"><i
                                                    class="fa fa-align-left"></i></button>
                                            <button type="button" class="btn btn-info"><i
                                                    class="fa fa-align-justify"></i></button>
                                            <button type="button" class="btn btn-info"><i
                                                    class="fa fa-align-right"></i></button>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-success"><i
                                                    class="fa fa-fast-backward"></i></button>
                                            <button type="button" class="btn btn-success"><i
                                                    class="fa fa-play"></i></button>
                                            <button type="button" class="btn btn-success"><i
                                                    class="fa fa-fast-forward"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <!-- column -->
                                <div class=" col-lg-6">
                                    <div class="card-body">
                                        <h4 class="card-title">Button toolbar pagination</h4>
                                        <h6 class="card-subtitle">Wrap a series of buttons with <code
                                                class="highlighter-rouge">.btn</code> in <code
                                                class="highlighter-rouge">.btn-group</code></h6>
                                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                            <div class="btn-group me-2" role="group" aria-label="First group">
                                                <button type="button" class="btn btn-secondary disabled">1</button>
                                                <button type="button" class="btn btn-info">2</button>
                                                <button type="button" class="btn btn-secondary">3</button>
                                                <button type="button" class="btn btn-secondary">4</button>
                                            </div>
                                            <div class="btn-group me-2" role="group" aria-label="Second group">
                                                <button type="button" class="btn btn-secondary">5</button>
                                                <button type="button" class="btn btn-secondary">6</button>
                                                <button type="button" class="btn btn-secondary">7</button>
                                            </div>
                                            <div class="btn-group" role="group" aria-label="Third group">
                                                <button type="button" class="btn btn-secondary">8</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- column -->
                                <div class=" col-lg-6">
                                    <div class="card-body">
                                        <h4 class="card-title">Button Toolbar with Input Group</h4>
                                        <div class="btn-toolbar mb-3" role="toolbar"
                                            aria-label="Toolbar with button groups">
                                            <div class="btn-group me-2" role="group" aria-label="First group">
                                                <button type="button" class="btn btn-secondary"><i
                                                        class="ti-move"></i></button>
                                                <button type="button" class="btn btn-secondary"><i
                                                        class="ti-fullscreen"></i></button>
                                                <button type="button" class="btn btn-secondary"><i
                                                        class="ti-target"></i></button>
                                                <button type="button" class="btn btn-secondary"><i
                                                        class="ti-trash"></i></button>
                                            </div>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text h-100" id="btnGroupAddon"><i
                                                            class="ti-email"></i></div>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Subscribe Now"
                                                    aria-label="Input group example" aria-describedby="btnGroupAddon">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- column -->
                                <div class=" col-lg-6">
                                    <div class="card-body">
                                        <h4 class="card-title">Button Toolbar with Jutify Content Input Group</h4>
                                        <div class="btn-toolbar justify-content-between" role="toolbar"
                                            aria-label="Toolbar with button groups">
                                            <div class="btn-group" role="group" aria-label="First group">
                                                <button type="button" class="btn btn-secondary"><i
                                                        class="ti-move"></i></button>
                                                <button type="button" class="btn btn-secondary"><i
                                                        class="ti-fullscreen"></i></button>
                                                <button type="button" class="btn btn-secondary"><i
                                                        class="ti-target"></i></button>
                                                <button type="button" class="btn btn-secondary"><i
                                                        class="ti-trash"></i></button>
                                            </div>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text h-100" id="btnGroupAddon2"><i
                                                            class="ti-email"></i></div>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Subscribe Now"
                                                    aria-label="Input group example" aria-describedby="btnGroupAddon2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- column -->
                                <div class=" col-lg-6">
                                    <div class="card-body">
                                        <h4 class="card-title">Group buttons sizing</h4>
                                        <h6 class="card-subtitle">Wrap a series of buttons with <code
                                                class="highlighter-rouge">.btn</code> in <code
                                                class="highlighter-rouge">.btn-group</code></h6>
                                        <div class="">
                                            <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-secondary">Left</button>
                                                <button type="button" class="btn btn-secondary">Middle</button>
                                                <button type="button" class="btn btn-secondary">Right</button>
                                            </div>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-info"><i
                                                        class="fa fa-align-left"></i></button>
                                                <button type="button" class="btn btn-info"><i
                                                        class="fa fa-align-justify"></i></button>
                                                <button type="button" class="btn btn-info"><i
                                                        class="fa fa-align-right"></i></button>
                                            </div>
                                            <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-success"><i
                                                        class="fa fa-fast-backward"></i></button>
                                                <button type="button" class="btn btn-success"><i
                                                        class="fa fa-play"></i></button>
                                                <button type="button" class="btn btn-success"><i
                                                        class="fa fa-fast-forward"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- column -->
                                <!-- column -->
                                <div class=" col-lg-6">
                                    <div class="card-body">
                                        <h4 class="card-title">Nesting</h4>
                                        <h6 class="card-subtitle">creat with below code </h6>
                                        <div class="btn-group" role="group"
                                            aria-label="Button group with nested dropdown">
                                            <button type="button" class="btn btn-secondary">1</button>
                                            <button type="button" class="btn btn-secondary">2</button>
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button"
                                                    class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    Dropdown
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                    <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- column -->
                                <!-- column -->
                                <div class=" col-lg-6 mb-4">
                                    <div class="card-body">
                                        <h4 class="card-title">Vertical buttons</h4>
                                        <h6 class="card-subtitle">creat vertical button with class of
                                            <code>.btn-group-vertical</code> </h6>
                                        <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                            <button type="button" class="btn btn-secondary">Button</button>
                                            <button type="button" class="btn btn-secondary">Button</button>
                                            <button type="button" class="btn btn-secondary">Button</button>
                                            <button type="button" class="btn btn-secondary">Button</button>
                                            <button type="button" class="btn btn-secondary">Button</button>
                                            <button type="button" class="btn btn-secondary">Button</button>
                                        </div>
                                        <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                            <button type="button" class="btn btn-secondary">Button</button>
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupVerticalDrop1" type="button"
                                                    class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    Dropdown
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                                    <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-secondary">Button</button>
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupVerticalDrop2" type="button"
                                                    class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    Dropdown
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop2">
                                                    <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                </div>
                                            </div>
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupVerticalDrop3" type="button"
                                                    class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    Dropdown
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop3">
                                                    <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                </div>
                                            </div>
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupVerticalDrop4" type="button"
                                                    class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    Dropdown
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop4">
                                                    <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- column -->
                                <!-- column -->
                                <div class=" col-lg-6 mb-4">
                                    <div class="card-body">
                                        <h4 class="card-title">Button with radio</h4>
                                        <h6 class="card-subtitle">There are a few easy ways to quickly get started with
                                            Bootstrap, each one ... </h6>

                                        <div class="btn-group mt-3" data-bs-toggle="buttons" role="group">
                                            <label class="btn btn-outline btn-info">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio1" name="options" value="male"
                                                        class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio1"> <i
                                                            class="ti-check text-active" aria-hidden="true"></i>
                                                        Male</label>
                                                </div>
                                            </label>
                                            <label class="btn btn-outline btn-info">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio2" name="options" value="female"
                                                        class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio2"> <i
                                                            class="ti-check text-active" aria-hidden="true"></i>
                                                        Female</label>
                                                </div>
                                            </label>
                                            <label class="btn btn-outline btn-info active">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio3" name="options" value="n/a"
                                                        class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio3"> <i
                                                            class="ti-check text-active" aria-hidden="true"></i>
                                                        N/A</label>
                                                </div>
                                            </label>
                                        </div>
                                        <br />
                                        <br />
                                        <h4 class="card-title">Button with checkbox</h4>
                                        <div class="btn-group" data-bs-toggle="buttons">
                                            <label class="btn btn-info active">
                                                <div class="custom-control custom-checkbox mr-sm-2">
                                                    <input type="checkbox" class="custom-control-input" id="checkbox0"
                                                        checked>
                                                    <label class="custom-control-label" for="checkbox0">Checked</label>
                                                </div>
                                            </label>
                                            <label class="btn btn-info">
                                                <div class="custom-control custom-checkbox mr-sm-2">
                                                    <input type="checkbox" class="custom-control-input" id="checkbox1">
                                                    <label class="custom-control-label" for="checkbox1">Checkbox
                                                        2</label>
                                                </div>
                                            </label>
                                            <label class="btn btn-info">
                                                <div class="custom-control custom-checkbox mr-sm-2">
                                                    <input type="checkbox" class="custom-control-input" id="checkbox2">
                                                    <label class="custom-control-label" for="checkbox2">Checkbox
                                                        3</label>
                                                </div>
                                            </label>
                                        </div>
                                        <br />
                                        <br />
                                        <h4 class="card-title">Button with Radiobutton</h4>
                                        <div class="btn-group" data-bs-toggle="buttons">
                                            <label class="btn btn-primary active">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio4" name="customRadio"
                                                        class="custom-control-input" checked>
                                                    <label class="custom-control-label"
                                                        for="customRadio4">Selected</label>
                                                </div>
                                            </label>
                                            <label class="btn btn-primary">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio5" name="customRadio"
                                                        class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio5">Radio
                                                        2</label>
                                                </div>
                                            </label>
                                            <label class="btn btn-primary">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio6" name="customRadio"
                                                        class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio6">Radio
                                                        3</label>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- column -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Direction of the Dropdown</h4>
                                <h5 class="card-subtitle">Trigger dropdown menus above elements by adding
                                    <code>.dropup</code> to the parent element.</h5>
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <h5 class="card-title mt-3">Dropdowm Right Side</h5>
                                        <!-- Default dropright button -->
                                        <div class="btn-group dropright">
                                            <button type="button" class="btn btn-secondary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Dropright
                                            </button>
                                            <div class="dropdown-menu">
                                                <!-- Dropdown menu links -->
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                        <!-- Split dropright button -->
                                        <div class="btn-group dropright">
                                            <button type="button" class="btn btn-secondary">
                                                Split dropright
                                            </button>
                                            <button type="button"
                                                class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropright</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <!-- Dropdown menu links -->
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 class="card-title mt-3">Dropdown Up Side</h5>
                                        <!-- Default dropup button -->
                                        <div class="btn-group dropup">
                                            <button type="button" class="btn btn-secondary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Dropup
                                            </button>
                                            <div class="dropdown-menu">
                                                <!-- Dropdown menu links -->
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                        <!-- Split dropup button -->
                                        <div class="btn-group dropup">
                                            <button type="button" class="btn btn-secondary">
                                                Split dropup
                                            </button>
                                            <button type="button"
                                                class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <!-- Dropdown menu links -->
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 class="card-title mt-3">Dropdowm Left Side</h5>
                                        <!-- Default dropleft button -->
                                        <div class="btn-group dropleft">
                                            <button type="button" class="btn btn-secondary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Dropleft
                                            </button>
                                            <div class="dropdown-menu">
                                                <!-- Dropdown menu links -->
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                        <!-- Split dropleft button -->
                                        <div class="btn-group">
                                            <div class="btn-group dropleft" role="group">
                                                <button type="button"
                                                    class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="sr-only">Toggle Dropleft</span>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <!-- Dropdown menu links -->
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-secondary">
                                                Split dropleft
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Menu Alignment</h4>
                                <h5 class="card-subtitle">Add <code>.dropdown-menu-right</code> to a
                                    <code>.dropdown-menu</code> to right align the dropdown menu.</h5>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-secondary dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Right-aligned menu
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-secondary dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Left-aligned menu
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-left">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Responsive Alignment</h4>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-secondary dropdown-toggle"
                                        data-bs-toggle="dropdown" data-display="static" aria-haspopup="true"
                                        aria-expanded="false">
                                        Left-aligned but right aligned when large screen
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-lg-right">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                                <div class="btn-group mt-2">
                                    <button type="button" class="btn btn-secondary dropdown-toggle"
                                        data-bs-toggle="dropdown" data-display="static" aria-haspopup="true"
                                        aria-expanded="false">
                                        Right-aligned but left aligned when large screen
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Different Menu Content</h4>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-info dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Drodown with Header
                                    </button>
                                    <div class="dropdown-menu">
                                        <h6 class="dropdown-header">Dropdown header</h6>
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-info dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown with Divider
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-info dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown with Text
                                    </button>
                                    <div class="dropdown-menu p-4 text-muted" style="max-width: 400px;">
                                        <p>
                                            Some example text that's free-flowing within the dropdown menu.
                                        </p>
                                        <p class="mb-0">
                                            And this is more example text.
                                        </p>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-info dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown with Form
                                    </button>
                                    <div class="dropdown-menu">
                                        <form class="px-4 py-3">
                                            <div class="form-group">
                                                <label for="exampleDropdownFormEmail1">Email address</label>
                                                <input type="email" class="form-control" id="exampleDropdownFormEmail1"
                                                    placeholder="email@example.com">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleDropdownFormPassword1">Password</label>
                                                <input type="password" class="form-control"
                                                    id="exampleDropdownFormPassword1" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" id="md_checkbox_21"
                                                    class="filled-in chk-col-indigo" />
                                                <label for="md_checkbox_21">Remeber Me</label>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Sign in</button>
                                        </form>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">New around here? Sign up</a>
                                        <a class="dropdown-item" href="#">Forgot password?</a>
                                    </div>
                                </div>
                                <h4 class="card-title mt-4">Dropdown Options</h4>
                                <div class="d-flex">
                                    <div class="dropdown me-1">
                                        <button type="button" class="btn btn-secondary dropdown-toggle"
                                            id="dropdownMenuOffset" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false" data-offset="10,20">
                                            Offset
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-secondary">Reference</button>
                                        <button type="button"
                                            class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                                            id="dropdownMenuReference" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false" data-reference="parent">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
                <!-- Row -->

                <!-- End Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
           
        </div>
     
   

@endsection