<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArtisanRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Admin;
use App\Models\Article;
use App\Models\Artisan;
use App\Models\Categorie;
use App\Models\Client;
use App\Models\Commande;
use App\Models\Couleur;
use App\Models\Etat;
use App\Models\Famille;
use App\Models\Image;
use App\Models\Marque;
use App\Models\Modele;
use App\Models\Sous_categorie;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Nette\Utils\ArrayList;

class AdminController extends Controller
{
    public function index(){

        return view('back.pages.admin.auth.login');
    }

    // public function loginRegister(RegisterRequest $request){
    //    $admin= new Admin;
    //    $admin->name=$request->name;
    //    $admin->email=$request->email;
    //    $admin->password=$request->password;
    //    $admin->save();
    //    dd('OK');
    // }

    public function indexDashbord(Artisan $artisan, Client $client, Admin $admin){
        
        $admin=Admin::all();
        $artisan=Artisan::all();
        $client=Client::all();
        $article=Article::all();
        $commande=Commande::all();
           
        return view('back.pages.admin.dashbord',[
            'admins'=>$admin,
            'artisans'=>$artisan,
            'clients'=>$client,    
            'articles'=>$article,     
            'commandes'=>$commande,   
        ]);
    }
    // FUNCTION PROFILE

    public function profilArtisan(Artisan $artisan){
      
        return view('back.pages.admin.profil', [
            'table'=>'artisans',
            'artisan'=>$artisan,
            'id'=> $artisan->id,
            'nom'=> $artisan->nom_artisan,
            'profession'=> $artisan->profession_artisan,
            'nom_usr'=> $artisan->nom_usr_artisan,
            'email'=>$artisan->email_artisan,
            'telephone'=> $artisan->telephone_artisan,
            'adresse'=> $artisan->adresse_artisan,
            'image'=> $artisan->image_artisan,
            'etat'=> $artisan->etat_artisan,
           
        ]);
    }
    public function profilAdmin(Admin $admin){

       
      
        return view('back.pages.admin.profil', [
            'admin'=> $admin,
            'table'=>'admins',           
            'id'=> $admin->id,
            'nom'=> $admin->nom_admin,
            'nom_usr'=>$admin->nom_usr_admin,
            'email'=> $admin->email_admin,
            'telephone'=>$admin->telephone_admin,
           
        ]);
    }
    public function profilClient(Client $client){

      
        return view('back.pages.admin.profil', [
         
           
        ]);
    }
 
    public function home(Artisan $artisan, User $user, Client $client){
       
        
        return view('back.pages.admin.home',[
            '$users'=>$user,
            // 'artisans'=>$artisan,
            'clients'=>$client,
            
        ]);
        
    }
    public function dataUser(ArtisanRequest $request){
        $artisan=Artisan::all();
        $article=Article::all();
        $client=Client::all();

        if($request->is('*/users/clients')){
            return view('back.pages.admin.clients', [
                'artisans'=>$artisan,
                'articles'=>$article,
                'clients'=>$client,
            ]);
        }elseif($request->is('*/users/artisans')){

            return view('back.pages.admin.artisans', [
            'artisans'=>$artisan,
            'articles'=>$article,
            'clients'=>$client,
            ]);
        }        
    }

