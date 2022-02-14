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
            $menu->add('About', 'example');
            $menu->add('Kατηγορίες', 'recipes/all');
                // ->append('<i class="fa fa-angle-down"></i>')
                // ->prepend('<span class="selected"></span>')
                // ->link->attr([
                //     'class' => 'dropdown-toggle',
                //     'data-toggle' => 'dropdown' ,
                //     'data-hover' => 'dropdown' ,
                //     'data-close-others' => 'true',]);
                // $menu->recipes->add('Meat','categorybyid');
                // $menu->recipes->add('Salads','categorybyid');
                // $recipesSubs = $menu->recipes->all();
            $menu->add('Contact', 'contact');
            $menu->add('Συνταγές', 'category/all');
            });
        return $next($request);
    }
}
