<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        $this->mapCategoryRoutes();

        $this->mapProductRoutes();

        $this->mapShopRoutes();

        $this->mapProductShopPriceRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
    }

    /**
     * Define the Category routes of the application.
     *
     *
     * @return void
     */
    protected function mapCategoryRoutes()
    {
        Route::prefix('api/category')  
            ->middleware('api') 
            ->namespace($this->namespace) 
            ->group(base_path('routes/api.category.php'));
    }

    /**
     * Define the Product routes of the application.
     *
     *
     * @return void
     */
    protected function mapProductRoutes()
    {
        Route::prefix('api/product')  
            ->middleware('api') 
            ->namespace($this->namespace) 
            ->group(base_path('routes/api.product.php'));
    }

    /**
     * Define the Shop routes of the application.
     *
     *
     * @return void
     */
    protected function mapShopRoutes()
    {
        Route::prefix('api/shop')  
            ->middleware('api') 
            ->namespace($this->namespace) 
            ->group(base_path('routes/api.shop.php'));
    }

    /**
     * Define the Product Shop Price routes of the application.
     *
     *
     * @return void
     */
    protected function mapProductShopPriceRoutes()
    {
        Route::prefix('api/product-shop-price')  
            ->middleware('api') 
            ->namespace($this->namespace) 
            ->group(base_path('routes/api.productshopprice.php'));
    }
}
