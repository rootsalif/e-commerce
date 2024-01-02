@extends('back.layout.register-layout')
@section('pageTitle', isset($pageTitle)? $pageTitle: 'Register Login')
@section('content')
	@php 
        $register=null;
        if(request()->is('artisan/*')){
            $register='typeArtisan';
        }else if(request()->is('client/*')){
            $register='typeClient';
        }
        else{
            $register='registType';
        }
    @endphp
<form action="{{route($register)}}" method="POST">
@method('POST')
    @csrf
    
    <div class="form-wrap max-width-600 mx-auto">
        <div class="modal-content">
            <div class="modal-body text-center font-18">
                <h3 class="mb-20">Bienvenue Pour l'Inscription!</h3>
                <div class="mb-30 text-center">
                    <img src="/back/vendors/images/success.png" />
                </div>
                <ul>
                    <li>ÊTES VOUS VENDEUR? <i class="text-success">Cliqué sur l'Artisan</i></li>
                    <li>ÊTES VOUS ACHETEUR? <i class="text-info">Cliqué sur le Client</i></li>
                </ul>
                <!-- Choix du type -->
                <div class="select-role mt-4">
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn active btn-success">
                            <input type="radio" name="type" value="artisan" id="admin" />
                            <div class="icon">
                                <img
                                    src="/back/vendors/images/briefcase.svg"
                                    class="svg"
                                    alt=""
                                />
                            </div>
                            <span>Je suis un</span>
                            Artisan
                        </label>
                        <label class="btn btn-info">
                            <input type="radio" name="type" value="client" id="user"/>
                            <div class="icon">
                                <img
                                    src="/back/vendors/images/person.svg"
                                    class="svg"
                                    alt=""
                                />
                            </div>
                            <span>je suis un</span>
                            Client
                        </label>
                    </div>
                </div>
                @error('artisan')
                    <div class="d-block text-danger" style="margin-top: 1px; margin-bottom: -20px">
                        {{$message}}
                    </div>
                @enderror
               
            </div>
            {{-- Submit--}}
            <div class="row">
                <div class="col-sm-12">
                    <div class="input-group mb-0">
                        <input class="btn btn-primary btn-lg btn-block" type="submit" value="Suivant...">
                    </div>
                </div>
            </div>
        </div>
        
    </div>

</form>

@endsection