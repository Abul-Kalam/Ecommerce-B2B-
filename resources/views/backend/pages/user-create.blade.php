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
       User
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
                    <form action="{{ route('backend.users.store') }}" method="post">

                            {{ csrf_field() }}

                        <div class="box mt-3">
                            <div class="box-header with-border">
                                <a href="{{ route('backend.users.index')}}" class="btn btn-sm btn-default pull-right">All</a>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-lg-6 form-group {{  $errors->has('first-name') ? 'has-error' : '' }}">
                                        <label for="first-name">First Name</label>
                                        <input type="text" class="form-control" id="first-name" name="first-name">
                                        @if($errors->has('first-name'))
                                            <span class="help-block">The First Name field is required.</span>
                                        @endif
                                    </div>
                                    <div class="col-lg-6 form-group {{  $errors->has('last-name') ? 'has-error' : '' }}">
                                        <label for="last-name">Last Name</label>
                                        <input type="text" class="form-control" id="last-name" name="last-name">

                                        @if($errors->has('last-name'))
                                        <span class="help-block">The Last Name field is required.</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 form-group {{  $errors->has('display-name-en') ? 'has-error' : '' }}">
                                        <label for="display-name-en">Display Name En</label>
                                        <input type="text" class="form-control" id="display-name-en" name="display-name-en">
                                        @if($errors->has('display-name-en'))
                                            <span class="help-block">The Display Name En field is required.</span>
                                        @endif
                                    </div>
                                    <div class="col-lg-6 form-group {{  $errors->has('display-name-bn') ? 'has-error' : '' }}">
                                        <label for="display-name-bn">Display Name Bn</label>
                                        <input type="text" class="form-control" id="display-name-bn" name="display-name-bn">

                                        @if($errors->has('display-name-bn'))
                                        <span class="help-block">The Display Name Bn field is required.</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 form-group {{  $errors->has('name') ? 'has-error' : '' }}">
                                        <label for="name">User Name</label>
                                        <input type="text" class="form-control" id="name" name="name">
                                        @if($errors->has('name'))
                                            <span class="help-block">The User Name field is required.</span>
                                        @endif
                                    </div>
                                    <div class="col-lg-6 form-group {{  $errors->has('email') ? 'has-error' : '' }}">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email">

                                        @if($errors->has('email'))
                                        <span class="help-block">The Email field is required.</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 form-group {{  $errors->has('password') ? 'has-error' : '' }}">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password">
                                       
                                        @if($errors->has('password'))
                                        <span class="help-block">The Password field is required.</span>
                                        @endif
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label for="display-name-bn">Role</label>
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
                                    <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="image-url">Image Url</label>
                                    <input type="text" class="form-control" id="image-url" name="image-url">
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
