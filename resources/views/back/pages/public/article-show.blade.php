@extends('back.layout.plateform-layout')

@section('pageTitle', isset($pageTitle)? $pageTitle: $type)
@section('contentClient')


@if($type!=('articles'||'subCatego'))
  @include('back.pages.include.section.panier')
@endif
@if($type==('detailles'))
  @include('back.pages.include.section.panier')
@endif

@if($type=='articles')
    @include('back.pages.include.section.articles-show')
    @include('back.pages.include.section.panier')
@endif
@if($type=='subCatego')
    @include('back.pages.include.section.articles-show')
    
@endif


@if ($type=='colections')
   @include('back.pages.include.section.diff-show')
@endif

@endsection