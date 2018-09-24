@php
    $_activePrimaryNav = 'place';
    $_activeSecondaryNav = 'create-thana';
    $_alertType = 'success';
    $_alertMessage =  Session::get('message');
@endphp



@extends('backend.layouts.default')

@section('title', 'Create District') 


@section('content')

<section class="content-header">
    <h1>
      Thana
        <small>Edit</small>
    </h1>
    {{--  <ol class="breadcrumb">
        <li>
            <a href="#">
                <i class="fa fa-dashboard"></i> Home</a>
        </li>
        <li class="active">Thana</li>
    </ol>  --}}
</section>

<section class="content">
    

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                    <form action="{{ route('backend.thanas.update', $thana->id ) }}" method="post">

                        {{ csrf_field() }}  {{ method_field('PUT') }}


                        <div class="box mt-3">
                            <div class="box-header with-border">
                                <h3 class="box-title">Edit</h3>
                                <div class="box-tools pull-right">
                                    <a href="{{ route('backend.thanas.index') }}" class="btn btn-sm btn-default">All</a>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                        <div class="col-lg-12 form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
                                            <label for="slug">Slug</label>
                                            <input type="text" class="form-control" id="slug" name="slug" value="{{ $thana->slug }}">
                                            @if($errors->has('slug'))<span id="helpBlock2" class="help-block">The slug field is required.</span>
                                            @endif
                                        </div>
                                    </div>
                                <div class="row">
                                    <div class="col-lg-6 form-group {{  $errors->has('display-name-en') ? 'has-error' : '' }}">
                                        <label for="display_name_en">Display Name (english)</label>
                                        <input type="text" class="form-control" id="display-name-en" name="display-name-en" value="{{ ucwords($thana->localization['en']['display_name']) }}">
                                        @if($errors->has('display-name-en'))
                                        <span class="help-block">The Display Name English field is required.</span>
                                        @endif
                                    </div>
                                    <div class="col-lg-6 form-group {{ $errors->has('display-name-bn') ? 'has-error' : '' }}">
                                        <label for="display-name-bn">Display Name (bangla)</label>
                                        <input type="text" class="form-control" id="display-name-bn" name="display-name-bn" value="{{ $thana->localization['bn']['display_name'] }}">
                                        @if($errors->has('display-name-bn'))
                                        <span class="help-block">The Display Name Bangla field is required.</span>
                                        @endif
                                    </div>
                                </div>
{{--                                
                                {{ $c->localization['bn']['display_name']}}
                                @endforeach  --}}
                                <div class="row">
                                    <div class="col-lg-6 form-group {{ $errors->has('district-id') ? 'has-error' : '' }}">
                                        <label for="district">Districts</label>
                                        <select class="form-control" placeholder="Select district" name="district-id">
                                            <option value="">Choose District</option>
                                                @foreach ($districts as $d)
                                                <option value="{{ $d->id}}" {{ $d->id == $thana->district_id ? 'selected' : '' }}>{{ ucwords($d->localization['en']['display_name']) }}</option>
                                                @endforeach
                                                @if($errors->has('country-id'))
                                                <span class="help-block">The Districts field is required.</span>
                                                @endif
                                        </select>
                                    </div>
                                    
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
