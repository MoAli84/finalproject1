<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Affairs;
use App\Models\Gender;
use App\Models\Nationality;
use App\Models\Religion;
use App\Models\StdAddress;
use App\Models\StdFamily;
use App\Models\StdHealth;
class studentAffairsController extends Controller
{
 
    public function index()
    {
        $data = Affairs::join('gender','students.gender_id','=','gender.id')
        ->join('nationality','students.nationl_id','=','nationality.id')
        ->join('religion','students.religion_id','=','religion.id')
        ->leftjoin('student_address','students.id','=','student_address.student_id')
        -> select('students.*','gender.sex','nationality.name','religion.relig_name','student_address.city','student_address.village')
        -> orderBy('id', 'desc')->get();
       // dd($data);

        return view('StudentAffairs.affair_index',['data'=>$data]);
    }
    public function home()
    {
        return view('StudentAffairs.home');
    }

 
    public function create()
    {
      
        $sex =Gender::get();
        $religion =Religion::get();
        $from=Nationality::get();
        $address=StdAddress::get();
        $family=StdAddress::get();
        $disease=StdHealth::get();
        
       // dd($religion);
        return view('StudentAffairs.affair_createStudent',['sex'=>$sex ,'from'=>$from ,'religion'=>$religion]);
    }


    public function store(Request $request)
    {

     $request->validate([
            'fname'      =>'required|min:2',
            'mname'      =>'required|min:3',
            'lname'      =>'required|min:3',
            'surname'    =>'required|min:2',
            'birthdate'  =>'required',
            'ssn'        =>'required|min:14|max:14', 
           'gender_id'   =>'required|numeric',
           'nationl_id'  =>'required|numeric',
           'religion_id' =>'required|numeric',
            'governorate'=>'required|min:4',
            'city'       =>'required|min:3',
            'village'    =>'required|min:3',
            'father_ssn' =>'required|min:14|max:14', // /^([1-9]{1})([0-9]{2})([0-9]{2})([0-9]{2})([0-9]{2})[0-9]{3}([0-9]{1})[0-9]{1}$/
            'father_job' =>'required|min:4',
            'mother_name'=>'required',
            'mother_ssn' =>'required|min:14|max:14', // /^([1-9]{1})([0-9]{2})([0-9]{2})([0-9]{2})([0-9]{2})[0-9]{3}([0-9]{1})[0-9]{1}$/
            'mother_job' =>'required|min:4',
            'phone1'     =>'required|numeric',// /^01[0125][0-9]{8}$/
            'phone2'     =>'required|numeric',// /^01[0125][0-9]{8}$/
            'chronic'    =>'required',
            'disease_name'=>'required|min:3',
            'disease_degree'=>'required|numeric',
            'height'      =>'required|numeric',
            'weight'      =>'required|numeric',
            'extra_data' =>'required'

        ]);
       
        $data = $request->except(['governorate','city','village',
                                  'father_ssn','father_job','mother_name','mother_ssn','mother_job','phone1','phone2' ,
                                  'chronic','disease_name','disease_degree', 'height','weight','extra_data',
                                  '_token' ]);
       // dd($data);  
       // dd($request->student_ssn);
        $op = Affairs::create($data);
      //  dd($op->id);
       $addr=StdAddress::create(['student_id' => $op->id, 'governorate'=> $request->governorate , 'city' => $request->city , 'village' => $request->village ]);
     
       $family=StdFamily::create(['student_id' => $op->id,
                                 'father_ssn'  =>$request->father_ssn,
                                 'father_job'  =>$request->father_job ,
                                  'mother_name'=>$request->mother_name , 
                                  'mother_ssn' =>$request->mother_ssn,
                                  'mother_job' =>$request->mother_job,
                                  'phone1'     =>$request->phone1,
                                  'phone2'     =>$request->phone2,

                                ]);

       $disease=StdHealth::create([ 'student_id'     =>$op->id,
                                    'have_chronic'   =>$request->chronic,
                                    'disease_name'   =>$request->disease_name,
                                    'disease_degree' =>$request->disease_degree,
                                    'height'         =>$request->height,
                                    'weight'         =>$request->weight,
                                    'extra_data'     =>$request->extra_data
                                  ]);
                                
       return redirect(url('affair/index'))->with('success','Student is created successfull...');
    }

