<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // // Should return TRUE or FALSE
        // Gate::define('edit_document', function(User $user) {
        //     // can upload KM request
        //     return $user->is_admin == 1;
        // });
        // Gate::define('edit_trainDocument', function(User $user) {
        //     // can upload Training request
        //     return $user->is_admin == 1;
        // });

        // // management level 
        // Gate::define('manage_document', function(User $user) {
        //     // can manage KM request
        //     return $user->is_admin == 1;
        // });
        // Gate::define('manage_trainDocument', function(User $user) {
        //     // can manage Training request
        //     return $user->is_admin == 1;
        // });
        // Gate::define('manage_users', function(User $user) {
        //     // can manage user row/permission
        //     return $user->is_admin == 1;
        // });

        // // MD level
        // Gate::define('publish_document', function(User $user) {
        //     // can Approved KM request (MD)
        //     return $user->is_admin == 1;
        // });

    }
}
