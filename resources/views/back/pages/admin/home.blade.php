
@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle)? $pageTitle: 'Titre du page')
@section('content')
<div class="center">
{{'Contenue de Example-page'}}
<a href="{{route('logout')}}">Deconnecter</a>
</div>

    
@endsection