<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galary extends Model
{
    use HasFactory;

    protected $fillable = ['blog_id', 'category_id'];

    public function blogs()
    {
        return $this->hasMany(blog::class, 'blog_id', 'id');
    }
}
