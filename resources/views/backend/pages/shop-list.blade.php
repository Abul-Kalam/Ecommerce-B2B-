@php
    $_activePrimaryNav = 'shop';
    $_activeSecondaryNav = 'index';
@endphp
@extends('backend.layouts.default')

@section('title', 'All Shops')

@section('content')

<section class="content-header">
    <h1>
        Shops
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
                            @permission('manage-shops')
                            <a href="{{ route('backend.shops.create')}}" class="btn btn-sm btn-default">Add New</a>
                            @endpermission
                            <div class="box-tools mt-2">
                                <div class="input-group input-group-sm" style="width: 200px;">
                                    <form class="form-inline my-2 my-lg-0" action="{{ route('backend.shops.search') }}" method="post">
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
                        </div>
                        <div class="box-body no-padding">
                            <table class="table table-bordered table-hover">
                                <tbody>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th style="width: 150px;">Status</th>
                                        <th style="width: 95px; text-align: center;">Actions</th>
                                    </tr>
                                    @foreach($shops as $s)
                                    <tr>
                                        <td>{{ $s->id }}.</td>
                                        <td>{{ ucwords($s->localization['en']['display_name']) }}</td>
                                        <td>{{  $s->slug }}</td>
                                        <td>
                                            @if($s->status === 'active')
                                            <span class="label label-success">Active</span>
                                            @elseif($s->status === 'inactive')
                                            <span class="label label-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            <span class="actions">
                                                <a href="{{ route('backend.shops.show', $s->id)}}">View</a>
                                                @permission('manage-shops')
                                                <span>&nbsp;|&nbsp;</span>
                                                <a href="{{ route('backend.shops.edit', $s->id)}}">Edit</a>
                                                @endpermission
                                            </span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="box-footer clearfix">
                            {{ $shops->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
