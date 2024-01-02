
@extends('back.layout.plateform-layout')

@section('pageTitle', isset($pageTitle)? $pageTitle: 'List Panier')
@section('contentClient')

@include('back.pages.include.section.list-panier')

@endsection