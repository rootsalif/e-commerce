<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestCommande;
use App\Models\Article;
use App\Models\article_commande;
use App\Models\ArticleCommande;
use App\Models\Artisan;
use App\Models\Categorie;
use App\Models\Client;
use App\Models\Commande;
use App\Models\Famille;
use App\Models\Image;
use App\Models\Livraison;
use App\Models\Marque;
use App\Models\Modele;
use App\Models\pivot_table_article_commande;
use App\Models\Sous_categorie;
use App\Notifications\NotificationResquestContact;
use Illuminate\Console\Command;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CommerceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $familles=Famille::all();
        $categories=[];
        $subCategories=Sous_categorie::all();
        $modeles=Modele::all();
        $marques=Marque::all();
        $articleAll=Article::all();
        $images=Image::all(); 
        $categorieMenu=Categorie::inRandomOrder()->limit(10)->get();
        $articles =Article::inRandomOrder()->latest()->limit(6)->get();
        
        $categorieArticles=Article::inRandomOrder()->latest()->limit(10)->get();
        $articlesAlea =Article::inRandomOrder()->limit(8)->get();
        $articlesRecent =Article::inRandomOrder()->limit(15)->get();
        $idcat=[];
        $i=0;
        foreach($categorieArticles as $article){
           
            if(in_array($article->categorie->nom_categorie, $idcat)){           
               
            }
            else if($i==4)
            {               
                break;
            }
            else{          
                  
                $categories[]=$article->images->take(4);
                          $i++;
                $idcat[]=$article->categorie->nom_categorie;    
            }
            
        }
       
        
        
        
        return view('back.pages.plateform',[
            'categorieArticles'=>$categorieArticles,
            'categories'=>$categories,
            'subCategories'=>$subCategories,
            'articlesRecent'=>$articlesRecent,
            'marques'=>$marques,
            'articles'=>$articles,
            'articleAll'=>$articleAll,
            'articlesAlea'=>$articlesAlea,
            'images'=>$images,
            'categorieMenu'=>$categorieMenu,
        ]);
    }

public function sousCatego($id){

    
}

// CartController.php.
public function addToCart(Request $request, $id, $type, $guard)
{
    $article = Article::find($id);
    $image=Image::where('article_id', $article->id)->get()->first();
    

    // Récupérez le panier existant depuis la session ou créez un nouveau tableau vide
    $cart = session()->get('cart', []);
    
    // Vérifiez si l'article existe déjà dans le panier
    if (isset($cart[$id])) {
        // Si l'article existe, augmentez la quantité
        $cart[$id]['quantity']++;
        $cart[$id]['price']+=$article->prix_unitaire_article;
    } else {
        // Sinon, ajoutez-le au panier
        $cart[$id] = [
            'name' => $article->nom_article,
            'price' => $article->prix_unitaire_article,
            'quantity' => 1,
            'desc_article'=>$article->desc_article,
            'image'=>$image->path,
        ];
    }

    // Mettez à jour la session du panier
    session()->put('cart', $cart);
    
    // Le nombre de panier ajouter
    $itemCount = session()->get('itemCount', []);
    $itemPrice = session()->get('itemPrice', []);
    $itemCount = 0;
    $itemPrice=0;

    foreach ($cart as $item) {
        $itemCount += $item['quantity'];
        $itemPrice += $item['price'];
    }
    session()->put('itemCount', $itemCount);
    session()->put('itemPrice', $itemPrice);

    // Redirigez l'utilisateur vers la page du panier ou une autre page appropriée
    switch($type){
        case 'panier':
            if($guard=='web'){
                return redirect()->route('ecommerce');
            }else{
                return redirect()->route('home.dashClient');
            }
            break;
        case 'list':  
            if($guard=='web'){
            return redirect()->route('listPanier');
            }else{
                return redirect()->route('home.clientListPanier');
            }
                break;
    }
    
}

