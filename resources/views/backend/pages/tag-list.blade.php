@php
    $_activePrimaryNav = 'product-category';
    $_activeSecondaryNav = 'index';
    $_alertType = null;
    $_alertMessage = null;
@endphp
@extends('backend.layouts.default')

@section('title', 'All Tags')

@section('content')

<section class="content-header">
    <h1>
        Tag
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
                                <a href="{{ route('backend.tags.create')}}" class="btn btn-sm btn-default">Add New</a>
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
                                <table class="table table-bordered table-hover">
                                    <tbody>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Name</th>
                                            <th>Slug</th>
                                            <th style="width: 95px; text-align: center" >Actions</th>
                                        </tr>
                                        
                                        @foreach ($tags as $t)
                                        <tr>
                                            <td>{{$t->id}}</td>
                                            <td>{{ $t->localization['en']['display_name'] }}</td>

                                            <td>{{ $t->slug }}</td>
                                            <td>
                                                <span class="actions">
                                                    <a href="{{ route('backend.tags.show', $t->id)}}">View</a>
                                                    <span>&nbsp;|&nbsp;</span>
                                                    <a href="{{ route('backend.tags.edit', $t->id)}}">Edit</a>
                                                </span>
                                                
                                            </td>
                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="box-footer clearfix">
                                {{ $tags->links() }}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection