@extends('layouts.app')

@section('content')

      
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">List Media</h4>
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
                                <!-- .row -->
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 p-4">
                                        <h4 class="card-title">Basic example</h4>
                                        <ul class="list-group">
                                            <li class="list-group-item">Cras justo odio</li>
                                            <li class="list-group-item">Dapibus ac facilisis in</li>
                                            <li class="list-group-item">Morbi leo risus</li>
                                            <li class="list-group-item">Porta ac consectetur ac</li>
                                            <li class="list-group-item">Vestibulum at eros</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-sm-4 p-4">
                                        <h4 class="card-title">Linked items</h4>
                                        <div class="list-group"> <a href="javascript:void(0)"
                                                class="list-group-item active">Cras justo odio</a> <a
                                                href="javascript:void(0)" class="list-group-item">Dapibus ac facilisis
                                                in</a> <a href="javascript:void(0)" class="list-group-item">Morbi leo
                                                risus</a> <a href="javascript:void(0)" class="list-group-item">Porta ac
                                                consectetur ac</a> <a href="javascript:void(0)"
                                                class="list-group-item">Vestibulum at eros</a> </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 p-4">
                                        <h4 class="card-title">With Badges</h4>
                                        <ul class="list-group list-group-full">
                                            <li class="list-group-item"> Cras justo odio <span
                                                    class="badge text-bg-info ms-auto">6</span></li>
                                            <li class="list-group-item"> Dapibus ac facilisis in </li>
                                            <li class="list-group-item"> Morbi leo risus <span
                                                    class="badge text-bg-danger ms-auto">3</span></li>
                                            <li class="list-group-item active"> Porta ac consectetur ac <span
                                                    class="badge text-bg-success ms-auto">10</span></li>
                                            <li class="list-group-item"> Vestibulum at eros </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- / .row -->
                                <!-- .row -->
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 p-4">
                                        <h4 class="card-title">Button items</h4>
                                        <div class="list-group">
                                            <button type="button" class="list-group-item">Cras justo odio</button>
                                            <button type="button" class="list-group-item">Dapibus ac facilisis
                                                in</button>
                                            <button type="button" class="list-group-item">Morbi leo risus</button>
                                            <button type="button" class="list-group-item">Porta ac consectetur
                                                ac</button>
                                            <button type="button" class="list-group-item">Vestibulum at eros</button>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 p-4">
                                        <h4 class="card-title">Disabled items</h4>
                                        <div class="list-group">
                                            <a href="javascript:void(0)" class="list-group-item disabled">Cras justo
                                                odio </a>
                                            <a href="javascript:void(0)" class="list-group-item">Dapibus ac facilisis
                                                in</a>
                                            <a href="javascript:void(0)" class="list-group-item">Morbi leo risus</a>
                                            <a href="javascript:void(0)" class="list-group-item">Porta ac consectetur
                                                ac</a>
                                            <a href="javascript:void(0)" class="list-group-item">Vestibulum at eros</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 p-4">
                                        <h4 class="card-title">Disabled items</h4>
                                        <ul class="list-group">
                                            <li class="list-group-item list-group-item-success">Dapibus ac facilisis in
                                            </li>
                                            <li class="list-group-item list-group-item-info">Cras sit amet nibh libero
                                            </li>
                                            <li class="list-group-item list-group-item-warning">Porta ac consectetur ac
                                            </li>
                                            <li class="list-group-item list-group-item-danger">Vestibulum at eros</li>
                                            <li class="list-group-item list-group-item-default">Vestibulum at eros</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /.row -->
                                <!-- .row -->
                                <div class="row">
                                    <div class="col-md-8 p-4">
                                        <h4 class="card-title">Media object</h4>
                                        <ul class="list-unstyled">
                                            <li class="media d-flex align-items-start">
                                                <img class="d-flex me-3" src="../assets/images/users/1.jpg" width="60"
                                                    alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="mt-0 mb-1">List-based media object</h5> Cras sit amet
                                                    nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                                    sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
                                                    viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                                                    Donec lacinia congue felis in faucibus.
                                                </div>
                                            </li>
                                            <li class="media d-flex align-items-start my-4">
                                                <img class="d-flex me-3" src="../assets/images/users/2.jpg" width="60"
                                                    alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="mt-0 mb-1">List-based media object</h5> Cras sit amet
                                                    nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                                    sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
                                                    viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                                                    Donec lacinia congue felis in faucibus.
                                                </div>
                                            </li>
                                            <li class="media d-flex align-items-start">
                                                <img class="d-flex me-3" src="../assets/images/users/3.jpg" width="60"
                                                    alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="mt-0 mb-1">List-based media object</h5> Cras sit amet
                                                    nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                                    sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
                                                    viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                                                    Donec lacinia congue felis in faucibus.
                                                    <div class="media d-flex align-items-start mt-3">
                                                        <a class="d-flex pe-3" href="javascript:void(0)">
                                                            <img src="../assets/images/users/4.jpg" width="60"
                                                                height="60" alt="Generic placeholder image">
                                                        </a>
                                                        <div class="media-body">
                                                            <h5 class="mt-0">Media heading</h5> Cras sit amet nibh
                                                            libero, in gravida nulla. Nulla vel metus scelerisque ante
                                                            sollicitudin. Cras purus odio, vestibulum in vulputate at,
                                                            tempus viverra turpis. Fusce condimentum nunc ac nisi
                                                            vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-sm-12 p-4">
                                        <h4 class="card-title">Custom content</h4>
                                        <div class="list-group">
                                            <a href="javascript:void(0)"
                                                class="list-group-item list-group-item-action flex-column align-items-start active">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h5 class="mb-1 text-white">List group item heading</h5>
                                                    <small>3 days ago</small>
                                                </div>
                                                <p class="mb-1">Donec id elit non mi porta gravida at eget metus.
                                                    Maecenas sed diam eget risus varius blandit.</p>
                                                <small>Donec id elit non mi porta.</small>
                                            </a>
                                            <a href="javascript:void(0)"
                                                class="list-group-item list-group-item-action flex-column align-items-start">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h5 class="mb-1">List group item heading</h5>
                                                    <small class="text-muted">3 days ago</small>
                                                </div>
                                                <p class="mb-1">Donec id elit non mi porta gravida at eget metus.
                                                    Maecenas sed diam eget risus varius blandit.</p>
                                                <small class="text-muted">Donec id elit non mi porta.</small>
                                            </a>
                                            <a href="javascript:void(0)"
                                                class="list-group-item list-group-item-action flex-column align-items-start">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h5 class="mb-1">List group item heading</h5>
                                                    <small class="text-muted">3 days ago</small>
                                                </div>
                                                <p class="mb-1">Donec id elit non mi porta gravida at eget metus.
                                                    Maecenas sed diam eget risus varius blandit.</p>
                                                <small class="text-muted">Donec id elit non mi porta.</small>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-8 mt-4">
                                        <h4 class="card-title">JavaScript behavior</h4>
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="list-group" id="list-tab" role="tablist">
                                                    <a class="list-group-item list-group-item-action active"
                                                        id="list-home-list" data-bs-toggle="list" href="#list-home"
                                                        role="tab" aria-controls="home">Home</a>
                                                    <a class="list-group-item list-group-item-action"
                                                        id="list-profile-list" data-bs-toggle="list" href="#list-profile"
                                                        role="tab" aria-controls="profile">Profile</a>
                                                    <a class="list-group-item list-group-item-action"
                                                        id="list-messages-list" data-bs-toggle="list" href="#list-messages"
                                                        role="tab" aria-controls="messages">Messages</a>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="tab-content" id="nav-tabContent">
                                                    <div class="tab-pane fade show active" id="list-home"
                                                        role="tabpanel" aria-labelledby="list-home-list">
                                                        Irure enim occaecat labore sit qui aliquip reprehenderit amet
                                                        velit. Deserunt ullamco ex elit nostrud ut dolore nisi officia
                                                        magna sit occaecat laboris sunt dolor.
                                                    </div>
                                                    <div class="tab-pane fade" id="list-profile" role="tabpanel"
                                                        aria-labelledby="list-profile-list">
                                                        Irure enim occaecat labore sit qui aliquip reprehenderit amet
                                                        velit. Deserunt ullamco ex elit nostrud ut dolore nisi officia
                                                        magna sit occaecat laboris sunt dolor.
                                                    </div>
                                                    <div class="tab-pane fade" id="list-messages" role="tabpanel"
                                                        aria-labelledby="list-messages-list">
                                                        Irure enim occaecat labore sit qui aliquip reprehenderit amet
                                                        velit. Deserunt ullamco ex elit nostrud ut dolore nisi officia
                                                        magna sit occaecat laboris sunt dolor.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Media heading</h5>
                                        <div class="media d-flex align-items-start">
                                            <img class="me-3 img-fluid w-25" src="../assets/images/big/img1.jpg"
                                                alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="mt-0">Media heading</h5> Cras sit amet nibh libero, in
                                                gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                                                odio, vestibulum in vulputate at, tempus viverra turpis. Fusce
                                                condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis
                                                in faucibus.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Nesting</h5>
                                        <div class="media d-flex align-items-start">
                                            <img class="me-3 w-25" src="../assets/images/big/img1.jpg"
                                                alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="mt-0">Media heading</h5> Cras sit amet nibh libero, in
                                                gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                                                odio, vestibulum in vulputate at, tempus viverra turpis. Fusce
                                                condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis
                                                in faucibus.
                                                <div class="media d-flex align-items-start mt-3">
                                                    <a class="pe-3 w-25" href="#">
                                                        <img src="../assets/images/big/img1.jpg" class="w-100"
                                                            alt="Generic placeholder image">
                                                    </a>
                                                    <div class="media-body">
                                                        <h5 class="mt-0">Media heading</h5> Cras sit amet nibh libero,
                                                        in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                                                        Cras purus odio, vestibulum in vulputate at, tempus viverra
                                                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                                                        Donec lacinia congue felis in faucibus.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Alignment</h5>
                                        <div class="media d-flex align-items-start">
                                            <img class="align-self-start w-25 me-3" src="../assets/images/big/img1.jpg"
                                                alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="mt-0">Top-aligned media</h5>
                                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                                    scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                                    vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                                                    vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu
                                                    leo. Cum sociis natoque penatibus et magnis dis parturient montes,
                                                    nascetur ridiculus mus.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Center-aligned media</h5>
                                        <div class="media d-flex align-items-center">
                                            <img class="align-self-center w-25 me-3" src="../assets/images/big/img1.jpg"
                                                alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="mt-0">Center-aligned media</h5>
                                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                                    scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                                    vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                                                    vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                <p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis
                                                    ornare vel eu leo. Cum sociis natoque penatibus et magnis dis
                                                    parturient montes, nascetur ridiculus mus.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Bottom-aligned media</h5>
                                        <div class="media d-flex align-items-end">
                                            <img class="align-self-end me-3 w-25" src="../assets/images/big/img1.jpg"
                                                alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="mt-0">Bottom-aligned media</h5>
                                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                                    scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                                    vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                                                    vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                <p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis
                                                    ornare vel eu leo. Cum sociis natoque penatibus et magnis dis
                                                    parturient montes, nascetur ridiculus mus.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Order</h5>
                                        <div class="media d-flex align-items-start">
                                            <div class="media-body">
                                                <h5 class="mt-0 mb-1">Media object</h5> Cras sit amet nibh libero, in
                                                gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                                                odio, vestibulum in vulputate at, tempus viverra turpis. Fusce
                                                condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis
                                                in faucibus.
                                            </div>
                                            <img class="ml-3 w-25" src="../assets/images/big/img1.jpg"
                                                alt="Generic placeholder image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Media list</h5>
                                        <ul class="list-unstyled">
                                            <li class="media d-flex align-items-start">
                                                <img class="me-3 w-25" src="../assets/images/big/img1.jpg"
                                                    alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="mt-0 mb-1">List-based media object</h5> Cras sit amet
                                                    nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                                    sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
                                                    viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                                                    Donec lacinia congue felis in faucibus.
                                                </div>
                                            </li>
                                            <li class="media d-flex align-items-start my-4">
                                                <img class="me-3 w-25" src="../assets/images/big/img1.jpg"
                                                    alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="mt-0 mb-1">List-based media object</h5> Cras sit amet
                                                    nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                                    sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
                                                    viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                                                    Donec lacinia congue felis in faucibus.
                                                </div>
                                            </li>
                                            <li class="media d-flex align-items-start">
                                                <img class="me-3 w-25" src="../assets/images/big/img1.jpg"
                                                    alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="mt-0 mb-1">List-based media object</h5> Cras sit amet
                                                    nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                                    sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
                                                    viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                                                    Donec lacinia congue felis in faucibus.
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            
        </div>
   

@endsection