@php
    $_activePrimaryNav = 'divisions';
    $_activeSecondaryNav = 'create';
    $_alertType = null;
    $_alertMessage = null;
@endphp



@extends('backend.layouts.default')

@section('title', 'Create Category') 


@section('content')

<section class="content-header">
    <h1>
      Division
        <small>Add new</small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="#">
                <i class="fa fa-dashboard"></i> Home</a>
        </li>
        <li class="active">Division</li>
    </ol>
</section>

<section class="content">
    

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                    <form action="{{ route('backend.divisions.store') }}" method="post">

                            {{ csrf_field() }}

                        <div class="box mt-3">
                            <div class="box-header with-border">
                                <h3 class="box-title">Create</h3>
                                <div class="box-tools pull-right">
                                    <a href="{{ route('backend.divisions.index') }}" class="btn btn-sm btn-default">All</a>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                        <div class="col-lg-12 form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
                                            <label for="slug">Slug</label>
                                            <input type="text" class="form-control" id="slug" name="slug">
                                            @if($errors->has('slug'))<span id="helpBlock2" class="help-block">The slug field is required.</span>
                                            @endif
                                        </div>
                                    </div>
                                <div class="row">
                                    <div class="col-lg-6 form-group {{  $errors->has('display-name-en') ? 'has-error' : '' }}">
                                        <label for="display_name_en">Display Name En</label>
                                        <input type="text" class="form-control" id="display-name-en" name="display-name-en">
                                        @if($errors->has('display-name-en'))
                                        <span class="help-block">The Display Name En field is required.</span>
                                        @endif
                                    </div>
                                    <div class="col-lg-6 form-group {{ $errors->has('display-name-bn') ? 'has-error' : '' }}">
                                        <label for="display-name-bn">Display Name Bn</label>
                                        <input type="text" class="form-control" id="display-name-bn" name="display-name-bn">
                                        @if($errors->has('display-name-bn'))
                                        <span class="help-block">The Display Name Bn field is required.</span>
                                        @endif
                                    </div>
                                </div>
{{--                                
                                {{ $c->localization['bn']['display_name']}}
                                @endforeach  --}}
                                <div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="countries">Countries</label>
                                        <select class="form-control" placeholder="Select country" name="country_id">
                                            <option value="">Choose Countries</option>
                                                @foreach ($countries as $c)
                                                <option value="{{ $c->id}}">{{ $c->localization['en']['display_name']}}</option>
                                                @endforeach
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