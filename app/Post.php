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

    public static function archives() {
     return static::selectRaw("EXTRACT(YEAR FROM created_at) as year, to_char(created_at, 'Month')  as month, count(*) published")
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) DESC')
            ->get()
            ->toArray();
    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
}
