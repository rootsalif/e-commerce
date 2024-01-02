@extends('back.layout.register-layout')
@section('pageTitle', isset($pageTitle)? $pageTitle: 'Register Login')
@section('content')

@php 
    $register=null;
    if(request()->is('artisan/*')){
        $register='storeArtisan';
    }else if(request()->is('client/*')){
        $register='storeClient';
    }
    else{
        $register='registStore';
    }
@endphp

<form action="{{route($register)}}" method="POST" class="tab-wizard2 wizard-circle wizard"
id="form" enctype="multipart/form-data">
    @method('post')
    @csrf
    @php 
        Session::put('radio', $type);
    @endphp
    
    <h5>Information basique & obligatoire</h5>
    <section>
        <div class="form-wrap max-width-600 mx-auto">

            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Adresse Email*</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" value="{{old('email')}}" name="email"/>
                </div>
                @error('email')
                    <div class="d-block text-danger" style="margin-left: 150px; margin-top: -18px; margin-bottom: -5px">
                        {{$message}}
                    </div>
                @enderror
               
            </div>
          

            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Nom d'utilisateur*</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" value="{{old('nom_usr')}}"  name="nom_usr" />
                </div>
                @error('nom_usr')
                    <div class="d-block text-danger" style="margin-left: 150px; margin-top: -18px; margin-bottom: -5px">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Nom Complet*</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" value="{{old('nom')}}" name="nom" />
                </div>
                @error('nom')
                    <div class="d-block text-danger" style="margin-left: 150px; margin-top: -18px; margin-bottom: -5px">
                        {{$message}}
                    </div>
                @enderror
            </div>

            @if($type==='client')
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Téléphone*</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" value="{{old('telephone')}}" name="telephone" />
                    </div>
                    @error('telephone')
                        <div class="d-block text-danger" style="margin-left: 150px; margin-top: -3px; margin-bottom: -18px">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            @endif

            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Mots de Passe*</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" value="{{old('passwd')}}" name="passwd" />
                </div>
                @error('passwd')
                    <div class="d-block text-danger" style="margin-left: 150px; margin-top: -18px; margin-bottom: -5px">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Confirmation*</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" value="{{old('passwd_conf')}}" name="passwd_conf" />
                </div>
                @error('passwd_conf')
                    <div class="d-block text-danger" style="margin-left: 150px; margin-top: -5px; margin-bottom: -18px">
                        {{$message}}
                    </div>
                @enderror
            </div>

        </div>
    </section>
    <!-- Step 2 -->
    <h5>Information Personnel</h5>
    <section>
        
        <div class="form-wrap max-width-600 mx-auto">        
        @if($type==='client')        
                <div>
                    <div class="d-flex justify-content-center">
                        <img src="/back/vendors/images/index.png" id="selectedAvatar"
                        class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover;" alt="example placeholder" />
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="btn btn-info btn-rounded mb-4 col-sm-10">
                            <label class="col-form-label text-white" for="customFile2">Choisir profile</label>
                            <input type="file" name="image_artisan" class="form-control d-none" id="customFile2" onchange="displaySelectedImage(event, 'selectedAvatar')" />
                        </div>
                    </div>
                </div>            
        @endif
            @if($type==='artisan')
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Profession*</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" value="{{old('profession')}}" name="profession" />
                    </div>
                    @error('profession')
                    <div class="d-block text-danger" style="margin-left: 150px; margin-top: -3px; margin-bottom: -18px">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Téléphone*</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" value="{{old('telephone')}}" name="telephone" />
                    </div>
                    @error('telephone')
                        <div class="d-block text-danger" style="margin-left: 150px; margin-top: -3px; margin-bottom: -18px">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                @endif

            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Date de Naissance*</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" value="{{old('date_naiss')}}" name="date_naiss" />
                </div>
                @error('date_naiss')
                    <div class="d-block text-danger" style="margin-left: 150px; margin-top: -3px; margin-bottom: -18px">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Genre</label>
                <div class="col-sm-8">
                    <select class="form-control selectpicker" title="Select Homme/Femme" value="{{old('genre')}}" name="genre">
                        <option value="Homme">Homme</option>
                        <option value="Femme">Femme</option>
                    </select>
                </div>
                @error('genre')
                    <div class="d-block text-danger" style="margin-left: 150px; margin-top: -3px; margin-bottom: -18px">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="form-group row">
                <label class="col-sm-4 col-form-label">ville</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" value="{{old('ville')}}" name="ville" />
                </div>
                @error('ville')
                    <div class="d-block text-danger" style="margin-left: 150px; margin-top: -3px; margin-bottom: -18px">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Etat</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" value="{{old('pays')}}" name="pays" />
                </div>
                @error('pays')
                    <div class="d-block text-danger" style="margin-left: 150px; margin-top: -3px; margin-bottom: -18px">
                        {{$message}}
                    </div>
                @enderror
            </div>
        </div>

    </section>
    
    <!-- Step 3 -->
    
   
    @if($type=='artisan')
    <h5>Methode de Paiement</h5>
        <section>
            <div class="form-wrap max-width-600 mx-auto">                
                <div>
                    <div class="d-flex justify-content-center">
                        <img src="/back/vendors/images/index.png" id="selectedAvatar"
                        class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover;" alt="example placeholder" />
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="btn btn-info btn-rounded mb-4 col-sm-10">
                            <label class="col-form-label text-white" for="customFile2">Choisir profile</label>
                            <input type="file" name="image_artisan" class="form-control d-none" id="customFile2" onchange="displaySelectedImage(event, 'selectedAvatar')" />
                        </div>
                    </div>
                </div>
            </div>
                <div class="form-group row">                    
                    <label class="col-sm-4 col-form-label">Carte de credit</label>
                    <div class="col-sm-8">
                        <select class="form-control selectpicker" title="Type de carte" value="{{old('type_pay')}}" name="type_pay">
                            <option value="Carte de Banque">Carte de Banque</option>
                            <option value="Orange Money">Orange Money</option>
                            <option value="Sama Money">Sama Money</option>
                        </select>
                    </div>
                    @error('type_pay')
                    <div class="d-block text-danger" style="margin-left: 150px; margin-top: -3px; margin-bottom: -18px">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="form-group row align-items-center">
                    <label class="col-sm-4 col-form-label">numero de carte ou puce</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" value="{{old('num_carte')}}" name="num_carte" />
                    </div>
                    @error('num_carte')
                    <div class="d-block text-danger" style="margin-left: 150px; margin-top: -3px; margin-bottom: -18px">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <!-- <div class="form-group row">
                    <label class="col-sm-4 col-form-label">CVC</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" />
                    </div>
                </div> -->
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Date D'expiration</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" value="{{old('date_exp')}}" name="date_exp" />
                    </div>
                    @error('date_exp')
                    <div class="d-block text-danger" style="margin-left: 150px; margin-top: -3px; margin-bottom: -18px">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="custom-control custom-checkbox mt-4">
                    <input
                        type="radio"
                        name="radio"
                        class="custom-control-input checked"
                        id="customCheck1"
                        value="{{isset($type) ? $type :'radio'}}"
                    />
                    <label class="custom-control-label" for="customCheck1"
                        >êtes vous sûr de vos information
                        privacy policy</label
                    >
                </div>
                @error('radio')
                    <div class="d-block text-danger" style="margin-left: 150px; margin-top: -3px; margin-bottom: -18px">
                        {{$message}}
                    </div>
                @enderror
            </div>
        
        </section>
    @endif

    <!-- success Popup html Start -->
		
		<button type="submit" id="success-modal-btn" hidden data-toggle="modal"	data-target="#success-modal" 
			data-backdrop="static">
           
		</button>
		
		
		<!-- success Popup html End -->
    
   
    <!-- Step 4 -->
    <!-- <h5>Informations Saisie</h5>
    <form action="" method="POST">
       
        <section>
            <div class="form-wrap max-width-600 mx-auto">
                <ul class="register-info">
                    <li>
                        <div class="row">
                            <div class="col-sm-4 weight-600">Adresse Email</div>
                            <div class="col-sm-8"></div>
                        </div>
                        
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-sm-4 weight-600">Nom d'utilisateur</div>
                            <div class="col-sm-8">Example</div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-sm-4 weight-600">Nom Complet</div>
                            <div class="col-sm-8">.....000</div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-sm-4 weight-600"></div>
                            <div class="col-sm-8">john smith</div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-sm-4 weight-600">Location</div>
                            <div class="col-sm-8">123 Example</div>
                        </div>
                    </li>
                </ul>
                <div class="custom-control custom-checkbox mt-4">
                    <input type="checkbox" class="custom-control-input" id="customCheck1" />
                    <label class="custom-control-label" for="customCheck1">I have read and agreed to the terms of services and
                        privacy policy</label>
                </div>
            </div>
        </section>
    </form> -->
   

</form>
<script>
    function displaySelectedImage(event, elementId) {
    const selectedImage = document.getElementById(elementId);
    const fileInput = event.target;

    if (fileInput.files && fileInput.files[0]) {
        const reader = new FileReader();

        reader.onload = function(e) {
            selectedImage.src = e.target.result;
        };

        reader.readAsDataURL(fileInput.files[0]);
    }
}
</script>


@endsection