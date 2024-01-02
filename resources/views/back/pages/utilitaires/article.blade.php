@extends('back.layout.artisan-layout')

@section('pageTitle', isset($pageTitle)? $pageTitle: 'Articles')
@section('contentArtisan')

    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

            <!-- Select-2 Start -->
            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Modification de articles << <span class="text-danger">{{ $article->nom_article }} </span>>></h4>
                        <p class="mb-30">Mise en jour </p>
                    </div>
                </div>

                {{-- Formulaire circulaire --}}
                <div class="wizard-content">

                    <form action="{{ route('home.updateArticles', ['id'=>$article->id])}}" method="POST" class="tab-wizard2 wizard-circle wizard vertical">  
                                          
                            @csrf   
                            @method('put')                
                            @csrf   
                                          
                            <!-- section 1 -->
                            
                            <h5>Info d'Article</h5>
                            <section>
                                    {{-- Les attribu de l'article Prix Unitaire  --}}
                                <div class="row">
                                        {{-- Articles --}}
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
                                        <div class="pd-20 card-box height-100-p">

                                            <h4 class="mb-20 h4 text-info">Articles</h4>
                                            <div class="form-group">
                                                <label>Nom de l'Article Correspondant</label>
                                                <input type="text" class="form-control" value="{{ $article->nom_article }}" name="nom_article" />
                                            
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Prix Unitaire -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
                                        <div class="pd-20 card-box height-100-p">

                                            <h4 class="mb-20 h4 text-info">Prix Unitaire</h4>
                                            <div class="form-group">
                                                <label>Prix Unitaire de l'article</label>
                                                <input type="number" min="1" step="any" class="form-control"  value="{{ $article->prix_unitaire_article }}" name="prix_unitaire_article" />
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>

                               {{-- Les attribu de l'article --}}

                                     {{-- Les attribu de l'article Prix Unitaire  --}}

                                <div class="row mt-4">
                                        {{-- Quantité d'Article --}}
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
                                        <div class="pd-20 card-box height-100-p">

                                            <h4 class="mb-20 h4 text-info">Quantité</h4>
                                            <div class="form-group">
                                                <label>Quantité de l'Article</label>
                                                <input type="number" min="1" step="any" class="form-control" value="{{ $article->qte_article }}"  name="qte_article" />                                            
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Remise d'Article -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
                                        <div class="pd-20 card-box height-100-p">

                                            <h4 class="mb-20 h4 text-info">Remise</h4>
                                            <div class="form-group">
                                                <label>Remise de l'Article</label>
                                                <input type="number" min="1" step="any" class="form-control" value="{{ $article->remise_article }}"  name="remise_article" />                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            {{-- End section 1 --}}
            
                            <!-- Section 2 -->
                            <h5>Le choix des selections Famille Categorie & Sous Categorie</h5>
                            <section>   
                                <!-- Article -->
                                <div class="row">   
                                    <!-- TVA d'Article -->

                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
                                        <div class="pd-20 card-box height-100-p">

                                            <h4 class="mb-20 h4 text-info">TVA</h4>
                                            <div class="form-group">
                                                <label>TVA de l'Article</label>
                                                <input type="number" min="1" step="any" class="form-control" value="{{ $article->tva_article }}"  name="tva_article" />                                            
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Etat d'Article -->
                                    
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
                                        <div class="pd-20 card-box height-100-p">

                                            <h4 class="mb-20 h4 text-info">Article</h4>
                                            <div class="form-group">
                                                <label>État de l'Article</label>
                                                <input type="text" class="form-control" value="{{ $article->etat_article }}"  name="etat_article" />
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                
                                <div class="row mb-4">
                                    <!-- Famille d'Article -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
                                        <div class="pd-20 card-box height-100-p">

                                            <h4 class="mb-20 h4 text-info">Familles</h4>
                                            <div class="form-group">
                                                <label>Selctionner la famille de l'Article</label>
                                               
                                                <select 
                                                    class=" custom-select2 form-control list" name="famille_id" 
                                                    required  style="width: 100%"
                                                    {{-- multiple="multiple"   --}}
                                                    >
                                                    <option value="{{$article->famille_id}}">{{$article->famille->nom_famille}}</option>  
                                                    @forelse($familles as $famille)                                                      
                                                        <option value="{{$famille->id}}">{{$famille->nom_famille}}</option>  
                                                                                                         
                                                    @empty
                                                        <option value="">Table Vide</option>
                                                    @endforelse
                                                    <option value="autre">Autre</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Categories --}}
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
                                        <div class="pd-20 card-box height-100-p">
                                            <h4 class="mb-20 h4 text-info">Categories</h4>
                                            <div class="form-group">
                                                <label>Le choix de categories est requis:</label>
                                                <select name="categorie_id" 
                                                    class=" custom-select2 form-control list" 
                                                    required  style="width: 100%"
                                                    {{-- multiple="multiple"   --}}
                                                >
                                                <option value="{{$article->categorie_id}}">{{$article->categorie->nom_categorie}}</option>  
                                                    @forelse($categories as $categorie)                                                    
                                                        <option value="{{$categorie->id}}">{{$categorie->nom_categorie}}</option>                                                       
                                                    @empty
                                                        <option value="">Table Vide</option>
                                                    @endforelse
                                                    <option value="autre">Autre</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            {{-- End Section 2 --}}

                            <!-- Section 3 -->
                            <h5>Model | Marque & Description d'article </h5>
                            <section>
                                <div class="row">
                                    
                                    {{-- modeles de l'article  --}}
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
                                        <div class="pd-20 card-box height-100-p">

                                            <h4 class="mb-20 h4 text-info">Modeles</h4>
                                            <div class="form-group">
                                                <label>Selctionner Modele Correspondant</label>
                                                <select 
                                                    class=" custom-select2 form-control list" name="modele_id" 
                                                    required  style="width: 100%"
                                                    {{-- multiple="multiple"   --}}
                                                    >
                                                    <option value="{{$article->modele_id}}">{{$article->modele->nom_modele}}</option>  
                                                    @forelse($modeles as $modele)      
                                                                                                      
                                                        <option value="{{$modele->id}}">{{$modele->nom_modele}}</option>                                                        
                                                    @empty
                                                        <option value="">Table Vide</option>
                                                    @endforelse
                                                    <option value="autre">Autre</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Marque d'Article -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
                                        <div class="pd-20 card-box height-100-p">

                                            <h4 class="mb-20 h4 text-info">Marques</h4>
                                            <div class="form-group">
                                                <label>Selctionner la Marque de l'Article</label>
                                                <select 
                                                    class=" custom-select2 form-control list" name="marque_id" 
                                                    required  style="width: 100%"
                                                    {{-- multiple="multiple"   --}}
                                                    >
                                                    <option value="{{$article->marque_id}}">{{$article->marque->nom_marque}}</option>  
                                                    @forelse($marques as $marque)                                                      
                                                        <option value="{{$marque->id}}">{{$marque->nom_marque}}</option>                                                        
                                                    @empty
                                                        <option value="">Table Vide</option>
                                                    @endforelse
                                                    <option value="autre">Autre</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Description de l'Article correspondant :</label>
                                            <textarea class="form-control" value="{{ $article->desc_article }}" name="desc_article"></textarea>
                                        </div>
                                    </div>     
                                </div>
                            </section>
                            <!-- Section 4 -->
                            <h5>Ajout de l'images </h5>
                            <section>
                                <div class="row">
                                    {{-- modeles de l'article  --}}
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
                                        <div class="pd-20 card-box height-100-p">
                            
                                            <h4 class="mb-20 h4 text-info">Couleur</h4>
                                            <div class="form-group">
                                                <label>Selctionner le couleur Correspondant</label>
                                                <select 
                                                    class=" custom-select2 form-control list" name="couleur_id" 
                                                    required  style="width: 100%"
                                                    {{-- multiple="multiple"   --}}
                                                    >
                                                    <option value="">Choisir un couleur</option>
                                                    @forelse($couleurs as $couleur)      
                                                                                                    
                                                        <option value="{{$couleur->id}}">{{$couleur->nom_couleur}}</option>                                                        
                                                    @empty
                                                        <option value="">Table Vide</option>
                                                    @endforelse
                                                  
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Image d'Article -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
                                        <div class="pd-20 card-box height-100-p">
                            
                                            <h4 class="mb-20 h4 text-info">Nom d'Image</h4>
                                            <div class="form-group">
                                                <label>Selctionner l'Image de l'Article</label>
                                                <input
                                                    class="form-control list" name="nom_image" 
                                                    required  style="width: 100%"
                                                    multiple="multiple"  
                                                    placeholder="Entrer le nom de l'image"
                                                    >
                                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                                    <div class="min-height-100px">                                           
                                        <div class="pd-20 card-box mb-30">
                                            <div class="clearfix mb-20">
                                                <div class="pull-left">
                                                    <h4 class="text-info h4">Images</h4>
                                                </div>
                                            </div>
                                            <div class="dropzone">
                                                <div class="fallback">
                                                    <div class="row">
			
                                                        <div class="col-lg-12 px-4">
                                                            <div class="form-group" id="imageInputs">
                                                                <label for="images">Cliqué sur <span class="text-blue"> Brower</span> pour charger une Image</label>
                                                                <div class="row">
                                                                                                                                                              
                                                                    <input type="file" name="images[]" class="image-upload" accept="image/*">
                                                                    <div class="image-preview form-group"></div>
                                                                    
                                                                </div>
                                                            </div>		
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group mb-4 mt-4">
                                                <div class="col-md-2 col-sm-2">
                                                <button type="button" id="addImage" class="btn btn-primary">Ajouter</button>
                                                </div>
                                                <div class="col-md-2 col-sm-2">
                                                    <button type="button" id="removeImage" class="btn btn-danger">Suprimer</button>
                                                </div>
                                               
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
                </div>
                {{-- end formuliare --}}
            </div>
        </div>
    </div>
            <!-- Select-2 end -->

   
            <script>
                $(document).ready(function() {
                    // Code précédent pour ajouter dynamiquement des champs d'images
            
                    // Mettre à jour la prévisualisation de l'image
                    $(document).on('change', '.image-upload', function() {
                        var input = $(this);
                        var preview = input.next('.image-preview');
                        var file = input.get(0).files[0];
                        var reader = new FileReader();
            
                        reader.onload = function() {				
                            preview.html('<img src="' + reader.result + '" alt="Image Preview" width="100" class="mx-2">');
                        };
            
                        if (file) {
                            reader.readAsDataURL(file);
                        } else {
                            preview.empty();
                        }
                    });
                });
            </script>
            
            <script>
                $(document).ready(function() {
                    $("#addImage").click(function() {
                        var newInput = `<div class="row">
                                            <input type="file" name="images[]" class="image-upload" accept="image/*"> 
                                            <div class="image-preview form-group"></div>
                                        </div>
                                        `;
                        // var newDiv = '<div class="image-preview form-group"></div>';
                        $("#imageInputs").append(newInput);
                        // $("#imageInputs").append(newDiv);
                    });
                });
            </script>
            
            <script>
                $(document).ready(function() {
                    // Code précédent pour ajouter dynamiquement des champs d'images
            
                    // Supprimer le dernier champ d'image
                    $("#removeImage").click(function() {
                        var imageInputs = $(".image-upload");
                        var imageDiv = $(".image-preview");
                        if (imageInputs.length > 1) {
                            imageInputs.last().remove();
                            imageDiv.last().remove();
                        }
                    });
                });
            </script>
            
            <script>
                $(document).ready(function() {
                    // Code précédent pour ajouter dynamiquement des champs d'images
            
                    // Supprimer une image
                    $(document).on('click', '.delete-image', function() {
                        var imageId = $(this).data('id');
                        var listItem = $(this).closest('li');
                        // var listItem = $(this).show('li');
            
                        // Envoyer une requête AJAX pour supprimer l'image du serveur
                        $.ajax({
                            url: '/artisan/home/images/' + imageId,
                            type: 'DELETE',
                            data: {
                                _token: "{{ csrf_token() }}",
                            },
                            success: function(response) {
                                if (response.success) {
                                    listItem.remove();
                                } else {
                                    alert('Une erreur s\'est produite lors de la suppression de l\'image.');
                                }
                            },
                            error: function() {
                                alert('Une erreur s\'est produite lors de la suppression de l\'image.');
                            }
                        });
                    });
                });
            </script>
    
@endsection
