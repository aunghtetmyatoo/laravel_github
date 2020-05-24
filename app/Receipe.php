<?php

namespace App;

use App\Mail\ReceipeStored;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;

class Receipe extends Model
{
    protected $fillable = ['name','ingredients','category','author_id'];
    // protected $guarded = [];

    protected static function boot()
    {
        parent::boot();
        static::created(function($receipe){

            session()->flash('message','Receipe is successfully created');

            Mail::to('aunghtetmyatoo888@gmail.com')->send(new ReceipeStored($receipe));
        });
    }

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category');
    }
}
