@php
$_activePrimaryNav = 'User';
$_activeSecondaryNav = 'create';
@endphp
@extends('backend.layouts.default')
@section('title', 'Create User')
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

                        <div class="box box-solid mt-3">
                            {{-- <div class="box-header with-border">
                                <a href="#" class="btn btn-sm btn-default pull-right">All</a>
                            </div> --}}
                            <div class="box-body p-0">
                                <div class="nav-tabs-custom mb-0">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Basic</a></li>
                                        <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Address</a></li>
                                        <li class="pull-right">
                                            <a href="#" class="text-muted"><i class="fas fa-cog"></i></a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_1">
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
                                                    <span class="help-block">The First Name field is required.</span>
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
                                                    <span class="help-block">The Display Name User Name field is
                                                        required.</span>
                                                    @endif
                                                </div>
                                                <div class="col-lg-6 form-group {{  $errors->has('email') ? 'has-error' : '' }}">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control" id="email" name="email">
                                                    @if($errors->has('email'))
                                                    <span class="help-block">The Display Name Email field is required.</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 form-group {{  $errors->has('password') ? 'has-error' : '' }}">
                                                    <label for="password">Password</label>
                                                    <input type="password" class="form-control" id="password" name="password">
                                                    @if($errors->has('password'))
                                                    <span class="help-block">The Display Password field is required.</span>
                                                    @endif
                                                </div>
                                                <div class="col-lg-6 form-group">
                                                    <label for="display-name-bn">Role </label>
                                                    <select class="form-control" placeholder="Select Role" name="role">
                                                        @foreach ($roles as $role)
                                                        <option value="{{  $role->id }}">{{ $role->display_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="about">About</label>
                                                <textarea class="form-control" id="about" rows="3" name="about"></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="avatar-url">Avatar Url</label>
                                                <input type="text" class="form-control" id="avatar-url" name="avatar-url">
                                            </div>
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="tab_2">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h4 class="form-title">Billing Address</h4>
                                                    <div class="form-group">
                                                        <label for="billing-address-line-1">Address Line 1</label>
                                                        <input type="text" class="form-control" id="billing-address-line-1"
                                                            name="billing-address-line-1">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="billing-address-line-2">Address Line 2</label>
                                                        <input type="text" class="form-control" id="billing-address-line-2"
                                                            name="billing-address-line-2">
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>District</label>
                                                                <select class="form-control" name="billing-district">
                                                                    <option value="">Choose District</option>
                                                                    <option value="narsingdi">Narsingdi</option>
                                                                    <option value="tangail">Tangail</option>
                                                                    <option value="patuakhali">Patuakhali</option>
                                                                    <option value="comilla">Comilla</option>
                                                                    <option value="mymensingh">Mymensingh</option>
                                                                    <option value="rajshahi">Rajshahi</option>
                                                                    <option value="sylhet">Sylhet</option>
                                                                    <option value="rangpur">Rangpur</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>Division</label>
                                                                <select class="form-control" name="billing-division">
                                                                    <option value="">Choose Division</option>
                                                                    <option value="barishal">Barishal</option>
                                                                    <option value="chattagram">Chattagram</option>
                                                                    <option value="dhaka">Dhaka</option>
                                                                    <option value="khulna">Khulna</option>
                                                                    <option value="mymensingh">Mymensingh</option>
                                                                    <option value="rajshahi">Rajshahi</option>
                                                                    <option value="sylhet">Sylhet</option>
                                                                    <option value="rangpur">Rangpur</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>Thana</label>
                                                                <select class="form-control" name="billing-thana">
                                                                    <option value="">Choose Thana</option>
                                                                    <option value="narsingdi">Narsingdi</option>
                                                                    <option value="tangail">Tangail</option>
                                                                    <option value="patuakhali">Patuakhali</option>
                                                                    <option value="comilla">Comilla</option>
                                                                    <option value="mymensingh">Mymensingh</option>
                                                                    <option value="rajshahi">Rajshahi</option>
                                                                    <option value="sylhet">Sylhet</option>
                                                                    <option value="rangpur">Rangpur</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="billing-zip">Zip / Postal Code</label>
                                                                <input type="text" class="form-control" id="billing-zip"
                                                                    name="billing-zip">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <h4 class="form-title">Shipping Address</h4>
                                                    <div class="form-group">
                                                        <label for="shipping-address-line-1">Address Line 1</label>
                                                        <input type="text" class="form-control" id="shipping-address-line-1"
                                                            name="shipping-address-line-1">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="shipping-address-line-2">Address Line 2</label>
                                                        <input type="text" class="form-control" id="shipping-address-line-2"
                                                            name="shipping-address-line-2">
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>District</label>
                                                                <select class="form-control" name="shipping-district">
                                                                    <option value="">Choose District</option>
                                                                    <option value="narsingdi">Narsingdi</option>
                                                                    <option value="tangail">Tangail</option>
                                                                    <option value="patuakhali">Patuakhali</option>
                                                                    <option value="comilla">Comilla</option>
                                                                    <option value="mymensingh">Mymensingh</option>
                                                                    <option value="rajshahi">Rajshahi</option>
                                                                    <option value="sylhet">Sylhet</option>
                                                                    <option value="rangpur">Rangpur</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>Division</label>
                                                                <select class="form-control" name="shipping-division">
                                                                    <option value="">Choose Division</option>
                                                                    <option value="barishal">Barishal</option>
                                                                    <option value="chattagram">Chattagram</option>
                                                                    <option value="dhaka">Dhaka</option>
                                                                    <option value="khulna">Khulna</option>
                                                                    <option value="mymensingh">Mymensingh</option>
                                                                    <option value="rajshahi">Rajshahi</option>
                                                                    <option value="sylhet">Sylhet</option>
                                                                    <option value="rangpur">Rangpur</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>Thana</label>
                                                                <select class="form-control" name="shipping-thana">
                                                                    <option value="">Choose Thana</option>
                                                                    <option value="narsingdi">Narsingdi</option>
                                                                    <option value="tangail">Tangail</option>
                                                                    <option value="patuakhali">Patuakhali</option>
                                                                    <option value="comilla">Comilla</option>
                                                                    <option value="mymensingh">Mymensingh</option>
                                                                    <option value="rajshahi">Rajshahi</option>
                                                                    <option value="sylhet">Sylhet</option>
                                                                    <option value="rangpur">Rangpur</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="shipping-zip">Zip / Postal Code</label>
                                                                <input type="text" class="form-control" id="shipping-zip"
                                                                    name="shipping-zip">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
