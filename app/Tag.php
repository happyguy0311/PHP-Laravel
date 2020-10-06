<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $table = 'tags';

    protected $guarded = [];

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

    public function news()
    {
        return $this->belongsToMany(News::class, 'new_tag', 'tag_id', 'new_id');
    }

    public function getRouteKeyName()
    {
        return 'name';
    }
}
