@php
    $_activePrimaryNav = 'role';
    $_activeSecondaryNav = 'create';
    $_alertType = 'success';
    $_alertMessage =  Session::get('message');
@endphp



@extends('backend.layouts.default')

@section('title', 'Create Role') 


@section('content')

<section class="content-header">
    <h1>
        Role
        <small>Add new</small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="#">
                <i class="fa fa-dashboard"></i> Home</a>
        </li>
        <li class="active">Role</li>
    </ol>
</section>

<section class="content">
    

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                    <form action="{{ route('backend.roles.update', $role->id) }}" method="post">

                            {{ csrf_field() }}  {{ method_field('PUT') }}

                        <div class="box mt-3">
                            <div class="box-header with-border">
                                <h3 class="box-title">Create</h3>
                                <div class="box-tools pull-right">
                                    <a href="{{ route('backend.roles.index')}}" class="btn btn-sm btn-default">All</a>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-lg-12 form-group {{ $errors->has('display-name') ? 'has-error' : '' }}">
                                        <label for="display-name">Display Name</label>
                                        <input type="text" class="form-control" id="display-name" name="display-name" value="{{ ucwords($role->display_name) }}">
                                        @if($errors->has('display-name'))<span id="helpBlock2" class="help-block">The Display name field is required.</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ ucwords($role->name) }}">
                                        @if($errors->has('name'))<span id="helpBlock2" class="help-block">The Name field is required.</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description" rows="3" name="description">{{ $role->description  }}</textarea>
                                </div>

                                @foreach ($permissions as $permission)
                                <div class="checkbox disabled">
                                <label>
                                    <input type="checkbox" value="{{ $permission->id }}" id="p-{{ $permission->id }}" name="permissions[]" {{ $role->permissions()->find($permission->id) ? "checked" : "" }}>
                                    {{ ucwords($permission->display_name) }}
                                </label>
                                </div>
                                @endforeach

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
