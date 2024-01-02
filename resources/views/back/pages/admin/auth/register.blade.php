@extends('back.layout.register-admin-layout')
@section('pageTitle', isset($pageTitle)? $pageTitle: 'Register Login')
@section('content')
                                           
        <form action="{{route('register')}}" method="POST" class="tab-wizard2 wizard-circle wizard" id="form">
    @csrf
    <h5>Information basique & obligatoire</h5>
    <section>
        <div class="form-wrap max-width-600 mx-auto">

            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Adresse Email*</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" name="email"/>
                </div>
            </div>
          

            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Nom d'utilisateur*</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="nom_usr" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Nom Complet*</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="nom" />
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Mots de Passe*</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" name="passwd" />
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Confirmation*</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" name="passwd_conf" />
                </div>
            </div>

        </div>
    </section>
    <!-- Step 2 -->
    <h5>Information Personnel</h5>
    <section>
        <div class="form-wrap max-width-600 mx-auto">
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Profession*</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="profession" />
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Téléphone*</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="telephone" />
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Date de Naissance*</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" name="date_naiss" />
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Genre</label>
                <div class="col-sm-8">
                    <select class="form-control selectpicker" title="Select Homme/Femme" name="genre">
                        <option value="Homme">Homme</option>
                        <option value="Femme">Femme</option>
                       
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-4 col-form-label">ville</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="ville" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Etat</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="pays" />
                </div>
            </div>
        </div>
    </section>
    <!-- Step 3 -->
    <h5>Methode de Paiement</h5>
    <section>
        <div class="form-wrap max-width-600 mx-auto">
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Carte de credit</label>
                <div class="col-sm-8">
                    <select class="form-control selectpicker" title="Select Card Type" name="type_pay">
                        <option value="Carte de Banque">Carte de Banque</option>
                        <option value="Orange Money">Orange Money</option>
                        <option value="Sama Money">Sama Money</option>
                    </select>
                </div>
            </div>

            <div class="form-group row align-items-center">
                <label class="col-sm-4 col-form-label">numero de carte ou puce</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="num_carte" />
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-4 col-form-label">CVC</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Date D'expiration</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" name="date_exp" />
                </div>
            </div>
            <div class="custom-control custom-checkbox mt-4">
                <input
                    type="checkbox"
                    class="custom-control-input checked"
                    id="customCheck1"
                />
                <label class="custom-control-label" for="customCheck1"
                    >êtes vous sûr de vos information
                    privacy policy</label
                >
            </div>
        </div>
    
    </section>


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

                
@endsection