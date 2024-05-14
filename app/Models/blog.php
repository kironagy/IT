<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class blog extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['title', 'content', 'description'];

    protected $fillable = [
        'title', 'description', 'img', 'content', 'created_by', 'isGalary', 'category',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
