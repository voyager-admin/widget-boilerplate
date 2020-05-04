<?php

namespace Voyager\WidgetBoilerplate;

use Illuminate\View\View;
use Voyager\Admin\Contracts\Plugins\IsWidget;

class SecondWidget implements IsWidget
{
    public $name = 'Widget boilerplate';
    public $description = 'A widget-boilerplate for Voyager 2';
    public $repository = 'voyager-admin/widget-boilerplate';
    public $website = 'https://github.com/voyager-admin/widget-boilerplate';
    public $version = '1.0.0';

    public function getInstructionsView(): ?View
    {
        return view('widget-boilerplate::instructions');
    }

    public function getWidgetView(): View
    {
        return view('widget-boilerplate::second-widget');
    }

    public function getWidth(): int
    {
        return 6;
    }

    public function registerProtectedRoutes()
    {
        //
    }

    public function registerPublicRoutes()
    {

    }

    public function getSettingsView(): ?View
    {
        return null;
    }
}
