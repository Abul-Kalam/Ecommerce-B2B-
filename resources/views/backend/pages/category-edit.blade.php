@php
    $_activePrimaryNav = 'category';
    $_activeSecondaryNav = 'create';
    $_alertType = 'success';
    $_alertMessage =  Session::get('message');
@endphp
@extends('backend.layouts.default') 
@section('title', 'Create Category') 
@section('content')

<section class="content-header">
    <h1>
        Category
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
                    <form action="{{ route('backend.categories.update', $category->id ) }}" method="post">

                        {{ csrf_field() }}  {{ method_field('PUT') }}

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
                                                <div class="col-lg-6 form-group {{  $errors->has('slug') ? 'has-error' : '' }}">
                                                    <label for="slug">Slug</label>
                                                    <input type="text" class="form-control" id="slug" name="slug" value="{{  $category->slug }}">
                                                    @if($errors->has('slug'))
                                                    <span class="help-block">The Display Name slug field is required.</span>
                                                    @endif
                                                </div>
                                                <div class="col-lg-6 form-group">
                                                    <label for="display-name-bn">Parent Category</label>
                                                    <select class="form-control select2" placeholder="Select Category">
                                                        <option>Man's Fashion</option>
                                                        <option>Womens's Fashion</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
            
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea class="form-control" id="description" rows="3" name="description">{{ $category->description }}</textarea>
                                            </div>
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="tab_2">
                                            <div class="form-group">
                                                <label for="logo-url">Logo Url</label>
                                                <input type="text" class="form-control" id="logo-url" name="logo-url" value="{{  $category->image_url['logo'] }}">
                                                <p class="help-block">Example block-level help text here.</p>
                                            </div>

                                            <div class="form-group">
                                                <label for="banner-url">Banner Url</label>
                                                <input type="text" class="form-control" id="banner-url" name="banner-url" value="{{  $category->image_url['banner'] }}">
                                                <p class="help-block">Example block-level help text here.</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="icone-url">Icone Url</label>
                                                <input type="text" class="form-control" id="icone-url" name="icone-url" value="{{  $category->image_url['icone'] }}">
                                                <p class="help-block">Example block-level help text here.</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="tamanna-url">Tamanna Url</label>
                                                <input type="text" class="form-control" id="tamanna-url" name="tamanna-url" value="{{  $category->image_url['tamanna'] }}">
                                                <p class="help-block">Example block-level help text here.</p>
                                            </div>
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="tab_3">
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
                                                <textarea class="form-control" id="description" rows="3" name="meta-description">{{ $category->meta['description'] }}</textarea>
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
