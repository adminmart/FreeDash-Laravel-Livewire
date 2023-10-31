@extends('layouts.app')

@section('content')

      
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Modals</h4>
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

                                <h4 class="card-title">Bootstrap Modals</h4>

                                <p class="text-muted">
                                    A rendered modal with header, body, and set of actions in the footer.
                                </p>

                                <!-- sample modal content -->
                                <div id="myModal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">Modal Heading</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-hidden="true"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h6>Text in a modal</h6>
                                                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                                <hr>
                                                <h6>Overflowing text to show scroll behavior</h6>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
                                                    dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta
                                                    ac consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                                    auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                                    cursus magna, vel scelerisque nisl consectetur et. Donec sed odio
                                                    dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <!--  Modal content for the above example -->
                                <div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog"
                                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-hidden="true"></button>
                                            </div>
                                            <div class="modal-body">
                                                ...
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <div class="modal fade" id="bs-example-modal-sm" tabindex="-1" role="dialog"
                                    aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="mySmallModalLabel">Small modal</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-hidden="true"></button>
                                            </div>
                                            <div class="modal-body">
                                                ...
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <!-- Full width modal content -->
                                <div id="full-width-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="fullWidthModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-full-width">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="fullWidthModalLabel">Modal Heading</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-hidden="true"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h6>Text in a modal</h6>
                                                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                                <hr>
                                                <h6>Overflowing text to show scroll behavior</h6>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
                                                    dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta
                                                    ac consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                                    auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                                    cursus magna, vel scelerisque nisl consectetur et. Donec sed odio
                                                    dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <!-- Long Content Scroll Modal -->
                                <div class="modal fade" id="scrollable-modal" tabindex="-1" role="dialog"
                                    aria-labelledby="scrollableModalTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="scrollableModalTitle">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
                                                    dapibus ac facilisis in, egestas
                                                    eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                    eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Vivamus sagittis lacus vel augue
                                                    laoreet rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                                    cursus magna, vel scelerisque nisl
                                                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                                    metus auctor fringilla.</p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
                                                    dapibus ac facilisis in, egestas
                                                    eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                    eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Vivamus sagittis lacus vel augue
                                                    laoreet rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                                    cursus magna, vel scelerisque nisl
                                                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                                    metus auctor fringilla.</p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
                                                    dapibus ac facilisis in, egestas
                                                    eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                    eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Vivamus sagittis lacus vel augue
                                                    laoreet rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                                    cursus magna, vel scelerisque nisl
                                                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                                    metus auctor fringilla.</p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
                                                    dapibus ac facilisis in, egestas
                                                    eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                    eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Vivamus sagittis lacus vel augue
                                                    laoreet rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                                    cursus magna, vel scelerisque nisl
                                                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                                    metus auctor fringilla.</p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
                                                    dapibus ac facilisis in, egestas
                                                    eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                    eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Vivamus sagittis lacus vel augue
                                                    laoreet rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                                    cursus magna, vel scelerisque nisl
                                                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                                    metus auctor fringilla.</p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
                                                    dapibus ac facilisis in, egestas
                                                    eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at
                                                    eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Vivamus sagittis lacus vel augue
                                                    laoreet rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                                    cursus magna, vel scelerisque nisl
                                                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                                    metus auctor fringilla.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->


                                <div class="btn-list">
                                    <!-- Standard  modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#myModal">Standard Modal</button>
                                    <!-- Large modal -->
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                        data-bs-target="#bs-example-modal-lg">Large modal</button>
                                    <!-- Small modal -->
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#bs-example-modal-sm">Small modal</button>
                                    <!-- Full width modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#full-width-modal">Full width modal</button>
                                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                        data-bs-target="#scrollable-modal">Scrollable modal</button>
                                </div>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Modal with Pages</h4>

                                <p class="text-muted">
                                    Examples of custom modals.
                                </p>

                                <!-- Signup modal content -->
                                <div id="signup-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <div class="modal-body">
                                                <div class="text-center mt-2 mb-4">
                                                    <a href="index.html" class="text-success">
                                                        <span><img class="me-2" src="../assets/images/logo-icon.png"
                                                                alt="" height="18"><img
                                                                src="../assets/images/logo-text.png" alt=""
                                                                height="18"></span>
                                                    </a>
                                                </div>

                                                <form class="ps-3 pe-3" action="#">

                                                    <div class="form-group mb-3">
                                                        <label class="form-label" for="username">Name</label>
                                                        <input class="form-control" type="email" id="username"
                                                            required="" placeholder="Michael Zenaty">
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label class="form-label" for="emailaddress">Email address</label>
                                                        <input class="form-control" type="email" id="emailaddress"
                                                            required="" placeholder="john@deo.com">
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label class="form-label" for="password">Password</label>
                                                        <input class="form-control" type="password" required=""
                                                            id="password" placeholder="Enter your password">
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheck1">
                                                            <label class="custom-control-label" for="customCheck1">I
                                                                accept <a href="#">Terms and Conditions</a></label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-3 text-center">
                                                        <button class="btn btn-primary" type="submit">Sign Up
                                                            Free</button>
                                                    </div>

                                                </form>

                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->


                                <!-- SignIn modal content -->
                                <div id="login-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="text-center mt-2 mb-4">
                                                    <a href="index.html" class="text-success">
                                                        <span><img class="me-2" src="../assets/images/logo-icon.png"
                                                                alt="" height="18"><img
                                                                src="../assets/images/logo-text.png" alt=""
                                                                height="18"></span>
                                                    </a>
                                                </div>

                                                <form action="#" class="ps-3 pe-3">

                                                    <div class="form-group mb-3">
                                                        <label class="form-label" for="emailaddress1">Email address</label>
                                                        <input class="form-control" type="email" id="emailaddress1"
                                                            required="" placeholder="john@deo.com">
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label class="form-label" for="password1">Password</label>
                                                        <input class="form-control" type="password" required=""
                                                            id="password1" placeholder="Enter your password">
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheck2">
                                                            <label class="form-label" class="custom-control-label"
                                                                for="customCheck2">Remember me</label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-3 text-center">
                                                        <button class="btn btn-rounded btn-primary" type="submit">Sign
                                                            In</button>
                                                    </div>

                                                </form>

                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <div class="btn-list">
                                    <!-- Custom width modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#signup-modal">Sign Up Modal</button>
                                    <!-- Full width modal -->
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                        data-bs-target="#login-modal">Log in Modal</button>
                                </div>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                </div> <!-- end row-->

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Modal based Alerts</h4>

                                <p class="text-muted">
                                    Show different contexual alert messages using modal component
                                </p>

                                <!-- Success Alert Modal -->
                                <div id="success-alert-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content modal-filled bg-success">
                                            <div class="modal-body p-4">
                                                <div class="text-center">
                                                    <i class="dripicons-checkmark h1"></i>
                                                    <h4 class="mt-2">Well Done!</h4>
                                                    <p class="mt-3">Cras mattis consectetur purus sit amet fermentum.
                                                        Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                                                    <button type="button" class="btn btn-light my-2"
                                                        data-bs-dismiss="modal">Continue</button>
                                                </div>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <!-- Info Alert Modal -->
                                <div id="info-alert-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-body p-4">
                                                <div class="text-center">
                                                    <i class="dripicons-information h1 text-info"></i>
                                                    <h4 class="mt-2">Heads up!</h4>
                                                    <p class="mt-3">Cras mattis consectetur purus sit amet fermentum.
                                                        Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                                                    <button type="button" class="btn btn-info my-2"
                                                        data-bs-dismiss="modal">Continue</button>
                                                </div>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <!-- Warning Alert Modal -->
                                <div id="warning-alert-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-body p-4">
                                                <div class="text-center">
                                                    <i class="dripicons-warning h1 text-warning"></i>
                                                    <h4 class="mt-2">Incorrect Information</h4>
                                                    <p class="mt-3">Cras mattis consectetur purus sit amet fermentum.
                                                        Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                                                    <button type="button" class="btn btn-warning my-2"
                                                        data-bs-dismiss="modal">Continue</button>
                                                </div>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <!-- Danger Alert Modal -->
                                <div id="danger-alert-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content modal-filled bg-danger">
                                            <div class="modal-body p-4">
                                                <div class="text-center">
                                                    <i class="dripicons-wrong h1"></i>
                                                    <h4 class="mt-2">Oh snap!</h4>
                                                    <p class="mt-3">Cras mattis consectetur purus sit amet fermentum.
                                                        Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                                                    <button type="button" class="btn btn-light my-2"
                                                        data-bs-dismiss="modal">Continue</button>
                                                </div>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <div class="btn-list">
                                    <!-- Success Alert modal -->
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#success-alert-modal">Success Alert</button>
                                    <!-- Info Alert modal -->
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                        data-bs-target="#info-alert-modal">Info Alert</button>
                                    <!-- Warning Alert modal -->
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#warning-alert-modal">Warning Alert</button>
                                    <!-- Danger Alert modal -->
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#danger-alert-modal">Danger Alert</button>
                                </div>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Modal Position</h4>

                                <p class="text-muted">
                                    Specify the position for the modal. You can display modal at top, bottom, center or
                                    right of page by specifying
                                    classes <code>modal-top</code>, <code>modal-bottom</code>,
                                    <code>modal-dialog-centered</code> and <code>modal-right</code>
                                    respectively.
                                </p>

                                <!-- Top modal content -->
                                <div id="top-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-top">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="topModalLabel">Modal Heading</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-hidden="true"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5>Text in a modal</h5>
                                                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <!-- Right modal content -->
                                <div id="right-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-sm modal-right">
                                        <div class="modal-content">
                                            <div class="modal-header border-0">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-hidden="true"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="text-center">
                                                    <h4 class="mt-0">Text in a modal</h4>
                                                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.
                                                    </p>
                                                    <button type="button" class="btn btn-danger btn-sm"
                                                        data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <!-- Bottom modal content -->
                                <div id="bottom-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-sm modal-bottom">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="bottomModalLabel">Modal Heading</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-hidden="true"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5>Text in a modal</h5>
                                                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <!-- Center modal content -->
                                <div class="modal fade" id="centermodal" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myCenterModalLabel">Center modal</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-hidden="true"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5>Overflowing text to show scroll behavior</h5>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
                                                    dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta
                                                    ac consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                                    auctor.</p>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <div class="btn-list">
                                    <!-- Top modal -->
                                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                        data-bs-target="#top-modal">Top Modal</button>
                                    <!-- Bottom modal -->
                                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                        data-bs-target="#bottom-modal">Bottom Modal</button>
                                    <!-- Center modal -->
                                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                        data-bs-target="#centermodal">Center modal</button>
                                    <!-- Right modal -->
                                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                        data-bs-target="#right-modal">Rightbar Modal</button>
                                </div>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                </div> <!-- end row-->

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Colored Header Modals</h4>

                                <p class="text-muted">
                                    A rendered modal with header having contexual background color.
                                </p>

                                <!-- Primary Header Modal -->
                                <div id="primary-header-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="primary-header-modalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header modal-colored-header bg-primary">
                                                <h4 class="modal-title" id="primary-header-modalLabel">Modal Heading
                                                </h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-hidden="true"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="mt-0">Primary Background</h5>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
                                                    dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta
                                                    ac consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                                    auctor.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <!-- Success Header Modal -->
                                <div id="success-header-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="success-header-modalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header modal-colored-header bg-success">
                                                <h4 class="modal-title" id="success-header-modalLabel">Modal Heading
                                                </h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-hidden="true"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="mt-0">Success Background</h5>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
                                                    dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta
                                                    ac consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                                    auctor.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-success">Save changes</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <!-- Info Header Modal -->
                                <div id="info-header-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="info-header-modalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header modal-colored-header bg-info">
                                                <h4 class="modal-title" id="info-header-modalLabel">Modal Heading</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-hidden="true"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="mt-0">Info Background</h5>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
                                                    dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta
                                                    ac consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                                    auctor.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-info">Save changes</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <!-- Warning Header Modal -->
                                <div id="warning-header-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="warning-header-modalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header modal-colored-header bg-warning">
                                                <h4 class="modal-title" id="warning-header-modalLabel">Modal Heading
                                                </h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-hidden="true"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="mt-0">Warning Background</h5>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
                                                    dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta
                                                    ac consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                                    auctor.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-warning">Save changes</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <!-- Danger Header Modal -->
                                <div id="danger-header-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="danger-header-modalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header modal-colored-header bg-danger">
                                                <h4 class="modal-title" id="danger-header-modalLabel">Modal Heading</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-hidden="true"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="mt-0">Danger Background</h5>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
                                                    dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta
                                                    ac consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                                    auctor.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-danger">Save changes</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <!-- Dark Header Modal -->
                                <div id="dark-header-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="dark-header-modalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header modal-colored-header bg-dark">
                                                <h4 class="modal-title" id="dark-header-modalLabel">Modal Heading</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-hidden="true"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="mt-0">Dark Background</h5>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
                                                    dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta
                                                    ac consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                                    auctor.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-dark">Save changes</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <div class="btn-list">
                                    <!-- Primary header modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#primary-header-modal">Primary Header</button>
                                    <!-- Success header modal -->
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#success-header-modal">Success Header</button>
                                    <!-- Info header modal -->
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                        data-bs-target="#info-header-modal">Info Header</button>
                                    <!-- Warning header modal -->
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#warning-header-modal">Warning Header</button>
                                    <!-- Danger header modal -->
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#danger-header-modal">Danger Header</button>
                                    <!-- Dark header modal -->
                                    <button type="button" class="btn btn-dark" data-bs-toggle="modal"
                                        data-bs-target="#dark-header-modal">Dark Header</button>
                                </div>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Filled Modals</h4>

                                <p class="text-muted">
                                    A rendered modal with header, body and footer having contexual background color.
                                </p>

                                <!-- Primary Filled Modal -->
                                <div id="fill-primary-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="fill-primary-modalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content modal-filled bg-primary">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="fill-primary-modalLabel">Primary Filled
                                                    Modal</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-hidden="true"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
                                                    dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta
                                                    ac consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                                    auctor.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-outline-light">Save
                                                    changes</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <!-- Success Filled Modal -->
                                <div id="fill-success-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="fill-success-modalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content modal-filled bg-success">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="fill-success-modalLabel">Success Filled
                                                    Modal</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-hidden="true"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
                                                    dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta
                                                    ac consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                                    auctor.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-outline-light">Save
                                                    changes</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <!-- Info Filled Modal -->
                                <div id="fill-info-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="fill-info-modalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content modal-filled bg-info">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="fill-info-modalLabel">Info Filled Modal</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-hidden="true"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
                                                    dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta
                                                    ac consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                                    auctor.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-outline-light">Save
                                                    changes</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <!-- Warning Filled Modal -->
                                <div id="fill-warning-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="fill-warning-modalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content modal-filled bg-warning">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="fill-warning-modalLabel">Warning Filled
                                                    Modal</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-hidden="true"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
                                                    dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta
                                                    ac consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                                    auctor.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-outline-light">Save
                                                    changes</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <!-- Danger Filled Modal -->
                                <div id="fill-danger-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="fill-danger-modalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content modal-filled bg-danger">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="fill-danger-modalLabel">Danger Filled Modal
                                                </h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-hidden="true"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
                                                    dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta
                                                    ac consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                                    auctor.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-outline-light">Save
                                                    changes</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <!-- Dark Filled Modal -->
                                <div id="fill-dark-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="fill-dark-modalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content modal-filled bg-dark">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="fill-dark-modalLabel">Dark Filled Modal</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-hidden="true"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
                                                    dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta
                                                    ac consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                                    Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                                    auctor.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-outline-light">Save
                                                    changes</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->


                                <div class="btn-list">
                                    <!-- Primary header modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#fill-primary-modal">Primary Filled</button>
                                    <!-- Success header modal -->
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#fill-success-modal">Success Filled</button>
                                    <!-- Info header modal -->
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                        data-bs-target="#fill-info-modal">Info Filled</button>
                                    <!-- Warning header modal -->
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#fill-warning-modal">Warning Filled</button>
                                    <!-- Danger header modal -->
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#fill-danger-modal">Danger Filled</button>
                                    <!-- Dark header modal -->
                                    <button type="button" class="btn btn-dark" data-bs-toggle="modal"
                                        data-bs-target="#fill-dark-modal">Dark Filled</button>
                                </div>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div> <!-- end row-->

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Multiple Modal</h4>

                                <p class="text-muted">
                                    Display a series of modals one by one to guide your users on multiple aspects or
                                    take step wise input.
                                </p>

                                <!-- Modal -->
                                <div id="multiple-one" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="multiple-oneModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="multiple-oneModalLabel">Modal Heading</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-hidden="true"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="mt-0">Text in a modal</h5>
                                                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary"
                                                    data-bs-target="#multiple-two" data-bs-toggle="modal"
                                                    data-bs-dismiss="modal">Next</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <!-- Modal -->
                                <div id="multiple-two" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="multiple-twoModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="multiple-twoModalLabel">Modal Heading</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-hidden="true"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="mt-0">Text in a modal</h5>
                                                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <div class="btn-list">
                                    <!-- Top modal -->
                                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                        data-bs-target="#multiple-one">Multiple Modal</button>
                                </div>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                </div> <!-- end row-->
                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
           
        </div>
   

@endsection