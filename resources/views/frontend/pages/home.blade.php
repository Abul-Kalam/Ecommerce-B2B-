@extends('frontend.layouts.default')

@section('title', 'Home')

@section('content')

<div class="contaoner-fluid">
  <div class="container">
    <div class="row mt-2">
      <div class="col-xm-12 col-sm-12 col-md-2 col-lg-2">
        <div class="list-group cat-list">
          <a href="#" class="list-group-item list-group-item-action active">Men's Fashion</a>
          <a href="#" class="list-group-item list-group-item-action">Women's Fashion</a>
          <a href="#" class="list-group-item list-group-item-action">Kid's Fashion</a>
          <a href="#" class="list-group-item list-group-item-action">Boy's Fashion</a>
          <a href="#" class="list-group-item list-group-item-action disabled">Girl's Fashion</a>
          <a href="#" class="list-group-item list-group-item-action disabled">Event's</a>
        </div>
      </div>
      <div class="col-xm-12 col-sm-12 col-md-7 col-lg-7">
        Category
      </div>
      <div class="col-xm-12 col-sm-12 col-md-3 col-lg-3">
        Category
      </div>
    </div>
  </div>
</div>
@endsection