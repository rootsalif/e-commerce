@extends('back.layout.pages-layout')

@section('pageTitle', isset($pageTitle)? $pageTitle: 'Commandes d\'Article')
@section('content')
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Table des Commandespar les clients concernés </h4>
                </div>
                <div class="pb-20">
                    <table
                        class="table hover multiple-select-row data-table-export nowrap "
                    >
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">Image</th>  
                                <th>Nom</th>  
                                <th>Phone</th>                                     
                                <th>Email</th>
                                <th>Genre</th>
                                <th>Date & N° commande</th>
                                <th>Details commandes</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($commandes as $commande)
                            <tr>  
                            
                                                            
                                    <td class="table-plus">                                    
                                        <img src="" alt="image" height="50" width="50">                                    
                                    </td>         
                                    <td>{{ $clients->find($commande->client_id)->nom_client }}</td>
                                    <td>{{ $clients->find($commande->client_id)->telephone_client }}</td>
                                    <td> {{ $clients->find($commande->client_id)->email_client }}</td>
                                    <td> {{ $clients->find($commande->client_id)->genre_client }}</td>
                                    <td> {{ $commande->created_at ."  N°". $commande->id }}</td>
                                    <td class="table-plus">
                                    <a href="{{route('home.editUtil', ['utils'=>'commandes', 'id'=>$commande->id]) }}" data-color="#265ed7">
                                        Détailler
                                        </a>
                                    </td>  
                                      
                                
                            
                            </tr>
                              
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
