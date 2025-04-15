<?php

namespace App\Models;

use App\Mail\PostCreated;
use App\Mail\PostUpdate;
use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\CodeCoverage\StaticAnalysisCacheNotConfiguredException;
use Illuminate\Support\Facades\Mail;


class Post extends Model
{
    protected $fillable = ['name', 'description', 'category_id', 'user_id'];

    protected static function booted(): void
    {
        static::created(function ($post) {
            Mail::to(auth()->user()->email)->send(new PostCreated($post));
        });

        static::updated(function ($post) {
            Mail::to(auth()->user()->email)->send(new PostUpdate($post));
        });

    }


    public function category(){
        return $this->belongsTo(Category::class);
    }
}
