<?php

namespace Voyager\WidgetBoilerplate;

use Voyager\Admin\Contracts\Plugins\WidgetPlugin;

class SecondWidget implements WidgetPlugin
{
    public $name = 'Widget boilerplate';
    public $description = 'A widget-boilerplate for Voyager II';
    public $repository = 'voyager-admin/widget-boilerplate';
    public $website = 'https://github.com/voyager-admin/widget-boilerplate';
    public $version = '1.0.0';

    public function getWidgetComponent(): string {
        // The name of your registered component.
        // See https://github.com/voyager-admin/voyager/blob/2.x/docs/plugins/components.md
        return 'my-widget-component';
    }

    public function getWidgetParameters(): array {
        // Custom parameters available in your component
        return [
            'data' => [],
        ];
    }

    public function getWidth(): int {
        return 6; // Tailwind CSS width /12
    }

    public function getTitle(): ?string {
        return 'Title';

        // or

        return __('myplugin::mystring');
    }

    public function getIcon(): ?string {
        return 'x'; // The name of an icon
    }
}
