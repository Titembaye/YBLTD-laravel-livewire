<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeArticle extends Model
{
    protected $table = "type_articles";
    use HasFactory;
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
