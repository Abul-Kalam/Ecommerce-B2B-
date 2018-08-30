@php
    $_activePrimaryNav = 'product-category';
    $_activeSecondaryNav = 'edit';
@endphp
@extends('backend.layouts.default')

@section('title', 'Edit Category') 


@section('content')

<section class="content-header">
    <h1>
        Dashboard
        <small>Version 2.0</small>
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

                    <form action="{{ route('backend.categories.update', $category->id ) }}" method="post">

                            {{ csrf_field() }}  {{ method_field('PUT') }}

                        <div class="box mt-3">
                            <div class="box-header with-border">
                                <a href="{{ route('backend.categories.create')}}" class="btn btn-sm btn-default">Add New</a>
                                <div class="box-tools pull-right">
                                    <a href="{{ route('backend.categories.index')}}" class="btn btn-sm btn-default">All</a>
                                    <a href="#" class="btn btn-sm btn-default mt-2">All</a>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-lg-6 form-group {{  $errors->has('display-name-en') ? 'has-error' : '' }}">
                                        <label for="display-name-en">Display Name En</label>
                                        <input type="text" class="form-control" id="display-name-en" name="display-name-en" value="{{  $category->localization['en']['display_name'] }}">
                                        @if($errors->has('display-name-en'))
                                        <span class="help-block">The Display Name En field is required.</span>
                                    @endif
                                    </div>

                                    <div class="col-lg-6 form-group {{  $errors->has('display-name-bn') ? 'has-error' : '' }}">
                                        <label for="display-name-bn">Display Name Bn</label>
                                        <input type="text" class="form-control" id="display-name-bn" name="display-name-bn" value="{{  $category->localization['bn']['display_name'] }}">
                                        @if($errors->has('display-name-bn'))
                                        <span class="help-block">The Display Name Bn field is required.</span>
                                    @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 form-group  {{  $errors->has('slug') ? 'has-error' : '' }}">
                                        <label for="slug">Slug</label>
                                        <input type="text" class="form-control" id="slug" name="slug" value="{{ $category->slug }}">

                                        @if($errors->has('slug'))
                                        <span class="help-block">The slug field is required.</span>
                                        @endif
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label for="display_name_bn">Parent Category</label>
                                        <select class="form-control">
                                            <option>Select Category</option>
                                            <option>Man's Fashion</option>
                                            <option>Womens's Fashion</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description" rows="3" name="description"> {{ $category->description }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="meta-title">Meta Title</label>
                                    <input type="text" class="form-control" id="meta-title" name="meta-title" value="{{ $category->meta['title'] }}">
                                </div>

                                <div class="form-group">
                                    <label for="meta-keywords">Meta Keywords</label>
                                    <input type="text" class="form-control" id="meta-keywords" name="meta-keywords" value="{{ $category->meta['keywords'] }}">
                                </div>

                                <div class="form-group">
                                    <label for="meta-description">Meta Description</label>
                                    <textarea class="form-control" id="description" rows="3" name="meta-description"> {{ $category->meta['description'] }}</textarea>
                                </div>
                                      
                                <div class="form-group">
                                    <label for="feature-image-url">Feature Image Url</label>
                                    <input type="text" class="form-control" id="feature-image-url" name="feature-image-url" value="{{ $category->image_url }}">
                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary pull-right">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
