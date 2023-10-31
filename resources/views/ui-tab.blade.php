@extends('layouts.app')

@section('content')

      
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Tabs</h4>
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
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-3">Default Tabs</h4>

                                <ul class="nav nav-tabs mb-3">
                                    <li class="nav-item">
                                        <a href="#home" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                            <i class="mdi mdi-home-variant d-lg-none d-block me-1"></i>
                                            <span class="d-none d-lg-block">Home</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#profile" data-bs-toggle="tab" aria-expanded="true"
                                            class="nav-link active">
                                            <i class="mdi mdi-account-circle d-lg-none d-block me-1"></i>
                                            <span class="d-none d-lg-block">Profile</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#settings" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                            <i class="mdi mdi-settings-outline d-lg-none d-block me-1"></i>
                                            <span class="d-none d-lg-block">Settings</span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane" id="home">
                                        <p>Food truck quinoa dolor sit amet, consectetuer adipiscing elit. Aenean
                                            commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et
                                            magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                                            ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                                            quis enim.</p>
                                        <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate eget,
                                            arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam
                                            dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus
                                            elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,
                                            porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                    </div>
                                    <div class="tab-pane show active" id="profile">
                                        <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim
                                            justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis
                                            eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum
                                            semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor
                                            eu, consequat vitae, eleifend ac, enim.</p>
                                        <p class="mb-0">Food truck quinoa dolor sit amet, consectetuer adipiscing elit.
                                            Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus
                                            et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                                            ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                                            quis enim.</p>
                                    </div>
                                    <div class="tab-pane" id="settings">
                                        <p>Food truck quinoa dolor sit amet, consectetuer adipiscing elit. Aenean
                                            commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et
                                            magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                                            ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                                            quis enim.</p>
                                        <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate eget,
                                            arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam
                                            dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus
                                            elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,
                                            porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                    </div>
                                </div>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-3">Tabs Justified</h4>

                                <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
                                    <li class="nav-item">
                                        <a href="#home1" data-bs-toggle="tab" aria-expanded="false"
                                            class="nav-link rounded-0">
                                            <i class="mdi mdi-home-variant d-lg-none d-block me-1"></i>
                                            <span class="d-none d-lg-block">Home</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#profile1" data-bs-toggle="tab" aria-expanded="true"
                                            class="nav-link rounded-0 active">
                                            <i class="mdi mdi-account-circle d-lg-none d-block me-1"></i>
                                            <span class="d-none d-lg-block">Profile</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#settings1" data-bs-toggle="tab" aria-expanded="false"
                                            class="nav-link rounded-0">
                                            <i class="mdi mdi-settings-outline d-lg-none d-block me-1"></i>
                                            <span class="d-none d-lg-block">Settings</span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane" id="home1">
                                        <p>Leggings occaecat dolor sit amet, consectetuer adipiscing elit. Aenean
                                            commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et
                                            magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                                            ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                                            quis enim.</p>
                                        <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate eget,
                                            arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam
                                            dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus
                                            elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,
                                            porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                    </div>
                                    <div class="tab-pane show active" id="profile1">
                                        <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim
                                            justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis
                                            eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum
                                            semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor
                                            eu, consequat vitae, eleifend ac, enim.</p>
                                        <p class="mb-0">Leggings occaecat dolor sit amet, consectetuer adipiscing elit.
                                            Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus
                                            et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                                            ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                                            quis enim.</p>
                                    </div>
                                    <div class="tab-pane" id="settings1">
                                        <p>Food truck quinoa dolor sit amet, consectetuer adipiscing elit. Aenean
                                            commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et
                                            magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                                            ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                                            quis enim.</p>
                                        <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate eget,
                                            arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam
                                            dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus
                                            elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,
                                            porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                    </div>
                                </div>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
                <!-- end row-->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-3">Tabs Vertical Left</h4>

                                <div class="row">
                                    <div class="col-sm-3 mb-2 mb-sm-0">
                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                            aria-orientation="vertical">
                                            <a class="nav-link active show" id="v-pills-home-tab" data-bs-toggle="pill"
                                                href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                                aria-selected="true">
                                                <i class="mdi mdi-home-variant d-lg-none d-block me-1"></i>
                                                <span class="d-none d-lg-block">Home</span>
                                            </a>
                                            <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                                href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                                aria-selected="false">
                                                <i class="mdi mdi-account-circle d-lg-none d-block me-1"></i>
                                                <span class="d-none d-lg-block">Profile</span>
                                            </a>
                                            <a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                                                href="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                                                aria-selected="false">
                                                <i class="mdi mdi-settings-outline d-lg-none d-block me-1"></i>
                                                <span class="d-none d-lg-block">Settings</span>
                                            </a>
                                        </div>
                                    </div> <!-- end col-->

                                    <div class="col-sm-9">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel"
                                                aria-labelledby="v-pills-home-tab">
                                                <p class="mb-0">Cillum ad ut irure tempor velit nostrud occaecat ullamco
                                                    aliqua anim Leggings sint. Veniam sint duis incididunt
                                                    do esse magna mollit excepteur laborum qui. Id id reprehenderit sit
                                                    est eu aliqua occaecat quis et velit
                                                    excepteur laborum mollit dolore eiusmod. Ipsum dolor in occaecat
                                                    commodo et voluptate minim reprehenderit
                                                    mollit pariatur. Deserunt non laborum enim et cillum eu deserunt
                                                    excepteur ea incididunt minim occaecat.</p>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                                aria-labelledby="v-pills-profile-tab">
                                                <p class="mb-0">Culpa dolor voluptate do laboris laboris irure
                                                    reprehenderit id incididunt duis pariatur mollit aute magna
                                                    pariatur consectetur. Eu veniam duis non ut dolor deserunt commodo
                                                    et minim in quis laboris ipsum velit
                                                    id veniam. Quis ut consectetur adipisicing officia excepteur non
                                                    sit. Ut et elit aliquip labore Leggings
                                                    enim eu. Ullamco mollit occaecat dolore ipsum id officia mollit qui
                                                    esse anim eiusmod do sint minim consectetur
                                                    qui.</p>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                                aria-labelledby="v-pills-settings-tab">
                                                <p class="mb-0">Food truck quinoa dolor sit amet, consectetuer
                                                    adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum
                                                    sociis
                                                    natoque penatibus et magnis dis parturient montes, nascetur
                                                    ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                                                    eu, pretium quis, sem. Nulla consequat massa quis enim. Cillum ad ut
                                                    irure tempor velit nostrud occaecat ullamco
                                                    aliqua anim Leggings sint. Veniam sint duis incididunt do esse magna
                                                    mollit excepteur laborum qui.</p>
                                            </div>
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end col-->
                                </div>
                                <!-- end row-->
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3">Tabs Vertical Right</h4>

                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="tab-content" id="v-pills-tabContent-right">
                                            <div class="tab-pane fade active show" id="v-pills-home2" role="tabpanel"
                                                aria-labelledby="v-pills-home-tab2">
                                                <p class="mb-0">Cillum ad ut irure tempor velit nostrud occaecat ullamco
                                                    aliqua anim Leggings sint. Veniam sint duis incididunt
                                                    do esse magna mollit excepteur laborum qui. Id id reprehenderit sit
                                                    est eu aliqua occaecat quis et velit
                                                    excepteur laborum mollit dolore eiusmod. Ipsum dolor in occaecat
                                                    commodo et voluptate minim reprehenderit
                                                    mollit pariatur. Deserunt non laborum enim et cillum eu deserunt
                                                    excepteur ea incididunt minim occaecat.</p>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-profile2" role="tabpanel"
                                                aria-labelledby="v-pills-profile-tab2">
                                                <p class="mb-0">Culpa dolor voluptate do laboris laboris irure
                                                    reprehenderit id incididunt duis pariatur mollit aute magna
                                                    pariatur consectetur. Eu veniam duis non ut dolor deserunt commodo
                                                    et minim in quis laboris ipsum velit
                                                    id veniam. Quis ut consectetur adipisicing officia excepteur non
                                                    sit. Ut et elit aliquip labore Leggings
                                                    enim eu. Ullamco mollit occaecat dolore ipsum id officia mollit qui
                                                    esse anim eiusmod do sint minim consectetur
                                                    qui.</p>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-settings2" role="tabpanel"
                                                aria-labelledby="v-pills-settings-tab2">
                                                <p class="mb-0">Food truck quinoa dolor sit amet, consectetuer
                                                    adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum
                                                    sociis
                                                    natoque penatibus et magnis dis parturient montes, nascetur
                                                    ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                                                    eu, pretium quis, sem. Nulla consequat massa quis enim. Cillum ad ut
                                                    irure tempor velit nostrud occaecat ullamco
                                                    aliqua anim Leggings sint. Veniam sint duis incididunt do esse magna
                                                    mollit excepteur laborum qui.</p>
                                            </div>
                                        </div> <!-- end tabcontent-->
                                    </div> <!-- end col-->

                                    <div class="col-sm-3 mt-2 mt-sm-0">
                                        <div class="nav flex-column nav-pills" id="v-pills-tab2" role="tablist"
                                            aria-orientation="vertical">
                                            <a class="nav-link active show" id="v-pills-home-tab2" data-bs-toggle="pill"
                                                href="#v-pills-home2" role="tab" aria-controls="v-pills-home2"
                                                aria-selected="true">
                                                <i class="mdi mdi-home-variant d-lg-none d-block me-1"></i>
                                                <span class="d-none d-lg-block">Home</span>
                                            </a>
                                            <a class="nav-link" id="v-pills-profile-tab2" data-bs-toggle="pill"
                                                href="#v-pills-profile2" role="tab" aria-controls="v-pills-profile2"
                                                aria-selected="false">
                                                <i class="mdi mdi-account-circle d-lg-none d-block me-1"></i>
                                                <span class="d-none d-lg-block">Profile</span>
                                            </a>
                                            <a class="nav-link" id="v-pills-settings-tab2" data-bs-toggle="pill"
                                                href="#v-pills-settings2" role="tab" aria-controls="v-pills-settings2"
                                                aria-selected="false">
                                                <i class="mdi mdi-settings-outline d-lg-none d-block me-1"></i>
                                                <span class="d-none d-lg-block">Settings</span>
                                            </a>
                                        </div>
                                    </div> <!-- end col-->
                                </div> <!-- end row-->

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
                <!-- end row-->


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-3">Tabs Bordered</h4>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                    <li class="nav-item">
                                        <a href="#home-b1" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                            <i class="mdi mdi-home-variant d-lg-none d-block me-1"></i>
                                            <span class="d-none d-lg-block">Home</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#profile-b1" data-bs-toggle="tab" aria-expanded="true"
                                            class="nav-link active">
                                            <i class="mdi mdi-account-circle d-lg-none d-block me-1"></i>
                                            <span class="d-none d-lg-block">Profile</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#settings-b1" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                            <i class="mdi mdi-settings-outline d-lg-none d-block me-1"></i>
                                            <span class="d-none d-lg-block">Settings</span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane" id="home-b1">
                                        <p>Leggings occaecat dolor sit amet, consectetuer adipiscing elit. Aenean
                                            commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et
                                            magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                                            ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                                            quis enim.</p>
                                        <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate eget,
                                            arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam
                                            dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus
                                            elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,
                                            porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                    </div>
                                    <div class="tab-pane show active" id="profile-b1">
                                        <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim
                                            justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis
                                            eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum
                                            semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor
                                            eu, consequat vitae, eleifend ac, enim.</p>
                                        <p class="mb-0">Leggings occaecat dolor sit amet, consectetuer adipiscing elit.
                                            Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus
                                            et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                                            ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                                            quis enim.</p>
                                    </div>
                                    <div class="tab-pane" id="settings-b1">
                                        <p>Food truck quinoa dolor sit amet, consectetuer adipiscing elit. Aenean
                                            commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et
                                            magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                                            ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                                            quis enim.</p>
                                        <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate eget,
                                            arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam
                                            dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus
                                            elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,
                                            porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                    </div>
                                </div>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-3">Tabs Bordered Justified</h4>

                                <ul class="nav nav-tabs nav-justified nav-bordered mb-3">
                                    <li class="nav-item">
                                        <a href="#home-b2" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                            <i class="mdi mdi-home-variant d-lg-none d-block me-1"></i>
                                            <span class="d-none d-lg-block">Home</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#profile-b2" data-bs-toggle="tab" aria-expanded="true"
                                            class="nav-link active">
                                            <i class="mdi mdi-account-circle d-lg-none d-block me-1"></i>
                                            <span class="d-none d-lg-block">Profile</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#settings-b2" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                            <i class="mdi mdi-settings-outline d-lg-none d-block me-1"></i>
                                            <span class="d-none d-lg-block">Settings</span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane" id="home-b2">
                                        <p>Leggings occaecat dolor sit amet, consectetuer adipiscing elit. Aenean
                                            commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et
                                            magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                                            ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                                            quis enim.</p>
                                        <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate eget,
                                            arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam
                                            dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus
                                            elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,
                                            porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                    </div>
                                    <div class="tab-pane show active" id="profile-b2">
                                        <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim
                                            justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis
                                            eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum
                                            semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor
                                            eu, consequat vitae, eleifend ac, enim.</p>
                                        <p class="mb-0">Leggings occaecat dolor sit amet, consectetuer adipiscing elit.
                                            Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus
                                            et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                                            ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                                            quis enim.</p>
                                    </div>
                                    <div class="tab-pane" id="settings-b2">
                                        <p>Food truck quinoa dolor sit amet, consectetuer adipiscing elit. Aenean
                                            commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et
                                            magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                                            ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                                            quis enim.</p>
                                        <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate eget,
                                            arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam
                                            dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus
                                            elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,
                                            porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                    </div>
                                </div>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
                <!-- end row-->

                <div class="row">
                    <div class="col-12">
                        <h4 class="mb-4">Accordions</h4>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-6">

                        <div id="accordion" class="custom-accordion mb-4">

                            <div class="card mb-0">
                                <div class="card-header" id="headingOne">
                                    <h5 class="m-0">
                                        <a class="custom-accordion-title d-block pt-2 pb-2" data-bs-toggle="collapse"
                                            href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Collapsible Group Item #1 <span class="float-end"><i
                                                    class="mdi mdi-chevron-down accordion-arrow"></i></span>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute,
                                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                        eiusmod. Brunch 3 wolf moon
                                        tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. Nihil
                                        anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                        ea proident. Ad vegan
                                        excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw
                                        denim aesthetic synth nesciunt
                                        you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div> <!-- end card-->

                            <div class="card mb-0">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="m-0">
                                        <a class="custom-accordion-title collapsed d-block pt-2 pb-2"
                                            data-bs-toggle="collapse" href="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            Collapsible Group Item #2 <span class="float-end"><i
                                                    class="mdi mdi-chevron-down accordion-arrow"></i></span>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute,
                                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                        eiusmod. Brunch 3 wolf moon
                                        tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. Nihil
                                        anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                        ea proident. Ad vegan
                                        excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw
                                        denim aesthetic synth nesciunt
                                        you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div> <!-- end card-->

                            <div class="card mb-0">
                                <div class="card-header" id="headingThree">
                                    <h5 class="m-0">
                                        <a class="custom-accordion-title collapsed d-block pt-2 pb-2"
                                            data-bs-toggle="collapse" href="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Collapsible Group Item #3 <span class="float-end"><i
                                                    class="mdi mdi-chevron-down accordion-arrow"></i></span>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute,
                                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                        eiusmod. Brunch 3 wolf moon
                                        tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. Nihil
                                        anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                        ea proident. Ad vegan
                                        excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw
                                        denim aesthetic synth nesciunt
                                        you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div> <!-- end card-->
                        </div> <!-- end custom accordions-->
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="mb-4">
                            <p>
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample"
                                    aria-expanded="false" aria-controls="collapseExample">
                                    Link with href
                                </a>
                                <button class="btn btn-primary ml-1" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseExample" aria-expanded="false"
                                    aria-controls="collapseExample">
                                    Button with data-bs-target
                                </button>
                            </p>
                            <div class="collapse show" id="collapseExample">
                                <div class="card card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                    cred nesciunt sapiente ea proident.
                                </div>
                            </div>
                        </div> <!-- end .mb-4-->
                    </div> <!-- end col -->

                </div>
                <!-- end row-->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            
        </div>
   

@endsection