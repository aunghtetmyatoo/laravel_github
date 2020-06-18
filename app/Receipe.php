<?php

namespace App;

use App\Category;
use App\Mail\ReceipeStored;
use App\Events\ReceipeCreatedEvent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;

class Receipe extends Model
{
    protected $fillable = ['name','ingredients','category','author_id'];
    // protected $guarded = [];

    public $dispatchesEvents = [
        'created' => ReceipeCreatedEvent::class,
    ];

    protected static function boot()
    {
        parent::boot();
        static::created(function($receipe){

            session()->flash('message','Receipe is successfully created');

            
        });
    }

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category');
    }
}
