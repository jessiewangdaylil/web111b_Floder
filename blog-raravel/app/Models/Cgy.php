<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cgy extends Model
{
    use HasFactory;
    protected $dates = ['enabled_at'];
//白名單

// protected $fillable = ['subject','desc','enabled','sort'];
    public function articles()
    {
        return $this->hasMany(Article::class);
    }

}