public function removeFromCart($id, $type, $guard)
{
    $article = Article::find($id);
    $cart = session()->get('cart', []);
    $itemCount = session()->get('itemCount', []);
    $itemPrice = session()->get('itemPrice', []);
    $itemCount = 0;
    $itemPrice=0;

    if (isset($cart[$id])) {
        if($cart[$id]['quantity']>1){
            $cart[$id]['quantity']-=1; // Supprime l'article du panier
            $cart[$id]['price']-=$article->prix_unitaire_article;
        }else
        {
            unset($cart[$id]); // Supprime l'article du panier
           
        }
        session()->put('cart', $cart); // Met à jour la session du panier
        foreach ($cart as $item) {
            $itemCount += $item['quantity'];
            $itemPrice += $item['price'];
        }
        session()->put('itemCount', $itemCount);
        session()->put('itemPrice', $itemPrice);
           
    }
    switch($type){
        case 'panier':
            if($guard=='web'){
                return redirect()->route('ecommerce');
            }else{
                return redirect()->route('home.dashClient');
            }
            
            break;
        case 'list':
            if($guard=='web'){
                return redirect()->route('listPanier');
            }else{
                return redirect()->route('home.clientListPanier');
            }
            break;
    }

}


    public function achatPanier(){
        // Vérifiez si l'utilisateur est connecté
      
        if (!auth()->check()) {
            return redirect()->route('loginPlat');
        }else{
            if(Auth::guard()->name!='client'){
                // L'utilisateur n'est pas connecté, redirigez-le vers la page de connexion
                return redirect()->route('loginPlat');
            }else{
                return view('back.pages.public.achatPanier');
            }
        }
        
    }
    public function listPanier(){
        return view('back.pages.public.listPanier');
    }

    public function commande(RequestCommande $request)
{
    
    // Le reste de votre logique pour passer la commande
    // ...
    
    $client=Client::find(Auth::guard()->user()->id);
   
    if($request->numero_payer===$request->numero_conf_payer){
        $cart=session()->get('cart');
      
        $commande=Commande::create([
            'client_id'=>$client->id,
            'date_comd'=>date("Y-m-d"),
            'montant_comd'=>session()->get('itemPrice'),
            'remise_comd'=>session()->get('itemPrice')*0.05,
            'etat_comd'=>'confirmer',
        ]);
        foreach ($cart as $id => $produit) {
            $articles=Article::find($id);
            $user=Artisan::find($articles->artisan_id);
            
            $panier=$commande->articles()->attach(
                $articles->id, // Utilisez pluck pour obtenir les IDs des articles
                [
                    'prix_panier' => $produit['price'], // Exemple de prix
                    'qte_panier' => $produit['quantity'], // Exemple de quantité
                ]
            );
            $user->notify(New NotificationResquestContact($commande, $request->validated()));
            
        }
         	 
        Livraison::create([
            'commande_id'=>$commande->id,
            'date_livraison'=>date( "Y-m-d"),
            'adresse_livraison'=>$request->adresse_livraison,
            'etat_livraison'=>$request->lieu_livraison,
            'type_livraison'=>$request->type_livraison,
        ]);
        session()->flush();
    }

    return redirect()->route('home.dashClient');
}

public function statusCommande(){
    $artisan=Artisan::all();
    $artisans=[];
    
    $client_id=Auth::guard()->user()->id;   
    $commandes=Commande::where('client_id', $client_id)->get();
    foreach($commandes as $commande){
        
        foreach($commande->articles as $article){
            if(in_array($article->artisan_id, $artisans)){           
               
            }else{
                $artisans[]=$article->artisan_id;
            }
            
        }
    }
 
    
    return view('back.pages.client.commande', [
        'commandes'=>$commandes,
        'artisans'=>$artisans,
        'artisan'=>$artisan,
    ]);
}
public function iframeCommande(){
    
    return view('back.pages.client.iframe-commande');
}
                 
// Dans votre contrôleur
// public function search(Request $request)
// {
//     $query = $request->input('query');

//     // Effectuez la recherche dans la base de données en fonction de la requête $query
//     // Par exemple, supposez que vous avez une table 'articles' que vous voulez rechercher
//     $results = Article::where('title', 'like', '%' . $query . '%')->get();
   
//     // Vous pouvez renvoyer les résultats au format HTML
//     // return view('back.layout.plateform-layout')->with('results', $results);

//     // Ou renvoyer les résultats au format JSON pour être traités côté client
//     return response()->json(['results' => $results]);
// }

