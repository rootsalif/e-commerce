@extends('back.layout.artisan-layout')

@section('pageTitle', isset($pageTitle)? $pageTitle: 'Article')
@section('contentArtisan')


<!-- <div class="pd-ltr-20 xs-pd-20-10"> -->
<div class="min-height-200px">
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4>Forme D'article</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Ajout
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <div class="dropdown">
                    <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        January 2018
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Export List</a>
                        <a class="dropdown-item" href="#">Policies</a>
                        <a class="dropdown-item" href="#">View Assets</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <h4 class="text-blue h4">Ajouter des Article</h4>
            <p class="mb-30">Produits</p>
        </div>
        <div class="wizard-content">

        <!-- Formulaire d'article -->
            
            <form action="{{route('home.articleArtisan')}}" method="POST" class="tab-wizard2 wizard-circle wizard vertical">
            @csrf  
            
            <!-- section 1 -->
            <h5>Info d'Article</h5>
                <section>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nom d'Article :</label>
                                <input type="text" class="form-control" name="nom_article" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Quantité d'Article:</label>
                                <input type="number" min="1" step="any" class="form-control" name="qte_article" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Remise d'Article :</label>
                                <input type="number" min="0" step="any" class="form-control" name="remise_article" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Prix Unitaire :</label>
                                <input type="number" min="1" step="any" class="form-control" name="prix_unitaire_article" />
                            </div>
                        </div>
                    </div>
                    
                    <!-- Famille d'Article -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Famille d'Article :</label>
                                <select id="select" onchange="change();" class="overflow-auto form-control list" name="nom_famille" required>
                                    <option value="">Choisir une Famille</option>
                                    @forelse($familles as $famille)
                                    <option value="{{$famille->id}}">{{$famille->nom_famille}}</option>
                                    @empty
                                    <option value="">Electronique</option>
                                    @endforelse
                                    <option value="autre">Autre</option>
                                    <option value=""> <input type="text" id="inpuTxt" style="display:none;" class="form-control list mt-2" placeholder="Autre Famille" /></option>
                                </select>
                            </div>   
                        </div>
                        
                            <div class="col-md-6">
                                <div class="form-group" style="overflow: auto">
                                    <label>Etat :</label>
                                    <select id="select" onchange="change();" class="form-control list" name="etat_article" required>
                                        <option value="">Choisir Sons Etat </option>                                       
                                        <option value="neuf">Neuf</option>
                                        <option value="Seconde Main">Seconde Main</option>
                                        <option value="Ambalier">Ambalier</option>
                                        <option value="Par Unité">Par Unité</option>
                                        
                                        <option value="autre">Autre</option>
                                        <option value=""> <input type="text" id="inpuTxt" style="display:none;" class="form-control list mt-2" placeholder="Autre Famille" /></option>
                                    </select>
                                </div>
                            </div> 
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Description :</label>
                                <textarea class="form-control" name="desc_article"></textarea>
                            </div>
                        </div>                            
                    </div>

                </section>

                <!-- Section 2 -->
                <h5>Categories & Sous-Categories</h5>
                <section>   
                    
                    
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
                            <div class="pd-20 card-box height-100-p">
                                <h4 class="mb-20 h4">Categories</h4>
                                <div class="form-group">
                                    <label>Le choix de categories est requis:</label>
                                    <select id="categorieSelect" class="form-control list" name="nom_categorie" required>
                                        <option value="">Choisir une Categorie</option>
                                        @forelse($categories as $categorie)
                                            <ul>
                                                <li>
                                                    <option value="{{$categorie->id}}">{{$categorie->nom_categorie}}</option>
                                                </li>
                                                <ol>                                                   
                                                        @forelse ($categorie->subcategories as $subcategorie )
                                                            <option value="{{$subcategorie->id}}">{{$categorie->id.">".$subcategorie->nom_s_categorie }}</option>
                                                        @empty
                                                            Aucun sous categorie sur la base
                                                        @endforelse
                                                </ol>
                                            </ul>                                            
                                            

                                        @empty
                                            <option value="">Table Vide</option>
                                        @endforelse
                                        <option value="autre">Autre</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
                            <div class="pd-20 card-box height-100-p">
                                <h4 class="mb-20 h4">Sous Categories</h4>
                                <div class="form-group">
                                    <label>Le choix de sous categories est requis:</label>
                                    <select id="sousCategorieSelect" class="form-control list overflow-scroll" name="nom_s_categorie">
                                        {{-- @include(route('home.subcategories', ['categorie'])) --}}
                                        <option value="">Choisir une Sous Categorie</option>
                                    </select>
                                    <input type="text" id="autreSousCategorieInput" style="display:none;" class="form-control list mt-2" placeholder="Autre Sous Categorie" />
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
                        $(document).ready(function () {
                            $("#categorieSelect").change(function () {
                                var categorieId = $(this).val();
                                var sousCategorieSelect = $("#sousCategorieSelect");
                                var autreSousCategorieInput = $("#autreSousCategorieInput");
                    
                                $.ajax({
                                    url: '/subcategories/' + categorieId, // Mettez le chemin correct vers votre route AJAX
                                    type: 'GET',
                                    success: function (response) {
                                        sousCategorieSelect.html(response);
                                        sousCategorieSelect.show();
                                        autreSousCategorieInput.hide();
                                    }
                                });
                            });
                    
                            $("#sousCategorieSelect").change(function () {
                                var selectedValue = $(this).val();
                                var autreSousCategorieInput = $("#autreSousCategorieInput");
                    
                                if (selectedValue === "autre") {
                                    autreSousCategorieInput.show();
                                } else {
                                    autreSousCategorieInput.hide();
                                }
                            });
                        });
                    </script>
                     --}}


                    {{-- <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
                            <div class="pd-20 card-box height-100-p">
                                <h4 class="mb-20 h4">Categories</h4>
                                <div class="form-group">
                                    <label>Le choix de categories est requis:</label>
                                    
                                        <select id="select" onchange="change();" class="form-control list" name="nom_categorie" required>
                                            <option value="">Choisir une Categorie</option>
                                            @forelse($categories as $categorie)                                            
                                                <option value="{{$categorie->id}}">{{$categorie->nom_categorie}}</option>
                                    
                                            @empty
                                            <option value="">Table Vide</option>
                                            @endforelse
                                            <option value="autre">Autre</option>
                                            <option value=""> <input type="text" id="inpuTxt" style="display:none;" class="form-control list mt-2" placeholder="Autre Categorie" /></option>
                                        </select>
                                    </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
                            <div class="pd-20 card-box height-100-p">
                                <h4 class="mb-20 h4">Sous Categories</h4>
                                <div class="form-group">
                                    <label>Le choix de sous categories est requis:</label>
                                    <select id="select" onchange="change();" class="form-control list overflow-scroll" name="nom_s_categorie" required>
                                        <option value="">Choisir une Sous Categorie</option>
                                        @forelse($categorie->subcategories as $sous_categorie)
                                        
                                        <option value="{{$sous_categorie->id}}">{{$sous_categorie->nom_s_categorie}}</option>
                                        @empty
                                        <option value="">Table Vide</option>
                                        @endforelse
                                        <option value="autre">Autre</option>
                                        <option value=""> <input type="text" id="inpuTxt" style="display:none;" class="form-control list mt-2" placeholder="Autre Categorie" /></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </section>
                <!-- Section 3 -->
                <h5>Model & Marque</h5>
                <section>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
                            <div class="pd-20 card-box height-100-p">
                                <h4 class="mb-20 h4">Models</h4>
                                <div class="form-group">                            
                                <label>Le choix de modele est requis:</label>
                                <select id="select" onchange="change();" class="form-control list" name="nom_modele" required>
                                <option value="">Choisir un Model</option>
                                    @forelse($modeles as $modele)
                                    <option value="{{$modele->id}}">{{$modele->nom_modele}}</option>
                                    @empty
                                    <option value="">Table Vide</option>
                                    @endforelse
                                    <option value="autre">Autre</option>
                                    <option value=""> <input type="text" id="inpuTxt" style="display:none;" class="form-control list mt-2" placeholder="Autre Categorie" /></option>
                                </select>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
                        <div class="pd-20 card-box height-100-p">
                                <h4 class="mb-20 h4">Marque</h4>
                                <div class="form-group">                            
                                <label>Le choix de modele est requis:</label>
                                <select id="select" onchange="change();" class="form-control list" name="nom_marque" required>
                                    <option value="">Choisir la Marque</option>
                                    @forelse($marques as $marque)
                                    <option value="{{$marque->id}}">{{$marque->nom_marque}}</option>
                                    @empty
                                    <option value="">Table Vide</option>
                                    @endforelse
                                    <option value="autre">Autre</option>
                                    <option value=""> <input type="text" id="inpuTxt" style="display:none;" class="form-control list mt-2" placeholder="Autre Categorie" /></option>
                                </select>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Step 5 -->
                <h5>Image d'Article</h5>
                <section>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
                            <div class="pd-20 card-box height-100-p">
                                <h4 class="mb-20 h4">Inserer l'image</h4>
                                <div class="form-group">

                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                {{-- Button d'envois de formulaire --}}
                <button type="submit" id="success-modal-btn"  hidden 	data-target="#success-modal" 
                    data-backdrop="static">
                
                </button>   
            
            </form>
        {{-- end formuliare --}}
            
        </div>
    </div>

</div>

<!-- </div> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $("#categorieSelect").change(function () {
            var categorieId = $(this).val();
            var sousCategorieSelect = $("#sousCategorieSelect");
            var autreSousCategorieInput = $("#autreSousCategorieInput");

            $.ajax({
                url: 'artisan/home/article/' + categorieId,
                
                type: 'GET',
                success: function (response) {
                    alert('ok');
                    sousCategorieSelect.html(response);
                    sousCategorieSelect.show();
                    autreSousCategorieInput.hide();
                }
            });
        });

        $("#sousCategorieSelect").change(function () {
            var selectedValue = $(this).val();
            var autreSousCategorieInput = $("#autreSousCategorieInput");

            if (selectedValue === "autre") {
                autreSousCategorieInput.show();
            } else {
                autreSousCategorieInput.hide();
            }
        });
    });
</script>

@endsection

