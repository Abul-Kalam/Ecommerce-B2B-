@php
    $_activePrimaryNav = 'setting';
    $_activeSecondaryNav = 'create';
    $_alertType = 'success';
    $_alertMessage =  Session::get('message');
@endphp



@extends('backend.layouts.default')

@section('title', 'Create Style') 


@section('content')

<section class="content-header">
    <h1>
        Style
        <small>Edit</small>
    </h1>
    {{--  <ol class="breadcrumb">
        <li>
            <a href="#">
                <i class="fa fa-dashboard"></i> Home</a>
        </li>
        <li class="active">Permission</li>
    </ol>  --}}
</section>

<section class="content">
    

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                    <form action="{{ route('backend.preferences.update') }}" method="post">

                        {{ csrf_field() }}  {{ method_field('PUT') }}

                        <div class="box mt-3">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-lg-12 form-group">
                                        <label for="backend-theme">Backend Theme</label>
                                        <select class="form-control" name="backend-theme">
                                            <option {{ $backend_theme['value'] === 'skin-blue' ? 'selected' : '' }} value="skin-blue">Skin Blue</option>
                                            <option {{ $backend_theme['value'] === 'skin-blue-light' ? 'selected' : '' }} value="skin-blue-light">Skin Blue Light</option>
                                            <option {{ $backend_theme['value'] === 'skin-yellow' ? 'selected' : '' }} value="skin-yellow">Skin Yellow</option>
                                            <option {{ $backend_theme['value'] === 'skin-yellow-light' ? 'selected' : '' }} value="skin-yellow-light">Skin Yellow light</option>
                                            <option {{ $backend_theme['value'] === 'skin-green' ? 'selected' : '' }} value="skin-green">Skin Green</option>
                                            <option {{ $backend_theme['value'] === 'skin-green-light' ? 'selected' : '' }} value="skin-green-light">Skin Green Light</option>
                                            <option {{ $backend_theme['value'] === 'skin-purple' ? 'selected' : '' }} value="skin-purple">Skin Purple</option>
                                            <option {{ $backend_theme['value'] === 'skin-purple-light' ? 'selected' : '' }} value="skin-purple-light">Skin Purple Light</option>
                                            <option {{ $backend_theme['value'] === 'skin-red' ? 'selected' : '' }} value="skin-red">Skin Red</option>
                                            <option {{ $backend_theme['value'] === 'skin-red-light' ? 'selected' : '' }} value="skin-red-light">Skin Red Light</option>
                                            <option {{ $backend_theme['value'] === 'skin-black' ? 'selected' : '' }} value="skin-black">Skin Black</option>
                                            <option {{ $backend_theme['value'] === 'skin-black-light' ? 'selected' : '' }} value="skin-black-light">Skin Black Light</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 form-group">
                                        <label for="backend-layout">Backend Layout</label>
                                        <select class="form-control" name="backend-layout">
                                            <option {{ $backend_layout['value'] === 'fixed' ? 'selected' : '' }} value="fixed">Fixed</option>
                                            <option {{ $backend_layout['value'] === 'sidebar-collapse' ? 'selected' : '' }} value="sidebar-collapse">Collapsed Sidebar</option>
                                            <option {{ $backend_layout['value'] === 'layout-boxed' ? 'selected' : '' }} value="layout-boxed">Boxed Layout</option>
                                            <option {{ $backend_layout['value'] === 'layout-top-nav' ? 'selected' : '' }} value="layout-top-nav">Top Navigation</option>
                                          </select>
                                    </div>
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
