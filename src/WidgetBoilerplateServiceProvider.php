<?php

namespace VoyagerAdmin\WidgetBoilerplate;

use Illuminate\Support\ServiceProvider;
use TCG\Voyager\Facades\Plugins as PluginsFacade;

class WidgetBoilerplateServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'widget-boilerplate');
        PluginsFacade::addPlugin(\VoyagerAdmin\WidgetBoilerplate\FirstWidget::class);
        PluginsFacade::addPlugin(\VoyagerAdmin\WidgetBoilerplate\SecondWidget::class);
    }

    public function register()
    {
        //
    }
}