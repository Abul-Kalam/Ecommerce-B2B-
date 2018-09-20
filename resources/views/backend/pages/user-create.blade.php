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
                                                    <label for="display-name-en">Display Name (english)</label>
                                                    <input type="text" class="form-control" id="display-name-en" name="display-name-en">
                                                    @if($errors->has('display-name-en'))
                                                    <span class="help-block">The Display Name English field is required.</span>
                                                    @endif
                                                </div>
                                                <div class="col-lg-6 form-group {{  $errors->has('display-name-bn') ? 'has-error' : '' }}">
                                                    <label for="display-name-bn">Display Name (bangla)</label>
                                                    <input type="text" class="form-control" id="display-name-bn" name="display-name-bn">
                                                    @if($errors->has('display-name-bn'))
                                                    <span class="help-block">The Display Name Bangla field is required.</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row">
                                                {{-- <div class="col-lg-6 form-group {{  $errors->has('name') ? 'has-error' : '' }}">
                                                    <label for="name">User Name</label>
                                                    <input type="text" class="form-control" id="name" name="name">
                                                    @if($errors->has('name'))
                                                    <span class="help-block">The Display Name User Name field is
                                                        required.</span>
                                                    @endif
                                                </div> --}}
                                                <div class="col-lg-12 form-group {{  $errors->has('email') ? 'has-error' : '' }}">
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
                                                <div class="col-lg-6 form-group {{  $errors->has('role') ? 'has-error' : '' }}">
                                                    <label for="display-name-bn">Role </label>
                                                    <select class="form-control" placeholder="Select Role" name="role">
                                                        <option value="">Choose Role</option>
                                                        @foreach ($roles as $role)
                                                        <option value="{{  $role->id }}">{{ ucwords($role->display_name) }}</option>
                                                        @endforeach
                                                        @if($errors->has('role'))
                                                        <span class="help-block">The Display Role field is required.</span>
                                                        @endif
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
                                                    <div class="form-group {{  $errors->has('billing-address-line-1') ? 'has-error' : '' }}">
                                                        <label for="billing-address-line-1">Address Line 1</label>
                                                        <input type="text" class="form-control" id="billing-address-line-1"
                                                            name="billing-address-line-1">
                                                            @if($errors->has('billing-address-line-1'))
                                                            <span class="help-block">The Address Line 1 field is required.</span>
                                                            @endif
                                                            
                                                    </div>

                                                    <div class="form-group {{  $errors->has('billing-address-line-2') ? 'has-error' : '' }}">
                                                        <label for="billing-address-line-2">Address Line 2</label>
                                                        <input type="text" class="form-control" id="billing-address-line-2"
                                                            name="billing-address-line-2">
                                                            @if($errors->has('billing-address-line-2'))
                                                            <span class="help-block">The Address Line 2 field is required.</span>
                                                            @endif
                                                            
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group {{  $errors->has('billing-country-id') ? 'has-error' : '' }}">
                                                                <label>Country</label>
                                                                <select class="form-control" name="billing-country-id">
                                                                        <option value="">Choose Country</option>
                                                                        @foreach ($countries as $c)
                                                                        <option value="{{ $c->id}}">{{ ucwords($c->localization['en']['display_name']) }}</option>
                                                                        @endforeach
                                                                        @if($errors->has('billing-country-id'))
                                                                        <span class="help-block">The Country field is required.</span>
                                                                         @endif
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group {{  $errors->has('billing-district-id') ? 'has-error' : '' }}">
                                                                <label>District</label>
                                                                <select class="form-control" name="billing-district-id">
                                                                        <option value="">Choose District</option>
                                                                        @foreach ($districts as $d)
                                                                        <option value="{{ $d->id}}">{{ ucwords($d->localization['en']['display_name']) }}</option>
                                                                        @endforeach
                                                                        @if($errors->has('billing-district-id'))
                                                                        <span class="help-block">The District field is required.</span>
                                                                         @endif
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group {{  $errors->has('billing-division-id') ? 'has-error' : '' }}">
                                                                <label>Division</label>
                                                                <select class="form-control" name="billing-division-id">
                                                                    <option value="">Choose Division</option>
                                                                    @foreach ($divisions as $d)
                                                                    <option value="{{ $d->id}}">{{ ucwords($d->localization['en']['display_name']) }}</option>
                                                                    @endforeach
                                                                    @if($errors->has('billing-division-id'))
                                                                        <span class="help-block">The Division field is required.</span>
                                                                    @endif
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group {{  $errors->has('billing-thana-id') ? 'has-error' : '' }}">
                                                                <label>Thana</label>
                                                                <select class="form-control" name="billing-thana-id">
                                                                    <option value="">Choose Thana</option>
                                                                    @foreach ($thanas as $d)
                                                                    <option value="{{ $d->id}}">{{ ucwords($d->localization['en']['display_name']) }}</option>
                                                                    @endforeach
                                                                    @if($errors->has('billing-thana-id'))
                                                                    <span class="help-block">The Thana field is required.</span>
                                                                     @endif
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group {{  $errors->has('billing-zip') ? 'has-error' : '' }}">
                                                                <label for="billing-zip">Zip / Postal Code</label>
                                                                <input type="text" class="form-control" id="billing-zip"
                                                                    name="billing-zip">
                                                                @if($errors->has('billing-zip'))
                                                                <span class="help-block">The Zip field is required.</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <h4 class="form-title">Shipping Address</h4>
                                                    <div class="form-group {{  $errors->has('shipping-address-line-1') ? 'has-error' : '' }}">
                                                        <label for="shipping-address-line-1">Address Line 1</label>
                                                        <input type="text" class="form-control" id="shipping-address-line-1"
                                                            name="shipping-address-line-1">
                                                             @if($errors->has('shipping-address-line-1'))
                                                                <span class="help-block">The Address Line 1 field is required.</span>
                                                            @endif
                                                    </div>
                                                    <div class="form-group {{  $errors->has('shipping-address-line-2') ? 'has-error' : '' }}">
                                                        <label for="shipping-address-line-2">Address Line 2</label>
                                                        <input type="text" class="form-control" id="shipping-address-line-2"
                                                            name="shipping-address-line-2">
                                                            @if($errors->has('shipping-address-line-2'))
                                                                <span class="help-block">The Address Line 2 field is required.</span>
                                                            @endif
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group {{  $errors->has('shipping-country-id') ? 'has-error' : '' }}">
                                                                <label>Country</label>
                                                                <select class="form-control" name="shipping-country-id">
                                                                    <option value="">Choose Country</option>
                                                                    @foreach ($countries as $c)
                                                                    <option value="{{ $c->id}}">{{ ucwords($c->localization['en']['display_name']) }}</option>
                                                                    @endforeach
                                                                    @if($errors->has('shipping-country-id'))
                                                                        <span class="help-block">The Country field is required.</span>
                                                                    @endif
                                                            </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group {{  $errors->has('shipping-district-id') ? 'has-error' : '' }}">
                                                                <label>District</label>
                                                                <select class="form-control" name="shipping-district-id">
                                                                    <option value="">Choose District</option>
                                                                    @foreach ($districts as $d)
                                                                    <option value="{{ $d->id}}">{{ ucwords($d->localization['en']['display_name']) }}</option>
                                                                    @endforeach
                                                                    @if($errors->has('shipping-district-id'))
                                                                        <span class="help-block">The District field is required.</span>
                                                                    @endif
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group {{  $errors->has('shipping-division-id') ? 'has-error' : '' }}">
                                                                <label>Division</label>
                                                                <select class="form-control" name="shipping-division-id">
                                                                    <option value="">Choose Division</option>
                                                                    @foreach ($divisions as $d)
                                                                    <option value="{{ $d->id}}">{{ ucwords($d->localization['en']['display_name']) }}</option>
                                                                    @endforeach

                                                                    @if($errors->has('shipping-division-id'))
                                                                        <span class="help-block">The Division field is required.</span>
                                                                    @endif

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group {{  $errors->has('shipping-thana-id') ? 'has-error' : '' }}">
                                                                <label>Thana</label>
                                                                <select class="form-control" name="shipping-thana-id">
                                                                    <option value="">Choose Thana</option>
                                                                    @foreach ($thanas as $d)
                                                                    <option value="{{ $d->id}}">{{ ucwords($d->localization['en']['display_name']) }}</option>
                                                                    @endforeach
                                                                    @if($errors->has('shipping-thana-id'))
                                                                    <span class="help-block">The Thana field is required.</span>
                                                                    @endif
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group {{  $errors->has('shipping-zip') ? 'has-error' : '' }}">
                                                                <label for="shipping-zip">Zip / Postal Code</label>
                                                                <input type="text" class="form-control" id="shipping-zip"
                                                                    name="shipping-zip">
                                                                @if($errors->has('shipping-zip'))
                                                                <span class="help-block">The Zip field is required.</span>
                                                                @endif
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
