<?php
namespace App\Providers;
//here
use Laravel\Passport\Passport; 
use Illuminate\Support\Facades\Gate; 
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
class AuthServiceProvider extends ServiceProvider 
{ 
    //here
    protected $policies = [ 
        'App\Model' => 'App\Policies\ModelPolicy', 
    ];

    public function boot() 
    { 
        $this->registerPolicies(); 
        //here
        Passport::routes(); 
    } 
}