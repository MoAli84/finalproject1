<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Affairs;
use App\Models\Gender;
use App\Models\Nationality;
use App\Models\Religion;
use App\Models\Governorate;
use App\Models\City;
use App\Models\District;
use App\Models\StdHealth;
use App\Models\Level;
use App\Models\Sublevel;
use App\Models\Term;
class studentAffairsController extends Controller
{

    public function index()
    {
        $data = Affairs::join('gender','students.gender_id','=','gender.id')
        ->join('nationality','students.nationl_id','=','nationality.id')
        ->join('religion','students.religion_id','=','religion.id')
        ->join('governorate', 'students.governorate_id','=', 'governorate.id')
        ->join('city', 'students.city_id','=','city.id')
        ->join('district', 'students.district_id','=','district.id')
        -> select('students.*','gender.sex','nationality.nation_name','religion.relig_name','governorate.gov_name','city.city_name','district.district_name')
        -> orderBy('fname', 'ASC')->get();
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
        $govern = Governorate::get();
        $city = City::get();
        $district = District::get();
        $disease=StdHealth::get();
        $ter = Term::where('id',1)->get();
        $lev = Level::get();

        $sublev =Sublevel::join('acadmic_level','acadmic_level.id','=','sublevel.level_id')
        ->select('sublevel.*','acadmic_level.level')->get();

    //    dd($city);
        return view('StudentAffairs.affair_createStudent',[
            'sex'=>$sex ,
        'from'      =>$from,
        'religion'  =>$religion ,
        'ter'       =>$ter,
        'sublev'    =>$sublev,
        'govern'    =>$govern,
        'city'      =>$city,
        'district'  =>$district
    ]);
    }


    public function store(Request $request)
    {

    $data= $request->validate([
            'fname'         =>'required|min:2',
            'mname'         =>'required|min:3',
            'lname'         =>'required|min:3',
            'surname'       =>'required|min:2',
            'birthdate'     =>'required',
            'ssn'           =>'required|min:14|max:14',
            'gender_id'     =>'required|numeric',
            'nationl_id'    =>'required|numeric',
            'religion_id'   =>'required|numeric',
            'sublev_id'     =>'required|numeric',
            'term_id'       =>'required|numeric',
            'governorate_id'=>'required|numeric',
            'city_id'       =>'required|numeric',
            'district_id'   =>'required|numeric',
            'father_ssn'    =>'required|min:14|max:14', // /^([1-9]{1})([0-9]{2})([0-9]{2})([0-9]{2})([0-9]{2})[0-9]{3}([0-9]{1})[0-9]{1}$/
            'father_job'    =>'required|min:4',
            'mother_name'   =>'required',
            'mother_ssn'    =>'required|min:14|max:14', // /^([1-9]{1})([0-9]{2})([0-9]{2})([0-9]{2})([0-9]{2})[0-9]{3}([0-9]{1})[0-9]{1}$/
            'mother_job'    =>'required|min:4',
            'mother_phone'        =>'required|numeric',// /^01[0125][0-9]{8}$/
            'father_phone'        =>'required|numeric',// /^01[0125][0-9]{8}$/

            'chronic'       =>'required',
            'disease_name'  =>'required|min:3',
            'disease_degree'=>'required|numeric',
            'height'        =>'required|numeric',
            'weight'        =>'required|numeric',
            'extra_data'    =>'required'

        ]);

        $data = $request->except(['chronic','disease_name','disease_degree', 'height','weight','extra_data','_token' ]);
    //    dd($data);
       // dd($request->student_ssn);
        $op = Affairs::create($data);
      //  dd($op->id);

       $disease=StdHealth::create([ 'student_id'     =>$op->id,
                                    'chronic'   =>$request->chronic,
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
      ->join('governorate', 'students.governorate_id','=','governorate.id')
      ->join('city', 'students.city_id','=','city.id')
      ->join('district', 'students.district_id','=','district.id')
      ->join('sublevel','sublevel.id','=','students.sublev_id')
      ->join('acadmic_level','acadmic_level.id','=','sublevel.level_id')
      ->leftjoin('student_disease','students.id','=','student_disease.student_id')
      -> select('students.*',
                'gender.sex',
                'nationality.nation_name',
                'religion.relig_name',
                'sublevel.sublev',
                'acadmic_level.level',
                'city.city_name','governorate.gov_name','district.district_name',
                'student_disease.chronic','student_disease.disease_name','student_disease.disease_degree','student_disease.height','student_disease.weight','student_disease.extra_data')->get()->where('id','=',$id);
    //  dd($data);

        return view('StudentAffairs.affair_showProfile',['data'=>$data]);
    }

    public function edit($id)
    {
        $from=Nationality::get();
        $sex =Gender::get();
        $religion =Religion::get();
        $govern = Governorate::get();
        $city = City::get();
        $district = District::get();
        $data = Affairs::find($id);
        $disease=StdHealth::where('student_id','=',$id)->get();
        $lev=Level::get();
        $sub =Sublevel::join('acadmic_level','acadmic_level.id','=','sublevel.level_id')
        ->select('sublevel.*','acadmic_level.level')->get();
        $ter = Term::where('id',1)->get();

    //   dd($disease);
        return view('StudentAffairs.affair_editStudent',[
          'data'=>$data,
          'sex'=>$sex ,
          'from'=>$from ,
          'religion'=>$religion ,
          'disease'=>$disease,
          'lev'=>$lev,
          'sub'=>$sub,
          'ter'=>$ter,
          'govern'    =>$govern,
          'city'      =>$city,
          'district'  =>$district

        ]);
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
        'sublev_id'   =>'required|numeric',
        'term_id'     =>'required|numeric',

        'governorate_id'=>'required|numeric',
        'city_id'       =>'required|numeric',
        'district_id'    =>'required|numeric',

        'father_ssn' =>'required|min:14|max:14',
        'father_job' =>'required|min:4',
        'mother_name'=>'required',
        'mother_ssn' =>'required|min:14|max:14',
        'mother_job' =>'required|min:4',
        'father_phone'     =>'required|numeric',
        'mother_phone'     =>'required|numeric',

        'chronic'    =>'required',
        'disease_name'=>'required|min:3',
        'disease_degree'=>'required|numeric',
        'height'      =>'required|numeric',
        'weight'      =>'required|numeric',
        'extra_data' =>'required'
      ]);
      //  dd($info);

     $data = $request->except([
     '_token','chronic','disease_name','disease_degree', 'height','weight','extra_data'
    ]);
       // dd($data);
     $ob =Affairs::where('id',$request->id)->update($data);

       $disease=StdHealth::where('student_id','=',$request->id)->update([
        'chronic'  =>$request->chronic ,
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
