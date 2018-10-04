@php
    $_activePrimaryNav = 'user-management';
    $_activeSecondaryNav = 'create-permissions';
    $_alertType = 'success';
    $_alertMessage =  Session::get('message');
@endphp



@extends('backend.layouts.default')

@section('title', 'Create Permission') 


@section('content')

<section class="content-header">
    <h1>
        Permission
        <small>Edit</small>
    </h1>
    {{--  <ol class="breadcrumb">
        <li>
            <a href="#">
                <i class="fa fa-dashboard"></i> Home</a>
        </li>
        <li class="active">Permission</li>
    </ol>  --}}
</section>

<section class="content">
    

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                    <form action="{{ route('backend.permissions.update',$permission->id) }}" method="post">

                        {{ csrf_field() }}  {{ method_field('PUT') }}

                        <div class="box mt-3">
                            <div class="box-header with-border">
                                <h3 class="box-title">Edit</h3>
                                <div class="box-tools pull-right">
                                    <a href="{{ route('backend.permissions.index')}}" class="btn btn-sm btn-default">All</a>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-lg-12 form-group {{ $errors->has('display-name') ? 'has-error' : '' }}">
                                        <label for="display-name">Display Name</label>
                                        <input type="text" class="form-control" id="display-name" name="display-name" value="{{  ucwords($permission->display_name) }}">
                                        @if($errors->has('display-name'))<span id="helpBlock2" class="help-block">Display name field is required.</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ $permission->name }}">
                                        @if($errors->has('name'))<span id="helpBlock2" class="help-block">Name field is required.</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description" rows="3" name="description">{{ $permission->description }}</textarea>
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
