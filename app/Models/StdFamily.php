<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StdFamily extends Model
{
    use HasFactory;
    protected $table ='student_family';
    protected $fillable =[
    'mother_name',
    'mother_ssn',
    'mother_job',
    'phone1',
    'phone2',
    'father_ssn',
    'father_job',
    'student_id',
    'created_at','updated_at'];
}
