@extends('backend.layouts.default')

@section('title', 'Create Category') 


@section('content')

<section class="content-header">
    <h1>
       Offer
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
                    <form action="{{ route('backend.offers.store') }}" method="post">

                            {{ csrf_field() }}

                        <div class="box mt-3">
                            <div class="box-header with-border">
                                <h3 class="box-title">Create</h3>
                                <div class="box-tools pull-right">
                                    <a href="#" class="btn btn-sm btn-default">All</a>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="display_name_en">Display Name (english)</label>
                                        <input type="text" class="form-control" id="display_name_en" name="display-name-en" value="{{ old('display-name-en') }}">
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label for="display-name-bn">Display Name (bangla)</label>
                                        <input type="text" class="form-control" id="display-name-bn" name="display-name-bn" value="{{ old('display-name-bn') }}">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 form-group">
                                        <label for="slug">Slug</label>
                                        <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug') }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description" rows="3" name="description">{{Request::old('description')}}</textarea>
                                </div>

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
                                      
                                <div class="form-group">
                                    <label for="feature-image-url">Url</label>
                                    <input type="text" class="form-control" id="feature-image-url" name="feature-image-url" value="{{ old('feature-image-url') }}">
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
