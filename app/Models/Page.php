<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'pages';

    protected $fillable = [
        'name', 'short_tag', 'category_id', 'content', 'status', 'position', 'picture'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
