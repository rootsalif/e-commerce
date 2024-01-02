<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArtisanRequest;
use App\Http\Requests\RequestArticle;
use App\Http\Requests\RequestLogin;
use App\Http\Requests\RequestRegist;
use App\Models\Article;
use App\Models\Artisan;
use App\Models\Categorie;
use App\Models\Client;
use App\Models\Commande;
use App\Models\Couleur;
use App\Models\Etat;
use App\Models\Famille;
use App\Models\Image;
use App\Models\Livraison;
use App\Models\Marque;
use App\Models\Modele;
use App\Models\Sous_categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ArtisanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

       
            $artisan_guard_id=Auth::guard('artisan')->user()->id;            
        
        $categories=Categorie::where('artisan_id', $artisan_guard_id);
        
        $catego=new Sous_categorie(); 
        $articles=Article::where('artisan_id', Auth::guard('artisan')->user()->id)->get();
        $livrArticle=$articles;
        $livraisons=Livraison::all();
        $images=Livraison::all();
        $commandes=Commande::all();
        foreach($articles as $article){
            $images=$article->images;           
           
            if(count($commandes)>0)
            {
                $commandes=$article->commandes;
            
                
                if(count($commandes)===0) {
                    $livrArticle=[];
                    $livraisons=[];               
                } 
                
            foreach($article->commandes as $commande){
                $livraisons=Livraison::where('commande_id', $commande->id)->get();           
                
            }
            }
          
        }  
       
        $couleurs=Couleur::all();
        
        return view('back.pages.artisan.dashbord-artisan',[
            'articles'=>$articles,
            // 'marques'=>$marques,
            // 'modeles'=>$modeles,  
            'commandes'=>$commandes,
            'article'=>$livrArticle,
            'livraisons'=>$livraisons,
            'categories'=>$categories,
            'subcategories'=>$catego,  
            'couleurs'=>$couleurs,
            'images'=>$images,
        ]);
    }


    public function add()
    {
          //config le premier id artisan par le administrateur

          if(Auth::guard()->name==='artisan'){
            $artisan_guard_id=Auth::guard('artisan')->user()->id;            
        }else if(Auth::guard()->name==='admin'){
            $artisan_guard_id=1;            
        }
        $familles=Famille::where('artisan_id', $artisan_guard_id);
        $categories=Categorie::where('artisan_id', $artisan_guard_id);
        $catego=Sous_categorie::where('artisan_id', $artisan_guard_id);
        $modeles=Modele::where('artisan_id', $artisan_guard_id);
        $marques=Marque::where('artisan_id', $artisan_guard_id);    
        
        return view('back.pages.artisan.article', [            
            'familles'=>$familles,
            'categories'=>$categories,
            'sous_categories'=>$catego,
            'modeles'=>$modeles,
            'marques'=>$marques,
        ]);
    }
    // public function getSubcategories(Categorie $categorie)
    // {
    //     $subcategories = $categorie->subcategories;
   
    //     return view('back.pages.categorie-iframe', compact($subcategories));
    // }
        
    
    public function addStore(Request $request){
        
        $famille=Famille::find($request->nom_famille);
        $marque=Marque::find($request->nom_marque);
        $modele=Modele::find($request->nom_modele);
        $categorie=Categorie::find($request->nom_categorie);
               
        $article=Article::create([
            'artisan_id'=>Auth::guard('artisan')->user()->id,            
            'famille_id'=>$famille->id,
            'marque_id'=>$marque->id,
            'categorie_id'=>$modele->id,
            'modele_id'=>$categorie->id,        
            'nom_article'=>$request->nom_article,
            'qte_article'=>$request->qte_article,
            // 'tva_article'=>$request->tva_article,
            'remise_article'=>$request->remise_article,
            'prix_unitaire_article'=>$request->prix_unitaire_article,
            'desc_article'=>$request->desc_article,
            // 'etat_article'=>$request->etat_article,
        ]);
        return redirect('artisan/home/dashbord')->with('Success', 'Le profil a été mise en jour');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function type(RequestLogin $request){
       

        return redirect()->route('registCreat',['type'=>$request->type]);
     
    }
    public function regist($type){
        return view('back.pages.auth.register',[
            'type'=>$type,
        ]);
    }
    public function loginRegister()
    {   
        return view('back.pages.auth.type');
    }
    public function login(){

        return view('back.pages.auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RequestRegist $request)
    {
        $type=session()->get('radio');
                  
      
        if($type=='artisan')
        {       
            $image = $request->file('image_artisan');      
            
            $imageName = $image->store('images/profiles', 'public');  
           
            if($request->passwd===$request->passwd_conf){
                $artisan=Artisan::create([
                    'nom_artisan'=>$request->nom,
                    'profession_artisan'=>$request->profession,
                    'nom_usr_artisan'=>$request->nom_usr,
                    'email_artisan'=>$request->email,
                    'passwd_artisan'=>Hash::make($request->passwd),
                    'genre_artisan'=>$request->genre,  
                    'date_naiss_artisan'=>$request->date_naiss,
                    'telephone_artisan'=>$request->telephone,
                    'adresse_artisan'=>$request->ville.','.$request->pay,      
                    'image_artisan'=>$imageName,
                ]);
                // Amelioré la verification d
                session()->flush('radio');
                $session=session()->flash('Info', 'Compte '.$request->nom." a été bien enregistre!");
             
                return redirect()->route('loginArtisan');
            }else{
                session()->flush('radio');
                return redirect()->route('registArtisan');
                
            }
        }
        // Enregistrement Client
        else if($type==='client')
        {
            $image = $request->file('image_artisan');      
            
            $imageName = $image->store('images/profiles', 'public');

            if($request->passwd===$request->passwd_conf){
                $client=Client::create([
                    'nom_client'=>$request->nom,
                    'nom_usr_client'=>$request->nom_usr,
                    'email_client'=>$request->email,
                    'passwd_client'=>Hash::make($request->passwd),
                    'genre_client'=>$request->genre,  
                    'date_naiss_client'=>$request->date_naiss,
                    'telephone_client'=>$request->telephone,
                    'adresse_client'=>$request->ville.','.$request->pay,  
                    'image_client'=>$imageName,              
                ]);
                session()->flush('radio');
                session()->flash('Info', 'Compte '.$request->nom." a été bien enregistre!");
                return redirect()->route('loginClient');
            }else{ 
                session()->flush('radio');
                return redirect()->route('registClient');
            }
        }
    }

    public function profilArtisan(Artisan $artisan){       
      
        return view('back.pages.profil', [
            'table'=>'artisans',
            'artisan'=>$artisan,
            'id'=> $artisan->id,
            'nom'=> $artisan->nom_artisan,
            'profession'=> $artisan->profession_artisan,
            'nom_usr'=> $artisan->nom_usr_artisan,
            'date_naiss'=>$artisan->date_naiss_artisan,
            'genre'=>$artisan->genre_artisan,
            'email'=>$artisan->email_artisan,
            'telephone'=> $artisan->telephone_artisan,
            'adresse'=> $artisan->adresse_artisan,
            'image'=> $artisan->image_artisan,
            'etat'=> $artisan->etat_artisan,           
        ]);
    }

    //les Functions des Articles

    public function showUtil(string $utils){

        $categories=Categorie::all();
        // $catego=Sous_categorie::all();       
        $articles=Article::where('artisan_id', Auth::guard('artisan')->user()->id)->get();
       
        $livrArticle=$articles;
        $livraisons=Livraison::all();
        $images=[];
       
        $commandes=Commande::all();
        foreach($articles as $article){
            $imaget=$article->images;
            foreach($imaget as $image){
                $images[]=$image;
            }
           
            // $articles=$article;
            if(count($commandes)>0){
                if(count($article->commandes)==0) {
                    $livrArticle=[];
                    $livraisons=[];               
                } 
                    
                foreach($article->commandes as $commande){
                    $livraisons=Livraison::where('commande_id', $commande->id)->get();
                    $livrArticle=$article;  
                
                } 
            }        
            }         
       
        $couleurs=Couleur::all();
        // $articles=Article::all();  

                            
        switch($utils){   
                    
                    case 'articles':
                      
                        $familles=Famille::all(); 
                        $modeles=Modele::all();                       
                        $marques=Marque::all();
                        $categories=Categorie::all();
                        $etats=Etat::all();
                        return view('back.pages.utilitaires.articles', [            
                        
                        'articles'=>$articles,
                        'marques'=>$marques,
                        'modeles'=>$modeles,  
                        'familles'=>$familles,
                        'categories'=>$categories,
                        'couleurs'=>$couleurs,
                        'images'=>$images,                        
                        'etats'=>$etats,
                        ]);    
        
                        break;
                        case 'images':                            
                            return view('back.pages.utilitaires.images', [            
                            'images'=>$images,
                            'couleurs'=>$couleurs,
                            'articles'=>$articles,                                                       
                            ]);                
                        break;
                          
                        case 'commandes':    
                            $clients=Client::all();
                            
                            return view('back.pages.utilitaires.commandes', [            
                            'articles'=>$articles,
                            'clients'=>$clients,
                                                       
                            ]);  
                        break;

                        case 'livraisons':    
                            
                            return view('back.pages.utilitaires.livraisons', [            
                            'article'=>$livrArticle,
                            'livraisons'=>$livraisons,
                                                       
                            ]);  
                        break;


        }
      
    }
    public function addUtil(RequestArticle $request, string $utils){
       
    
        switch($utils){
           
            case 'articles':
                $famille=Famille::findOrFail($request->famille_id);
                $marque=Marque::findOrFail($request->marque_id);
                $modele=Modele::findOrFail($request->modele_id);
                $categorie=Categorie::findOrFail($request->categorie_id); 
                $etat=Etat::findOrFail($request->etat_id);
               $article=Article::create([
                    'artisan_id'=>Auth::guard('artisan')->user()->id,           
                    'famille_id'=>$famille->id,
                    'marque_id'=>$marque->id,
                    'categorie_id'=>$categorie->id,
                    'modele_id'=>$modele->id,    
                    'etat_id'=>$etat->id,    
                    'nom_article'=>$request->nom_article,
                    'qte_article'=>$request->qte_article,
                    'tva_article'=>$request->tva_article,
                    'remise_article'=>$request->remise_article,
                    'prix_unitaire_article'=>$request->prix_unitaire_article,
                    'desc_article'=>$request->desc_article,                    
                ]);
              
                $images = $request->file('images');
                foreach ($images as $image) {
                    $imageName = $image->store('images', 'public');
                    Image::create([                       
                        'article_id' => $article->id,
                        'couleur_id' => $request->input('couleur_id'),                        
                        'path' => $imageName,                        
                    ]);
                }
            return redirect()->route('home.addArticle',['utils'=>'articles']);

            case 'images':
                

                $images = $request->file('images');
                
            
                foreach ($images as $image) {                 
                    $imageName = $image->store('images', 'public');
                    
                    // $image->storeAs('public/images', $imageName);   
                                     
            
                    Image::create([
                        'article_id' => $request->input('article_id'),
                        'couleur_id' => $request->input('couleur_id'),  
                        'path' => $imageName,                        
                    ]);
                }
                return redirect()->route('home.addArticle',['utils'=>'images']);
        }

    }

    public function editUtil($utils, $id){


        switch($utils){
            case 'images':
                $image=Image::find($id);                
                $couleurs=Couleur::all();
                return view('back.pages.utilitaires.image-edit', [                    
                    'image'=>$image,
                    'article'=>$image->article,  
                    'couleurs'=>$couleurs,           
                    
                ]);
             
                case 'articles':
                    $article=Article::find($id);
                    $familles=Famille::all();
                    $categories=Categorie::all();
                    $modeles=Modele::all();
                    $marques=Marque::all();
                    $couleurs=Couleur::all();
                    return view('back.pages.utilitaires.article', [ 
                        'id'=>$id,                   
                        'utils'=>$utils,    
                        'nom'=> $article->nom_article,
                        'article'=> $article,
                        'familles'=> $familles,
                        'categories'=>$categories,
                        'modeles'=>$modeles,
                        'marques'=>$marques,
                        'couleurs'=>$couleurs,
                    ]);

        }
       

    }

    public function updateImage(ArtisanRequest $request, $id){

        $image=Image::find($id);
        $images = $request->file('image');
        
        
            $imageName = time() . '.' . $images->extension();
            $images->storeAs('public/images', $imageName);
         
            $image->article_id=$image->article->id;
            $image->couleur_id=$request->couleur_id;
            $image->nom_image=$imageName;
            $image->path=$imageName;
            $image->save();
        
        return redirect()->route('home.addArticle',['utils'=>'images']);
            
    }
     public function getSubcategories(Artisan $artisan)
    {
        $article = $artisan->articles;
   
        return view('back.pages.categorie-iframe', [
            'articles'=>$article,
        ]);
    }

    public function updateArticle(ArtisanRequest $request, $id){
              
        $articles=Article::find($id);   
            // dd($request);
            
            $articles->artisan_id=Auth::guard('artisan')->user()->id;    
            $articles->marque_id=$request->marque_id; 
            $articles->categorie_id=$request->categorie_id; 
            $articles->modele_id=$request->modele_id; 
            $articles->nom_article=$request->nom_article; 
            $articles->qte_article=$request->qte_article; 
            $articles->remise_article=$request->remise_article; 
            $articles->prix_unitaire_article=$request->prix_unitaire_article;    
            $articles->desc_article=$request->desc_article;         
            $articles->save();
            return redirect()->route('home.addArticle',['utils'=>'articles']);
                   

    }
    public function deleteUtil($utils, $id){

        switch($utils){
            
                
            case 'articles':
                $article=Article::find($id);           
                $article->delete(); 
                return redirect()->route('home.addArticle',['utils'=>'articles']);
            case 'images':
                $image=Image::find($id);           
                $image->delete(); 
                return redirect()->route('home.addArticle',['utils'=>'images']);

        }
    }
    
    // Blog Images
    public function addImage(){
        // dd(Request());
        
        return view('back.pages.utilitaires.images');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(ArtisanRequest $request, $id){
     
      if($request->is('*/update/artisans')){
            $artisan=Artisan::find($id);
                $artisan->nom_artisan=$request->nom;
                $artisan->profession_artisan=$request->profession;
                $artisan->nom_usr_artisan=$request->nom_usr;
                $artisan->email_artisan=$request->email;
                $artisan->passwd_artisan=Hash::make($request->password);
                $artisan->genre_artisan=$request->genre;
                $artisan->date_naiss_artisan=$request->date_naiss;
                $artisan->telephone_artisan=$request->telephone;
                $artisan->adresse_artisan=$request->adresse;  
                $artisan->save();        
               
            return redirect('artisan/home/dashbord')->with('Success', 'Le profil a été mise en jour');

        }
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy($id)
    {
        $image = Image::find($id);

        if (!$image) {
            return response()->json(['success' => false, 'message' => 'Image not found'], 404);
        }

        // Supprimer l'image du serveur de stockage
        Storage::delete('public/images/' . $image->name);

        // Supprimer l'entrée de la base de données
        $image->delete();

        return response()->json(['success' => true, 'message' => 'Image deleted successfully']);
    }


    public function stock(){
        $id=Auth::guard('artisan')->user()->id;
        $articles=Article::where('artisan_id', $id)->get();

        return view('back.pages.artisan.stock', [
            'articles'=>$articles,
        ]);
    }
}
