@extends('back.layout.plateform-layout')

@section('pageTitle', isset($pageTitle)? $pageTitle: 'Passer Commande')
@section('contentClient')

@include('back.pages.include.section.payment')

@endsection