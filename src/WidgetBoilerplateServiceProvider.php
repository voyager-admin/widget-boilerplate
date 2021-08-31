<?php

namespace Voyager\WidgetBoilerplate;

use Illuminate\Support\ServiceProvider;
use Voyager\Admin\Facades\Plugins as PluginsFacade;

class WidgetBoilerplateServiceProvider extends ServiceProvider
{
    public function boot()
    {
        PluginsFacade::addPlugin(\VoyagerAdmin\WidgetBoilerplate\FirstWidget::class);
        PluginsFacade::addPlugin(\VoyagerAdmin\WidgetBoilerplate\SecondWidget::class);
    }
}