<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affairs extends Model
{
    use HasFactory;
    protected $table='students';
    protected $fillable=['fname','mname','lname','surname','ssn' ,'birthdate','gender_id','nationl_id','religion_id','sublev_id','term_id' ,'created_at' , 'updated_at'];
    
   
}
