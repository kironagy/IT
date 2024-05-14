<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['title', 'description'];

    protected $fillable = ['title', 'description', 'img_path'];

    public function blogs()
    {
        return $this->hasMany(blog::class, 'blog_id');
    }

    public function GetContent($lang = null)
    {
        if ($lang != null) {
            return $this->getTranslation('content', $lang);
        } else {
            return $this->getTranslations('content');
        }
    }
}
