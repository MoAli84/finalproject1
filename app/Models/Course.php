<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table ='courses';
    protected $fillable =['course_name'	,'course_code',	'course_score',	'sublev_id','term_id'];
    public $timestamps=false;
}
