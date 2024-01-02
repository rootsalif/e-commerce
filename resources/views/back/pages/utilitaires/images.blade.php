
@extends('back.layout.artisan-layout')

@section('pageTitle', isset($pageTitle)? $pageTitle: 'Images d\'Article')
@section('contentArtisan')

	<form method="POST" action="{{ route('home.addArticle', ['utils'=>'images'])}}" enctype="multipart/form-data">
		@method('post')
		@csrf
		<div class="row">
			<!-- Articles -->
			<div class="col-lg-6 col-md-6 col-sm-12 mb-30">
				<div class="pd-20 card-box height-100-p">

					<h4 class="mb-20 h4 text-info">Articles</h4>
					<div class="form-group">
						<label>Selction de l'Article</label>
						<select 
							class=" custom-select2 form-control list" name="article_id" 
							required  style="width: 100%"
							{{-- multiple="multiple"   --}}
							>
							<option value="">Choisir un article</option>
							@forelse($articles as $article)                                                      
							<option value="{{ $article->id }}">{{ $article->nom_article }}</option>                                                        
							@empty
								<option value="">Table Vide</option>
							@endforelse										
						</select>
					</div>
				</div>
			</div>
			

			{{-- Couleurs --}}
			<div class="col-lg-6 col-md-6 col-sm-12 mb-30">
				<div class="pd-20 card-box height-100-p">
					<h4 class="mb-20 h4 text-info">Couleurs</h4>
					<div class="form-group">
						<label>Le choix de couleur</label>
						<select name="couleur_id" 
							class=" custom-select2 form-control list" 
							required  style="width: 100%"
							multiple="multiple"  
						>
							<option value="">Choix de couleur</option>
							@forelse($couleurs as $couleur)                                                    
								<option value="{{ $couleur->id }}">{{ $couleur->nom_couleur }}</option>                                                       
							@empty
								<option value="">Table Vide</option>
							@endforelse
						</select>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			
			<div class="col-lg-8">
				<div class="form-group" id="imageInputs">
					<label for="images">Charger une Image</label>
					<div class="row">
												
						<input type="file" name="images[]" class="image-upload" accept="image/*">
						<div class="image-preview form-group"></div>
						
					</div>
				</div>		
			</div>
			<div class="col-lg-4">
				<div class="row form-group">
					<div class="col-lg-12 col-md-6 col-sm-12 mb-30">
					<button type="button" id="addImage" class="btn btn-primary">Ajouter une image</button>
					</div>
					<div class="col-lg-12 col-md-6 col-sm-12 mb-30">
						<button type="button" id="removeImage" class="btn btn-danger">Suprimer le dernier image</button>
					</div>
					<div class="col-lg-12 col-md-6 col-sm-12 mb-30">
						<button type="submit" class="btn btn-primary">Enregistrer</button>
					</div>
				</div>
			</div>

		</div>		
	</form>
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

	     <!-- multiple select row Datatable Start -->
            
		 <div class="card-box mb-30">
			<div class="pd-20">
				<h4 class="text-blue h4">Table des familles et leur Medification|Supression </h4>
			</div>
			<div class="pb-20">
				<table
					class="table hover multiple-select-row data-table-export nowrap "
				>
					<thead>
						<tr>
							
							<th class="table-plus datatable-nosort">Image</th>   
							<th>Articles</th>
							<th>Etat</th>
							<th>Date D'enregistrement</th>                             
							<th>Action</th>
						</tr>
					</thead>
					<tbody>				
						
						@forelse ($images as $image)
						
							<tr>                                       
								<td class="table-plus">
									<img
                                src="/storage/{{ $image->path }}" 
                                width="70"
                                height="70"
                                alt=""
                            />
								</td>
								<td>{{ $image->article->nom_article }}</td>
								<td>{{ $image->article->etat_article }}</td>
								<td>{{ $image->created_at }}</td>
																
								<td>
									<div class="table-actions">
										
											<a href="{{ route('home.editArticle', ['utils'=>'images', 'id'=>$image->id]) }}" data-color="#265ed7"
												><button type="submit" class="btn btn-warning">Editer</button></a>
										
										<form action="{{ route('home.deleteUtils',['utils'=>'images', 'id'=>$image->id]) }}" method="POST">
											@csrf
											@method('delete')
											<button type="submit" class="btn btn-danger mx-4">
												Suprimer	
											</button>
										</form>
									</div>
								</td>
								
							</tr>
						
						@empty
						
						@endforelse
						
					</tbody>
				</table>
			</div>
		</div>
		<!-- multiple select row Datatable End -->
			


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
					preview.html('<img src="' + reader.result + '" alt="Image Preview" width="100">');
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
	 <script src="/back/vendors/scripts/datatable-setting.js"></script>
				

@endsection

