<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();


        Gate::define('edit-article', function ($user) {

            foreach ($user->roles as $role) {
                if($role->name == 'admin'){
                    return true;
                }else{
                    return false;
                }
            }

        });
/*            $gate->define('create', function ($user){
                return $user->role()->name=='admin';});

            $gate->define('show',function ($user){

                return $user->name=='user' || $user->name=='manager'; });*/

        //
    }
}
