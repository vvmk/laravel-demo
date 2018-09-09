<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /* this works... */
    /* public static function incomplete() { */
    /*     return statis::where('completed', 0)->get(); */
    /* } */

    /* 
     * ...but this is fire 
     * Task::incomplete();
     * 
     * if you need to pass anything to the scope method...
     * public function scopeIncomplete($query, $val, $whatever) { 
     *
     * now you can do things like...
     * Task::incomplete()->get();
     * Task::incomplete()->where('id', '>=', 2);
     * Task::incomplete()->first();
     * ...etc
     */
    public function scopeIncomplete($query) {
        return $query->where('completed', 0);
    }
}
