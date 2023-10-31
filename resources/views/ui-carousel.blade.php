@extends('layouts.app')

@section('content')

      
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Carousal</h4>
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
                <!-- row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active"> <img class="img-fluid"
                                                src="../assets/images/big/img1.jpg" alt="First slide"> </div>
                                        <div class="carousel-item"> <img class="img-fluid"
                                                src="../assets/images/big/img2.jpg" alt="Second slide"> </div>
                                        <div class="carousel-item"> <img class="img-fluid"
                                                src="../assets/images/big/img3.jpg" alt="Third slide"> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active"> <img class="img-fluid"
                                                src="../assets/images/big/img4.jpg" alt="First slide"> </div>
                                        <div class="carousel-item"> <img class="img-fluid"
                                                src="../assets/images/big/img5.jpg" alt="Second slide"> </div>
                                        <div class="carousel-item"> <img class="img-fluid"
                                                src="../assets/images/big/img6.jpg" alt="Third slide"> </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                        data-slide="prev"> <span class="carousel-control-prev-icon"
                                            aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                        data-slide="next"> <span class="carousel-control-next-icon"
                                            aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End row -->
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h4 class="card-title">With indicators</h4>
                                        <h6 class="card-subtitle">You can also add the indicators to the carousel.
                                        </h6>
                                        <div id="carouselExampleIndicators2" class="carousel slide"
                                            data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-bs-target="#carouselExampleIndicators2" data-slide-to="0"
                                                    class="active"></li>
                                                <li data-bs-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                                                <li data-bs-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <img class="img-fluid" src="../assets/images/big/img3.jpg"
                                                        alt="First slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="img-fluid" src="../assets/images/big/img4.jpg"
                                                        alt="Second slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="img-fluid" src="../assets/images/big/img5.jpg"
                                                        alt="Third slide">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators2"
                                                role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators2"
                                                role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4 class="card-title">With captions</h4>
                                        <h6 class="card-subtitle">Add captions to your slides easily with the
                                            <code>.carousel-caption</code></h6>
                                        <div id="carouselExampleIndicators3" class="carousel slide"
                                            data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-bs-target="#carouselExampleIndicators3" data-slide-to="0"
                                                    class="active"></li>
                                                <li data-bs-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                                                <li data-bs-target="#carouselExampleIndicators3" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <img class="img-fluid" src="../assets/images/big/img6.jpg"
                                                        alt="First slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h3 class="text-white">First title goes here</h3>
                                                        <p>this is the subcontent you can use this</p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="img-fluid" src="../assets/images/big/img3.jpg"
                                                        alt="Second slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h3 class="text-white">Second title goes here</h3>
                                                        <p>this is the subcontent you can use this</p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="img-fluid" src="../assets/images/big/img4.jpg"
                                                        alt="Third slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h3 class="text-white">Third title goes here</h3>
                                                        <p>this is the subcontent you can use this</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators3"
                                                role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators3"
                                                role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">With Individual Interval</h4>
                                <h6 class="card-subtitle">Add data-interval="" to a .carousel-item to change the amount
                                    of time to delay between automatically cycling to the next item.</h6>
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active" data-interval="10000"> <img class="img-fluid"
                                                src="../assets/images/big/img3.jpg" alt="First slide"> </div>
                                        <div class="carousel-item" data-interval="2000"> <img class="img-fluid"
                                                src="../assets/images/big/img4.jpg" alt="Second slide"> </div>
                                        <div class="carousel-item"> <img class="img-fluid"
                                                src="../assets/images/big/img2.jpg" alt="Third slide"> </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                        data-slide="prev"> <span class="carousel-control-prev-icon"
                                            aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                        data-slide="next"> <span class="carousel-control-next-icon"
                                            aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            
        </div>
   

@endsection