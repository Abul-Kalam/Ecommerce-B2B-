@php
    $_activePrimaryNav = 'place';
    $_activeSecondaryNav = 'create-country';
@endphp
@extends('backend.layouts.default') 
@section('title', 'Create Country') 
@section('content')

<section class="content-header">
    <h1>
        Country
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
                    <form action="{{ route('backend.countries.store') }}" method="post">

                        {{ csrf_field() }}

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
                                                    <input type="text" class="form-control" id="iso2" name="iso2" value="{{ old('iso2') }}">
                                                    @if($errors->has('iso2'))
                                                    <span class="help-block">Iso2 field is required.</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 form-group {{  $errors->has('display-name-en') ? 'has-error' : '' }}">
                                                    <label for="display-name-en">Display Name (english)</label>
                                                    <input type="text" class="form-control" id="display-name-en" name="display-name-en" value="{{ old('display-name-en') }}">
                                                    @if($errors->has('display-name-en'))
                                                    <span class="help-block">Display Name English field is required.</span>
                                                    @endif
                                                </div>
                                                <div class="col-lg-6 form-group {{  $errors->has('display-name-bn') ? 'has-error' : '' }}">
                                                    <label for="display-name-bn">Display Name (bangla)</label>
                                                    <input type="text" class="form-control" id="display-name-bn" name="display-name-bn" value="{{ old('display-name-bn') }}">
                                                    @if($errors->has('display-name-bn'))
                                                    <span class="help-block">Display Name Bangla field is required.</span>
                                                    @endif
                                                </div>
                                            </div>
            
                                            <div class="row">
                                                <div class="col-lg-6 form-group">
                                                    <label for="display-name-bn">Sell Status</label>
                                                    <select class="form-control" placeholder="Select sell-status" name="sell-status">
                                                        <option value="1">Allow</option>
                                                        <option value="0">Disallow</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 form-group">
                                                    <label for="display-name-bn">Buy Status</label>
                                                    <select class="form-control" placeholder="Select buy-status" name="buy-status">
                                                        <option value="1">Allow</option>
                                                        <option value="0">Disallow</option>
                                                    </select>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="tab_2">
                                            <div class="form-group">
                                                <label for="local">Local</label>
                                                <input type="text" class="form-control" id="local" name="local" value="{{ old('local') }}">
                                            </div>

                                            <div class="form-group">
                                                <label for="global">Global</label>
                                                <input type="text" class="form-control" id="global" name="global" value="{{ old('global') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="global">Alternative</label>
                                                <input type="text" class="form-control" id="alternative" name="alternative" value="{{ old('alternative') }}">
                                            </div>
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="tab_3">
                                            <div class="form-group">
                                                <label for="currency-local">Local</label>
                                                <input type="text" class="form-control" id="currency-local" name="currency-local" value="{{ old('currency-local') }}">
                                                <p class="help-block">Example block-level help text here.</p>
                                            </div>

                                            <div class="form-group">
                                                <label for="currency-global">Global</label>
                                                <input type="text" class="form-control" id="currency-global" name="currency-global" value="{{ old('currency-global') }}">
                                                <p class="help-block">Example block-level help text here.</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="currency-alternative">Alternative</label>
                                                <input type="text" class="form-control" id="currency-alternative" name="currency-alternative" value="{{ old('currency-alternative') }}">
                                                <p class="help-block">Example block-level help text here.</p>
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