    public function showUtil(string $utils){
        
        $categories=Categorie::all();
        $catego=Sous_categorie::all();       
        
        $images=Image::all();
        $couleurs=Couleur::all();
        $articles=Article::all();        
                            
        switch($utils){
            case 'categories':
                return view('back.pages.utilitaires.categories', [            
               
                'categories'=>$categories,
                'subCategories'=>$catego,                
                ]);    

                break;
                case 'sous-categories':
                    return view('back.pages.utilitaires.sous-categories', [            
                   
                    'categories'=>$categories,
                    'subCategories'=>$catego,                
                    ]);    
    
                    break;
                case 'familles':    
                    $familles=Famille::all();                
                    return view('back.pages.utilitaires.familles', [            
                    'familles'=>$familles,
                    
                    ]);  
                    break;$familles=Famille::all();
                    case 'etats':    
                        $etats=Etat::all();                
                        return view('back.pages.utilitaires.etats', [            
                        'etats'=>$etats,
                        
                        ]);  
                        break;
                    case 'modeles':
                        $modeles=Modele::all();
                        return view('back.pages.utilitaires.modeles', [ 
                        'modeles'=>$modeles,                      
                        ]);    
        
                        break;
                    case 'marques':
                        $marques=Marque::all();
                        return view('back.pages.utilitaires.marques', [            
                        
                        'marques'=>$marques,
                        ]);    
        
                        break;
                    case 'couleurs':
                        $couleurs=Couleur::all();
                        return view('back.pages.utilitaires.couleurs', [            
                        
                        'couleurs'=>$couleurs,
                        ]);    
        
                        break;
                    case 'commandes':
                        $commandes=Commande::all();
                        $clients=Client::all();
                        return view('back.pages.utilitaires.commande-admin', [                                             
                           
                            'commandes'=>$commandes,          
                            'clients'=>$clients,
                        ]);
                    
                    case 'articles':
                        $artisan=Artisan::all();
                        $familles=Famille::all(); 
                        $modeles=Modele::all();                        
                        $marques=Marque::all();
                        return view('back.pages.utilitaires.articles', [            
                        
                        'articles'=>$articles,
                        'marques'=>$marques,
                        'modeles'=>$modeles,  
                        'familles'=>$familles,
                        'categories'=>$categories,
                        'subcategories'=>$catego,  
                        'artisans'=>$artisan,
                        ]);    
        
                        break;
                        case 'images':
                            return view('back.pages.utilitaires.images', [            
                            'images'=>$images,
                            'couleurs'=>$couleurs,
                            'articles'=>$articles,  
                                                     
                            ]);    
            
                        break;
        }
      
    }
    public function addUtil(ArtisanRequest $request, string $utils){
        
        switch($utils){
            case 'familles':
                Famille::create([
                    'nom_famille'=>$request->nom_famille,
                ]);
            return redirect()->route('home.addUtil',['utils'=>'familles']);
            case 'etats':
                Etat::create([
                    'nom_etat'=>$request->nom_etat,
                ]);
            return redirect()->route('home.addUtil',['utils'=>'etats']);
            
            case 'marques':
                marque::create([
                    'nom_marque'=>$request->nom_marque,
                ]);
            return redirect()->route('home.addUtil',['utils'=>'marques']);
            case 'modeles':
                modele::create([
                    'nom_modele'=>$request->nom_modele,
                ]);
            return redirect()->route('home.addUtil',['utils'=>'modeles']);
            case 'sous-categories':
                Sous_categorie::create([
                    'categorie_id'=>$request->categorie_id,
                    'nom_s_categorie'=>$request->nom_s_categorie,
                ]);
            return redirect()->route('home.addUtil',['utils'=>'sous-categories']);
            case 'categories':
                Categorie::create([                  
                    'nom_categorie'=>$request->nom_categorie,
                    'desc_categorie'=>$request->desc,
                ]);
            return redirect()->route('home.addUtil',['utils'=>'categories']);

            case 'couleurs':
                Couleur::create([
                    // 'artisan_id'=>$artisan_guard_id, 
                    'nom_couleur'=>$request->nom_couleur,
                ]);
            return redirect()->route('home.addUtil',['utils'=>'couleurs']);
        }

    }

