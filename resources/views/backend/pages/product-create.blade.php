@php
$_activePrimaryNav = 'product';
$_activeSecondaryNav = 'create';
@endphp
@extends('backend.layouts.default')
@section('title', 'Create Product')
@section('content')

<section class="content-header">
    <h1>
        Product
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
        <div class="container-fluid">
            <form action="">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                        <div class="form-group">
                            <input type="text" class="form-control" id="title" placeholder="Enter product name">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" rows="5" placeholder="Enter ..."></textarea>
                        </div>
                        <div class="form-group">
                            <label>Short Description</label>
                            <textarea class="form-control" rows="5" placeholder="Enter ..."></textarea>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="nav-tabs-custom">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Generel</a></li>
                                        <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="true">Inventory</a></li>
                                        <li><a href="#tab_3" data-toggle="tab">Shipping</a></li>
                                        <li><a href="#tab_4" data-toggle="tab">Linked Products</a></li>
                                        <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_1">
                                            <div class="row form-group">
                                                <label for="regular-price" class="col-lg-3 control-label">Regular Price</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" id="regular-price" name="regular-price">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <label for="sale-price" class="col-lg-3 control-label">Sale Price</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" id="sale-price" name="sale-price">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="tab_2">
                                            <div class="row form-group">
                                                <label for="sku" class="col-lg-3 control-label">SKU</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" id="sku" name="sku">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <label for="manage-stock" class="col-lg-3 control-label">Manage Stock?</label>
                                                <div class="col-lg-9">
                                                    <input type="checkbox"> Enable stock management at product level
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <label for="stock-status" class="col-lg-3 control-label">Stock Status</label>
                                                <div class="col-lg-9">
                                                    <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                        <option>In stock</option>
                                                        <option>Out of stock</option>
                                                        <option>On backorder</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <label for="manage-stock" class="col-lg-3 control-label">Sold individually</label>
                                                <div class="col-lg-9">
                                                    <input type="checkbox"> Enable this to only allow one of this item to be bought in a single order
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="tab_3">
                                            <div class="row form-group">
                                                <label for="weight" class="col-lg-3 control-label">Weight&nbsp;(kg)</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" id="weight" name="weight" placeholder="0">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <label for="dimensions" class="col-lg-3 control-label">Dimensions&nbsp;(cm)</label>
                                                <div class="col-lg-3">
                                                    <input type="text" class="form-control" id="length" name="length" placeholder="Length">
                                                </div>
                                                <div class="col-lg-3">
                                                    <input type="text" class="form-control" id="width" name="width" placeholder="Width">
                                                </div>
                                                <div class="col-lg-3">
                                                    <input type="text" class="form-control" id="height" name="height" placeholder="Height">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <label for="shipping-class" class="col-lg-3 control-label">Shipping class</label>
                                                <div class="col-lg-9">
                                                    <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                        <option>No shipping class</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="tab_4">
                                            <div class="row form-group">
                                                <label for="upsells" class="col-lg-3 control-label">Upsells</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" placeholder="Search for a product...">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <label for="cross-sells" class="col-lg-3 control-label">Cross-sells</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" placeholder="Search for a product...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.tab-content -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="box box-solid">
                            Hello
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
