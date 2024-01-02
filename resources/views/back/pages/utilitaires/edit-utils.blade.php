@extends('back.layout.pages-layout')

@section('pageTitle', isset($pageTitle)? $pageTitle: 'Modifier d\'Article')
@section('content')

   
            <form action="{{route('home.updateUtil', ['utils'=>$utils, 'id'=>$id])}}" method="POST">
                @csrf
                @method('put')   
             
                <ul class="profile-edit-list row">
                    <div class="col-md-8 form-group">
                        <li class="weight-500">
                            <h4 class="text-blue h5 mb-20">
                                Modification de {{ $utils }}
                            </h4>

                            <div class="form-group">
                                <label>{{ $utils }}</label>
                                
                                
                                <input
                                    class="form-control form-control-lg"
                                    type="text" name="nom"
                                    value="{{isset($nom) ? $nom: 'nom definie'}}"
                                />
                            </div>                      
                            
                        </li>
                    </div>
                    {{-- Condition de modification --}}
                    @if (isset($desc)||$utils=='categories')
                    <div class="col-md-8 form-group">
                        <li class="weight-500">
                            <h4 class="text-blue h5 mb-20">
                                Description De Categorie
                            </h4>
                                
                            <div class="form-group">
                                <label>Description</label>
                                {{-- <textarea name="" id="" cols="30" rows="10"></textarea> --}}
                                <textarea
                                    class="form-control form-control-lg"
                                    type="text"
                                    name="desc"
                                    value="{{isset($desc) ? $desc: 'non definie'}}"
                                ></textarea>
                            </div>
                            {{-- <div class="form-group">
                                <label>Profession</label>
                                <input
                                    class="form-control form-control-lg"
                                    type="text"
                                    name="profession"
                                    value="{{isset($profession) ? $profession: null}}"
                                />
                            </div> --}}   
                             
                        </li>    
                    </div>  
                    @endif  

                    {{-- Choix de categorie en relation avec sous categorie --}}
                    @if (isset($subcatego)||$utils=='sous-categories')
                        <div class="col-md-8 form-group">  
                            <li class="weight-500">
                                <h4 class="text-blue h5 mb-20">
                                    Le Categorie en relation avec le sous categorie
                                </h4>                                                          
                                <label class="col-md-12">Selection le categories</label>                                                              
                                <select
                                    name="categorie_id"
                                    class="custom-select2 form-control selected"
                                    multiple="multiple"
                                    style="width: 100%"
                                >
                                    @forelse ($categories as $categorie)
                                        <option value="{{ $categorie->id }}">{{ $categorie->nom_categorie }}</option>  
                                    @empty
                                    <optgroup label="Aucune Enregistrement Faite">
                                        <option value="AK">Vide</option>                                       
                                    </optgroup>                                        
                                    @endforelse 
                                </select>                                   
                            </li>                     
                        </div> 
                        {{-- Afficher la description de categorie selectionné --}}
                        {{-- <div class="col-md-8 form-group">  
                            <li class="weight-500">
                                <h4 class="text-blue h5 mb-20">
                                    Le Categorie en relation avec le sous categorie
                                </h4>                                                          
                                <label class="col-md-12">Selection le categories</label>
                                <p>

                                </p>
                            </li>
                        </div>         --}}
                    @endif           
                       
                    
                </ul>
                <div class="row form-group">
                    <div class="col-md-4 col-sm-6 mt-4">
                        <button type="reset" class="btn-danger form-control">Annuler</button>
                    </div>
                    <div class="col-md-4 col-sm-6 mt-4">
                        <button type="submit" class="btn btn-primary form-control">Modifier</button>
                    </div>
                </div>
            </form>
  
@endsection
