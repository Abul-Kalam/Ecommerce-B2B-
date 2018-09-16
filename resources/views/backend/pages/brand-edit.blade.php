@php
    $_activePrimaryNav = 'brand';
    $_activeSecondaryNav = 'create';
    $_alertType = 'success';
    $_alertMessage =  Session::get('message');
@endphp
@extends('backend.layouts.default') 
@section('title', 'Create brand') 
@section('content')

<section class="content-header">
    <h1>
        Brand
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
                    <form action="{{ route('backend.brands.update', $brand->id) }}" method="post">

                        {{ csrf_field() }}   {{ method_field('PUT') }}

                        <div class="box box-solid mt-3">
                            {{-- <div class="box-header with-border">
                                <a href="#" class="btn btn-sm btn-default pull-right">All</a>
                            </div> --}}
                            <div class="box-body p-0">
                                <div class="nav-tabs-custom mb-0">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Basic</a></li>
                                        <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Images</a></li>
                                        <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="true">Meta</a></li>
                                        <li class="pull-right">
                                            <a href="#" class="text-muted"><i class="fas fa-cog"></i></a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_1">
                                            <div class="row">
                                                <div class="col-lg-6 form-group {{  $errors->has('display-name-en') ? 'has-error' : '' }}">
                                                    <label for="display-name-en">Brand Name English</label>
                                                    <input type="text" class="form-control" id="display-name-en" name="display-name-en" value="{{ ucwords($brand->localization['en']['display_name']) }}">
                                                    @if($errors->has('display-name-en'))
                                                    <span class="help-block">The Brand Name English field is required.</span>
                                                    @endif
                                                </div>
                                                <div class="col-lg-6 form-group {{  $errors->has('display-name-bn') ? 'has-error' : '' }}">
                                                    <label for="display-name-bn">Brand Name Bangla</label>
                                                    <input type="text" class="form-control" id="display-name-bn" name="display-name-bn" value="{{ $brand->localization['bn']['display_name'] }}">
                                                    @if($errors->has('display-name-bn'))
                                                    <span class="help-block">The Brand Name Bangla field is required.</span>
                                                    @endif
                                                </div>
                                            </div>
            
                                            <div class="row">
                                                <div class="col-lg-6 form-group {{  $errors->has('slug') ? 'has-error' : '' }}">
                                                    <label for="slug">Slug</label>
                                                    <input type="text" class="form-control" id="slug" name="slug" value="{{ $brand->slug }}">
                                                    @if($errors->has('slug'))
                                                    <span class="help-block">The Display Name slug field is required.</span>
                                                    @endif
                                                </div>
                                                <div class="col-lg-6 form-group  {{ $errors->has('country-id') ? 'has-error' : '' }}">
                                                    <label for="countries">Countries</label>
                                                    <select class="form-control" placeholder="Select country" name="country-id">
                                                        <option value="">Choose Countries</option>
                                                        @foreach ($countries as $c)
                                                        <option value="{{ $c->id }}" {{ $c->id == $brand->country_id ? 'selected' : '' }}>{{ ucwords($c->localization['en']['display_name']) }}</option>
                                                        @endforeach
                                                        @if($errors->has('country-id'))
                                                        <span class="help-block">The Country field is required.</span>
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
            
                                            <div class="form-group">
                                                <label for="about">About</label>
                                                <textarea class="form-control" id="about" rows="3" name="about" > {{ $brand->about }}</textarea>
                                            </div>
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="tab_2">
                                            <div class="form-group">
                                                <label for="logo-url">Logo Url</label>
                                                <input type="text" class="form-control" id="logo-url" name="logo-url" value="{{ $brand->images_url['logo'] }}">
                                                <p class="help-block">Example block-level help text here.</p>
                                            </div>

                                            <div class="form-group">
                                                <label for="banner-url">Banner Url</label>
                                                <input type="text" class="form-control" id="banner-url" name="banner-url" value="{{ $brand->images_url['banner'] }}">
                                                <p class="help-block">Example block-level help text here.</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="icone-url">Icon Url</label>
                                                <input type="text" class="form-control" id="icon-url" name="icon-url" value="{{ $brand->images_url['icon'] }}">
                                                <p class="help-block">Example block-level help text here.</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="thumbnail-url">Thumbnail Url</label>
                                                <input type="text" class="form-control" id="thumbnail-url" name="thumbnail-url" value="{{ $brand->images_url['thumbnail'] }}">
                                                <p class="help-block">Example block-level help text here.</p>
                                            </div>
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="tab_3">
                                            <div class="form-group">
                                                <label for="meta-title">Meta Title</label>
                                                <input type="text" class="form-control" id="meta-title" name="meta-title" value="{{ ucwords($brand->meta['title']) }}">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="meta-keywords">Meta Keywords</label>
                                                <input type="text" class="form-control" id="meta-keywords" name="meta-keywords" value="{{ ucwords($brand->meta['keywords']) }}">
                                            </div>
            
                                            <div class="form-group">
                                                <label for="meta-description">Meta Description</label>
                                                <textarea class="form-control" id="description" rows="3" name="meta-description">{{ $brand->meta['description'] }}</textarea>
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
