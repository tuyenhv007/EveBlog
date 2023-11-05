<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory;

    use HasTranslations;

    protected $fillable = [
        'name',
        'slug',
        'is_active',
        'seo_title',
        'seo_description',
    ];

    protected $casts = [
        'name' => 'json',
        'slug' => 'json',
        'is_active' => 'boolean',

    ];

    public $translatable = ['name', 'slug'];

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}
