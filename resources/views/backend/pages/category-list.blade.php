@php
    $_activePrimaryNav = 'taxonomy';
    $_activeSecondaryNav = 'index-categories';
    $_alertType = null;
    $_alertMessage = null;
@endphp
@extends('backend.layouts.default')

@section('title', 'All Categories')

@section('content')

<section class="content-header">
    <h1>
        Product Categories
        <small>All</small>
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
                    <div class="box mt-3">
                        <div class="box-header with-border">
                            @permission('manage-taxonomy')
                            <a href="{{ route('backend.categories.create')}}" class="btn btn-sm btn-default">Add New</a>
                            @endpermission
                            <div class="box-tools mt-2">
                                <form class="form-inline my-2 my-lg-0" action="{{ route('backend.categories.search') }}" method="post">
                                        {{ csrf_field() }}
                                    <div class="input-group input-group-sm" style="width: 200px;">
                                                
                                        <input type="text" name="keywords" class="form-control pull-right" placeholder="Search">
                        
                                        <div class="input-group-btn">
                                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
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
                                    
                                    @foreach ($categories as $c)
                                    <tr>
                                        <td>{{$c->id}}</td>
                                        <td>{{ ucwords($c->localization['en']['display_name']) }}</td>

                                        <td>{{ $c->slug }}</td>
                                        <td>
                                            <span class="actions">
                                                <a href="{{ route('backend.categories.show', $c->id)}}">View</a>
                                                @permission('manage-taxonomy')
                                                <span>&nbsp;|&nbsp;</span>
                                                <a href="{{ route('backend.categories.edit', $c->id)}}">Edit</a>
                                                @endpermission
                                            </span>
                                            
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="box-footer clearfix">
                            {{ $categories->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection