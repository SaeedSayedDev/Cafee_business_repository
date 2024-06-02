<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Http\Interfaces\MenuCategoryIntefaces',
            'App\Http\Repositories\MenuCategoryRepository',
        );
        $this->app->bind(
            'App\Http\Interfaces\AboutInteface',
            'App\Http\Repositories\AboutRepository',
        );

        $this->app->bind(
            'App\Http\Interfaces\AboutFeatureInterface',
            'App\Http\Repositories\AboutFeatureRepository',
        );
        $this->app->bind(
            'App\Http\Interfaces\MenuItemInterface',
            'App\Http\Repositories\MenuItemRepository',
        );

        /////
        $this->app->bind(
            'App\Http\Interfaces\AdminInterface',
            'App\Http\Repositories\AdminRepository',
        );
        $this->app->bind(
            'App\Http\Interfaces\BookingInterfce',
            'App\Http\Repositories\BookingRepository',
        );
        $this->app->bind(
            'App\Http\Interfaces\ChefInterface',
            'App\Http\Repositories\ChecfRepository',
        );
        $this->app->bind(
            'App\Http\Interfaces\ChefSocialmediaInteface',
            'App\Http\Repositories\ChefSocialmediaRepository',
        );
        $this->app->bind(
            'App\Http\Interfaces\ContactInterface',
            'App\Http\Repositories\ContactRepository',
        );
        $this->app->bind(
            'App\Http\Interfaces\DishSpecialInterface',
            'App\Http\Repositories\DishSpeacialRepository',
        );
        $this->app->bind(
            'App\Http\Interfaces\EventFeatureInterface',
            'App\Http\Repositories\EventFeatureRepository',
        );
        $this->app->bind(
            'App\Http\Interfaces\EventInterface',
            'App\Http\Repositories\EventRepository',
        );
        $this->app->bind(
            'App\Http\Interfaces\ImagesResturantInterface',
            'App\Http\Repositories\ImagesResturantRepository',
        );

        $this->app->bind(
            'App\Http\Interfaces\InformationInterface',
            'App\Http\Repositories\InformationRepository',
        );
        $this->app->bind(
            'App\Http\Interfaces\NotificationInterface',
            'App\Http\Repositories\NotificationRepository',
        );
        $this->app->bind(
            'App\Http\Interfaces\OurFeatureInterface',
            'App\Http\Repositories\OurFeatureRepository',
        );
        $this->app->bind(
            'App\Http\Interfaces\TableInterface',
            'App\Http\Repositories\TableRepository',
        );
        $this->app->bind(
            'App\Http\Interfaces\checkouInterface',
            'App\Http\Repositories\checkoutRepository',
        );
        
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}


// <?php

// namespace App\Providers;

// use App\Http\Interfaces\MenuCategoryIntefaces;
// use App\Http\Repositories\MenuCategoryRepository;
// use Illuminate\Support\ServiceProvider;

// class RepositoryServiceProvider extends ServiceProvider
// {
//     /**
//      * Register services.
//      */
//     public function register(): void
//     {
//         $this->app->bind(
//             'App\Http\Interfaces\MenuCategoryIntefaces',
//             'App\Http\Repositories\MenuCategoryRepository',
        
//         );
        
//     }

//     /**
//      * Bootstrap services.
//      */
//     public function boot(): void
//     {
//         //
//     }
// }
