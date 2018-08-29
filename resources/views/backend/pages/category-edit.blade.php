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
                                <h3 class="box-title">Edit</h3>
                                <div class="box-tools pull-right">
                                    <a href="#" class="btn btn-sm btn-default">Add New</a>
                                    <a href="#" class="btn btn-sm btn-default">All</a>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="display_name_en">Display Name En</label>
                                        <input type="text" class="form-control" id="display_name_en" name="display_name_en" value="{{ $category->localization['en']
                                        ['display_name'] }}">
                                    </div>

                                    {{ $category->localization['en']['display_name'] }}
                                    <div class="col-lg-6 form-group">
                                        <label for="display_name_bn">Display Name Bn</label>
                                        <input type="text" class="form-control" id="display_name_bn" name="display_name_bn">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="slug">Slug</label>
                                        <input type="text" class="form-control" id="slug" name="slug" value="{{ $category->slug }}">
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
                                    <input type="text" class="form-control" id="meta-title" name="meta_title" value="{{ $category->meta['title'] }}">
                                </div>

                                <div class="form-group">
                                    <label for="meta-keywords">Meta Keywords</label>
                                    <input type="text" class="form-control" id="meta-keywords" name="meta_keywords" value="{{ $category->meta['keywords'] }}">
                                </div>

                                <div class="form-group">
                                    <label for="meta-description">Meta Description</label>
                                    <textarea class="form-control" id="description" rows="3" name="meta_description"> {{ $category->meta['description'] }}</textarea>
                                </div>
                                      
                                <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <input type="file" id="exampleInputFile">
                                </div>
                                <div class="checkbox">
                                    <label>
                                    <input type="checkbox"> Check me out
                                    </label>
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
