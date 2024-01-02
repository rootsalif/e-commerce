@extends('back.layout.plateform-layout')

@section('pageTitle', isset($pageTitle)? $pageTitle: 'liste de commande')
@section('contentClient')

<!-- Content Section Start -->

  <div id="content">
    <div class="container">

      <div class="row">
        <div class="col-md-12 col-sm-12 col-sx-12">
          <div class="order-details">
            <h2 class="title-checkout"><i class="icon-basket-loaded"></i>List de Votre Commande</h2>
            <div class="order_review margin-bottom-35">

            <table class="table table-responsive table-review-order">
              <thead>
                <tr>
                  <th class="product-name">Id Commande</th>
                  <th class="product-name">Total commande</th>
                  <th class="product-name">date Commande</th>
                  <th class="product-name">Annuler avant 24h</th>
                </tr>
              </thead>
              <tbody>
            @forelse($commandes as $commande)

                <tr>
                  <td><p>{{ $commande->id }}</p></td>
                  <td><p class="price">{{ $commande->montant_comd }} F CFA</p></td>
                  <td><p>{{$commande->created_at}}</p></td>
                  <td>
                    <p>
                        @include('back.pages.include.swicht', [
                            'name'=>'etat_comd', 'label'=>isset($commande->etat_comd)?'confirmer':'annuler', 'value'=>$commande->etat_comd
                        ])
                    </p>
                </td>
                </tr>

            @empty
              <p>Aucune commande effectuer</p>
            @endforelse
            </tbody>

            </table>
            <ul>
              <ol>
              <i class="text-info">Spécification des commande effectuer par les différents artisans</i>
              </ol>
            </ul>


							<hr>
               @foreach($artisans as $id)
               <h3>Articles Commmander avec {{$artisan->find($id)->nom_artisan}}</h3>
               @php
               $totals=0;
               @endphp

               <table class="table table-responsive table-review-order">


               <thead>
                  <tr>
                    <th class="product-name">Nom artisan</th>
                    <th class="product-name">Numero</th>
                    <th class="product-total">Profession</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><h4>{{$artisan->find($id)->nom_artisan}}</h4></td>
                        <td><h4> <i>(+223)</i>{{" ".$artisan->find($id)->telephone_artisan}}</h4></td>
                        <td><h4>{{$artisan->find($id)->profession_artisan}}</h4></td>
                    </tr>
                </tbody>
               </table>
               <table class="table table-responsive table-review-order">
                <thead>
                  <tr>
                    <th class="product-name">Article</th>
                    <th class="product-name">Qte</th>
                    <th class="product-total">Total</th>
                    <th class="product-name">N° & date Commande</th>
                  </tr>
                </thead>

                @forelse($commandes as $commande)


                    @foreach($commande->articles as $article)
                      @if($id===$article->artisan_id)

                      <tbody>
                          <tr>
                            <td><p>{{ $article->nom_article }}</p></td>
                            <td><p>{{ $article->pivot->qte_panier }}</p></td>
                            <td><p class="price">{{ $article->pivot->prix_panier }} F CFA</p></td>
                            <td><p>N°:{{ $article->pivot->commande_id }} <i> {{$commande->created_at}}</i></p></td>
                          </tr>

                      </tbody>
                      @php
                        $totals+=($article->pivot->qte_panier*$article->pivot->prix_panier);

                      @endphp
                      @endif
                    @endforeach


                    @empty
                @endforelse
                <tfoot>
                  <tr>
                    <th>Total General</th>
                    <td>
                      <p class="price">{{ $totals }} F CFA</p>
                    </td>
                  </tr>

                </tfoot>
              </table>

               @endforeach





            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- Content Section End -->

@endsection
