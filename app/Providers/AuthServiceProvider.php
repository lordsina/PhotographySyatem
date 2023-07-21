<?php

namespace App\Providers;

use App\Models\Bookcomment;
use App\Models\Permission;
use App\Models\User;
use App\Policies\BookCommentPolicy;
use Illuminate\Support\Facades\Gate;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Bookcomment::class => BookCommentPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
        // Gate::define('edit-bookcomment',function(User $user,Bookcomment $bookcomment){
        //     //return $user->id==$bookcomment->user_id;
        //     return $user->owns($bookcomment);
        // });
        foreach($this->getPermission() as $permission){
            Gate::define($permission->name,function($user) use ($permission){
               return $user->hasRole($permission->roles);
            });
        }
    }

    protected function getPermission() {
        return Permission::with('roles')->get();
    }
}
