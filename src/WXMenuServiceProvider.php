<?php

namespace Yisonli\WXMenu;

use Encore\Admin\Admin;
use Encore\Admin\Form;
use Illuminate\Support\ServiceProvider;

class WXMenuServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(WXMenu $extension)
    {
        if (! WXMenu::boot()) {
            return ;
        }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'wxmenu');
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/laravel-admin-ext/wxmenu')],
                'wxmenu'
            );
        }

        Admin::booting(function () {
            Form::extend('wxmenu', WXMenuFormField::class);
        });

        $this->app->booted(function () {
            WXMenu::routes(__DIR__.'/../routes/web.php');
        });
    }
}