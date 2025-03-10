<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job_User extends Model
{
    use HasFactory;

    protected $fillable = ['job_id', 'user_id'];

    // Beziehungen zu anderen Tabellen

    public function job()
    {
        return $this->belongsTo(Job::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
