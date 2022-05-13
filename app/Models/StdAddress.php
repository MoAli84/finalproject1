<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StdAddress extends Model
{
    use HasFactory;
   protected $table= 'student_address';
   protected $fillable =['governorate','city','village','student_id','created_at' , 'updated_at'];
  // public $timestamps= 'true';
}