    public function editUtil($utils, $id){

        switch($utils){
            case 'familles':
                $famille=Famille::find($id);
                return view('back.pages.utilitaires.edit-utils', [ 
                    'id'=>$id,                   
                    'utils'=>$utils,    
                    'nom'=> $famille->nom_famille,                 
                   
                ]);
                case 'etats':
                    $etat=Etat::find($id);
                    return view('back.pages.utilitaires.edit-utils', [ 
                        'id'=>$id,                   
                        'utils'=>$utils,    
                        'nom'=> $etat->nom_etat,                 
                       
                    ]);
            case 'marques':
                $marque=Marque::find($id);
                return view('back.pages.utilitaires.edit-utils', [ 
                    'id'=>$id,                   
                    'utils'=>$utils,    
                    'nom'=> $marque->nom_marque,                 
                    
                ]);
            case 'modeles':
                $modele=Modele::find($id);
                return view('back.pages.utilitaires.edit-utils', [ 
                    'id'=>$id,                   
                    'utils'=>$utils,    
                    'nom'=> $modele->nom_modele,                 
                    
                ]);
                case 'sous-categories':
                    $subCategorie=Sous_categorie::find($id);
                    $subcatego=$subCategorie->categorie;
                    $categorie=Categorie::all();
                    return view('back.pages.utilitaires.edit-utils', [ 
                        'id'=>$id,      
                        'subcatego'=>$subcatego,             
                        'utils'=>$utils,    
                        'nom'=> $subCategorie->nom_s_categorie, 
                        'categories'=>$categorie,                                    
                               
                    ]);
                case 'categories':
                    $categorie=Categorie::find($id);
                    return view('back.pages.utilitaires.edit-utils', [ 
                        'id'=>$id,                   
                        'utils'=>$utils,    
                        'nom'=> $categorie->nom_categorie,
                        'desc'=>$categorie->desc_categorie,               
                        
                    ]);

                case 'commandes':
                    $commande=Commande::find($id);
                    $artisans=[];
                    $artisan=Artisan::all();
                    
                    foreach($commande->articles as $article){
                        if(in_array($article->artisan_id, $artisans)){           
                           
                        }else{
                            $artisans[]=$article->artisan_id;
                        }
                        
                    }
                    
                    return view('back.pages.utilitaires.commande-show-admin', [ 
                      'commande'=>$commande,   
                      'artisan'=>$artisan,  
                      'artisans'=>$artisans,           
                        
                    ]);
                
                case 'couleurs':
                    $couleur=Couleur::find($id);
                    return view('back.pages.utilitaires.edit-utils', [ 
                        'id'=>$id,                   
                        'utils'=>$utils,    
                        'nom'=> $couleur->nom_couleur,                 
                        
                    ]);
        }
       

    }

    public function updateUtil(ArtisanRequest $request, $utils, $id){
        
     
        switch($utils){
            case 'familles':
                $famille=Famille::find($id);           
                $famille->nom_famille=$request->nom;               
                $famille->save();
                return redirect()->route('home.addUtil',['utils'=>'familles']);

            case 'etats':
                $etat=etat::find($id);           
                $etat->nom_etat=$request->nom;               
                $etat->save();
                return redirect()->route('home.addUtil',['utils'=>'etats']);
            
            case 'marques':
                $marque=Marque::find($id);           
                $marque->nom_marque=$request->nom;               
                $marque->save();
                return redirect()->route('home.addUtil',['utils'=>'marques']);
            case 'modeles':
                $modele=Modele::find($id);           
                $modele->nom_modele=$request->nom;               
                $modele->save();
                return redirect()->route('home.addUtil',['utils'=>'modeles']);
            case 'sous-categories':
                $subCategorie=Sous_categorie::find($id);           
                $subCategorie->nom_s_categorie=$request->nom;               
                $subCategorie->save();
                return redirect()->route('home.addUtil',['utils'=>'sous-categories']);
            case 'categories':
                $categorie=Categorie::find($id);           
                $categorie->nom_categorie=$request->nom;  
                $categorie->desc_categorie=$request->desc;               
                $categorie->save();
                return redirect()->route('home.addUtil',['utils'=>'categories']);
            case 'couleurs':
                $couleur=Couleur::find($id);      
                $couleur->nom_couleur=$request->nom;               
                $couleur->save();
                return redirect()->route('home.addUtil',['utils'=>'couleurs']);

        }
    }
     public function getSubcategories(Artisan $artisan)
    {
        $article = $artisan->articles;
   
        return view('back.pages.categorie-iframe', [
            'articles'=>$article,
        ]);
    }

