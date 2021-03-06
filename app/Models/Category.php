<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'name', 'short_tag', 'description', 'status'
    ];

    public function pages()
    {
        return $this->hasMany(Page::class);
    }
}
