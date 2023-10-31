@extends('layouts.app')

@section('content')

<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Cards</h4>
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
                <!-- Row -->
                <div class="row">
                    <div class="col-12">
                        <!-- Row -->
                        <div class="row">
                            <!-- column -->
                            <div class="col-lg-3 col-md-6">
                                <!-- Card -->
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="../assets/images/big/img1.jpg"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the bulk of the card's content.</p>
                                        <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->
                            <!-- column -->
                            <div class="col-lg-3 col-md-6">
                                <!-- Card -->
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="../assets/images/big/img2.jpg"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the bulk of the card's content.</p>
                                        <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->
                            <!-- column -->
                            <div class="col-lg-3 col-md-6">
                                <!-- Card -->
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="../assets/images/big/img3.jpg"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the bulk of the card's content.</p>
                                        <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->
                            <!-- column -->
                            <div class="col-lg-3 col-md-6 img-fluid">
                                <!-- Card -->
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="../assets/images/big/img4.jpg"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the bulk of the card's content.</p>
                                        <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->
                        </div>
                        <!-- Row -->
                    </div>
                </div>
                <!-- End Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-12 mt-4">
                        <h4 class="mb-0">Content types</h4>
                        <p class="text-muted mt-0">The building block of a card is the <code>.card</code>
                            <code>.card-body</code> Use it whenever you need a padded section within a card.</p>
                        <div class="card">
                            <div class="card-body collapse show">
                                <h4 class="card-title">Special title treatment</h4>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-12 mt-4">
                        <h4 class="mb-0">Titles, text, and links</h4>
                        <p class="text-muted mt-0">Card titles are used by adding <code>.card-title</code> &amp;
                            <code>.card-subtitle</code> for subtitle of card.</p>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Card title</h4>
                                <h5 class="card-subtitle mb-2 text-muted">Card subtitle</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="javascript:void(0)" class="card-link">Card link</a>
                                <a href="javascript:void(0)" class="card-link">Another link</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-12 mt-4">
                        <h4 class="mb-0">Header and footer</h4>
                        <p class="text-muted mt-0 font-12">Add an optional header and/or footer within a card.</p>
                        <!-- Card -->
                        <div class="card">
                            <div class="card-header">
                                Featured
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Special title treatment</h4>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                </div>
                <!-- End Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-12 mt-4">
                        <h4 class="mb-0">Header and footer</h4>
                        <p class="text-muted mt-0 font-12">Add an optional header and/or footer within a card.</p>
                        <!-- Card -->
                        <div class="card text-center">
                            <div class="card-header">
                                Featured
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Special title treatment</h4>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a href="javascript:void(0)" class="btn btn-info">Go somewhere</a>
                            </div>
                            <div class="card-footer text-muted">
                                2 days ago
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                </div>
                <!-- End Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-12 mt-4">
                        <h4 class="mb-0">Size Using grid markup</h4>
                        <p class="text-muted mt-0 font-12">Using the grid, wrap cards in columns and rows as
                            needed.<code>.col-1 to .col-12</code></p>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Special title treatment</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a href="javascript:void(0)" class="btn btn-success">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Special title treatment</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-12 mt-4">
                        <h4 class="mb-0">Text alignment</h4>
                        <p class="text-muted mt-0 font-12">You can quickly change the text
                            alignment<code>.text-center .text-end</code>.</p>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Special title treatment</h4>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a href="javascript:void(0)" class="btn btn-info">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <h4 class="card-title">Special title treatment</h4>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-end">
                            <div class="card-body">
                                <h4 class="card-title">Special title treatment</h4>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a href="javascript:void(0)" class="btn btn-secondary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-12 mt-4">
                        <h4 class="mb-0">Using utilities</h4>
                        <p class="text-muted mt-0 font-12">Using the utility, you can give direct width class to card
                            like<code>.w-25, w-50, w-75, w-100</code></p>
                        <div class="card w-75">
                            <div class="card-body">
                                <h3 class="card-title">This card has width of 75%</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a href="javascript:void(0)" class="btn btn-danger">Go somewhere</a>
                            </div>
                        </div>
                        <div class="card w-50">
                            <div class="card-body">
                                <h3 class="card-title">This card has width of 50%</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-12 mt-4">
                        <h4 class="mb-0">Size Using grid markup</h4>
                        <p class="text-muted mt-0 font-12">Using the grid, wrap cards in columns and rows as
                            needed.<code>.col-1 to .col-12</code></p>
                    </div>
                    <div class="col-md-6">
                        <div class="card text-center">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="javascript:void(0)">Active</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="javascript:void(0)">Link</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="javascript:void(0)">Disabled</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Special title treatment</h4>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a href="javascript:void(0)" class="btn btn-secondary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card text-center">
                            <div class="card-header">
                                <ul class="nav nav-pills card-header-pills">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="javascript:void(0)">Active</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="javascript:void(0)">Link</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="javascript:void(0)">Disabled</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Special title treatment</h4>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a href="javascript:void(0)" class="btn btn-info">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-12 mt-4">
                        <h4 class="mb-0">Card styles</h4>
                        <p class="text-muted mt-0 font-12">Cards include various options for customizing their
                            backgrounds, borders, and color.<code>.card-primary info, warning, danger</code></p>
                    </div>
                    <div class="col-md-6">
                        <div class="card text-white bg-dark">
                            <div class="card-header">
                                <h4 class="mb-0 text-white">Card Title</h4>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title text-white">Special title treatment</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to
                                    additional
                                    content.</p>
                                <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card text-white bg-info">
                            <div class="card-header">
                                <h4 class="mb-0 text-white">Card Title</h4>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title text-white">Special title treatment</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to
                                    additional
                                    content.</p>
                                <a href="javascript:void(0)" class="btn btn-dark">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="card text-white bg-primary">
                            <div class="card-header">
                                <h4 class="mb-0 text-white">Card Title</h4>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title text-white">Special title treatment</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to
                                    additional
                                    content.</p>
                                <a href="javascript:void(0)" class="btn btn-dark">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card text-white bg-danger">
                            <div class="card-header">
                                <h4 class="mb-0 text-white">Card Title</h4>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title text-white">Special title treatment</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to
                                    additional
                                    content.</p>
                                <a href="javascript:void(0)" class="btn btn-dark">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="card text-white bg-warning">
                            <div class="card-header">
                                <h4 class="mb-0 text-white">Card Title</h4>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title text-white">Special title treatment</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to
                                    additional
                                    content.</p>
                                <a href="javascript:void(0)" class="btn btn-dark">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card text-white bg-success">
                            <div class="card-header">
                                <h4 class="mb-0 text-white">Card Title</h4>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title text-white">Special title treatment</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to
                                    additional
                                    content.</p>
                                <a href="javascript:void(0)" class="btn btn-dark">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <div class="col-12 mt-4">
                        <h4 class="mb-0">Card styles</h4>
                        <p class="text-muted mt-0 font-12">Cards include various options for customizing their
                            backgrounds, borders, and color.<code>.card-primary info, warning, danger</code></p>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-dark">
                            <div class="card-header bg-dark">
                                <h4 class="mb-0 text-white">Card Title</h4>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Special title treatment</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a href="javascript:void(0)" class="btn btn-secondary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-info">
                            <div class="card-header bg-info">
                                <h4 class="mb-0 text-white">Card Title</h4>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Special title treatment</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a href="javascript:void(0)" class="btn btn-secondary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="card border-primary">
                            <div class="card-header bg-primary">
                                <h4 class="mb-0 text-white">Card Title</h4>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Special title treatment</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a href="javascript:void(0)" class="btn btn-secondary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-danger">
                            <div class="card-header bg-danger">
                                <h4 class="mb-0 text-white">Card Title</h4>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Special title treatment</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a href="javascript:void(0)" class="btn btn-secondary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="card border-warning">
                            <div class="card-header bg-warning">
                                <h4 class="mb-0 text-white">Card Title</h4>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Special title treatment</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a href="javascript:void(0)" class="btn btn-secondary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-success">
                            <div class="card-header bg-success">
                                <h4 class="mb-0 text-white">Card Title</h4>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Special title treatment</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a href="javascript:void(0)" class="btn btn-secondary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <div class="col-12 mt-4">
                        <h4 class="mb-0">Card Groups</h4>
                        <p class="text-muted mt-0 font-12">Use card groups to render cards as a single, attached element
                            with equal width and height columns.</p>
                        <div class="card-group">
                            <div class="card">
                                <img class="card-img-top img-fluid" src="../assets/images/big/img1.jpg"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top img-fluid" src="../assets/images/big/img2.jpg"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">This card has supporting text below as a natural lead-in to
                                        additional content.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top img-fluid" src="../assets/images/big/img3.jpg"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This card has even longer content than the first
                                        to show that equal height action.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-12 mt-4">
                        <h4 class="mb-0">Card with Deck</h4>
                        <p class="text-muted mt-0 font-12">Use card groups to render cards as a single, attached element
                            with equal width and height columns.</p>
                        <div class="row card-deck">
                            <div class="col-sm-6 col-lg-4 d-flex align-content-stretch">
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="../assets/images/big/img1.jpg"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">This is a wider card with supporting text below as a natural
                                            lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 d-flex align-content-stretch">
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="../assets/images/big/img2.jpg"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">This card has supporting text below as a natural.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 d-flex align-content-stretch">
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="../assets/images/big/img3.jpg"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">This is a wider card with supporting text below as a natural
                                            lead-in to additional content. This card has even longer content than the first
                                            to show that equal height action. supporting text below as a natural lead-in to
                                            additional content</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-12 mt-4">
                        <h4 class="mb-0">Card columns</h4>
                        <p class="text-muted mt-0 font-12">Cards can be organized into Masonry-like columns with just
                            CSS by wrapping them in <code>card-columns</code></p>
                        <div class="row card-columns">
                            <div class="col-sm-6 col-lg-4">
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="../assets/images/big/img6.jpg"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title that wraps to a new line</h4>
                                        <p class="card-text">This is a longer card with supporting text below as a natural
                                            lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                                <div class="card p-3">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                                    </p>
                                    <footer>
                                        <small class="text-muted">
                                            Someone famous in <cite title="Source Title">Source Title</cite>
                                        </small>
                                    </footer>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="../assets/images/big/img5.jpg"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">This card has supporting text below as a natural lead-in to
                                            additional content.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                                <div class="card bg-primary p-3 text-center text-white">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
                                    <footer>
                                        <small>
                                            Someone famous in <cite title="Source Title">Source Title</cite>
                                        </small>
                                    </footer>
                                </div>
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">This card has supporting text below as a natural lead-in to
                                            additional content.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="card">
                                    <img class="card-img img-fluid" src="../assets/images/big/img4.jpg" alt="Card image">
                                </div>
                                <div class="card p-3 text-end">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                                    </p>
                                    <footer>
                                        <small class="text-muted">
                                            Someone famous in <cite title="Source Title">Source Title</cite>
                                        </small>
                                    </footer>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">This is a wider card with supporting text below as a natural
                                            lead-in to additional content. This card has even longer content than the first
                                            to show that equal height action.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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