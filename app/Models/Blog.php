<?php

namespace App\Models;

use App\Models\BlogCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "banner",
        "description",
        "qutation_title",
        "images",
        "slug",
        "last_title",
        "last_description",
        "blog_category_id",
        "title"
    ];

    protected $casts = [
        'images' => 'array',
    ];

    public function blogCategory(){
        return $this->belongsTo(BlogCategory::class);
    }
}