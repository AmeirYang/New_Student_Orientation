<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students' ;

    protected $fillable = [
        'studentNumber','studentName','studentPhone','collage'
    ];
    
}
