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
                                        <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">General</a></li>
                                        <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="true">Inventory</a></li>
                                        <li><a href="#tab_3" data-toggle="tab">Shipping</a></li>
                                        <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_1">
                                            <div class="row form-group">
                                                <label for="price" class="col-lg-3 ">Price</label>
                                                <div class="col-lg-3">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="cost" name="cost"
                                                        placeholder="Min Cost">
                                                        <span class="input-group-addon">৳</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="regular" name="regular"
                                                        placeholder="Regular">
                                                        <span class="input-group-addon">৳</span>
                                                    </div>  
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="sale" name="sale"
                                                            placeholder="Sale">
                                                        <span class="input-group-addon">৳</span>
                                                    </div>  
                                                </div>
                                            </div>
                                            <div class="row from-group">
                                                <label for="include" class="col-lg-3  pt-3">Include</label>
                                                <div class="col-lg-6 checkbox">
                                                    <ul class="choosen-list">
                                                        <li>
                                                            <label>
                                                                <input type="checkbox">&nbsp;Application Cost
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox">&nbsp;VAT
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox">&nbsp;COD
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox">&nbsp;Affiliate Marketing
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox">&nbsp;Student Cost
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox">&nbsp;Shipping Cost
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="tab_2">
                                            <div class="row form-group">
                                                <label for="sku" class="col-lg-3 ">SKU</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" id="sku" name="sku">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <label for="manage-stock" class="col-lg-3 ">Manage Stock?</label>
                                                <div class="col-lg-9">
                                                    <input type="checkbox"> Enable stock management at product level
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <label for="stock-status" class="col-lg-3 ">Stock Status</label>
                                                <div class="col-lg-9">
                                                    <select class="form-control select2 select2-hidden-accessible"
                                                        style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                        <option>In stock</option>
                                                        <option>Out of stock</option>
                                                        <option>On backorder</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="tab_3">
                                            <div class="row form-group">
                                                <label for="weight" class="col-lg-3 ">Weight&nbsp;(kg)</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" id="weight" name="weight"
                                                        placeholder="0">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <label for="dimensions" class="col-lg-3 ">Dimensions&nbsp;(cm)</label>
                                                <div class="col-lg-3">
                                                    <input type="text" class="form-control" id="length" name="length"
                                                        placeholder="Length">
                                                </div>
                                                <div class="col-lg-3">
                                                    <input type="text" class="form-control" id="width" name="width"
                                                        placeholder="Width">
                                                </div>
                                                <div class="col-lg-3">
                                                    <input type="text" class="form-control" id="height" name="height"
                                                        placeholder="Height">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <label for="shipping-class" class="col-lg-3 ">Shipping
                                                    class</label>
                                                <div class="col-lg-9">
                                                    <select class="form-control select2 select2-hidden-accessible"
                                                        style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                        <option>No shipping class</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.tab-pane -->
                                    </div>
                                    <!-- /.tab-content -->
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="box box-solid">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Categories</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        Category
                                    </div>
                                    <!-- /.box-body -->
                                    <div class="box-footer">

                                    </div>
                                    {{-- ./box-footer --}}
                                </div>
                                {{-- =========================./Category======================= --}}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="box box-solid">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Attributes</h3>
                                    </div>
                                    <div class="box-header">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Select Attribute">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-success btn-flat">Select</button>
                                                <button type="button" class="btn btn-secondary btn-flat"><i class="fas fa-plus"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- /.box-header -->
                                    <ul class="multi-input-list">
                                        <li class="item">
                                            <div class="container">
                                                <div class="header">
                                                    <span class="icon">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </span>
                                                    <label class="label">Test</label>
                                                    <input class="input" type="text">
                                                    <button class="btn btn-link action">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="container">
                                                <div class="header">
                                                    <span class="icon">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </span>
                                                    <label class="label">Test</label>
                                                    <input class="input" type="text">
                                                    <button class="btn btn-link action">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- /.box-body -->
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="box box-solid">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Variation</h3>
                                        <div class="box-tools pull-right">
                                            <button type="button" class="btn btn-box-tool">Add New</button>
                                        </div>
                                    </div>
                                    <!-- /.box-header -->
                                    <ul class="multi-input-list">
                                        <li class="item">
                                            <div class="container open">
                                                <div class="header">
                                                    <span class="icon">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </span>
                                                    <button class="btn btn-link action btn-images">
                                                        <i class="far fa-images"></i>
                                                    </button>
                                                    <input class="input" type="text">
                                                    <button class="btn btn-link action">
                                                        <i class="fas fa-angle-down"></i>
                                                    </button>
                                                    <button class="btn btn-link action">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </div>
                                                <div class="body">
                                                    <div class="row form-group">
                                                        <label for="price" class="col-lg-3 ">Price</label>
                                                        <div class="col-lg-3">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="cost" name="cost"
                                                                placeholder="Min Cost">
                                                                <span class="input-group-addon">৳</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="regular" name="regular"
                                                                placeholder="Regular">
                                                                <span class="input-group-addon">৳</span>
                                                            </div>  
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="sale" name="sale"
                                                                    placeholder="Sale">
                                                                <span class="input-group-addon">৳</span>
                                                            </div>  
                                                        </div>
                                                    </div>

                                                    <div class="row form-group">
                                                        <label for="size" class="col-lg-3 ">Size</label>
                                                        <div class="col-lg-9">
                                                            <input type="text" class="form-control" id="size" name="size"
                                                                placeholder="0">
                                                        </div>
                                                    </div>

                                                    <div class="row form-group">
                                                        <label for="weight" class="col-lg-3 ">Weight&nbsp;(kg)</label>
                                                        <div class="col-lg-9">
                                                            <input type="text" class="form-control" id="weight" name="weight"
                                                                placeholder="0">
                                                        </div>
                                                    </div>

                                                    <div class="row form-group">
                                                        <label for="color" class="col-lg-3 ">Color</label>
                                                        <div class="col-lg-9">
                                                            <input type="text" class="form-control" id="color" name="color"
                                                                placeholder="#ebebeb">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </li>
                                    </ul>
                                    <!-- /.box-body -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="box box-solid">
                            <div class="box-header with-border">
                                <h3 class="box-title">Options</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="input-group">
                                    <select class="form-control select2" style="width: 100%;"
                                        tabindex="-1" aria-hidden="true">
                                        <option>Choose product brand</option>
                                        <option>Ponds</option>
                                        <option>Nivea</option>
                                        <option>Garnier</option>
                                        <option>Dexe</option>
                                        <option>Amanah</option>
                                    </select>
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-secondary btn-flat"><i class="fas fa-plus"></i></button>
                                    </span>
                                </div>
                                {{-- ======================./Brand================ --}}
                                
                                <br>

                                <div class="form-group">
                                    <select class="form-control select2" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                        <option selected="selected">Select made by country </option>
                                        <option>Bangladesh</option>
                                        <option>UK</option>
                                    </select>
                                </div>
                                {{-- ======================./Country================ --}}

                                <div class="row from-group">
                                    <label for="include" class="col-lg-3  pt-3">Allow</label>
                                    <div class="col-lg-6 checkbox">
                                        <ul class="choosen-list">
                                            <li>
                                                <label>
                                                    <input type="checkbox">&nbsp;Comment
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox">&nbsp;Rating & Review
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox">&nbsp;Like & Share
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                {{-- ========================./Allow==================== --}}

                            </div>
                            <!-- /.box-body -->
                        </div>
                        {{-- =========================./Options======================= --}}

                        <div class="box box-solid">
                            <div class="box-header with-border">
                                <h3 class="box-title">Facker</h3>
                            </div>
                            <div class="box-body">
                                <div class="row form-group">
                                    <label for="sale-count" class="col-lg-4 ">Sale Count</label>
                                    <div class="col-lg-8">
                                        <input type="number" class="form-control" id="sale-count" name="sale-count">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label for="view-count" class="col-lg-4 ">View Count</label>
                                    <div class="col-lg-8">
                                        <input type="number" class="form-control" id="view-count" name="view-count">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
