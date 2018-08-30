@php
    $_activePrimaryNav = 'dashboard';
    $_activeSecondaryNav = null;
    $_alertType = 'success';
    $_alertMessage = 'OMG';
@endphp
@extends('backend.layouts.default')

@section('title', 'Dashboard')

@section('content')

<section class="content-header">
    <h1>
        Dashboard
        <small>Version 2.0</small>
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
    content
</section>

@endsection
