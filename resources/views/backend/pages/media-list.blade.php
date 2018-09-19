@php
$_activePrimaryNav = 'media';
$_activeSecondaryNav = 'index';
$_alertType = null;
$_alertMessage = null;
@endphp
@extends('backend.layouts.default')

@section('title', 'All Media')

@section('content')

<section class="content-header">
    <h1>
        Media
        <small>All</small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="#">
                <i class="fa fa-dashboard"></i> Home</a>
        </li>
        <li class="active">Media</li>
    </ol>
</section>
<section class="content">
    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
                    <div class="box">
                        <div class="box-header with-border">
                            <a href="{{ route('backend.media.create')}}" class="btn btn-sm btn-default">Add New</a>
                            <div class="box-tools mt-2">
                                <form class="form-inline my-2 my-lg-0" action="{{ route('backend.media.search') }}" method="post">
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
                                        <th style="width: 15px">#</th>
                                        <th style="width: 98px">Image</th>
                                        <th>Title</th>
                                        <th>Date</th>
                                        <th style="width: 95px; text-align: center">Actions</th>
                                    </tr>

                                    @foreach ($media as $m)
                                    <tr>
                                        <td>{{ $m->id}}</td>
                                        <td>
                                            
                                            <img class="img-md" src="{{ Storage::url( $m->paths['80x80'] ) }}" alt="">
                                        </td>
                                        <td>{{ ucwords($m->title)}}</td>
                                        <td>{{ Carbon\Carbon::parse($m->created_at)->diffForHumans() }}</td>
                                        <td>
                                            <span class="actions">
                                                <a href="">View</a>
                                                <span>&nbsp;|&nbsp;</span>
                                                <a href="">Edit</a>
                                            </span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="box-footer clearfix">
                            <nav aria-label="Page navigation example">
                                {{ $media->links() }}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection
