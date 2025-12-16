<?php
namespace App\Providers;

use App\Models\Category;
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

            $view->with('sharedCategories', $categories);
        });

        Schema::defaultStringLength(191);
    }
}