    public function show($id)
    {
     
      $data = Affairs::join('gender','students.gender_id','=','gender.id')
      ->join('nationality','students.nationl_id','=','nationality.id')
      ->join('religion','students.religion_id','=','religion.id')
      ->leftjoin('student_address','students.id','=','student_address.student_id')
      ->leftjoin('student_family','students.id','=','student_family.student_id')
      ->leftjoin('student_disease','students.id','=','student_disease.student_id')
      -> select('students.*',
                'gender.sex',
                'nationality.name',
                'religion.relig_name',
                'student_address.governorate','student_address.city','student_address.village',
                'student_family.father_ssn','student_family.father_job','student_family.mother_name','student_family.mother_ssn','student_family.mother_job','student_family.phone1' ,'student_family.phone2',
                'student_disease.have_chronic','student_disease.disease_name','student_disease.disease_degree','student_disease.height','student_disease.weight','student_disease.extra_data')->get()->where('id','=',$id);
     // dd($data);

        return view('StudentAffairs.affair_showProfile',['data'=>$data]);
    }

    public function edit($id)
    {
        $from=Nationality::get();
        $sex =Gender::get();
        $religion =Religion::get();
        $data = Affairs::find($id);
        $addr=StdAddress::where('student_id','=',$id)->get();
        $family=StdFamily::where('student_id','=',$id)->get();
        $disease=StdHealth::where('student_id','=',$id)->get();
      // dd($disease);
        return view('StudentAffairs.affair_editStudent',['data'=>$data,'sex'=>$sex , 'from'=>$from ,'religion'=>$religion ,'addr'=>$addr , 'family'=>$family ,'disease'=>$disease]);
    }

    public function update(Request $request)
    {
      $info= $request->validate([ 
        'fname'      =>'required|min:3',
        'mname'      =>'required|min:3',
        'lname'      =>'required|min:3',
        'surname'    =>'required|min:2',
        'birthdate'  =>'required',
        'ssn'        =>'required|min:14|max:14',
        'gender_id'  =>'required|numeric',
        'nationl_id' =>'required|numeric',
        'religion_id'=>'required|numeric',

        'governorate'=>'required|min:4',
        'city'       =>'required|min:3',
        'village'    =>'required|min:3',

        'father_ssn' =>'required|min:14|max:14', 
        'father_job' =>'required|min:4',
        'mother_name'=>'required',
        'mother_ssn' =>'required|min:14|max:14', 
        'mother_job' =>'required|min:4',
        'phone1'     =>'required|numeric',
        'phone2'    ,

        'chronic'    =>'required',
        'disease_name'=>'required|min:3',
        'disease_degree'=>'required|numeric',
        'height'      =>'required|numeric',
        'weight'      =>'required|numeric',
        'extra_data' =>'required'
      ]);
      //  dd($info);
    
     $data = $request->except(['governorate','city','village',
     '_token','father_ssn','father_job','mother_name','mother_ssn','mother_job','phone1','phone2',
     'chronic','disease_name','disease_degree', 'height','weight','extra_data'
    ]);
       // dd($data);
     $ob =Affairs::where('id',$request->id)->update($data);

       $addr=StdAddress::where('student_id','=',$request->id)->update(['governorate'=> $request->governorate , 'city' => $request->city , 'village' => $request->village ]);

       $family=StdFamily::where('student_id','=',$request->id)->update([
        'father_ssn'=> $request->father_ssn ,
        'father_job' =>$request->father_job,
        'mother_name'=>$request->mother_name,
        'mother_ssn' =>$request->mother_ssn,
        'mother_job' =>$request->mother_job,
        'phone1'     =>$request->phone1,
        'phone2'     =>$request->phone2,
       ]);

       $disease=StdHealth::where('student_id','=',$request->id)->update([
        'have_chronic'  =>$request->chronic ,
        'disease_name'  =>$request->disease_name,
        'disease_degree'=>$request->disease_degree,
        'height'        =>$request->height,
        'weight'        =>$request->weight,
        'extra_data'    =>$request->extra_data
       ]);

          
       return redirect(url('affair/index'))->with('success','student updated successfully');
     
    }

    public function destroy($id)
    {
        $op = Affairs::where('id', $id)->delete();
        return redirect(url('affair/index'))->with('success','student deleted successfully');
    }
}