// Dans votre contrôleur (SearchController)
public function search()
{
    $articles = Article::all();
    return response()->json(['articles' => $articles]);
}





    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, $types)
    {   
        // dd($types);
        $familles=Famille::all();
      
        $subCategories=Sous_categorie::all();
        $modeles=Modele::all();
        $marques=Marque::all();
      
        $images=Image::all(); 
        
        // $searchTerm = $request->input('searchTerm');

        // // Recherche d'articles dont le titre contient le terme de recherche (utilisation de la clause LIKE)
        // $articles = Article::where('title', 'LIKE', '%' . $searchTerm . '%')->get();

        $images=[];
        $article=Article::all();
        $articlefinds=Article::all();
        if($types==='subCatego'){                        
            $subCatego=Sous_categorie::find($id);  

            $str=serialize($subCatego->nom_s_categorie);   
            
            
            for($i=1; $i<=strlen($str); $i++){
                $name=$subCatego->nom_s_categorie;
                $searchChar=null;
                $searchChar=substr($name , 0, $i);
                $articles = Article::where('nom_article', 'LIKE', '%' . $searchChar . '%')->get();
                
                
                if ($i >= 3) {
                    $sousCatego = Sous_categorie::where('nom_s_categorie', 'LIKE', '%' . $searchChar . '%')->get();
                    $Mod = Modele::where('nom_modele', 'LIKE', '%' . $searchChar . '%')->get();
                    $Mar = Marque::where('nom_marque', 'LIKE', '%' . $searchChar . '%')->get();
                    $art = Article::where('nom_article', 'LIKE', '%' . $searchChar . '%')->get();
                    $merges= $Mod->merge($Mar);
                    foreach ($sousCatego as $value) {   
                        
                        if($i===3){
                            $articlefinds=$value->categorie->articles;
                            
                        }        
                             
                        $articlesFromCategory = $value->categorie->articles;
                        
                        $articlefinds = $articlefinds->merge($articlesFromCategory);
                       
                    }
                    
                } 
                // else {
                //     // Fusionner les résultats de la recherche d'articles
                //     $articlefinds = $articlefinds->merge($articles);
                // }
                
            }          
            
        }else if($types==='all'){
            $articlefinds=Article::all();
        }else if($types==='recent'){
            $articlefinds=Article::orderBy('id', 'desc')->get()->take(16);
           
        }
        else{       
        $article=Article::find($id);
        $articlefinds=Article::where('nom_article', $article->nom_article)->get();
        foreach($articlefinds as $article){
            $images=$article->images;
        }
        $modele=Modele::find($article->modele_id); 
        $modeles=Article::where('modele_id', $article->modele_id)->get();
        
        $marque=Marque::find($article->marque_id); 
        $marques=Article::where('marque_id', $article->marque_id)->get();

        $categorie=Categorie::find($article->categorie_id); 
        $categories=Article::where('categorie_id', $article->categorie_id)->get();
        $subCategories=Sous_categorie::all();
        
        
        $subCategories= $categorie->subCategories;
        
        

        $famille=Famille::find($article->famille_id); 
        $familles=Famille::where('nom_famille', $famille->nom_famille)->get();
    } 

        switch($types){
            case 'articles':
                $types='articles';
                break;
            case 'categories':
                $types='categories';
                break;
            case 'detailles':
                $types='detailles';
                break;
            case 'achats':
                $types='achats';
                break;
            case 'modeles':
                $types='modeles';
                break;
            case 'familles':
                $types='familles';
                break;
            case 'colections':
                $types='colections';
                break;
            case 'marques':
                $types='marques';
                break;
            case 'subCatego':
                $types='subCatego';
                return view('back.pages.public.article-show',[
                    'article'=> $article,
                    'modeles'=> $modeles,                   
                    'marques'=> $marques,                    
                  
                    'familles'=> $familles,                    
                    'images'=>$images,            
                    'type'=>$types,
                    
                    'articlefinds'=>$articlefinds,
                ]);
                case 'all':
                    $types='subCatego';
                    
                    return view('back.pages.public.article-show',[
                        'article'=> $article,
                        'modeles'=> $modeles,                   
                        'marques'=> $marques,                    
                        
                        'familles'=> $familles,                    
                        'images'=>$images,            
                        'type'=>$types,
                        
                        'articlefinds'=>$articlefinds,
                ]);
                case 'recent':
                    $types='subCatego';
                    
                    return view('back.pages.public.article-show',[
                        'article'=> $article,
                        'modeles'=> $modeles,                   
                        'marques'=> $marques,                    
                        
                        'familles'=> $familles,                    
                        'images'=>$images,            
                        'type'=>$types,
                        
                        'articlefinds'=>$articlefinds,
                ]);
        }

        return view('back.pages.public.article-show',[
            'article'=> $article,
            'modeles'=> $modeles,
            'modele'=> $modele,
            'marques'=> $marques,
            'marque'=> $marque,
            'categories'=> $categories,
            'familles'=> $familles,
            'famille'=> $famille,
            'images'=>$images,            
            'type'=>$types,
            'subCategories'=>$subCategories,
            'articlefinds'=>$articlefinds,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
