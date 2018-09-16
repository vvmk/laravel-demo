<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts() {
        return $this->belongsToMany(Post::class);
    }

    /* I guess this is all I have to do? More
     * Laravel magic?
     */
    public function getRouteKeyName() {
        return 'name';
    }
}
