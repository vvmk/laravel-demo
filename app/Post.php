<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    protected $fillable = ['title', 'body', 'user_id'];

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function addComment($body, $user_id) {
        $this->comments()->create([
            'body' => $body,
            'user_id' => $user_id,
        ]);
    }
    
    public function scopeFilter($query, $filters) {
        if (empty($filters)) {
            return $query;
        }

        if ($month = $filters['month']) {
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if ($year = $filters['year']) {
            $query->whereYear('created_at', $year);
        }
    }
}
