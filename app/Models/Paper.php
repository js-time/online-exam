<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Paper extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'creator_id', 'total_score', 'content', 'time_limit', 'participation_count'];

    public function creator()
    {
        return $this->belongsTo(User::class);
    }
}