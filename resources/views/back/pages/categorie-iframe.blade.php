
<option value="">Choisir un Article</option>
@forelse($articles as $article)
    <option value="{{$article->id}}">{{$article->nom_article}}</option>
@empty
    <option value="">Pas d'Article disponible</option>
@endforelse
{{-- <option value="autre">Autre</option> --}}

{{-- @forelse ($articles as $article)
    value="{{$articles}}"
@empty
    value="{{'aucun article enregistrer'}}"
@endforelse --}}