    public function updateArticle(ArtisanRequest $request){
       
       
        $articles=Article::find($request->article_id);   
            // dd($request);
            $articles->artisan_id=$request->artisan_id;    
            $articles->marque_id=$request->marque_id; 
            $articles->categorie_id=$request->categorie_id; 
            $articles->modele_id=$request->modele_id; 
            $articles->nom_article=$request->nom_article; 
            $articles->qte_article=$request->qte_article; 
            $articles->remise_article=$request->remise_article; 
            $articles->prix_unitaire_article=$request->prix_unitaire_article;    
            $articles->desc_article=$request->desc_article;         
            $articles->save();
            return redirect()->route('home.addUtils',['utils'=>'articles']);
                   

    }
    public function deleteUtil($utils, $id){

        switch($utils){
            case 'familles':
            $famille=famille::find($id);           
                $famille->delete();  
                return redirect()->route('home.addUtil',['utils'=>'familles']);
            
            case 'marques':
                $marque=Marque::find($id);           
                $marque->delete();     
                return redirect()->route('home.addUtil',['utils'=>'marques']);

            case 'modeles':
                $modele=Modele::find($id);           
                $modele->delete();   
                return redirect()->route('home.addUtil',['utils'=>'modeles']);

            case 'sous-categories':
                $subCategorie=Sous_categorie::find($id);           
                $subCategorie->delete(); 
                return redirect()->route('home.addUtil',['utils'=>'sous-categories']);

            case 'categories':
                $categorie=Categorie::find($id);           
                $categorie->delete(); 
                return redirect()->route('home.addUtil',['utils'=>'categories']);
            case 'couleurs':
                $couleur=Couleur::find($id);           
                $couleur->delete(); 
                return redirect()->route('home.addUtil',['utils'=>'couleurs']);

        }
    }
    
    // Blog Images
    public function addImage(){
        // dd(Request());
        
        return view('back.pages.utilitaires.images');
    }

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
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit($id)
    // {
    //     $artisan= Artisan::findOrfial($id);
    //     return view('back.pages.admin.profil', [
    //         'artisan'=> $artisan,
    //     ]);
    // }

    // public function timeline(Artisan $artisan, Admin $admin){
        
    //     return view('back.pages.admin.profil.timeline', [
    //         'artisan'=> $artisan,
    //         'admin'=> $admin,
    //     ]);
    // }

    /**
     * Update the specified resource in storage.
     */
    
    public function update(ArtisanRequest $request, $id){
       
        if($request->is('*/update/admins')){
            $admin=Admin::find($id);
                $admin->nom_admin=$request->nom;
                $admin->nom_usr_admin=$request->nom_usr;
                $admin->email_admin=$request->email;
                $admin->passwd_admin=Hash::make($request->password);
                $admin->telephone_admin=$request->telephone;
                $admin->save();

            return redirect('admin/home/dashbord')->with('Success', 'Le profil a été mise en jour');

        }else if($request->is('*/update/artisans')){
            $artisan=Artisan::find($id);
                $artisan->nom_artisan=$request->nom;
                $artisan->profession_artisan=$request->profession;
                $artisan->nom_usr_artisan=$request->nom_usr;
                $artisan->email_artisan=$request->email;
                $artisan->passwd_artisan=Hash::make($request->password);
                $artisan->telephone_artisan=$request->telephone;
                $artisan->adresse_artisan=$request->adresse;  
                $artisan->save();        
               
            return redirect('admin/home/dashbord')->with('Success', 'Le profil a été mise en jour');

        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $artisan=Artisan::find($id);
        $artisan->delete();
        return redirect('admin/home/dashbord')->with('Success', 'Le profil a été mise en jour');
    }
}
