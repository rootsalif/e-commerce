@extends('back.layout.artisan-layout')

@section('pageTitle', isset($pageTitle)? $pageTitle: 'Dashbord')
@section('contentArtisan')

   <div class="pd-ltr-20">
        <div class="card-box pd-20 height-100-p mb-30">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <img src="/back/vendors/images/banner-img.png" alt="" />
                </div>
                <div class="col-md-8">
                    <h4 class="font-20 weight-500 mb-10 text-capitalize">
                        Bienvenue 
                        <div class="weight-600 font-30 text-blue">
                            @if(Auth::guard('artisan')->user()->genre_artisan=='Homme')
                                Monsieur {{Auth::guard('artisan')->user()->nom_artisan}}!
                            @elseif(Auth::guard('artisan')->user()->genre_artisan=='Femme')
                                Mademoiselle {{Auth::guard('artisan')->user()->nom_artisan}}!
                            @else
                            {{Auth::guard('artisan')->user()->nom_artisan}}!
                            @endif
                        </div>
                    </h4>
                    <p class="font-18 max-width-600">
                        Cette plateforme est consus, pour vous aidez à publier vos produits
                        comme il faut
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 mb-30">
                <div class="card-box height-100-p widget-style1">
                    <div class="d-flex flex-wrap align-items-center">
                        <div class="progress-data">
                            <div id="chart"></div>
                        </div>
                        <div class="widget-data">
                            <div class="h4 mb-0">2023</div>
                            <div class="weight-600 font-14">Contact</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 mb-30">
                <div class="card-box height-100-p widget-style1">
                    <div class="d-flex flex-wrap align-items-center">
                        <div class="progress-data">
                            <div id="chart2"></div>
                        </div>
                        <div class="widget-data">
                            <div class="h4 mb-0">{{ count($livraisons) }}</div>
                            <div class="weight-600 font-14">Livraison</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 mb-30">
                <div class="card-box height-100-p widget-style1">
                    <div class="d-flex flex-wrap align-items-center">
                        <div class="progress-data">
                            <div id="chart3"></div>
                        </div>
                        <div class="widget-data">
                            <div class="h4 mb-0">{{ count($commandes) }}</div>
                            <div class="weight-600 font-14">Commandes</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 mb-30">
                <div class="card-box height-100-p widget-style1">
                    <div class="d-flex flex-wrap align-items-center">
                        <div class="progress-data">
                            <div id="chart4"></div>
                        </div>
                        <div class="widget-data">
                            <div class="h4 mb-0">$6060</div>
                            <div class="weight-600 font-14">Vendez</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-8 mb-30">
                <div class="card-box height-100-p pd-20">
                    <h2 class="h4 mb-20">Activiter</h2>
                    <div id="chart5"></div>
                </div>
            </div>
            <div class="col-xl-4 mb-30">
                <div class="card-box height-100-p pd-20">
                    <h2 class="h4 mb-20">Lead Target</h2>
                    <div id="chart6"></div>
                </div>
            </div>
        </div>
        <div class="card-box mb-30">
            <h2 class="h4 pd-20">Produit les plus vendus</h2>
            <table class="data-table table nowrap">
                <thead>
                    <tr>
                        <th class="table-plus datatable-nosort">Produit</th>
                        <th>Nom</th>                        
                        <th>Model</th>
                        <th>Prix</th>
                        <th>Qte</th>
                        <th class="datatable-nosort">Action</th>
                    </tr>
                </thead>
                <tbody>
               
                @forelse($articles as $article)
               
                <tr>
                        <td class="table-plus">
                            <img
                                src="/storage/images/{{ $article->images->first()->path }}"
                                width="70"
                                height="70"
                                alt=""
                            />
                        </td>
                        <td>
                            <h5 class="font-16">{{$article->nom_article}}</h5>
                           
                        </td>
                     
                        <td>{{$article->modele->nom_modele}}</td>
                        <td>{{$article->prix_unitaire_article}}</td>
                        <td>{{$article->qte_article}}</td>
                        <td>
                            <div class="dropdown">
                                <a
                                    class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                    href="#"
                                    role="button"
                                    data-toggle="dropdown"
                                >
                                    <i class="dw dw-more"></i>
                                </a>
                                <div
                                    class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                                >
                                    <a class="dropdown-item" href="#"
                                        ><i class="dw dw-eye"></i> Afficher</a
                                    >
                                    <a class="dropdown-item" href="#"
                                        ><i class="dw dw-edit2"></i> Modifier</a
                                    >
                                    <a class="dropdown-item" href="#"
                                        ><i class="dw dw-delete-3"></i> Suprimer</a
                                    >
                                </div>
                            </div>
                        </td>
                    </tr>
                @empty
                <p>Aucun enregistrement faite</p>
                @endforelse
                   
                </tbody>
            </table>
        </div>
    </div>
@endsection