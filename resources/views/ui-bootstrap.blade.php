@extends('layouts.app')

@section('content')

      
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Bootstrap Ui</h4>
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
                                <div class="row">
                                    <div class="col-lg-6 mb-4">
                                        <h4 class="card-title">Badges</h4>
                                        <h6 class="card-subtitle">Use class <code>.badge</code> and for colors
                                            <code>badge-success</code> for get desire badge.</h6>
                                        <h1>Example heading <span class="badge text-bg-secondary">New</span></h1>
                                        <h2>Example heading <span class="badge text-bg-success">New</span></h2>
                                        <h3>Example heading <span class="badge text-bg-info">New</span></h3>
                                        <h4>Example heading <span class="badge text-bg-primary">New</span></h4>
                                        <h5>Example heading <span class="badge text-bg-danger">New</span></h5>
                                        <h6>Example heading <span class="badge text-bg-warning">New</span></h6>
                                    </div>
                                    <div class="col-lg-3 mb-4">
                                        <h4 class="card-title">Contextual Badge variations</h4>
                                        <h6 class="card-subtitle">Use class <code>.badge</code> and for colors
                                            <code>badge-success</code> for get desire badge.</h6>
                                        <span class="badge text-bg-secondary">Default</span>
                                        <br />
                                        <span class="badge text-bg-primary">Primary</span>
                                        <br />
                                        <span class="badge text-bg-success">Success</span>
                                        <br />
                                        <span class="badge text-bg-info">Info</span>
                                        <br />
                                        <span class="badge text-bg-warning">Warning</span>
                                        <br />
                                        <span class="badge text-bg-danger">Danger</span>
                                    </div>
                                    <div class="col-lg-3 mb-4">
                                        <h4 class="card-title">Pill badges</h4>
                                        <h6 class="card-subtitle">Use class <code>.badge-pill</code> and for colors
                                            <code>badge-success</code> for get desire badge.</h6>
                                        <span class="badge rounded-pill text-bg-secondary">Default</span>
                                        <br />
                                        <span class="badge rounded-pill text-bg-primary">Primary</span>
                                        <br />
                                        <span class="badge rounded-pill text-bg-success">Success</span>
                                        <br />
                                        <span class="badge rounded-pill text-bg-info">Info</span>
                                        <br />
                                        <span class="badge rounded-pill text-bg-warning">Warning</span>
                                        <br />
                                        <span class="badge rounded-pill text-bg-danger">Danger</span>
                                    </div>

                                    <div class="col-md-6">
                                        <h4 class="card-title mt-3">Badges</h4>
                                        <button type="button" class="btn btn-primary">
                                            Notifications <span class="badge text-bg-light">4</span>
                                        </button>
                                        <button type="button" class="btn btn-primary">
                                            Profile <span class="badge text-bg-light">9</span>
                                            <span class="sr-only">unread messages</span>
                                        </button>
                                    </div>
                                    <div class="col-md-6">
                                        <h4 class="card-title mt-3">Contextual variations</h4>
                                        <span class="badge text-bg-primary">Primary</span>
                                        <span class="badge text-bg-secondary">Secondary</span>
                                        <span class="badge text-bg-success">Success</span>
                                        <span class="badge text-bg-danger">Danger</span>
                                        <span class="badge text-bg-warning">Warning</span>
                                        <span class="badge text-bg-info">Info</span>
                                        <span class="badge text-bg-light">Light</span>
                                        <span class="badge text-bg-dark">Dark</span>
                                        <h4 class="card-title mt-3">Pill badges</h4>
                                        <span class="badge rounded-pill text-bg-primary">Primary</span>
                                        <span class="badge rounded-pill text-bg-secondary">Secondary</span>
                                        <span class="badge rounded-pill text-bg-success">Success</span>
                                        <span class="badge rounded-pill text-bg-danger">Danger</span>
                                        <span class="badge rounded-pill text-bg-warning">Warning</span>
                                        <span class="badge rounded-pill text-bg-info">Info</span>
                                        <span class="badge rounded-pill text-bg-light">Light</span>
                                        <span class="badge rounded-pill text-bg-dark">Dark</span>
                                    </div>
                                    <div class="col-12">
                                        <br>
                                        <br>
                                        <hr>
                                        <br>
                                        <br>
                                    </div>
                                    <div class="col-md-12">
                                        <h4 class="card-title">Collapse (Toggle)</h4>
                                        <h6 class="card-subtitle">click below button, for Use a link with the
                                            <code>href</code> attribute, with class <code>.collapse</code> get desire
                                            toggle.</h6>
                                        <p>
                                            <a class="btn btn-info" data-bs-toggle="collapse" href="#collapseExample"
                                                aria-expanded="false" aria-controls="collapseExample">
                                                Link with href
                                            </a>
                                            <button class="btn btn-success" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseExample" aria-expanded="false"
                                                aria-controls="collapseExample">
                                                Button with data-bs-target
                                            </button>
                                        </p>
                                        <div class="collapse" id="collapseExample">
                                            <div class="card card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer
                                                labore wes anderson cred nesciunt sapiente ea proident.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <br>
                                        <br>
                                        <hr>
                                        <br>
                                        <br>
                                    </div>
                                    <div class="col-lg-4 mb-4">
                                        <h4 class="card-title">Simple pagination</h4>
                                        <h6 class="card-subtitle">To make pagination give class <code>pagination</code>
                                            to ul</h6>
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination">
                                                <li class="page-item"><a class="page-link"
                                                        href="javascript:void(0)">Previous</a></li>
                                                <li class="page-item"><a class="page-link"
                                                        href="javascript:void(0)">1</a></li>
                                                <li class="page-item"><a class="page-link"
                                                        href="javascript:void(0)">2</a></li>
                                                <li class="page-item"><a class="page-link"
                                                        href="javascript:void(0)">3</a></li>
                                                <li class="page-item"><a class="page-link"
                                                        href="javascript:void(0)">Next</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="col-lg-4 mb-4">
                                        <h4 class="card-title">Working with icons</h4>
                                        <h6 class="card-subtitle">To make pagination give class <code>pagination</code>
                                            to ul</h6>
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination">
                                                <li class="page-item">
                                                    <a class="page-link" href="javascript:void(0)"
                                                        aria-label="Previous">
                                                        <span aria-hidden="true">&laquo;</span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link"
                                                        href="javascript:void(0)">1</a></li>
                                                <li class="page-item"><a class="page-link"
                                                        href="javascript:void(0)">2</a></li>
                                                <li class="page-item"><a class="page-link"
                                                        href="javascript:void(0)">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                                        <span aria-hidden="true">&raquo;</span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="col-lg-4 mb-4">
                                        <h4 class="card-title">Disabled and active states</h4>
                                        <h6 class="card-subtitle">To make pagination active or disable give class
                                            <code>.disabled & .active</code> to ul</h6>
                                        <nav aria-label="...">
                                            <ul class="pagination">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="javascript:void(0)"
                                                        tabindex="-1">Previous</a>
                                                </li>
                                                <li class="page-item"><a class="page-link"
                                                        href="javascript:void(0)">1</a></li>
                                                <li class="page-item active">
                                                    <a class="page-link" href="javascript:void(0)">2 <span
                                                            class="sr-only">(current)</span></a>
                                                </li>
                                                <li class="page-item"><a class="page-link"
                                                        href="javascript:void(0)">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="javascript:void(0)">Next</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="col-12">
                                        <br>
                                        <br>
                                        <hr>
                                        <br>
                                        <br>
                                    </div>
                                    <div class="col-12">
                                        <h4 class="card-title">Sizing</h4>
                                        <h6 class="card-subtitle">Fancy larger or smaller pagination?
                                            Add<code>.pagination-sm </code> for additional sizes.</h6>
                                        <nav aria-label="...">
                                            <ul class="pagination pagination-sm">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="javascript:void(0)"
                                                        tabindex="-1">Previous</a>
                                                </li>
                                                <li class="page-item"><a class="page-link"
                                                        href="javascript:void(0)">1</a></li>
                                                <li class="page-item"><a class="page-link"
                                                        href="javascript:void(0)">2</a></li>
                                                <li class="page-item"><a class="page-link"
                                                        href="javascript:void(0)">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="javascript:void(0)">Next</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="col-12">
                                        <h4 class="card-title">Alignment</h4>
                                        <h6 class="card-subtitle">Change the alignment of pagination components with
                                            felxbox <code>justify-content-center, justify-content-end, </code></h6>
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-center">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="javascript:void(0)"
                                                        tabindex="-1">Previous</a>
                                                </li>
                                                <li class="page-item"><a class="page-link"
                                                        href="javascript:void(0)">1</a></li>
                                                <li class="page-item"><a class="page-link"
                                                        href="javascript:void(0)">2</a></li>
                                                <li class="page-item"><a class="page-link"
                                                        href="javascript:void(0)">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="javascript:void(0)">Next</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="col-12">
                                        <h4 class="card-title">Sizing</h4>
                                        <h6 class="card-subtitle">Fancy larger or smaller pagination?
                                            Add<code>.pagination-lg </code> for additional sizes.</h6>
                                        <nav aria-label="...">
                                            <ul class="pagination pagination-lg">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="javascript:void(0)"
                                                        tabindex="-1">Previous</a>
                                                </li>
                                                <li class="page-item"><a class="page-link"
                                                        href="javascript:void(0)">1</a></li>
                                                <li class="page-item"><a class="page-link"
                                                        href="javascript:void(0)">2</a></li>
                                                <li class="page-item"><a class="page-link"
                                                        href="javascript:void(0)">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="javascript:void(0)">Next</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="col-12">
                                        <br>
                                        <br>
                                        <hr>
                                        <br>
                                        <br>
                                    </div>
                                    <div class="col-lg-4 mb-4">
                                        <h4 class="card-title">Image with round corner</h4>
                                        <h6 class="card-subtitle"><code>.img-rounded</code></h6>
                                        <img src="../assets/images/big/img1.jpg" alt="image"
                                            class="img-fluid img-rounded" width="200">
                                        <p class="mt-3 mb-0">
                                    </div>
                                    <div class="col-lg-4 text-center mb-4">
                                        <h4 class="card-title">Image with circle</h4>
                                        <h6 class="card-subtitle"><code>.rounded-circle</code> Make sure the image is
                                            square
                                            not ractangle</h6>
                                        <img src="../assets/images/users/5.jpg" alt="image" class="rounded-circle"
                                            width="290">
                                        <p class="mt-3 mb-0">
                                    </div>
                                    <div class="col-lg-4">
                                        <h4 class="card-title">Image with Thumbnail</h4>
                                        <h6 class="card-subtitle"><code>img-thumbnail</code></h6>
                                        <img src="../assets/images/users/5.jpg" alt="image" class="img-thumbnail"
                                            width="290">
                                        <p class="mt-3 mb-0">
                                    </div>
                                    <div class="col-12">
                                        <br>
                                        <br>
                                        <hr>
                                        <br>
                                        <br>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4 class="card-title">jumbotron</h4>
                                        <h6 class="card-subtitle">A lightweight, flexible component that can optionally
                                            extend the entire viewport to showcase key marketing messages on your site.
                                        </h6>
                                        <div class="jumbotron bg-light px-8 py-5">
                                            <h1 class="display-3">Hello, world!</h1>
                                            <p class="lead">This is a simple hero unit, a simple jumbotron-style
                                                component for calling extra attention to featured content or
                                                information.</p>
                                            <hr class="my-4">
                                            <p>It uses utility classes for typography and spacing to space content out
                                                within the larger container.</p>
                                            <p class="lead">
                                                <a class="btn btn-primary btn-lg" href="javascript:void(0)"
                                                    role="button">Learn more</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4 class="card-title">Fluid jumbotron</h4>
                                        <h6 class="card-subtitle">To make the jumbotron full width, and without rounded
                                            corners, add the <code>jumbotron-fluid</code></h6>
                                        <div class="jumbotron jumbotron-fluid bg-light py-5">
                                            <div class="container">
                                                <h1 class="display-3">Fluid jumbotron</h1>
                                                <p class="lead">This is a modified jumbotron that occupies the entire
                                                    horizontal space of its parent.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-4">
                                        <h4 class="card-title">Range</h4>
                                        <label for="customRange1" class="form-label">Ordinary Range</label>
                                        <input type="range" class="form-range" id="customRange1">
                                        <label for="customRange2" class="form-label">Range with Min-Max</label>
                                        <input type="range" class="form-range" min="0" max="5" id="customRange2">
                                        <label for="customRange3" class="form-label">Range with Step</label>
                                        <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
           
        </div>
   

@endsection