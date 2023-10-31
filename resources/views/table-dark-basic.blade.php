@extends('layouts.app')

@section('content')

      
     <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Table Dark Basic</h4>
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
                                <h4 class="card-title">Inverse Table</h4>
                                <h6 class="card-subtitle">You can also invert the colors—with light text on dark
                                    backgrounds—with <code> .table-inverse</code>.</h6>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-dark mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Handle</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Striped with Inverse Table</h4>
                                <h6 class="card-subtitle">Use .table-striped to add zebra-striping to any table row
                                    within the <code>&lt;tbody&gt;</code>.</h6>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-dark mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Handle</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Bordered with Inverse Table</h4>
                                <h6 class="card-subtitle">Add <code>.table-bordered</code> for borders on all sides of
                                    the table and cells.</h6>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-dark mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Handle</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td colspan="2">Larry the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Contextual classes inverse</h4>
                                <h6 class="card-subtitle">Regular table background variants are not available with the
                                    dark table, however, you may use text or background utilities to achieve similar
                                    styles.</h6>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-dark mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="bg-primary">
                                            <th class="bg-primary" scope="row">1</th>
                                            <td class="bg-primary">Cell</td>
                                            <td class="bg-primary">Cell</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                        </tr>
                                        <tr class="bg-success">
                                            <th class="bg-success" scope="row">3</th>
                                            <td class="bg-success">Cell</td>
                                            <td class="bg-success">Cell</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                        </tr>
                                        <tr class="bg-info">
                                            <th class="bg-info" scope="row">5</th>
                                            <td class="bg-info">Cell</td>
                                            <td class="bg-info">Cell</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                        </tr>
                                        <tr class="bg-warning">
                                            <th class="bg-warning" scope="row">7</th>
                                            <td class="bg-warning">Cell</td>
                                            <td class="bg-warning">Cell</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">8</th>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                        </tr>
                                        <tr class="bg-danger">
                                            <th class="bg-danger" scope="row">9</th>
                                            <td class="bg-danger">Cell</td>
                                            <td class="bg-danger">Cell</td>
                                        </tr>
                                    </tbody>
                                </table>
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
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center text-muted">
                All Rights Reserved by Freedash. Designed and Developed by <a
                    href="https://adminmart.com/">Adminmart</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
   

@endsection