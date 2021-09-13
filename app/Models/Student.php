<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Untuk eager loading student dengan student report yang sesuai
    protected $with = ['studentReports'];

    public function studentReports()
    {
        return $this->hasMany(StudentReport::class);
    }
}
