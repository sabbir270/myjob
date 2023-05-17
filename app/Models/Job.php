<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $table = 'jobs'; // Replace 'jobs' with your actual table name
    public function scopeFilter($query, array $filters){
        if($filters['tag'] ??false){
            $query->where('tags','like','%'. request('tag').'%');
        }
        if ($filters['search'] ?? false) {
            $query->where('job_title', 'like', '%' . request('search') . '%')
                ->orWhere('job_description', 'like', '%' . request('search') . '%')
                ->orWhere('tags', 'like', '%' . request('search') . '%');
        }

    }
        //relationship to user
        public function user()
        {
            return $this->belongsTo(User::class, 'user_id');
        }
}
