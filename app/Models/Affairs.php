<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affairs extends Model
{
    use HasFactory;
    protected $table='students';
    protected $fillable=['fname','mname','lname','surname','ssn' ,'birthdate','gender_id','nationl_id','religion_id',
     'governorate_id', 'city_id','district_id',
     'father_job','father_ssn','father_phone','mother_job','mother_name','mother_ssn','mother_phone',
     'sublev_id','term_id' ,'level_id',
     'created_at' , 'updated_at'];


}
