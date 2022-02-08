<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class GenerateMenus
{
     public function handle(Request $request, Closure $next)
    {
        \Menu::make('MyNavBar', function ($menu) {
            $menu->add('Home');
            $menu->add('About', 'about');
            $menu->add('Recipes', 'recipes');
            $menu->add('Contact', 'contact');
        });
    
        return $next($request);
    }
}
