@php
    $_activePrimaryNav = 'shop';
    $_activeSecondaryNav = 'create';
@endphp
@extends('backend.layouts.default') 
@section('title', 'Create Shop') 
@section('content')

<section class="content-header">
    <h1>
        Shop
        <small>Add new</small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="#">
                <i class="fa fa-dashboard"></i> Home</a>
        </li>
        <li class="active">Dashboard</li>
    </ol>
</section>

<section class="content">


    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                    <form action="{{ route('backend.shops.store') }}" method="post">

                        {{ csrf_field() }}

                        <div class="box box-solid mt-3">
                            {{-- <div class="box-header with-border">
                                <a href="#" class="btn btn-sm btn-default pull-right">All</a>
                            </div> --}}
                            <div class="box-body p-0">
                                <div class="nav-tabs-custom mb-0">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Basic</a></li>
                                        <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Address</a></li>
                                        <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="true">Meta</a></li>
                                        <li class="pull-right">
                                            <a href="#" class="text-muted"><i class="fas fa-cog"></i></a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_1">
                                            <div class="row">
                                                <div class="col-lg-6 form-group">
                                                    <label for="display-name-en">Display Name En</label>
                                                    <input type="text" class="form-control" id="display-name-en" name="display-name-en">
                                                </div>
                                                <div class="col-lg-6 form-group">
                                                    <label for="display-name-bn">Display Name Bn</label>
                                                    <input type="text" class="form-control" id="display-name-bn" name="display-name-bn">
                                                </div>
                                            </div>
            
                                            <div class="row">
                                                <div class="col-lg-6 form-group">
                                                    <label for="slug">Slug</label>
                                                    <input type="text" class="form-control" id="slug" name="slug">
                                                </div>
                                                <div class="col-lg-6 form-group">
                                                    <label for="display-name-bn">Status</label>
                                                    <select class="form-control" placeholder="Select Status" name="status">
                                                        <option value="active">Active</option>
                                                        <option value="inactive">Inactive</option>
                                                    </select>
                                                </div>
                                            </div>
            
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="feature-image-url">Feature Image Url</label>
                                                <input type="text" class="form-control" id="feature-image-url" name="feature-image-url">
                                            </div>
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="tab_2">
                                            <div class="form-group">
                                                <label for="address-line-1">Address Line 1</label>
                                                <input type="text" class="form-control" id="address-line-1" name="address-line-1">
                                            </div>

                                            <div class="form-group">
                                                <label for="address-line-2">Address Line 2</label>
                                                <input type="text" class="form-control" id="address-line-2" name="address-line-2">
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>District</label>
                                                        <select class="form-control" name="district">
                                                            <option value="narsingdi">Narsingdi</option>
                                                            <option value="tangail">Tangail</option>
                                                            <option value="patuakhali">Patuakhali</option>
                                                            <option value="comilla">Comilla</option>
                                                            <option value="mymensingh">Mymensingh</option>
                                                            <option value="rajshahi">Rajshahi</option>
                                                            <option value="sylhet">Sylhet</option>
                                                            <option value="rangpur">Rangpur</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Division</label>
                                                        <select class="form-control">
                                                            <option value="barishal">Barishal</option>
                                                            <option value="chattagram">Chattagram</option>
                                                            <option value="dhaka">Dhaka</option>
                                                            <option value="khulna">Khulna</option>
                                                            <option value="mymensingh">Mymensingh</option>
                                                            <option value="rajshahi">Rajshahi</option>
                                                            <option value="sylhet">Sylhet</option>
                                                            <option value="rangpur">Rangpur</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="zip">Zip / Postal Code</label>
                                                        <input type="text" class="form-control" id="zip" name="zip">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="tab_3">
                                            <div class="form-group">
                                                <label for="meta-title">Meta Title</label>
                                                <input type="text" class="form-control" id="meta-title" name="meta-title">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="meta-keywords">Meta Keywords</label>
                                                <input type="text" class="form-control" id="meta-keywords" name="meta-keywords">
                                            </div>
            
                                            <div class="form-group">
                                                <label for="meta-description">Meta Description</label>
                                                <textarea class="form-control" id="description" rows="3" name="meta-description"></textarea>
                                            </div>
                                        </div>
                                        <!-- /.tab-pane -->
                                    </div>
                                    <!-- /.tab-content -->
                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary pull-right">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
