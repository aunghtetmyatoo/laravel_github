<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receipe extends Model
{
    protected $fillable = ['name','ingredients','category','author_id'];
    // protected $guarded = [];

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category');
    }
}
