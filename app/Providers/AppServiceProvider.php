<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use App\Helpers\CurrencyHelper;
use App\Models\SiteConfiguration;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $siteConfig = cache()->rememberForever('site_config', function () {
                return SiteConfiguration::first();
            });

            $view->with('siteConfig', $siteConfig);
        });

        Blade::directive('currency', function ($amount) {
            return "<?php echo \App\Helpers\CurrencyHelper::format($amount); ?>";
        });
    }
}
