<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StdHealth extends Model
{
    use HasFactory;
    protected $table ='student_disease';
    protected $fillable=['have_chronic'	,'disease_name','disease_degree','height','weight','extra_data','student_id'];
    public $timestamps=false;
}
