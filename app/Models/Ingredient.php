<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    public function recipes()
    {
        return $this->belognsToMany(Recipe::class, 'ingredients_recipes','ingredient_id','recipes_id')->withPivot('amount');
    }
}
