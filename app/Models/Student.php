<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Untuk eager loading student dengan student report yang sesuai

    public function reports()
    {
        return $this->hasMany(StudentReport::class);
    }

    public function un()
    {
        return $this->hasOne(StudentUn::class);
    }
}