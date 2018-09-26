@php
    $_activePrimaryNav = 'place';
    $_activeSecondaryNav = 'create-country';
    $_alertType = 'success';
    $_alertMessage =  Session::get('message');
@endphp
@extends('backend.layouts.default') 
@section('title', 'Create Country') 
@section('content')

<section class="content-header">
    <h1>
        Country
        <small>Edit</small>
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
                    <form action="{{ route('backend.countries.update', $country->id) }}" method="post">

                            {{ csrf_field() }}  {{ method_field('PUT') }}

                        <div class="box box-solid mt-3">
                            {{-- <div class="box-header with-border">
                                <a href="#" class="btn btn-sm btn-default pull-right">All</a>
                            </div> --}}
                            <div class="box-body p-0">
                                <div class="nav-tabs-custom mb-0">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Basic</a></li>
                                        <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Currency</a></li>
                                        <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">Images</a></li>
                                        <li class="pull-right">
                                            <a href="#" class="text-muted"><i class="fas fa-cog"></i></a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_1">
                                            <div class="row">
                                                <div class="col-lg-12 form-group {{  $errors->has('iso2') ? 'has-error' : '' }}">
                                                    <label for="iso2">Iso2</label>
                                                    <input type="text" class="form-control" id="iso2" name="iso2" value="{{ $country->iso2 }}">
                                                    @if($errors->has('iso2'))
                                                    <span class="help-block">The Iso2 field is required.</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 form-group {{  $errors->has('display-name-en') ? 'has-error' : '' }}">
                                                    <label for="display-name-en">Display Name (english)</label>
                                                    <input type="text" class="form-control" id="display-name-en" name="display-name-en" value="{{ ucwords($country->localization['en']['display_name']) }}">
                                                    @if($errors->has('display-name-en'))
                                                    <span class="help-block">The Display Name English field is required.</span>
                                                    @endif
                                                </div>
                                                <div class="col-lg-6 form-group {{  $errors->has('display-name-bn') ? 'has-error' : '' }}">
                                                    <label for="display-name-bn">Display Name (bangla)</label>
                                                    <input type="text" class="form-control" id="display-name-bn" name="display-name-bn" value="{{ $country->localization['bn']['display_name'] }}">
                                                    @if($errors->has('display-name-bn'))
                                                    <span class="help-block">The Display Name Bangla field is required.</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 form-group">
                                                    <label for="display-name-bn">Sell Status</label>
                                                    <select class="form-control" placeholder="Select sell-status" name="sell-status">
                                                        <option value="1" {{ $country->sell_status === true ? 'selected' : '' }}>Allow</option>
                                                        <option value="0" {{ $country->sell_status === false ? 'selected' : '' }}>Disallow</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 form-group">
                                                    <label for="display-name-bn">Buy Status</label>
                                                    <select class="form-control" placeholder="Select buy-status" name="buy-status">
                                                        <option value="1" {{ $country->buy_status === true ? 'selected' : '' }}>Allow</option>
                                                        <option value="0" {{ $country->buy_status === false ? 'selected' : '' }}>Disallow</option>
                                                    </select>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="tab_2">
                                            <div class="form-group">
                                                <label for="local">Local</label>
                                                <input type="text" class="form-control" id="local" name="local" value="{{ $country->currency['local'] }}">
                                            </div>

                                            <div class="form-group">
                                                <label for="global">Global</label>
                                                <input type="text" class="form-control" id="global" name="global" value="{{ $country->currency['global'] }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="global">Alternative</label>
                                                <input type="text" class="form-control" id="alternative" name="alternative" value="{{ $country->currency['alternative'] }}">
                                            </div>
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="tab_3">
                                            <div class="form-group">
                                                <label for="currency-local">Local</label>
                                                <input type="text" class="form-control" id="currency-local" name="currency-local" value="{{ $country->image_urls['currency_local'] }}">
                                                <p class="help-block">Example block-level help text here.</p>
                                            </div>

                                            <div class="form-group">
                                                <label for="currency-global">Global</label>
                                                <input type="text" class="form-control" id="currency-global" name="currency-global" value="{{ $country->image_urls['currency_global'] }}">
                                                <p class="help-block">Example block-level help text here.</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="currency-alternative">Alternative</label>
                                                <input type="text" class="form-control" id="currency-alternative" name="currency-alternative" value="{{ $country->image_urls['currency_alternative'] }}">
                                                <p class="help-block">Example block-level help text here.</p>
                                            </div>
                                        </div>
                                        <!-- /.tab-pane -->
                                    </div>
                                    <!-- /.tab-content -->
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
