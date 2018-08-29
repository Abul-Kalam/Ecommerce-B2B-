@php
    $_activePrimaryNav = 'product-category';
    $_activeSecondaryNav = 'index';
@endphp
@extends('backend.layouts.default')

@section('title', 'All Categories')

@section('content')

<section class="content-header">
    <h1>
        Product Category
        <small>All</small>
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
                    <form action="">
                        <div class="box mt-3">
                            <div class="box-header with-border">
                                <a href="#" class="btn btn-sm btn-default">Add New</a>
                                <div class="box-tools mt-2">
                                    <div class="input-group input-group-sm" style="width: 200px;">
                                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                        
                                        <div class="input-group-btn">
                                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-body no-padding">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Name</th>
                                            <th>Slug</th>
                                            <th style="width: 95px; text-align: center" >Actions</th>
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td>Man's Fashion</td>
                                            <td>man's-fashion</td>
                                            <td>
                                                <span class="actions">
                                                    <a href="#">View</a>
                                                    <span>&nbsp;|&nbsp;</span>
                                                    <a href="#">Edit</a>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Women's Fashion</td>
                                            <td>Women's-fashion</td>
                                            <td>
                                                <span class="actions">
                                                    <a href="#">View</a>
                                                    <span>&nbsp;|&nbsp;</span>
                                                    <a href="#">Edit</a>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Women's Fashion</td>
                                            <td>Women's-fashion</td>
                                            <td>
                                                <span class="actions">
                                                    <a href="#">View</a>
                                                    <span>&nbsp;|&nbsp;</span>
                                                    <a href="#">Edit</a>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Women's Fashion</td>
                                            <td>Women's-fashion</td>
                                            <td>
                                                <span class="actions">
                                                    <a href="#">View</a>
                                                    <span>&nbsp;|&nbsp;</span>
                                                    <a href="#">Edit</a>
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="box-footer clearfix">
                                <ul class="pagination pagination-sm no-margin pull-right">
                                    <li><a href="#">«</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">»</a></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
