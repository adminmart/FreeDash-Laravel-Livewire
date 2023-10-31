@extends('layouts.app')

@section('content')

<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Form Input Grid</h4>
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
                                <h4 class="card-title">Horizontal Grid</h4>
                                <form action="#">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" placeholder="1">
                                                </div>
                                            </div>
                                            <div class="col-md-11">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" placeholder="col-md-11">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" placeholder="col-md-2">
                                                </div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" placeholder="col-md-10">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" placeholder="col-md-3">
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" placeholder="col-md-9">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" placeholder="col-md-4">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" placeholder="col-md-8">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" placeholder="col-md-5">
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" placeholder="col-md-7">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" placeholder="col-md-6">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" placeholder="col-md-6">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-end">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                            <button type="reset" class="btn btn-dark">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Grid With Row Label</h4>
                                <form action="#">
                                    <div class="form-body">
                                        <label class="form-label">Row Label </label>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" placeholder="1">
                                                </div>
                                            </div>
                                            <div class="col-md-11">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" placeholder="col-md-11">
                                                </div>
                                            </div>
                                        </div>
                                        <label class="form-label">Row Label </label>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" placeholder="col-md-2">
                                                </div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" placeholder="col-md-10">
                                                </div>
                                            </div>
                                        </div>
                                        <label class="form-label">Row Label </label>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" placeholder="col-md-3">
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" placeholder="col-md-9">
                                                </div>
                                            </div>
                                        </div>
                                        <label class="form-label">Row Label </label>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" placeholder="col-md-4">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" placeholder="col-md-8">
                                                </div>
                                            </div>
                                        </div>
                                        <label class="form-label">Row Label </label>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" placeholder="col-md-5">
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" placeholder="col-md-7">
                                                </div>
                                            </div>
                                        </div>
                                        <label class="form-label">Row Label </label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" placeholder="col-md-6">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" placeholder="col-md-6">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-end">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                            <button type="reset" class="btn btn-dark">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Grid With Label</h4>
                                <form action="#">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Label</label>
                                                    <input type="text" class="form-control" placeholder="1">
                                                </div>
                                            </div>
                                            <div class="col-md-11">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Label</label>
                                                    <input type="text" class="form-control" placeholder="col-md-11">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Label</label>
                                                    <input type="text" class="form-control" placeholder="col-md-2">
                                                </div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Label</label>
                                                    <input type="text" class="form-control" placeholder="col-md-10">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Label</label>
                                                    <input type="text" class="form-control" placeholder="col-md-3">
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Label</label>
                                                    <input type="text" class="form-control" placeholder="col-md-9">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Label</label>
                                                    <input type="text" class="form-control" placeholder="col-md-4">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Label</label>
                                                    <input type="text" class="form-control" placeholder="col-md-8">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Label</label>
                                                    <input type="text" class="form-control" placeholder="col-md-5">
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Label</label>
                                                    <input type="text" class="form-control" placeholder="col-md-7">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Label</label>
                                                    <input type="text" class="form-control" placeholder="col-md-6">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Label</label>
                                                    <input type="text" class="form-control" placeholder="col-md-6">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-end">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                            <button type="reset" class="btn btn-dark">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Right Offset</h4>
                                <form action="#">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" placeholder="col-md-12">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-11">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" placeholder="col-md-11">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" placeholder="col-md-10">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" placeholder="col-md-9">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" placeholder="col-md-8">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" placeholder="col-md-7">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" placeholder="col-md-6">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" placeholder="col-md-5">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" placeholder="col-md-4">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" placeholder="col-md-3">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" placeholder="col-md-2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" placeholder="1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-left">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                            <button type="reset" class="btn btn-dark">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Left Offset</h4>
                                <form action="#">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" placeholder="col-md-12">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-11 ms-auto">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control"
                                                        placeholder="col-md-11 ms-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-10 ms-auto">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control"
                                                        placeholder="col-md-10 ms-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-9 ms-auto">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control"
                                                        placeholder="col-md-9 ms-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 ms-auto">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control"
                                                        placeholder="col-md-8 ms-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-7 ms-auto">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control"
                                                        placeholder="col-md-7 ms-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 ms-auto">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control"
                                                        placeholder="col-md-6 ms-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5 ms-auto">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control"
                                                        placeholder="col-md-5 ms-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 ms-auto">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control"
                                                        placeholder="col-md-4 ms-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 ms-auto">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control"
                                                        placeholder="col-md-3 ms-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2 ms-auto">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control"
                                                        placeholder="col-md-2 ms-auto0">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1 ms-auto">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" placeholder="11">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-end">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                            <button type="reset" class="btn btn-dark">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Centered Input</h4>
                                <form action="#">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" placeholder="col-md-12">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-10 m-auto">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control"
                                                        placeholder="col-md-10 m-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 m-auto">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control"
                                                        placeholder="col-md-8 m-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 m-auto">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control"
                                                        placeholder="col-md-6 m-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 m-auto">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control"
                                                        placeholder="col-md-4 m-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2 m-auto">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control"
                                                        placeholder="col-md-2 m-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-4 text-end">Label</label>
                                            <div class="col-md-4">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" placeholder="col-md-4">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-3 text-end">Label</label>
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" placeholder="col-md-6">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-2 text-end">Label</label>
                                            <div class="col-md-8">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" placeholder="col-md-8">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-1 text-end">Label</label>
                                            <div class="col-md-10">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" placeholder="col-md-10">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                            <button type="reset" class="btn btn-dark">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Centered Input with Default label</h4>
                                <form action="#">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Label</label>
                                                    <input type="text" class="form-control" placeholder="col-md-12">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-10 m-auto">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Label</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="col-md-10 m-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-9 m-auto">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Label</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="col-md-8 m-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 m-auto">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Label</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="col-md-6 m-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 m-auto">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Label</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="col-md-4 m-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2 m-auto">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Label</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="col-md-2 m-auto">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions mt-4">
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                            <button type="reset" class="btn btn-dark">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Grid With Row Label</h4>
                                <form action="#">
                                    <div class="form-body">
                                        <div class="form-group mb-3">
                                            <div class="row">
                                                <label class="col-lg-1">Label</label>
                                                <div class="col-lg-11">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <input type="text" class="form-control"
                                                                placeholder="col-md-1">
                                                        </div>
                                                        <div class="col-md-11">
                                                            <input type="text" class="form-control"
                                                                placeholder="col-md-11">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <div class="row">
                                                <label class="col-lg-1">Label</label>
                                                <div class="col-lg-11">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <input type="text" class="form-control"
                                                                placeholder="col-md-2">
                                                        </div>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control"
                                                                placeholder="col-md-10">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <div class="row">
                                                <label class="col-lg-1">Label</label>
                                                <div class="col-lg-11">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="col-md-3">
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                placeholder="col-md-9">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <div class="row">
                                                <label class="col-lg-1">Label</label>
                                                <div class="col-lg-11">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control"
                                                                placeholder="col-md-4">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control"
                                                                placeholder="col-md-8">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <div class="row">
                                                <label class="col-lg-1">Label</label>
                                                <div class="col-lg-11">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <input type="text" class="form-control"
                                                                placeholder="col-md-5">
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="text" class="form-control"
                                                                placeholder="col-md-7">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <div class="row">
                                                <label class="col-lg-1">Label</label>
                                                <div class="col-lg-11">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control"
                                                                placeholder="col-md-6">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control"
                                                                placeholder="col-md-6">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-end">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                            <button type="reset" class="btn btn-dark">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Grid With Inline Input Label</h4>
                                <form action="#">
                                    <div class="form-body">
                                        <div class="form-group mb-3">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control"
                                                                placeholder="col-md-2">
                                                        </div>
                                                        <label class="col-md-4">Label </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="row">
                                                        <label class="col-md-4 text-end">Label </label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control"
                                                                placeholder="col-md-10">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control"
                                                                placeholder="col-md-3">
                                                        </div>
                                                        <label class="col-md-4">Label </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="row">
                                                        <label class="col-md-4 text-end">Label </label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control"
                                                                placeholder="col-md-9">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control"
                                                                placeholder="col-md-4">
                                                        </div>
                                                        <label class="col-md-4">Label </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="row">
                                                        <label class="col-md-4 text-end">Label </label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control"
                                                                placeholder="col-md-8">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control"
                                                                placeholder="col-md-5">
                                                        </div>
                                                        <label class="col-md-4">Label </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="row">
                                                        <label class="col-md-4 text-end">Label </label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control"
                                                                placeholder="col-md-7">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control"
                                                                placeholder="col-md-6">
                                                        </div>
                                                        <label class="col-md-4">Label </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <label class="col-md-4 text-end">Label </label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control"
                                                                placeholder="col-md-6">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-end">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                            <button type="reset" class="btn btn-dark">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Multiple Input With Default Label</h4>
                                <form action="#">
                                    <div class="form-body">
                                        <label class="form-label">Label </label>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control"
                                                        placeholder="First Input &amp; First Row">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control"
                                                        placeholder="First Input &amp; Second Row">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control"
                                                        placeholder="Second Input &amp; First Row">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control"
                                                        placeholder="Second Input &amp; Second Row">
                                                </div>
                                            </div>
                                        </div>
                                        <label class="form-label">Multiple width Input Label</label>
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control"
                                                        placeholder="First Input &amp; First Row">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control"
                                                        placeholder="Second Input &amp; First Row">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control"
                                                        placeholder="First Input &amp; Second Row">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control"
                                                        placeholder="Second Input &amp; Second Row">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-end">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                            <button type="reset" class="btn btn-dark">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Multiple Input With Inline Label</h4>
                                <form action="#">
                                    <div class="form-body">
                                        <div class="form-group mb-3 row">
                                            <label class="col-md-2">Label </label>
                                            <div class="col-md-10">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="First Input &amp; First Row">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="First Input &amp; Second Row">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="Second Input &amp; First Row">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="Second Input &amp; Second Row">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3 row">
                                            <label class="col-md-2">Multiple width Input Label </label>
                                            <div class="col-md-10">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <div class="form-group mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="First Input &amp; First Row">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="Second Input &amp; First Row">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="form-group mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="First Input &amp; Second Row">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="Second Input &amp; Second Row">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-end">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                            <button type="reset" class="btn btn-dark">Reset</button>
                                        </div>
                                    </div>
                                </form>
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