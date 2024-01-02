@extends('back.layout.pages-layout')

@section('pageTitle', isset($pageTitle)? $pageTitle: 'Commandes d\'Article')
@section('content')
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Table des Commandes par les artisans concernés </h4>
                </div>
                <div class="pb-20">
                    <table
                        class="table hover multiple-select-row data-table-export nowrap "
                    >
                       
                            @foreach($artisans as $artis)                             
                                <thead>
                                    <tr class="text-blue">
                                        <th class="table-plus datatable-nosort">Nom artisan</th>  
                                        <th>Proféssion</th>  
                                        <th>Phone</th>                                     
                                        <th>Email</th>
                                        <th>Genre</th>                                        
                                    </tr>
                                </thead>  
                                <tbody>
                                    <tr class="text-info">
                                        <td>{{$artisan->find($artis)->nom_artisan}}</td>
                                        <td>{{$artisan->find($artis)->profession_artisan}}</td>
                                        <td>{{$artisan->find($artis)->telephone_artisan}}</td>
                                        <td>{{$artisan->find($artis)->email_artisan}}</td>
                                        <td>{{$artisan->find($artis)->genre_artisan}}</td>
                                    </tr>                                    
                                </tbody>
                                <thead>
                                    <tr>
                                        <th class="table-plus datatable-nosort">Image</th>  
                                        <th>Nom</th>  
                                        <th>quantité</th>                                     
                                        <th>Prix</th>
                                        <th>Stock artisan</th>
                                        <th>Date & N° commande</th>
                                    </tr>
                                </thead>
                          
                                <tbody>
                                @foreach ($commande->articles as $article)
                                
                                @if($artis===$article->artisan_id) 
                                
                                    <tr>                              
                                        <td class="table-plus">
                                            <img src="" alt="image" height="50" width="50">
                                        </td>         
                                        <td>{{ $article->nom_article }}</td>
                                        <td>{{$article->pivot->qte_panier }}</td>
                                        <td> {{ $article->pivot->prix_panier }}</td>
                                        
                                        <td> {{ $article->qte_article }}</td>
                                        <td> {{ $commande->created_at ."  N°". $commande->id }}</td>
                                        
                                    </tr>
                                @endif
                            
                                
                                @endforeach
                            @endforeach
                        
                            
                        </tbody>
                    </table>
                </div>
            </div>

            
            <!-- multiple select row Datatable End -->
        </div>         
        
    </div>
     <!-- js -->
     <script src="/back/vendors/scripts/core.js"></script>
    <script src="/back/vendors/scripts/script.min.js"></script>
    <script src="/back/vendors/scripts/process.js"></script>
    <script src="/back/vendors/scripts/layout-settings.js"></script>
    <!-- switchery js -->
    <script src="/back/src/plugins/switchery/switchery.min.js"></script>
    <!-- bootstrap-tagsinput js -->
    <script src="/back/src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
    <!-- bootstrap-touchspin js -->
    
    <script src="/back/src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
    <script src="/back/vendors/scripts/advanced-components.js"></script>
    <script src="/back/src/plugins/datatables/js/dataTables.buttons.min.js"></script>
		<script src="/back/src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
		<script src="/back/src/plugins/datatables/js/buttons.print.min.js"></script>
		<script src="/back/src/plugins/datatables/js/buttons.html5.min.js"></script>
		<script src="/back/src/plugins/datatables/js/buttons.flash.min.js"></script>
		<script src="/back/src/plugins/datatables/js/pdfmake.min.js"></script>
		<script src="/back/src/plugins/datatables/js/vfs_fonts.js"></script>
		<!-- Datatable Setting js -->
		<script src="/back/vendors/scripts/datatable-setting.js"></script>
    
    
@endsection
