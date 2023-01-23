<?php

namespace App\Providers;

use App\View\Composer\CategoryComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        View::composer(['admin.category.index', 'admin.product.create'], CategoryComposer::class);
    }
}
