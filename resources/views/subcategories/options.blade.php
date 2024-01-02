
<option value="">Choisir une Sous Categorie</option>
@forelse($subcategories as $subcategorie)
    <option value="{{$subcategorie->id}}">{{$subcategorie->nom_s_categorie}}</option>
@empty
    <option value="">Pas de sous-catégorie disponible</option>
@endforelse
<option value="autre">Autre</option>
