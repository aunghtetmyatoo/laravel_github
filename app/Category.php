<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "category";
    public function receipes()
    {
        return $this->hasMany(Receipe::class, 'receipes');
    }
}
