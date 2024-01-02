@extends('back.layout.pages-layout')

@section('pageTitle', isset($pageTitle)? $pageTitle: 'etats d\'Article')
@section('content')
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

            {{-- <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Advanced Components</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Advanced Components
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a
                                class="btn btn-primary dropdown-toggle"
                                href="#"
                                role="button"
                                data-toggle="dropdown"
                            >
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
            </div> --}}

            <!-- Select-2 Start -->
            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">La gestion de etats des l'articles</h4>
                        <p class="mb-30">Ajouter une etat</p>
                    </div>
                </div>
                <form action="{{ route('home.addUtil', ['utils'=>'etats']) }}" method="POST">                    
                    @csrf
                    <div class="form-group">
                       
                        <div class="form-group">
                            <div class="row">
								{{-- <label class="col-sm-12 col-md-2 col-form-label">Text</label> --}}
								<div class="col-sm-12 col-md-8">
									<input
                                        name="nom_etat"
										class="form-control"
										type="text"
										placeholder="Ajouter"
									/>
								</div>
                                <div class="col-sm-12 col-md-4">                         
                                    <div>
                                        <button type="submit" class="btn btn-primary">Ajouter</button>	                                
                                    </div>                            
                                </div>
							</div>
                            
                        </div>
                       
                       
                    </div>
                </form>
            </div>
            <!-- Select-2 end -->

            <!-- multiple select row Datatable Start -->
            
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Table des etats et leur Medification|Supression </h4>
                </div>
                <div class="pb-20">
                    <table
                        class="table hover multiple-select-row data-table-export nowrap "
                    >
                        <thead>
                            <tr>
                                
                                <th class="table-plus datatable-nosort">Nom</th>   
                                <th>Date D'enregistrement</th>                             
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($etats as $etat)
                           
                                <tr>                                       
                                    <td class="table-plus">{{ $etat->nom_etat }}</td>
                                    <td>{{ $etat->created_at }}</td>
                                    
                                    <td>
                                        <div class="table-actions">
                                            
                                                <a href="{{ route('home.editUtil', ['utils'=>'etats', 'id'=>$etat->id]) }}" data-color="#265ed7"
                                                    ><button type="submit" class="btn btn-warning">Editer</button></a>
                                            
                                            <form action="{{ route('home.deleteUtil',['utils'=>'etats', 'id'=>$etat->id]) }}" method="POST">
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
                            <tr>
                                <td class="table-plus">Vide</td>
                                <td>Vide</td>
                                <td>Vide</td>
                                <td>Vide</td>                                   
                            </tr>
                            @endforelse
                            
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
