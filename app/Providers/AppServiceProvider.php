<?php
namespace App\Providers;

use App\Models\Category;
use App\Models\Settings;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
            $categories = Cache::rememberForever('menu_categories', function () {
                return Category::select('id', 'name', 'slug')
                    ->with([
                        'subCategories' => fn($q) =>
                        $q->select('id', 'category_id', 'name', 'slug')
                            ->where('is_active', true)
                            ->orderBy('sort_order'),
                    ])
                    ->where('is_menu', true)
                    ->where('is_active', true)
                    ->orderBy('sort_order')
                    ->get();
            });

            $settings = Cache::rememberForever('general_settings', function () {
                return Settings::pluck('value', 'key');
            });

            $useful = Cache::rememberForever('useful_links', function () use ($settings) {
                return SubCategory::select('id', 'name', 'slug')->where('useful_service', true)->get();
            });

            $view->with([
                'sharedCategories' => $categories,
                'generalSettings'  => $settings,
                'usefulLinks'      => $useful,
            ]);
        });

        Schema::defaultStringLength(191);
    }
}
