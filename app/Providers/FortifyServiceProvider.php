<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use App\Http\Requests\RegisterRequest;
use App\Models\Admin;
use App\Models\Artisan;
use App\Models\Client;
use App\Models\User;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\LoginResponse;
use Laravel\Fortify\Contracts\LogoutResponse;
use Laravel\Fortify\Fortify;
use Laravel\Fortify\Http\Requests\LoginRequest;

use function PHPSTORM_META\type;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    
    public function register(): void
    {
        
        $request=request();
          
        if($request->is('admin/*')){
            config(['fortify.guard' => 'admin']);
            config(['fortify.prefix' => 'admin']);
            config(['fortify.passwords' => 'admins']);
            config(['fortify.home' => '/admin/home/dashbord']);
            
            
        }
        else if($request->is('artisan/*')){
           
            config(['fortify.guard' => 'artisan']);
            config(['fortify.prefix' => 'artisan']);
            config(['fortify.passwords' => 'artisans']);
            config(['fortify.home' => '/artisan/home/dashbord']);
            
        }  
        else if($request->is('client/*')){           
            config(['fortify.guard' => 'client']);
            config(['fortify.prefix' => 'client']);
            config(['fortify.passwords' => 'client']);
            config(['fortify.home' => '/client/home/dashbord']);            
        }  
        else     
        {        
           
            switch($request->type)
            {
               
                
                case'artisan':
                    config(['fortify.guard' => 'artisan']);
                    // config(['fortify.prefix' => 'artisan']);
                    config(['fortify.passwords' => 'artisans']);
                    config(['fortify.home' => '/artisan/home/dashbord']);
                    break;
                case 'client':
                    
                    config(['fortify.guard' => 'client']);
                    
                    // config(['fortify.prefix' => 'client']);
                    
                    config(['fortify.passwords' => 'client']);
                    
                    config(['fortify.home' => '/client/home/dashbord']);  
                  
                    break;
            }
        }
        

        $this->app->instance(LoginResponse::class, new class implements LoginResponse{
            public function toResponse($request)
            {
                
                if($request->is('admin/*')){

                    return redirect()->intended('admin/home/dashbord');
                }
                else if($request->is('artisan/*')){
                    return redirect()->intended('artisan/home/dashbord');
                }else if($request->is('client/*')){
                    return redirect()->intended('client/home/dashbord');
                }
                else{
                    switch($request->type){
                        case 'artisan':
                            return redirect()->intended('artisan/home/dashbord');
                            break;
                        case 'client':
                            return redirect()->intended('client/home/dashbord');
                            break;
                        default:
                            return redirect()->intended('ecommerce');
                    }
                }
                
            }
        });
        
        $this->app->instance(LogoutResponse::class, new class implements LogoutResponse {
            public function toResponse($request)
            {
                
                if($request->is('admin/*')){
                    return redirect('/admin/login');
                }else{
                    return redirect('/ecommerce');
                }
            }
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        

        Fortify::registerView(function () {
            $request=request();
            
            if($request->is('admin/*')){
                return view('back.pages.admin.auth.login');
            }
            return view('back.pages.auth.type');
        });
        if(config('fortify.guard'=='admin')){
            Fortify::viewPrefix('admin.');
        }
        if(config('fortify.guard'=='artisan')){
            Fortify::viewPrefix('artisan.');
        }
        if(config('fortify.guard'=='client')){
            Fortify::viewPrefix('client.');
        }
        
        Fortify::loginView(function () {
            $request=request();
         
            if($request->is('admin/*')){
                                
                return view('back.pages.admin.auth.login');
            }else
                     
            return view('back.pages.auth.login');
        });

        RateLimiter::for('login', function (Request $request) {
           
            $throttleKey = Str::transliterate(Str::lower($request->input(Fortify::username())).'|'.$request->ip());

            return Limit::perMinute(5)->by($throttleKey);
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });

        //Authentification des utilisateurs du site ecommerce

        Fortify::authenticateUsing(function (Request $request) {
           
           
            switch(config('fortify.guard')){
                
                case'admin':           
                            
                    $user = Admin::where('email_admin', $request->email)->first();

                    if ($user && Hash::check($request->password, $user->passwd_admin)) {

                        return $user;
                    }
                    break;
        
                case 'artisan':      
                                
                    $user = Artisan::where('email_artisan', $request->email)->first();
                    if ($user && Hash::check($request->password, $user->passwd_artisan)) {

                        return $user;
                    }
                    break;

                case 'client':
                    $user = Client::where('email_client', $request->email)->first();
                    if ($user && Hash::check($request->password, $user->passwd_client)) {
                        return $user;
                    }
                    break;
                // default:
                //     $user = User::where('email', $request->email)->first();
                //     if ($user && Hash::check($request->password, $user->password)) {
                //         return $user;
                //     }
            }
               
           
        });

        // Fortify::authenticateUsing(function (Request $request) {
        //     $user = Artisan::where('email_artisan', $request->email)->first();
           
        //     if ($user &&
        //         Hash::check($request->password, $user->passwd_artisan)) {
                
        //         return $user;
        //     }
            
        // });
    }
}
