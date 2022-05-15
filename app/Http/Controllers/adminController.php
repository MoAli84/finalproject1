<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Nationality;
use App\Models\Year;
use App\Models\Level;
use App\Models\Sublevel;
use App\Models\Course;
use App\Models\Term;


class adminController extends Controller
{
    /**
     
     * @return \Illuminate\Http\Response
     */
    public function index_nationality()
    {
        $data=Nationality::get();
        return view('Admin.nationality.admin_indexNationality',['data'=>$data]);
    }

    /**
     
     * @return \Illuminate\Http\Response
     */
    public function create_nationality()
    {
        return view('Admin.nationality.admin_addNationality');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_nationality(Request $request)
    {
        $request->validate([
            'name'=>'required|min:3'
        ]);

        $nat=Nationality::create(['name'=>$request->name]);

        return redirect(url('admin/index/nationality'))->with('success','nationality created successfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_nationality($id)
    {
        $data = Nationality::find($id);
        return view('Admin.nationality.admin_editNationality',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_nationality(Request $request)
    {
       $data= $request->validate(['name'=> 'required|min:3' ]);

        $nati=Nationality::where('id',$request->id)->update($data);
        return redirect(url('admin/index/nationality'))->with('success','nationality updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_nationality($id)
    {
        $op = Nationality::where('id', $id)->delete();
        return redirect(url('admin/index/nationality'))->with('success','nationality deleted successfully');
    }
    /**============================================= End Nationality======================================================= */










    // =========================================== Start Year ==============================================================

     /**
     
     * @return \Illuminate\Http\Response
     */
    public function index_year()
    {
        $data=Year::get();
        return view('Admin.year.admin_indexYear',['data'=>$data]);
    }

    /**
     
     * @return \Illuminate\Http\Response
     */
    public function create_year()
    {
        return view('Admin.year.admin_addYear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_year(Request $request)
    {
        $request->validate([
            'year'=>'required|numeric'
        ]);

        $y=Year::create(['year'=>$request->year]);

        return redirect(url('admin/index/year'))->with('success','Year created successfully');
        
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_year($id)
    {
        $data = Year::find($id);
        return view('Admin.year.admin_editYear',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_year(Request $request)
    {
       $data= $request->validate(['year'=> 'required|numeric' ]);

        $ya=Year::where('id',$request->id)->update($data);
        return redirect(url('admin/index/year'))->with('success','Year updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_year($id)
    {
        $op = Year::where('id', $id)->delete();
        return redirect(url('admin/index/year'))->with('success','Year deleted successfully');
    }
    //-------------------------------END YEAR---------------------------------------------






//====================================Level========================================
 /**
     
     * @return \Illuminate\Http\Response
     */
    public function index_level()
    {
        $data=Level::get();
   
        return view('Admin.level.admin_indexlevel',['data'=>$data]);
    }

    /**
     
     * @return \Illuminate\Http\Response
     */
    public function create_level()
    {
        return view('Admin.level.admin_addlevel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_level(Request $request)
    {
        $request->validate([
            'level'=>'required|min:3'
        ]);

        $lev=Level::create(['level'=>$request->level]);

        return redirect(url('admin/index/level'))->with('success','Academic Stage  created successfully');
        
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_level($id)
    {
        $data = Level::find($id);
        return view('Admin.level.admin_editLevel',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_level(Request $request)
    {
       $data= $request->validate(['level'=> 'required|min:3' ]);

        $lev=Level::where('id',$request->id)->update($data);
        return redirect(url('admin/index/level'))->with('success','Academic Stage updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_level($id)
    {
        $op = Level::where('id', $id)->delete();
        return redirect(url('admin/index/level'))->with('success','Academic Stage deleted successfully');
    }
//------------------------------end level--------------------------------



//==========================================start sublevel=================================
    /**
     
     * @return \Illuminate\Http\Response
     */
    public function index_sublevel()
    {
        $data=Sublevel::join('acadmic_level','sublevel.level_id','=','acadmic_level.id')
        ->select('sublevel.*','acadmic_level.level')-> get();
        return view('Admin.sublevel.admin_indexSublevel',['data'=>$data]);
    }

    public function create_sublevel()
    {
        $lev =Level::get();
        return view('Admin.sublevel.admin_addSublevel',['lev'=>$lev]);
    }

    
    public function store_sublevel(Request $request)
    {
      $data=  $request->validate([
            'sublev'=>'required|min:3',
            'level_id'=>'required|numeric'
        ]);

        $sublev=Sublevel::create($data);

        return redirect(url('admin/index/sublevel'))->with('success','Academic Stage  created successfully');
        
    }


    public function edit_sublevel($id)
    {
        $data = Sublevel::find($id);
        $le =Level::get();
        return view('Admin.sublevel.admin_editSublevel',['data'=>$data , 'le'=>$le]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_sublevel(Request $request)
    {
       $data= $request->validate([ 
          'sublev'=>'required|min:3',
           'level_id'=>'required|numeric' ]);

        $sublev=Sublevel::where('id',$request->id)->update($data);
        return redirect(url('admin/index/sublevel'))->with('success','Academic Stage updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_sublevel($id)
    {
        $op = Level::where('id', $id)->delete();
        return redirect(url('admin/index/sublevel'))->with('success','Academic Stage deleted successfully');
    }

    //--------------------------------- End subLEVEL---------------------------------

   



    

//============================================Start Courses==============================================


    /**
     
     * @return \Illuminate\Http\Response
     */
    public function index_course()
    {

         $data=Course::join('sublevel','courses.sublev_id','=','sublevel.id')
         ->join('acadmic_level','acadmic_level.id','=','sublevel.level_id')
          ->join('terms','courses.term_id','=', 'terms.id')
          ->select('courses.*','sublevel.sublev','sublevel.level_id','acadmic_level.level','terms.term_name')
          -> get();

        return view('Admin.course.admin_indexCourse',['data'=>$data]);
    }

    public function create_course()
    {
        $lev = Level::get();
        $sublev1 =Sublevel::join('acadmic_level','acadmic_level.id','=','sublevel.level_id')
        ->select('sublevel.*','acadmic_level.level')->get();
        $ter = Term::get();

        return view('Admin.course.admin_addCourse',['lev'=>$lev, 'sublev1'=>$sublev1,'ter'=>$ter ]);
    }

    
    public function store_course(Request $request)
    {
      $data=  $request->validate([
            'course_name'  =>'required|min:3',
            'course_code'  =>'required',
            'course_score' =>'required|numeric', 
            'sublev_id'    =>'required|numeric',
            'term_id'      =>'required|numeric',
        ]);

        $data=Course::create($data);

        return redirect(url('admin/index/course'))->with('success','Course  Added successfully');
        
    }


    public function edit_course($id)
    {
        $data = Course::find($id);
        $lev=Level::get();
        $sub =Sublevel::join('acadmic_level','acadmic_level.id','=','sublevel.level_id')
        ->select('sublevel.*','acadmic_level.level')->get();
        $ter = Term::get();
      
        return view('Admin.course.admin_editCourse',['data'=>$data ,'sub'=>$sub ,'ter'=>$ter ,'lev'=> $lev]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_course(Request $request)
    {
       $data= $request->validate([ 
        'course_name'  =>'required|min:3',
        'course_code'  =>'required',
        'course_score' =>'required|numeric', 
        'sublev_id'    =>'required|numeric',
        'term_id'      =>'required|numeric',
     ]);

        $cour=course::where('id',$request->id)->update($data);
        return redirect(url('admin/index/course'))->with('success','Course updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_course($id)
    {
        $op = Course::where('id', $id)->delete();
        return redirect(url('admin/index/course'))->with('success','Course deleted successfully');
    }









}
