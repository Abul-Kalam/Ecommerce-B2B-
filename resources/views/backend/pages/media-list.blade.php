@php
    $_activePrimaryNav = 'media';
    $_activeSecondaryNav = null;
@endphp
@extends('backend.layouts.default')

@section('title', 'All Media')

@section('content')

<section class="content-header">
    <h1>
        Media
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
    content
</section>

@endsection
