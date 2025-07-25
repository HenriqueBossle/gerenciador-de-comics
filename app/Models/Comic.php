<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'title',
        'number',
        'release_date',
        'image',
        'category_id',
        //'user_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user() {
    return $this->belongsTo(User::class);
    }

}
