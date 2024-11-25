<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect Teams after login.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    // protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));


            Route::prefix('legal_api')
                ->middleware('legal_api')
                ->namespace($this->namespace)
                ->group(base_path('routes/Api/legal_api.php'));

            Route::prefix('services_api')
                ->middleware('services_api')
                ->namespace($this->namespace)
                ->group(base_path('routes/Api/services_api.php'));

            Route::prefix('translation_api')
                ->middleware('translation_api')
                ->namespace($this->namespace)
                ->group(base_path('routes/Api/translation_api.php'));

            Route::prefix('shaaban_api')
                ->middleware('shaaban_api')
                ->namespace($this->namespace)
                ->group(base_path('routes/Api/shaaban_api.php'));

            Route::prefix('jasem_api')
                ->middleware('jasem_api')
                ->namespace($this->namespace)
                ->group(base_path('routes/Api/jasem_api.php'));

// ================================================================
            Route::middleware('web')    /*for main domain(legal)*/
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));

            Route::middleware('web_translation')
                ->namespace($this->namespace)
                ->group(base_path('routes/web_translation.php'));

            Route::middleware('web_services')
                ->namespace($this->namespace)
                ->group(base_path('routes/web_services.php'));

            Route::middleware('web_shaaban')
                ->namespace($this->namespace)
                ->group(base_path('routes/web_shaaban.php'));

            Route::middleware('web_jasem')
                ->namespace($this->namespace)
                ->group(base_path('routes/web_jasem.php'));
// ================================================================
            Route::middleware('admin')
                ->namespace($this->namespace)
                ->group(base_path('routes/admin.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}
