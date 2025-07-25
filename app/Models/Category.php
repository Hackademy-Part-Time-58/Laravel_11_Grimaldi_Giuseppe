<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['name','color'];

    public function articles(){
            return $this->belongsToMany(Article::class);
        }
}
