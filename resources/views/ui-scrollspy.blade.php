@extends('layouts.app')

@section('content')

<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Scrollspy</h4>
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
                <!-- ============================================================== -->
                <!-- First Card with Navbar -->
                <!-- ============================================================== -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Scrollspy with Navbar</h4>
                        <nav id="navbar-example2" class="navbar bg-body-tertiary px-3">
                            <a class="navbar-brand" href="#">Navbar</a>
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#fat">First</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#mdo">Second</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                                        aria-expanded="false">Third with Dropdown</a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a class="dropdown-item" href="#one">one</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#two">two</a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#three">three</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <div class="position-relative mt-3 p-3 border overflow-auto" style="height: 200px"
                            data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" tabindex="0">
                            <h4 id="fat">@fat</h4>
                            <p>
                                farm-to-table bicycle rights whatever. Anim keffiyeh
                                carles cardigan. Velit seitan mcsweeney's photo booth 3
                                wolf moon irure. Cosby sweater lomo jean shorts,
                                williamsburg hoodie minim qui you probably haven't heard
                                of them et cardigan trust fund culpa biodiesel wes
                                anderson aesthetic. Nihil tattooed accusamus, cred irony
                                biodiesel keffiyeh artisan ullamco consequat.
                            </p>
                            <h4 id="mdo">@mdo</h4>
                            <p>
                                Veniam marfa mustache skateboard, adipisicing fugiat
                                velit pitchfork beard. Freegan beard aliqua cupidatat
                                mcsweeney's vero. Cupidatat four loko nisi, ea helvetica
                                nulla carles. Tattooed cosby sweater food truck,
                                mcsweeney's quis non freegan vinyl. Lo-fi wes anderson
                                +1 sartorial. Carles non aesthetic exercitation quis
                                gentrify. Brooklyn adipisicing craft beer vice keytar
                                deserunt.
                            </p>
                            <h4 id="one">one</h4>
                            <p>
                                Occaecat commodo aliqua delectus. Fap craft beer
                                deserunt skateboard ea. Lomo bicycle rights adipisicing
                                banh mi, velit ea sunt next level locavore single-origin
                                coffee in magna veniam. High life id vinyl, echo park
                                consequat quis aliquip banh mi pitchfork. Vero VHS est
                                adipisicing. Consectetur nisi DIY minim messenger bag.
                                Cred ex in, sustainable delectus consectetur fanny pack
                                iphone.
                            </p>
                            <h4 id="two">two</h4>
                            <p>
                                In incididunt echo park, officia deserunt mcsweeney's
                                proident master cleanse thundercats sapiente veniam.
                                Excepteur VHS elit, proident shoreditch +1 biodiesel
                                laborum craft beer. Single-origin coffee wayfarers irure
                                four loko, cupidatat terry richardson master cleanse.
                                Assumenda you probably haven't heard of them art party
                                fanny pack, tattooed nulla cardigan tempor ad. Proident
                                wolf nesciunt sartorial keffiyeh eu banh mi sustainable.
                                Elit wolf voluptate, lo-fi ea portland before they sold
                                out four loko. Locavore enim nostrud mlkshk brooklyn
                                nesciunt.
                            </p>
                            <h4 id="three">three</h4>
                            <p>
                                Ad leggings keytar, brunch id art party dolor labore.
                                Pitchfork yr enim lo-fi before they sold out qui. Tumblr
                                farm-to-table bicycle rights whatever. Anim keffiyeh
                                carles cardigan. Velit seitan mcsweeney's photo booth 3
                                wolf moon irure. Cosby sweater lomo jean shorts,
                                williamsburg hoodie minim qui you probably haven't heard
                                of them et cardigan trust fund culpa biodiesel wes
                                anderson aesthetic. Nihil tattooed accusamus, cred irony
                                biodiesel keffiyeh artisan ullamco consequat.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Second Card with Nested Nav -->
                <!-- ============================================================== -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Scollspy with Nested Nav</h4>
                        <div class="row">
                            <div class="col-4">
                                <nav id="navbar-example3" class="navbar navbar-light flex-column">
                                    <a class="navbar-brand" href="#">Navbar</a>
                                    <nav class="nav nav-pills flex-column">
                                        <a class="nav-link active" href="#item-1">Item 1</a>
                                        <nav class="nav nav-pills flex-column">
                                            <a class="nav-link ms-3 my-1" href="#item-1-1">Item 1-1</a>
                                            <a class="nav-link ms-3 my-1" href="#item-1-2">Item 1-2</a>
                                        </nav>
                                        <a class="nav-link" href="#item-2">Item 2</a>
                                        <a class="nav-link" href="#item-3">Item 3</a>
                                        <nav class="nav nav-pills flex-column">
                                            <a class="nav-link ms-3 my-1" href="#item-3-1">Item 3-1</a>
                                            <a class="nav-link ms-3 my-1" href="#item-3-2">Item 3-2</a>
                                        </nav>
                                    </nav>
                                </nav>
                            </div>
                            <div class="col-8">
                                <div class="position-relative mt-3 p-3 border overflow-auto" style="height: 350px"
                                    data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-offset="0"
                                    tabindex="0">
                                    <h4 id="item-1">Item 1</h4>
                                    <p>
                                        farm-to-table bicycle rights whatever. Anim keffiyeh
                                        carles cardigan. Velit seitan mcsweeney's photo
                                        booth 3 wolf moon irure. Cosby sweater lomo jean
                                        shorts, williamsburg hoodie minim qui you probably
                                        haven't heard of them et cardigan trust fund culpa
                                        biodiesel wes anderson aesthetic. Nihil tattooed
                                        accusamus, cred irony biodiesel keffiyeh artisan
                                        ullamco consequat.
                                    </p>

                                    <h5 id="item-1-1">Item 1-1</h5>
                                    <p>
                                        Veniam marfa mustache skateboard, adipisicing fugiat
                                        velit pitchfork beard. Freegan beard aliqua
                                        cupidatat mcsweeney's vero. Cupidatat four loko
                                        nisi, ea helvetica nulla carles. Tattooed cosby
                                        sweater food truck, mcsweeney's quis non freegan
                                        vinyl. Lo-fi wes anderson +1 sartorial. Carles non
                                        aesthetic exercitation quis gentrify. Brooklyn
                                        adipisicing craft beer vice keytar deserunt.
                                    </p>

                                    <h5 id="item-1-2">Item 1-1</h5>
                                    <p>
                                        Occaecat commodo aliqua delectus. Fap craft beer
                                        deserunt skateboard ea. Lomo bicycle rights
                                        adipisicing banh mi, velit ea sunt next level
                                        locavore single-origin coffee in magna veniam. High
                                        life id vinyl, echo park consequat quis aliquip banh
                                        mi pitchfork. Vero VHS est adipisicing. Consectetur
                                        nisi DIY minim messenger bag. Cred ex in,
                                        sustainable delectus consectetur fanny pack iphone.
                                    </p>

                                    <h4 id="item-2">Item 2</h4>
                                    <p>
                                        In incididunt echo park, officia deserunt
                                        mcsweeney's proident master cleanse thundercats
                                        sapiente veniam. Excepteur VHS elit, proident
                                        shoreditch +1 biodiesel laborum craft beer.
                                        Single-origin coffee wayfarers irure four loko,
                                        cupidatat terry richardson master cleanse. Assumenda
                                        you probably haven't heard of them art party fanny
                                        pack, tattooed nulla cardigan tempor ad. Proident
                                        wolf nesciunt sartorial keffiyeh eu banh mi
                                        sustainable. Elit wolf voluptate, lo-fi ea portland
                                        before they sold out four loko. Locavore enim
                                        nostrud mlkshk brooklyn nesciunt.
                                    </p>

                                    <h4 id="item-3">Item 3</h4>
                                    <p>
                                        Ad leggings keytar, brunch id art party dolor
                                        labore. Pitchfork yr enim lo-fi before they sold out
                                        qui. Tumblr farm-to-table bicycle rights whatever.
                                        Anim keffiyeh carles cardigan. Velit seitan
                                        mcsweeney's photo booth 3 wolf moon irure. Cosby
                                        sweater lomo jean shorts, williamsburg hoodie minim
                                        qui you probably haven't heard of them et cardigan
                                        trust fund culpa biodiesel wes anderson aesthetic.
                                        Nihil tattooed accusamus, cred irony biodiesel
                                        keffiyeh artisan ullamco consequat.
                                    </p>

                                    <h5 id="item-3-1">Item 3-1</h5>
                                    <p>
                                        Ad leggings keytar, brunch id art party dolor
                                        labore. Pitchfork yr enim lo-fi before they sold out
                                        qui. Tumblr farm-to-table bicycle rights whatever.
                                        Anim keffiyeh carles cardigan. Velit seitan
                                        mcsweeney's photo booth 3 wolf moon irure. Cosby
                                        sweater lomo jean shorts, williamsburg hoodie minim
                                        qui you probably haven't heard of them et cardigan
                                        trust fund culpa biodiesel wes anderson aesthetic.
                                        Nihil tattooed accusamus, cred irony biodiesel
                                        keffiyeh artisan ullamco consequat.
                                    </p>

                                    <h5 id="item-3-2">Item 3-2</h5>
                                    <p>
                                        Ad leggings keytar, brunch id art party dolor
                                        labore. Pitchfork yr enim lo-fi before they sold out
                                        qui. Tumblr farm-to-table bicycle rights whatever.
                                        Anim keffiyeh carles cardigan. Velit seitan
                                        mcsweeney's photo booth 3 wolf moon irure. Cosby
                                        sweater lomo jean shorts, williamsburg hoodie minim
                                        qui you probably haven't heard of them et cardigan
                                        trust fund culpa biodiesel wes anderson aesthetic.
                                        Nihil tattooed accusamus, cred irony biodiesel
                                        keffiyeh artisan ullamco consequat.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Third Card with List Group -->
                <!-- ============================================================== -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Scrollspy with List-group</h4>
                        <div class="row">
                            <div class="col-4">
                                <div id="list-example" class="list-group">
                                    <a class="list-group-item list-group-item-action active" href="#list-item-1">Item 1</a>
                                    <a class="list-group-item list-group-item-action" href="#list-item-2">Item 2</a>
                                    <a class="list-group-item list-group-item-action" href="#list-item-3">Item 3</a>
                                    <a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a>
                                  </div>
                            </div>
                            <div class="col-8">
                                <div class="position-relative p-3 border overflow-auto" style="height: 200px" data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" tabindex="0">
                                    <h4 id="list-item-1">Item 1</h4>
                                    <p>
                                      Ex consequat commodo adipisicing exercitation aute
                                      excepteur occaecat ullamco duis aliqua id magna
                                      ullamco eu. Do aute ipsum ipsum ullamco cillum
                                      consectetur ut et aute consectetur labore. Fugiat
                                      laborum incididunt tempor eu consequat enim dolore
                                      proident. Qui laborum do non excepteur nulla magna
                                      eiusmod consectetur in. Aliqua et aliqua officia
                                      quis et incididunt voluptate non anim reprehenderit
                                      adipisicing dolore ut consequat deserunt mollit
                                      dolore. Aliquip nulla enim veniam non fugiat id
                                      cupidatat nulla elit cupidatat commodo velit ut
                                      eiusmod cupidatat elit dolore.
                                    </p>
          
                                    <h4 id="list-item-2">Item 2</h4>
                                    <p>
                                      Quis magna Lorem anim amet ipsum do mollit sit
                                      cillum voluptate ex nulla tempor. Laborum consequat
                                      non elit enim exercitation cillum aliqua consequat
                                      id aliqua. Esse ex consectetur mollit voluptate est
                                      in duis laboris ad sit ipsum anim Lorem. Incididunt
                                      veniam velit elit elit veniam Lorem aliqua quis
                                      ullamco deserunt sit enim elit aliqua esse irure.
                                      Laborum nisi sit est tempor laborum mollit labore
                                      officia laborum excepteur commodo non commodo dolor
                                      excepteur commodo. Ipsum fugiat ex est consectetur
                                      ipsum commodo tempor sunt in proident.
                                    </p>
          
                                    <h4 id="list-item-3">Item 3</h4>
                                    <p>
                                      Quis anim sit do amet fugiat dolor velit sit ea ea
                                      do reprehenderit culpa duis. Nostrud aliqua ipsum
                                      fugiat minim proident occaecat excepteur aliquip
                                      culpa aute tempor reprehenderit. Deserunt tempor
                                      mollit elit ex pariatur dolore velit fugiat mollit
                                      culpa irure ullamco est ex ullamco excepteur.
                                    </p>
          
                                    <h4 id="list-item-4">Item 4</h4>
                                    <p>
                                      Quis anim sit do amet fugiat dolor velit sit ea ea
                                      do reprehenderit culpa duis. Nostrud aliqua ipsum
                                      fugiat minim proident occaecat excepteur aliquip
                                      culpa aute tempor reprehenderit. Deserunt tempor
                                      mollit elit ex pariatur dolore velit fugiat mollit
                                      culpa irure ullamco est ex ullamco excepteur.
                                    </p>
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