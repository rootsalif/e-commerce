@extends('back.layout.plateform-layout')

@section('pageTitle', isset($pageTitle)? $pageTitle: 'Article')
@section('contentClient')

<div class="container">
    <h1 class="section-title">Articles</h1>

    <div class="row">
      <div class="col-md-12">
        <div id="new-products" class="owl-carousel">
            @include('back.pages.include.search-list')
        </div>
        </div>
      </div>
    </div>
  </div>

@endsection
