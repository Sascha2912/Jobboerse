<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'email', 'password', 'role'];

    // Beziehungen zu anderen Tabellen
    public function companies()
    {
        return $this->hasMany(Company::class);
    }

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }

    public function job_users()
    {
        return $this->hasMany(Job_User::class);
    }
}
