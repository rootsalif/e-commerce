@extends('back.layout.artisan-layout')

@section('pageTitle', isset($pageTitle)? $pageTitle: 'Articles')
@section('contentArtisan')

    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

            <!-- Select-2 Start -->
            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Ajouter une article</h4>
                        <p class="mb-30">Ajouter une article</p>
                    </div>
                </div>

                {{-- Formulaire circulaire --}}
                <div class="wizard-content">

                    <form action="{{ route('home.addArticle', ['utils'=>'articles'])}}" method="POST" id="my-awesome-dropzone"
                        class="tab-wizard2 wizard-circle wizard vertical" enctype="multipart/form-data">  
                                          
                            @csrf   
                                          
                            <!-- section 1 -->
                            {{-- {{ dd('echo') }} --}}
                            <h5>Info d'Article</h5>
                            <section>
                                    {{-- Les attribu de l'article Prix Unitaire  --}}
                                <div class="row">
                                        {{-- Articles --}}
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
                                        <div class="pd-20 card-box height-100-p">

                                            <h4 class="mb-20 h4 text-info">Articles</h4>
                                            <div class="form-group">
                                                <label>Nom de l'Article Correspondant <i class="text-danger">*</i></label>
                                                <input type="text" class="form-control" id="nom_article" value="{{old('nom_article')}}" name="nom_article"  />
                                                <div class="error" id="error-nom-article"></div>
                                            
                                            </div>
                                            @error('nom_article')                                            
                                                <div class="d-block text-danger" style="margin-bottom:10px">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <!-- Prix Unitaire -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
                                        <div class="pd-20 card-box height-100-p">

                                            <h4 class="mb-20 h4 text-info">Prix Unitaire</h4>
                                            <div class="form-group">
                                                <label>Prix Unitaire de l'article <i class="text-danger">*</i></label>
                                                <input type="number" min="1" step="any" value="{{old('prix_unitaire_article')}}" class="form-control" name="prix_unitaire_article"  />
                                            
                                            </div>
                                            @error('prix_unitaire_article')
                                                <div class="d-block text-danger" style="margin-bottom:10px">
                                                    {{$message}}
                                                </div>
                                            @enderror
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
                                                <label>Quantité de l'Article <i class="text-danger">*</i></label>
                                                <input type="number" min="1" step="any"  class="form-control" value="{{old('qte_article')}}" name="qte_article" />
                                            
                                            </div>
                                            @error('qte_article')
                                                <div class="d-block text-danger" style="margin-bottom:10px">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <!-- Remise d'Article -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
                                        <div class="pd-20 card-box height-100-p">

                                            <h4 class="mb-20 h4 text-info">Remise</h4>
                                            <div class="form-group">
                                                <label>Remise de l'Article <i class="text-danger">*</i></label>
                                                <input type="number" min="1" step="any" class="form-control" value="{{old('remise_article')}}" name="remise_article" />
                                            
                                            </div>
                                            @error('remise_article')
                                                <div class="d-block text-danger" style="margin-bottom:10px">
                                                    {{$message}}
                                                </div>
                                            @enderror
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
                                                <label>TVA de l'Article <i class="text-danger">*</i></label>
                                                <input type="number" min="0" step="any" class="form-control" value="{{old('tva_article')}}" name="tva_article"  />                                            
                                            </div>
                                            @error('tva_article')
                                                <div class="d-block text-danger" style="margin-bottom:10px">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <!-- Etat d'Article -->
                                    
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
                                        <div class="pd-20 card-box height-100-p">

                                            <h4 class="mb-20 h4 text-info">Etat</h4>
                                            <div class="form-group">
                                                <label>État de l'Article <i class="text-danger">*</i></label>
                                                <select 
                                                    class=" custom-select2 form-control list" value="{{old('etat_id')}}" name="etat_id" 
                                                      style="width: 100%"
                                                    {{-- multiple="multiple"   --}}
                                                    >
                                                    <option value="">Etat d'article</option>
                                                    @forelse($etats as $etat)                                                      
                                                        <option value="{{$etat->id}}">{{$etat->nom_etat}}</option>                                                        
                                                    @empty
                                                        <option value="">Table Vide</option>
                                                    @endforelse
                                                    <option value="autre">Autre</option>
                                                </select>
                                            
                                            </div>
                                            @error('etat_id')
                                                <div class="d-block text-danger" style="margin-bottom:10px">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                               
                                
                                <div class="row mb-4">
                                    <!-- Famille d'Article -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
                                        <div class="pd-20 card-box height-100-p">

                                            <h4 class="mb-20 h4 text-info">Familles</h4>
                                            <div class="form-group">
                                                <label>Selctionner la famille de l'Article <i class="text-danger">*</i></label>
                                                <select 
                                                    class=" custom-select2 form-control list" value="{{old('famille_id')}}" name="famille_id" 
                                                      style="width: 100%"
                                                    {{-- multiple="multiple"   --}}
                                                    >
                                                    <option value="">Choisir une famille</option>
                                                    @forelse($familles as $famille)                                                      
                                                        <option value="{{$famille->id}}">{{$famille->nom_famille}}</option>                                                        
                                                    @empty
                                                        <option value="">Table Vide</option>
                                                    @endforelse
                                                    <option value="autre">Autre</option>
                                                </select>
                                            </div>
                                            @error('famille_id')
                                                <div class="d-block text-danger" style="margin-bottom:10px">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Categories --}}
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
                                        <div class="pd-20 card-box height-100-p">
                                            <h4 class="mb-20 h4 text-info">Categories</h4>
                                            <div class="form-group">
                                                <label>choix de categories <i class="text-danger">*</i></label>
                                                <select value="{{old('categorie_id')}}" name="categorie_id" 
                                                    class=" custom-select2 form-control list" 
                                                      style="width: 100%"
                                                    {{-- multiple="multiple"   --}}
                                                >
                                                    <option value="">Choisir une Categorie</option>
                                                    @forelse($categories as $categorie)                                                    
                                                        <option value="{{$categorie->id}}">{{$categorie->nom_categorie}}</option>                                                       
                                                    @empty
                                                        <option value="">Table Vide</option>
                                                    @endforelse
                                                    <option value="autre">Autre</option>
                                                </select>
                                            </div>
                                            @error('categorie_id')
                                                <div class="d-block text-danger" style="margin-bottom:10px">
                                                    {{$message}}
                                                </div>
                                            @enderror
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
                                                <label>Selctionner Modele Correspondant <i class="text-danger">*</i></label>
                                                <select 
                                                    class=" custom-select2 form-control list" value="{{old('modele_id')}}" name="modele_id" 
                                                      style="width: 100%"
                                                    {{-- multiple="multiple"   --}}
                                                    >
                                                    <option value="">Choisir un Article</option>
                                                    @forelse($modeles as $modele)      
                                                                                                      
                                                        <option value="{{$modele->id}}">{{$modele->nom_modele}}</option>                                                        
                                                    @empty
                                                        <option value="">Table Vide</option>
                                                    @endforelse
                                                    <option value="autre">Autre</option>
                                                </select>
                                            </div>
                                            @error('modele_id')
                                                <div class="d-block text-danger" style="margin-bottom:10px">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <!-- Marque d'Article -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
                                        <div class="pd-20 card-box height-100-p">

                                            <h4 class="mb-20 h4 text-info">Marques</h4>
                                            <div class="form-group">
                                                <label>Selctionner la Marque de l'Article <i class="text-danger">*</i></label>
                                                <select 
                                                    class=" custom-select2 form-control list" value="{{old('marque_id')}}" name="marque_id" 
                                                      style="width: 100%"
                                                    {{-- multiple="multiple"   --}}
                                                    >
                                                    <option value="">Choisir une marque</option>
                                                    @forelse($marques as $marque)                                                      
                                                        <option value="{{$marque->id}}">{{$marque->nom_marque}}</option>                                                        
                                                    @empty
                                                        <option value="">Table Vide</option>
                                                    @endforelse
                                                    <option value="autre">Autre</option>
                                                </select>
                                            </div>
                                            @error('marque_id')
                                                <div class="d-block text-danger" style="margin-bottom:10px">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Description de l'Article correspondant <i class="text-danger">*</i></label>
                                            <textarea class="form-control" value="{{old('desc_article')}}" name="desc_article" ></textarea>
                                        </div>
                                            @error('desc_article')
                                                <div class="d-block text-danger" style="margin-bottom:10px">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                    </div>     
                                </div>
                            </section>
                            <!-- Section 4 -->
                            <h5>Ajout de l'images </h5>
                            <section>
                                <div class="row">
                                    {{-- modeles de l'article  --}}
                                    <div class="col-lg-12 col-md-6 col-sm-12 mb-30">
                                        <div class="pd-20 card-box height-100-p">
                            
                                            <h4 class="mb-20 h4 text-info">Couleur</h4>
                                            <div class="form-group">
                                                <label>Selctionner le couleur Correspondant <i class="text-danger">*</i> </label>
                                                <select 
                                                    class=" custom-select2 form-control list" value="{{old('couleur_id')}}" name="couleur_id" 
                                                      style="width: 100%"
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
                                            @error('couleur_id')
                                                <div class="d-block text-danger" style="margin-bottom:10px">
                                                    {{$message}}
                                                </div>
                                            @enderror
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
                                                                <label for="images">Cliqué sur <span class="text-blue"> Brower</span> pour charger une Image <i class="text-danger">*</i></label>
                                                                <div class="row">
                                                                                            
                                                                    <input type="file" value="{{old('images')}}" name="images[]" class="image-upload" accept="image/*" >
                                                                    <div class="image-preview form-group"></div>
                                                                    
                                                                </div>
                                                            </div>		
                                                            @error('images')
                                                                <div class="d-block text-danger" style="margin-bottom:10px">
                                                                    {{$message}}
                                                                </div>
                                                            @enderror
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

            <!-- multiple select row Datatable Start -->
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">            
            
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Table des articles et leur Modification|Supression </h4>
                </div>
                <div class="pb-20">
                    <table
                        class="table hover multiple-select-row data-table-export nowrap"
                    >
                        <thead>
                            <tr>
                                
                                <th class="table-plus datatable-nosort">Noms</th> 
                                <th>Familles</th>  
                                <th>Categories</th>                                
                                <th>Marque</th>
                                <th>Modele</th>
                                <th>Date D'enregistrement</th>                             
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($articles as $article)                          
                            
                                <tr>                                       
                                    <td class="table-plus">{{ $article->nom_article }}</td>
                                    <td>{{ $article->famille->nom_famille }}</td>                                    
                                    <td>{{ $article->categorie->nom_categorie }}</td>
                                    <td>{{ $article->marque->nom_marque }}</td>
                                    <td>{{ $article->modele->nom_modele }}</td>
                                    <td>{{ $article->created_at }}</td>
                                    
                                    <td>
                                        <div class="table-actions form-group">
                                            
                                                <a href="{{ route('home.editArticle', ['utils'=>'articles', 'id'=>$article->id]) }}" data-color="#265ed7"
                                                    ><button type="submit" class="btn btn-warning mx-2">   Editer </button></a>
                                            
                                            <form action="{{ route('home.deleteUtils',['utils'=>'articles', 'id'=>$article->id]) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">
                                                    Suprimer	
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                    
                                </tr>
                            
                            @empty
                            <tr>
                                <td class="table-plus">Aucun article Enregistrer</td>
                                <td>*********</td>
                                <td>*********</td>
                                <td>*********</td>                                   
                            </tr>
                            @endforelse
                            
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- multiple select row Datatable End -->
        </div>         
        
    </div>



    {{-- supression dynamique --}}
    {{-- @if (count($images) > 0)
    <h2>Uploaded Images</h2>
    <ul>
        @foreach ($images as $image)
        <li>
            <img src="{{ asset($image->path) }}" alt="{{ $image->name }}" height="100">
            <button class="btn btn-danger delete-image" data-id="{{ $image->id }}">Delete</button>
        </li>
        @endforeach
    </ul>
    @endif
--}}
        


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

{{-- <script>
    $(document).ready(function () {
        $("#categorieSelect").change(function () {
            var categorieId = $(this).val();                     
            var sousCategorieSelect = $("#sousCategorieSelect");         
            var autreSousCategorieInput = $("#autreSousCategorieInput");
            
            $.ajax({
                url: '/article/home/article/' + categorieId,
                
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
</script> --}}
	{{-- <script>
		Dropzone.autoDiscover = false;
		$(".dropzone").dropzone({
			addRemoveLinks: true,
			removedfile: function (file) {
				var name = file.name;
				var _ref;
				return (_ref = file.previewElement) != null
					? _ref.parentNode.removeChild(file.previewElement)
					: void 0;
			},
		});
	</script> --}}
     <!-- js -->
     {{-- <script src="/back/vendors/scripts/core.js"></script>    --}}
    {{-- <!-- switchery js -->
    <script src="/back/src/plugins/switchery/switchery.min.js"></script>
    <!-- bootstrap-tagsinput js -->
    <script src="/back/src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
    <!-- bootstrap-touchspin js -->
    <script src="/back/src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
    <script src="/back/vendors/scripts/advanced-components.js"></script>
--}}
   
    <!-- Datatable Setting js -->
  
    <script src="/back/vendors/scripts/datatable-setting.js"></script>
    <script type="text/javascript" src="/back/vendors/scripts/validate-article.js"></script>

    
    
@endsection
