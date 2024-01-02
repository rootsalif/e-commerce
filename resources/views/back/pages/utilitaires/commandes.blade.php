@extends('back.layout.artisan-layout')

@section('pageTitle', isset($pageTitle)? $pageTitle: 'Commandes d\'Article')
@section('contentArtisan')
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Table des Commandes </h4>
                </div>
                <div class="pb-20">
                    <table
                        class="table hover multiple-select-row data-table-export nowrap "
                    >
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">Commande id</th>
                                <th>Qte commande</th>
                                <th>Montant commande</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $article)
                                @forelse ($article->commandes as $commande)

                                <tr>
                                <td class="table-plus">
                                {{"ID : ". $commande->id}}
                                </td>
                                    <td>{{ $commande->pivot->qte_panier }}</td>
                                    <td> {{ $commande->pivot->prix_panier }}</td>
                                    <td> {{ $commande->date_comd }}</td>
                                    <td> {{ 'action' }}</td>
                                </tr>
                                @empty

                                @endforelse
                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>

            <!-- <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Commande concerné par d'autre artisans </h4>
                </div>
                <div class="pb-20">
                    <table
                        class="table hover multiple-select-row data-table-export nowrap "
                    >
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">Nom article</th>
                                <th>Nom de client</th>
                                <th>Qte commande</th>
                                <th>Montant commande</th>
                                <th>nom artisan</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $article)
                                @forelse ($article->commandes as $commande)

                                <tr>
                                    <td class="table-plus">{{ $article->nom_article }}</td>
                                    <td>{{ $commande->pivot->qte_panier }}</td>
                                    <td> {{ $commande->pivot->prix_panier }}</td>
                                    <td> {{ $commande->date_comd }}</td>
                                    <td> {{ $clients->find($commande->client_id)->nom_client }}</td>
                                </tr>
                                @empty

                                @endforelse
                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div> -->
            <!-- multiple select row Datatable End -->
        </div>

    </div>
    <script src="/back/vendors/scripts/datatable-setting.js"></script>

@endsection
