@extends('back.layout.artisan-layout')

@section('pageTitle', isset($pageTitle)? $pageTitle: 'Article')
@section('contentArtisan')
    <select id="select" onchange="change();" class="form-control list" name="nom_s_categorie" required>
    <option value="">Choisir une Sous Categorie</option>
        @forelse($categorie->scategories as $scategorie)
        
        <option value="{{$scategorie->id}}">{{$scategorie->nom_s_categorie}}</option>
        @empty
        <option value="">Table Vide</option>
        @endforelse
        <option value="autre">Autre</option>
        <option value=""> <input type="text" id="inpuTxt" style="display:none;" class="form-control list mt-2" placeholder="Autre Categorie" /></option>
    </select>



@endsection