<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student_reg extends Model
{
    use HasFactory;
    protected $fillable=['name','email','mobile','degree','working_company','working_designation','here_package','batch_year','profile','teacher_like','batch_meets'];
}
