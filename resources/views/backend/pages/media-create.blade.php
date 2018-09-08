@php
    $_activePrimaryNav = 'product-category';
    $_activeSecondaryNav = 'create';
    $_alertType = null;
    $_alertMessage = null;
@endphp
@extends('backend.layouts.default')

@section('title', 'Create Category') 


@section('content')

<section class="content-header">
    <h1>
        Product Category
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
                    <form action="{{ route('backend.media.store') }}" method="post" enctype="multipart/form-data">

                            {{ csrf_field() }}

                        <div class="box mt-3">
                            <div class="box-header with-border">
                                <a href="{{ route('backend.media.index')}}" class="btn btn-sm btn-default pull-right">All</a>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-lg-12 form-group {{  $errors->has('title') ? 'has-error' : '' }}">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" id="title" name="title">
                                        @if($errors->has('title'))
                                            <span class="help-block">The Title field is required.</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="caption">Caption</label>
                                    <textarea class="form-control" id="caption" rows="3" name="caption"></textarea>
                                </div>                                      
                                <div class="form-group">
                                    <label for="feature-image-url">Feature Image</label>
                                    <input type="file" name="media">
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
