@extends('back.layout.artisan-layout')

@section('pageTitle', isset($pageTitle)? $pageTitle: 'Livraions d\'Article')
@section('contentArtisan')
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Table des Livraions et leur Modification|Supression </h4>
                </div>
                <div class="pb-20">
                    <table
                        class="table hover multiple-select-row data-table-export nowrap "
                    >
                        <thead>
                            <tr>                                
                                <th class="table-plus datatable-nosort">Article</th>  
                                <th>Nom article</th>  
                                <th>ID Livraison</th>                                     
                                <th>Adresse</th>
                                <th>Date</th>
                                <th>Etat de livraison</th>                             
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($livraisons as $livraison)
                            <tr>     
                                    <td class="table-plus">
                                    <img src="/storage/{{ $article->images->first()->path }}" alt="" width="70" height="70"></td>
                                    <td>{{ $article->nom_article }}</td>                                
                                    <td> {{ $livraison->id }}</td>
                                    <td> {{ $livraison->adresse_livraison }}</td>
                                    <td> {{ $livraison->date_livraison }}</td>
                                    <td> {{ $livraison->etat_artisan }}</td>                               
                            </tr>
                            @empty
                                  
                            @endforelse
                        
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- multiple select row Datatable End -->
        </div>      
        
    </div>

    
     <script src="/back/vendors/scripts/datatable-setting.js"></script>

    
@endsection
