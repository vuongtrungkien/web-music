<?php

namespace App\Providers;

use App\Http\Repositories\Impl\CategoryRepositoryImpl;
use App\Http\Repositories\Impl\PlaylistRepositoryImpl;
use App\Http\Repositories\Impl\SingerRepositoryImpl;
use App\Http\Repositories\Impl\SongRepositoryImpl;
use App\Http\Repositories\Impl\UserRepositoryImpl;
use App\Http\Repositories\Impl\VideoRepositoryImpl;
use App\Http\Repositories\Interfaces\CategoryRepository;
use App\Http\Repositories\Interfaces\PlaylistRepository;
use App\Http\Repositories\Interfaces\SingerRepository;
use App\Http\Repositories\Interfaces\SongRepository;
use App\Http\Repositories\Interfaces\UserRepository;
use App\Http\Repositories\Interfaces\VideoRepository;
use App\Http\Services\Impl\CategoryServiceImpl;
use App\Http\Services\Impl\PlaylistServiceImpl;
use App\Http\Services\Impl\SingerServiceImpl;
use App\Http\Services\Impl\SongServiceImpl;
use App\Http\Services\Impl\UserServiceImpl;
use App\Http\Services\Impl\VideoServiceImpl;
use App\Http\Services\Interfaces\CategoryService;
use App\Http\Services\Interfaces\PlaylistService;
use App\Http\Services\Interfaces\SingerService;
use App\Http\Services\Interfaces\SongService;
use App\Http\Services\Interfaces\UserService;
use App\Http\Services\Interfaces\VideoService;
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
        $this->app->singleton(
            UserRepository::class,
            UserRepositoryImpl::class
        );

        $this->app->singleton(
            CategoryRepository::class,
            CategoryRepositoryImpl::class
        );

        $this->app->singleton(
            PlaylistRepository::class,
            PlaylistRepositoryImpl::class
        );

        $this->app->singleton(
            SingerRepository::class,
            SingerRepositoryImpl::class
        );

        $this->app->singleton(
            SongRepository::class,
            SongRepositoryImpl::class
        );

        $this->app->singleton(
            VideoRepository::class,
            VideoRepositoryImpl::class
        );

        $this->app->singleton(
            UserService::class,
            UserServiceImpl::class
        );

        $this->app->singleton(
            CategoryService::class,
            CategoryServiceImpl::class
        );

        $this->app->singleton(
            PlaylistService::class,
            PlaylistServiceImpl::class
        );

        $this->app->singleton(
            SongService::class,
            SongServiceImpl::class
        );

        $this->app->singleton(
            VideoService::class,
            VideoServiceImpl::class
        );

        $this->app->singleton(
            SingerService::class,
            SingerServiceImpl::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
