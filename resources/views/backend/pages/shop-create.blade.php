@php
    $_activePrimaryNav = 'shop';
    $_activeSecondaryNav = 'create';
@endphp
@extends('backend.layouts.default') 
@section('title', 'Create Shop') 
@section('content')

<section class="content-header">
    <h1>
        Shop
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
                    <form action="{{ route('backend.shops.store') }}" method="post">

                        {{ csrf_field() }}

                        <div class="box box-solid mt-3">
                            {{-- <div class="box-header with-border">
                                <a href="#" class="btn btn-sm btn-default pull-right">All</a>
                            </div> --}}
                            <div class="box-body p-0">
                                <div class="nav-tabs-custom mb-0">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Basic</a></li>
                                        <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Business Address</a></li>
                                        <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">Warehouse Address</a></li>
                                        <li class=""><a href="#tab_4" data-toggle="tab" aria-expanded="false">Return Address</a></li>
                                        <li class=""><a href="#tab_5" data-toggle="tab" aria-expanded="true">Meta</a></li>
                                        <li class="pull-right">
                                            <a href="#" class="text-muted"><i class="fas fa-cog"></i></a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_1">
                                            <div class="row">
                                                <div class="col-lg-6 form-group {{  $errors->has('name') ? 'has-error' : '' }}">
                                                    <label for="name">Name</label>
                                                    <input type="text" class="form-control" id="name" name="name">
                                                    @if($errors->has('name'))
                                                    <span class="help-block">Name field is required.</span>
                                                    @endif
                                                </div>
                                                <div class="col-lg-6 form-group">
                                                    <label for="display-name-bn">Status</label>
                                                    <select class="form-control" placeholder="Select Status" name="status">
                                                        <option value="active">Active</option>
                                                        <option value="inactive">Inactive</option>
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
                                            <div class="form-group">
                                                <label for="shop-email-admin">Shop Email Edmin</label>
                                                <input type="email" class="form-control" id="shop-email-admin" name="shop-email-admin">
                                            </div>
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="tab_2">
                                            <div class="form-group {{  $errors->has('business-address-line-1') ? 'has-error' : '' }}">
                                                <label for="address-line-1">Address Line 1</label>
                                                <input type="text" class="form-control" id="address-line-1" name="business-address-line-1">
                                                @if($errors->has('business-address-line-1'))
                                                    <span class="help-block">Address 1 is required.</span>
                                                @endif
                                            </div>

                                            <div class="form-group {{  $errors->has('business-address-line-2') ? 'has-error' : '' }}">
                                                <label for="address-line-2">Address Line 2</label>
                                                <input type="text" class="form-control" id="address-line-2" name="business-address-line-2">
                                                @if($errors->has('business-address-line-2'))
                                                    <span class="help-block">Address 2 is required.</span>
                                                @endif
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group {{  $errors->has('business-country-id') ? 'has-error' : '' }}">
                                                        <label>Country</label>
                                                        <select class="form-control" name="business-country-id">
                                                            <option value="">Choose Country</option>
                                                            @foreach ($countries as $c)
                                                            <option value="{{ $c->id}}">{{ ucwords($c->localization['en']['display_name']) }}</option>
                                                            @endforeach
                                                        </select>
                                                        @if($errors->has('business-country-id'))
                                                        <span class="help-block">Country is required.</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group {{  $errors->has('business-district-id') ? 'has-error' : '' }}">
                                                        <label>District</label>
                                                        <select class="form-control" name="business-district-id">
                                                            <option value="">Choose District</option>
                                                            @foreach ($districts as $d)
                                                            <option value="{{ $d->id}}">{{ ucwords($d->localization['en']['display_name']) }}</option>
                                                            @endforeach
                                                        </select>
                                                        @if($errors->has('business-district-id'))
                                                        <span class="help-block">District is required.</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group {{  $errors->has('business-division-id') ? 'has-error' : '' }}">
                                                        <label>Division</label>
                                                        <select class="form-control" name="business-division-id">
                                                            <option value="">Choose Division</option>
                                                            @foreach ($divisions as $d)
                                                            <option value="{{ $d->id}}">{{ ucwords($d->localization['en']['display_name']) }}</option>
                                                            @endforeach
                                                        </select>
                                                        @if($errors->has('business-division-id'))
                                                        <span class="help-block">Division is required.</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group {{  $errors->has('business-thana-id') ? 'has-error' : '' }}">
                                                        <label>Thana</label>
                                                        <select class="form-control" name="business-thana-id">
                                                            <option value="">Choose Thana</option>
                                                            @foreach ($thanas as $t)
                                                            <option value="{{ $t->id}}">{{ ucwords($t->localization['en']['display_name']) }}</option>
                                                            @endforeach
                                                        </select>
                                                        @if($errors->has('business-thana-id'))
                                                        <span class="help-block">Thana is required.</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group {{  $errors->has('business-zip') ? 'has-error' : '' }}">
                                                        <label for="zip">Zip / Postal Code</label>
                                                        <input type="text" class="form-control" id="zip" name="business-zip">
                                                        @if($errors->has('business-zip'))
                                                        <span class="help-block">Zip is required.</span>
                                                        @endif
                                                     </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="tab_3">
                                            <div class="form-group {{  $errors->has('warehouse-address-line-1') ? 'has-error' : '' }}">
                                                <label for="address-line-1">Address Line 1</label>
                                                <input type="text" class="form-control" id="address-line-1" name="warehouse-address-line-1">
                                                @if($errors->has('warehouse-address-line-1'))
                                                <span class="help-block">Address 1 is required</span>
                                                @endif
                                            </div>

                                            <div class="form-group {{ $errors->has('warehouse-address-line-2') ? 'has-error' : '' }}">
                                                <label for="address-line-2">Address Line 2</label>
                                                <input type="text" class="form-control" id="address-line-2" name="warehouse-address-line-2">
                                                @if($errors->has('warehouse-address-line-2'))
                                                <span class="help-block">Address 2 is required</span>
                                                @endif
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group {{ $errors->has('warehouse-country-id') ? 'has-error' : '' }}">
                                                        <label>Country</label>
                                                        <select class="form-control" name="warehouse-country-id">
                                                            <option value="">Choose Country</option>
                                                            @foreach ($countries as $c)
                                                            <option value="{{ $c->id}}">{{ ucwords($c->localization['en']['display_name']) }}</option>
                                                            @endforeach
                                                        </select>
                                                        @if($errors->has('warehouse-country-id'))
                                                        <span class="help-block">Country is required</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group {{ $errors->has('warehouse-district-id') ? 'has-error' : '' }}">
                                                        <label>District</label>
                                                        <select class="form-control" name="warehouse-district-id">
                                                            <option value="">Choose District</option>
                                                            @foreach ($districts as $d)
                                                            <option value="{{ $d->id}}">{{ ucwords($d->localization['en']['display_name']) }}</option>
                                                            @endforeach
                                                        </select>
                                                        @if($errors->has('warehouse-district-id'))
                                                        <span class="help-block">District is required</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group {{ $errors->has('warehouse-division-id') ? 'has-error' : '' }}">
                                                        <label>Division</label>
                                                        <select class="form-control" name="warehouse-division-id">
                                                            <option value="">Choose Division</option>
                                                            @foreach ($divisions as $d)
                                                            <option value="{{ $d->id}}">{{ ucwords($d->localization['en']['display_name']) }}</option>
                                                            @endforeach
                                                        </select>
                                                        @if($errors->has('warehouse-division-id'))
                                                        <span class="help-block">Division is required</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group {{ $errors->has('warehouse-thana-id') ? 'has-error' : '' }}">
                                                        <label>Thana</label>
                                                        <select class="form-control" name="warehouse-thana-id">
                                                            <option value="">Choose Thana</option>
                                                            @foreach ($thanas as $t)
                                                            <option value="{{ $t->id}}">{{ ucwords($t->localization['en']['display_name']) }}</option>
                                                            @endforeach
                                                        </select>
                                                        @if($errors->has('warehouse-thana-id'))
                                                        <span class="help-block">Thana is required</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group {{ $errors->has('warehouse-zip') ? 'has-error' : '' }}">
                                                        <label for="zip">Zip / Postal Code</label>
                                                        <input type="text" class="form-control" id="zip" name="warehouse-zip">
                                                        @if($errors->has('warehouse-zip'))
                                                        <span class="help-block">Zip is required</span>
                                                        @endif
                                                     </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="tab_4">
                                            <div class="form-group {{ $errors->has('return-address-line-1') ? 'has-error' : '' }}">
                                                <label for="address-line-1">Address Line 1</label>
                                                <input type="text" class="form-control" id="return-address-line-1" name="return-address-line-1">
                                                @if($errors->has('return-address-line-1'))
                                                <span class="help-block">Address 1 is required</span>
                                                @endif
                                            </div>

                                            <div class="form-group {{ $errors->has('return-address-line-2') ? 'has-error' : '' }}">
                                                <label for="address-line-2">Address Line 2</label>
                                                <input type="text" class="form-control" id="address-line-2" name="return-address-line-2">
                                                @if($errors->has('return-address-line-2'))
                                                <span class="help-block">Address 2 is required</span>
                                                @endif
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group {{ $errors->has('return-country-id') ? 'has-error' : '' }}">
                                                        <label>Country</label>
                                                        <select class="form-control" name="return-country-id">
                                                            <option value="">Choose Country</option>
                                                            @foreach ($countries as $c)
                                                            <option value="{{ $c->id}}">{{ ucwords($c->localization['en']['display_name']) }}</option>
                                                            @endforeach
                                                        </select>
                                                        @if($errors->has('return-country-id'))
                                                        <span class="help-block">Country is required</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group {{ $errors->has('return-district-id') ? 'has-error' : '' }}">
                                                        <label>District</label>
                                                        <select class="form-control" name="return-district-id">
                                                            <option value="">Choose District</option>
                                                            @foreach ($districts as $d)
                                                            <option value="{{ $d->id}}">{{ ucwords($d->localization['en']['display_name']) }}</option>
                                                            @endforeach
                                                        </select>
                                                        @if($errors->has('return-district-id'))
                                                        <span class="help-block">District is required</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group {{ $errors->has('return-division-id') ? 'has-error' : '' }}">
                                                        <label>Division</label>
                                                        <select class="form-control" name="return-division-id">
                                                            <option value="">Choose Division</option>
                                                            @foreach ($divisions as $d)
                                                            <option value="{{ $d->id}}">{{ ucwords($d->localization['en']['display_name']) }}</option>
                                                            @endforeach
                                                        </select>
                                                        @if($errors->has('return-division-id'))
                                                        <span class="help-block">Division is required</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group {{ $errors->has('return-thana-id') ? 'has-error' : '' }}">
                                                        <label>Thana</label>
                                                        <select class="form-control" name="return-thana-id">
                                                            <option value="">Choose Thana</option>
                                                            @foreach ($thanas as $t)
                                                            <option value="{{ $t->id}}">{{ ucwords($t->localization['en']['display_name']) }}</option>
                                                            @endforeach
                                                        </select>
                                                        @if($errors->has('return-thana-id'))
                                                        <span class="help-block">Thana is required</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group {{  $errors->has('business-zip') ? 'has-error' : '' }}">
                                                        <label for="zip">Zip / Postal Code</label>
                                                        <input type="text" class="form-control" id="zip" name="return-zip">
                                                        @if($errors->has('return-zip'))
                                                        <span class="help-block">Zip is required</span>
                                                        @endif
                                                     </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="tab_5">
                                            <div class="form-group">
                                                <label for="meta-title">Meta Title</label>
                                                <input type="text" class="form-control" id="meta-title" name="meta-title">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="meta-keywords">Meta Keywords</label>
                                                <input type="text" class="form-control" id="meta-keywords" name="meta-keywords">
                                            </div>
            
                                            <div class="form-group">
                                                <label for="meta-description">Meta Description</label>
                                                <textarea class="form-control" id="description" rows="3" name="meta-description"></textarea>
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
