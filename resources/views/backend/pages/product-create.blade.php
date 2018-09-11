@php
    $_activePrimaryNav = 'product';
    $_activeSecondaryNav = 'create';
@endphp
@extends('backend.layouts.default') 
@section('title', 'Create Product') 
@section('content')

<section class="content-header">
    <h1>
        Product
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
        <div class="container-fluid">
          <form action="">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                   <div class="box box-solid">
                     Hello
                   </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                   <div class="box box-solid">
                     Hello
                   </div>
                </div>
            </div>
          </form>
        </div>
    </div>
</section>

@endsection
