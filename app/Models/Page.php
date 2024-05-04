<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Page extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['content'];

    protected $fillable = ['key', 'content'];

    public function GetContent($lang = null)
    {
        if ($lang != null) {
            return $this->getTranslation('content', $lang);
        } else {
            return $this->getTranslations('content');
        }
    }
}
