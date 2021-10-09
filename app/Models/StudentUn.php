<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentUn extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function getKeputusan()
    {
        if ($this->keputusan == 1) {
            return "Lulus";
        } else {
            return "Tidak Lulus";
        }
    }
}
