@php
    $_activePrimaryNav = 'taxonomy';
    $_activeSecondaryNav = 'create-categories';
@endphp
@extends('backend.layouts.default') 
@section('title', 'Create Category') 
@section('content')

<section class="content-header">
    <h1>
        Category
        <small>Add new</small>
    </h1>
    {{--  <ol class="breadcrumb">
        <li>
            <a href="#">
                <i class="fa fa-dashboard"></i> Home</a>
        </li>
        <li class="active">Dashboard</li>
    </ol>  --}}
</section>

<section class="content">


    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                    <form action="{{ route('backend.categories.store') }}" method="post">

                        {{ csrf_field() }}

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
                                                <div class="col-lg-6 form-group {{  $errors->has('name') ? 'has-error' : '' }}">
                                                    <label for="name">Name</label>
                                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                                                    @if($errors->has('name'))
                                                    <span class="help-block">Name field is required.</span>
                                                    @endif
                                                </div>
                                                <div class="col-lg-6 form-group">
                                                    <label for="display-name-bn">Parent Category</label>
                                                    <select class="form-control select2" placeholder="Select Category"  name="parent_id">
                                                    <option value="0">Select Category</option>
                                                    @foreach ($categories as $c)
                                                    <option value="{{ $c->id }}" id="p-{{ $c->id }}">{{ ucwords($c->localization['bn']['display_name']) }}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            
                                             {{--  <option value="0">Select Category</option>

                    
                                                    @foreach ($categories as $c)
                                                    <option value="{{ $c->id }}" id="p-{{ $c->id }}">{{ $c->localization['bn']['display_name'] }}</option>
                                                    @endforeach
                                            </div>  --}}

                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea class="form-control" id="description" rows="3" name="description">{{Request::old('description')}}</textarea>
                                            </div>
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="tab_2">
                                            <div class="form-group">
                                                <label for="logo-url">Logo Url</label>
                                                <input type="text" class="form-control" id="logo-url" name="logo-url" value="{{ old('logo-url') }}">
                                                <p class="help-block">Example block-level help text here.</p>
                                            </div>

                                            <div class="form-group">
                                                <label for="banner-url">Banner Url</label>
                                                <input type="text" class="form-control" id="banner-url" name="banner-url" value="{{ old('banner-url') }}">
                                                <p class="help-block">Example block-level help text here.</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="icone-url">Icon Url</label>
                                                <input type="text" class="form-control" id="icon-url" name="icon-url" value="{{ old('icon-url') }}">
                                                <p class="help-block">Example block-level help text here.</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="thumbnail-url">Thumbnail Url</label>
                                                <input type="text" class="form-control" id="thumbnail-url" name="thumbnail-url" value="{{ old('thumbnail-url') }}">
                                                <p class="help-block">Example block-level help text here.</p>
                                            </div>
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="tab_3">
                                            <div class="form-group">
                                                <label for="meta-title">Meta Title</label>
                                                <input type="text" class="form-control" id="meta-title" name="meta-title" value="{{ old('meta-title') }}">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="meta-keywords">Meta Keywords</label>
                                                <input type="text" class="form-control" id="meta-keywords" name="meta-keywords" value="{{ old('meta-keywords') }}">
                                            </div>
            
                                            <div class="form-group">
                                                <label for="meta-description">Meta Description</label>
                                                <textarea class="form-control" id="description" rows="3" name="meta-description">{{Request::old('description')}}</textarea>
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
