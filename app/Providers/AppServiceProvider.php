<?php

namespace App\Providers;

use App\Repository\DepartmentRepository;
use App\Repository\Interface\IDepartmentRepository;
use App\Repository\Interface\IPharmaRepository;
use App\Repository\Interface\IPostRepository;
use App\Repository\Interface\ISurgeryRepository;
use App\Repository\Interface\IUserRepository;
use App\Repository\Interface\IVisitRepository;
use App\Repository\PharmaRepository;
use App\Repository\PostRepository;
use App\Repository\SurgeryRepository;
use App\Repository\UserRepository;
use App\Repository\VisitRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->singleton(IUserRepository::class,UserRepository::class);
        $this->app->singleton(IDepartmentRepository::class,DepartmentRepository::class);
        $this->app->singleton(IVisitRepository::class,VisitRepository::class);
        $this->app->singleton(ISurgeryRepository::class,SurgeryRepository::class);
        $this->app->singleton(IPharmaRepository::class,PharmaRepository::class);
        $this->app->singleton(IPostRepository::class,PostRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
