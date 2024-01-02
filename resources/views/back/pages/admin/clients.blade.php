@extends('back.layout.pages-layout')

@section('pageTitle', isset($pageTitle)? $pageTitle: 'Les Client')
@section('content')

    {{-- <div class="mobile-menu-overlay"></div> --}}

    {{-- <div class="main-container"> --}}
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Table de Donnés des Clients</h4>
                </div>
                <div class="pb-20">
                    <table
                        class="table hover multiple-select-row data-table-export nowrap"
                    >
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">Nom</th>
                                <th>Age</th>
                                <th>Genre</th>
                                <th>Adresse</th>
                                <th>Email</th>
                                <th>Date de Creation</th>
                                <th>Téléphone</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($clients as $client)
                            <a href="#">
                                <tr>
                                    <td class="table-plus">{{ $client->nom_client }}</td>
                                    <td>{{ isset($client->date_naiss_client)? $client->date_naiss_client : 'nom definie' }}</td>
                                    <td>{{ $client->genre_client }}</td>
                                    <td>{{ $client->adresse_client }}</td>
                                    <td>{{ $client->email_client }}</td>
                                    <td>{{ $client->created_at }}</td>
                                    <td>{{ $client->telephone_client }}</td>
                                   
                                </tr>
                            </a>
                            @empty
                            <tr>
                                <td class="table-plus">Vide</td>
                                <td>Vide</td>
                                <td>Vide</td>
                                <td>Vide</td>
                                <td>Vide</td>
                                <td>Vide</td>
                            </tr>
                            @endforelse
                            
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Export Datatable End -->
        </div>
        
    </div>
    {{-- </div>	 --}}

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
