@php
$_activePrimaryNav = 'media';
$_activeSecondaryNav = 'create';
$_alertType = null;
$_alertMessage = null;
@endphp
@extends('backend.layouts.default')

@section('title', 'Create Media')


@section('content')

<section class="content-header">
    <h1>
        Media
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
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
                    <div class="box box-solid">
                        <div class="box-body">
                            <div id="dzone"class="file-drop-box"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script>
    // console.log('Scripts working....');
    var myDropzone = new Dropzone("div#dzone", { 
        url: "{{ route('backend.media.store') }}",
        maxFilesize: 2,
        headers: {
            "X-Requested-With" : "XMLHttpRequest",
            "X-CSRF-TOKEN" : csrftoken.content
        }
    });
</script>
@endsection
