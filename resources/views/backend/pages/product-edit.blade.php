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
</section>

<section class="content">

        <form action="{{ route('backend.products.update',  $product->id) }}" method="post">

                {{ csrf_field() }}  {{ method_field('PUT') }}

        <div class="page">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name"  name="name"placeholder="Enter product name" value="{{ $product->name }}">
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" rows="5" placeholder="Enter ..." name="description">{{ $product->description }}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Short Description</label>
                            <textarea class="form-control" rows="5" placeholder="Enter ..." name="short_description">{{ $product->short_description }}</textarea>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="box box-solid">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Variation</h3>
                                        <div class="box-tools pull-right">
                                            <button type="button" class="btn btn-box-tool">Add New</button>
                                        </div>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="row">
                                        <div class="col-lg-12">
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
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="row form-group">
                                                                        <label for="size" class="col-lg-3 ">SKU</label>
                                                                        <div class="col-lg-9">
                                                                            <input type="text" class="form-control" id="size"
                                                                                name="size" placeholder="XI285SP0SD3C4NAFAMZ-177345">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row form-group">
                                                                        <label for="price" class="col-lg-3 ">Price</label>
                                                                        <div class="col-lg-4">
                                                                            <div class="input-group">
                                                                                <input type="text" class="form-control"
                                                                                    id="regular" name="regular"
                                                                                    placeholder="Regular">
                                                                                <span class="input-group-addon">৳</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <div class="input-group">
                                                                                <input type="text" class="form-control"
                                                                                    id="sale" name="sale" placeholder="Sale">
                                                                                <span class="input-group-addon">৳</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row form-group">
                                                                        <label for="size" class="col-lg-3 ">Size</label>
                                                                        <div class="col-lg-9">
                                                                            <div class="form-group">
                                                                                <select class="form-control select2"
                                                                                    style="width: 100%;" tabindex="-1"
                                                                                    aria-hidden="true">
                                                                                    <option selected="selected">Select
                                                                                        Size</option>
                                                                                    <option>Small (S)</option>
                                                                                    <option>Medium (M)</option>
                                                                                    <option>Large (L)</option>
                                                                                    <option>Extra Large (XL)</option>
                                                                                    <option>Extra Extra Large (XXL)</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row form-group">
                                                                        <label for="weight" class="col-lg-3 ">Weight&nbsp;(kg)</label>
                                                                        <div class="col-lg-9">
                                                                            <input type="text" class="form-control" id="weight"
                                                                                name="weight" placeholder="0">
                                                                        </div>
                                                                    </div>

                                                                    <div class="row form-group">
                                                                        <label for="color" class="col-lg-3 ">Color</label>
                                                                        <div class="col-lg-9">
                                                                            <input type="text" class="form-control" id="color"
                                                                                name="color" placeholder="#ebebeb">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row form-group">
                                                                        <label for="color" class="col-lg-3 ">Style</label>
                                                                        <div class="col-lg-9">
                                                                            <input type="text" class="form-control" id="style"
                                                                                name="style" placeholder="Style">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <ul class="img-list">
                                                                        <li>
                                                                            <div class="img-box">
                                                                                <img src="{{ asset('/images/avatar.png') }}"
                                                                                    alt="thumbnail">
                                                                                <button class="btn-r-close" title="Delete image"
                                                                                    type="button">
                                                                                    <i class="fas fa-times"></i>
                                                                                </button>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="img-box">
                                                                                <img src="{{ asset('/images/avatar.png') }}"
                                                                                    alt="thumbnail">
                                                                                <button class="btn-r-close" title="Delete image"
                                                                                    type="button">
                                                                                    <i class="fas fa-times"></i>
                                                                                </button>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="img-box">
                                                                                <img src="{{ asset('/images/avatar.png') }}"
                                                                                    alt="thumbnail">
                                                                                <button class="btn-r-close" title="Delete image"
                                                                                    type="button">
                                                                                    <i class="fas fa-times"></i>
                                                                                </button>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                            </div>
                        </div>
                        {{-- =======================./Variation================= --}}
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="box box-solid">
                            <div class="box-header with-border">
                                <h3 class="box-title">Status</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="form-group">
                                    <button type="submit" class="pull-right btn btn-sm btn-primary navbar-btn">Publish</button>
                                    <select class="form-control select2" style="width: 100%;" tabindex="-1" aria-hidden="true" name="status">
                                        <option value="publishhed" {{ $product->status === "published" ? 'selected' : '' }}>Published</option>
                                        <option value="unpublished" {{ $product->status === "unpublished" ? 'selected' : '' }}>Unpublished</option>
                                        <option value="draft" {{ $product->status === "draft" ? 'selected' : '' }}>Save Draft</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>

                        <div class="box box-solid">
                            <div class="box-header with-border">
                                <h3 class="box-title">Options</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="form-group">
                                    <select class="form-control select2" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                        <option value="null">Choose product brand</option>
                                        @foreach ($brands as $b)
                                        <option value="{{ $b->id}}" {{  $b->id === $product->brand_id  ? 'selected' : ''}}>{{ ucwords($b->name) }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                {{-- ======================./Brand================ --}}

                                <br>

                                <div class="form-group">
                                    <select class="form-control select2" style="width: 100%;" tabindex="-1" aria-hidden="true" name="country-id">
                                        <option selected="selected" value="null">Select made by country </option>
                                        @foreach ($countries as $c)
                                        <option value="{{ $c->id}}" {{  $c->id === $product->country_id ? 'selected' : ''}}>{{ ucwords($c->localization['en']['display_name']) }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                {{-- ======================./Country================ --}}

                                {{--  <div class="row from-group">
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
                                </div>  --}}
                                {{-- ========================./Allow==================== --}}

                            </div>
                            <!-- /.box-body -->
                        </div>
                        {{-- =========================./Options======================= --}}


                        <div class="box box-solid">
                            <div class="box-header with-border">
                                <h3 class="box-title">Categories</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="form-group cat-list">
                                      @foreach ($categories as $c)
                                    <div class="checkbox">
                                        <label id="p-{{ $c->id }}" >
                                            <input type="checkbox" id="c-{{ $c->id }}" value="{{ $c->id }}" name="categories[]" {{ $product->categories()->find($c->id) ? "checked" : "" }}>
                                            {{ ucwords($c->name) }}
                                        </label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        {{-- =========================./Category======================= --}}

                        <div class="box box-solid">
                            <div class="box-header with-border">
                                <h3 class="box-title">Tag s</h3>
                            </div>
                            <div class="box-body">
                                <div class="form-group mb-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-default btn-flat">Add</button>
                                        </span>
                                    </div>
                                    <p class="help-block mb-4">Separate tags with commas</p>
                                    <ul class="tag-list">
                                        <li>
                                            <div class="tag">
                                                <button type="button" class="btn btn-xs btn-default btn-flat btn-r-close">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                                <span class="title">Hello</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tag">
                                                <button type="button" class="btn btn-xs btn-default btn-flat btn-r-close">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                                <span class="title">Hello</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tag">
                                                <button type="button" class="btn btn-xs btn-default btn-flat btn-r-close">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                                <span class="title">Hello</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tag">
                                                <button type="button" class="btn btn-xs btn-default btn-flat btn-r-close">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                                <span class="title">Hello</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tag">
                                                <button type="button" class="btn btn-xs btn-default btn-flat btn-r-close">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                                <span class="title">Hello</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        {{-- =========================./Tag's===================== --}}

                        <div class="box box-solid">
                            <div class="box-header with-border">
                                <h3 class="box-title">Feature Image</h3>
                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool">Add New</button>
                                </div>
                            </div>
                            <div class="box-body">
                                <ul class="img-list">
                                    <li>
                                        <div class="img-box">
                                            {{--  <img src="{{ asset('/images/avatar.png') }}" alt="thumbnail">  --}}
                                            <img src="{{ Storage::url( $product->image ) }}" alt="Icon" style="width:100px; height:100px">
                                            <button class="btn-r-close" title="Delete image" type="button">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- =====================./Product-iamge================= --}}

                        <div class="box box-solid">
                            <div class="box-header with-border">
                                <h3 class="box-title">Video</h3>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="video-url">Youtube embed url</label>
                                    <input type="text" class="form-control" id="video-url" name="video-url" value="{{ $product->video_url }}">
                                </div>
                            </div>
                        </div>
                        {{-- =====================./Video-URL================= --}}
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>

@endsection
