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
                    <form action="{{ route('backend.shops.update', $shop->id) }}" method="post">

                        {{ csrf_field() }}  {{ method_field('PUT') }}

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
                                                <div class="col-lg-6 form-group {{  $errors->has('display-name-en') ? 'has-error' : '' }}">
                                                    <label for="display-name-en">Display Name (english)</label>
                                                    <input type="text" class="form-control" id="display-name-en" name="display-name-en" value="{{ ucwords($shop->localization['en']['display_name']) }}">
                                                    @if($errors->has('display-name-en'))
                                                    <span class="help-block">The Display Name English field is required.</span>
                                                    @endif
                                                </div>
                                                <div class="col-lg-6 form-group {{  $errors->has('display-name-bn') ? 'has-error' : '' }}">
                                                    <label for="display-name-bn">Display Name (bangla)</label>
                                                    <input type="text" class="form-control" id="display-name-bn" name="display-name-bn" value="{{  $shop->localization['bn']['display_name'] }}">
                                                    @if($errors->has('display-name-en'))
                                                    <span class="help-block">The Display Name Bangla field is required.</span>
                                                    @endif
                                                </div>
                                            </div>
            
                                            <div class="row">
                                                <div class="col-lg-6 form-group {{  $errors->has('slug') ? 'has-error' : '' }}">
                                                    <label for="slug">Slug</label>
                                                    <input type="text" class="form-control" id="slug" name="slug" value="{{ $shop->slug}}">
                                                    @if($errors->has('slug'))
                                                    <span class="help-block">The Display Name Slug field is required.</span>
                                                    @endif
                                                </div>
                                                <div class="col-lg-6 form-group">
                                                    <label for="display-name-bn">Status</label>
                                                    <select class="form-control" placeholder="Select Status" name="status">
                                                        <option value="active" {{ $shop->status === "active" ? 'selected' : '' }}>Active</option>
                                                        <option value="inactive" {{ $shop->status === "inactive" ? 'selected' : '' }}>Inactive</option>
                                                    </select>
                                                </div>
                                            </div>
            
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea class="form-control" id="description" rows="3" name="description">{{ $shop->description }}</textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="feature-image-url">Feature Image Url</label>
                                                <input type="text" class="form-control" id="feature-image-url" name="feature-image-url" value="{{ $shop->images_url }}">
                                            </div>
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="tab_2">
                                            <div class="form-group">
                                                <label for="address-line-1">Address Line 1</label>
                                                <input type="text" class="form-control" id="address-line-1" name="business-address-line-1" value="{{
                                                    $shop->address['business_line_1']
                                                }}">
                                            </div>

                                            <div class="form-group">
                                                <label for="address-line-2">Address Line 2</label>
                                                <input type="text" class="form-control" id="address-line-2" name="business-address-line-2" value="{{
                                                    $shop->address['business_line_2']
                                                }}">
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Country</label>
                                                        <select class="form-control" placeholder="Select country" name="business-country-id">
                                                                @foreach ($countries as $c)
                                                                <option value="{{ $c->id}}" {{ $c->id ==$shop->address['business_country_id'] ? 'selected' : '' }}>{{ ucwords($c->localization['en']['display_name']) }}</option>
                                                                @endforeach
                                                                @if($errors->has('country-id'))
                                                                <span class="help-block">The Countrys field is required.</span>
                                                                @endif
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>District</label>
                                                        <select class="form-control" placeholder="Select district" name="business-district-id">
                                                                @foreach ($districts as $d)
                                                                <option value="{{ $d->id}}" {{ $d->id ==$shop->address['business_district_id'] ? 'selected' : '' }}>{{ ucwords($d->localization['en']['display_name']) }}</option>
                                                                @endforeach
                                                                @if($errors->has('country-id'))
                                                                <span class="help-block">The Districts field is required.</span>
                                                                @endif
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Division</label>
                                                            <select class="form-control" placeholder="Select division" name="business-division-id">
                                                                @foreach ($divisions as $d)
                                                                <option value="{{ $d->id}}" {{ $d->id ==$shop->address['business_division_id'] ? 'selected' : '' }}>{{ ucwords($d->localization['en']['display_name']) }}</option>
                                                                @endforeach
                                                                @if($errors->has('country-id'))
                                                                <span class="help-block">The Division field is required.</span>
                                                                @endif
                                                            </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Thana</label>
                                                            <select class="form-control" placeholder="Select thana" name="business-thana-id">
                                                                @foreach ($thanas as $t)
                                                                <option value="{{ $t->id}}" {{ $t->id ==$shop->address['business_thana_id'] ? 'selected' : '' }}>{{ ucwords($t->localization['en']['display_name']) }}</option>
                                                                @endforeach
                                                                @if($errors->has('country-id'))
                                                                <span class="help-block">The Thana field is required.</span>
                                                                @endif
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                                <label for="zip">Zip / Postal Code</label>
                                                            <input type="text" class="form-control" id="zip" name="business-zip" value="{{
                                                                $shop->address['business_zip']
                                                            }}">
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="tab_3">
                                            <div class="form-group">
                                                <label for="address-line-1">Address Line 1</label>
                                                <input type="text" class="form-control" id="address-line-1" name="warehouse-address-line-1" value="{{
                                                    $shop->address['warehouse_line_1']
                                                }}">
                                            </div>

                                            <div class="form-group">
                                                <label for="address-line-2">Address Line 2</label>
                                                <input type="text" class="form-control" id="address-line-2" name="warehouse-address-line-2" value="{{
                                                    $shop->address['warehouse_line_2']
                                                }}">
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Country</label>
                                                        <select class="form-control" placeholder="Select country" name="warehouse-country-id">
                                                                @foreach ($countries as $c)
                                                                <option value="{{ $c->id}}" {{ $c->id ==$shop->address['warehouse_country_id'] ? 'selected' : '' }}>{{ ucwords($c->localization['en']['display_name']) }}</option>
                                                                @endforeach
                                                                @if($errors->has('country-id'))
                                                                <span class="help-block">The Countrys field is required.</span>
                                                                @endif
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>District</label>
                                                        <select class="form-control" placeholder="Select district" name="warehouse-district-id">
                                                                @foreach ($districts as $d)
                                                                <option value="{{ $d->id}}" {{ $d->id ==$shop->address['warehouse_district_id'] ? 'selected' : '' }}>{{ ucwords($d->localization['en']['display_name']) }}</option>
                                                                @endforeach
                                                                @if($errors->has('country-id'))
                                                                <span class="help-block">The Districts field is required.</span>
                                                                @endif
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Division</label>
                                                            <select class="form-control" placeholder="Select division" name="warehouse-division-id">
                                                                @foreach ($divisions as $d)
                                                                <option value="{{ $d->id}}" {{ $d->id ==$shop->address['warehouse_division_id'] ? 'selected' : '' }}>{{ ucwords($d->localization['en']['display_name']) }}</option>
                                                                @endforeach
                                                                @if($errors->has('country-id'))
                                                                <span class="help-block">The Division field is required.</span>
                                                                @endif
                                                            </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Thana</label>
                                                            <select class="form-control" placeholder="Select thana" name="warehouse-thana-id">
                                                                @foreach ($thanas as $t)
                                                                <option value="{{ $t->id}}" {{ $t->id ==$shop->address['warehouse_thana_id'] ? 'selected' : '' }}>{{ ucwords($t->localization['en']['display_name']) }}</option>
                                                                @endforeach
                                                                @if($errors->has('country-id'))
                                                                <span class="help-block">The Thana field is required.</span>
                                                                @endif
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                                <label for="zip">Zip / Postal Code</label>
                                                            <input type="text" class="form-control" id="zip" name="warehouse-zip" value="{{
                                                                $shop->address['warehouse_zip']
                                                            }}">
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="tab_4">
                                            <div class="form-group">
                                                <label for="address-line-1">Address Line 1</label>
                                                <input type="text" class="form-control" id="address-line-1" name="return-address-line-1" value="{{
                                                    $shop->address['return_line_1']
                                                }}">
                                            </div>

                                            <div class="form-group">
                                                <label for="address-line-2">Address Line 2</label>
                                                <input type="text" class="form-control" id="address-line-2" name="return-address-line-2" value="{{
                                                    $shop->address['return_line_2']
                                                }}">
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Country</label>
                                                        <select class="form-control" placeholder="Select country" name="return-country-id">
                                                                @foreach ($countries as $c)
                                                                <option value="{{ $c->id}}" {{ $c->id ==$shop->address['return_country_id'] ? 'selected' : '' }}>{{ ucwords($c->localization['en']['display_name']) }}</option>
                                                                @endforeach
                                                                @if($errors->has('country-id'))
                                                                <span class="help-block">The Countrys field is required.</span>
                                                                @endif
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>District</label>
                                                        <select class="form-control" placeholder="Select district" name="return-district-id">
                                                                @foreach ($districts as $d)
                                                                <option value="{{ $d->id}}" {{ $d->id ==$shop->address['return_district_id'] ? 'selected' : '' }}>{{ ucwords($d->localization['en']['display_name']) }}</option>
                                                                @endforeach
                                                                @if($errors->has('country-id'))
                                                                <span class="help-block">The Districts field is required.</span>
                                                                @endif
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Division</label>
                                                            <select class="form-control" placeholder="Select division" name="return-division-id">
                                                                @foreach ($divisions as $d)
                                                                <option value="{{ $d->id}}" {{ $d->id ==$shop->address['return_division_id'] ? 'selected' : '' }}>{{ ucwords($d->localization['en']['display_name']) }}</option>
                                                                @endforeach
                                                                @if($errors->has('country-id'))
                                                                <span class="help-block">The Division field is required.</span>
                                                                @endif
                                                            </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Thana</label>
                                                            <select class="form-control" placeholder="Select thana" name="return-thana-id">
                                                                @foreach ($thanas as $t)
                                                                <option value="{{ $t->id}}" {{ $t->id ==$shop->address['return_thana_id'] ? 'selected' : '' }}>{{ ucwords($t->localization['en']['display_name']) }}</option>
                                                                @endforeach
                                                                @if($errors->has('country-id'))
                                                                <span class="help-block">The Thana field is required.</span>
                                                                @endif
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                                <label for="zip">Zip / Postal Code</label>
                                                            <input type="text" class="form-control" id="zip" name="return-zip" value="{{
                                                                $shop->address['return_zip']
                                                            }}">
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="tab_5">
                                            <div class="form-group">
                                                <label for="meta-title">Meta Title</label>
                                                <input type="text" class="form-control" id="meta-title" name="meta-title" value="{{ ucwords($shop->meta['title']) }}">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="meta-keywords">Meta Keywords</label>
                                                <input type="text" class="form-control" id="meta-keywords" name="meta-keywords" value="{{ ucwords( $shop->meta['keywords']) }}">
                                            </div>
            
                                            <div class="form-group">
                                                <label for="meta-description">Meta Description</label>
                                                <textarea class="form-control" id="description" rows="3" name="meta-description">{{  $shop->meta['description'] }}</textarea>
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
