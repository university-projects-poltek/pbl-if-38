<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Route;

class NavigationBar extends Component
{
    public function isActive($routeName)
    {
        return Route::currentRouteName() === $routeName ? 'active' : '';
    }

    public function render()
    {
        return view('components.navigation-bar');
    }
}
