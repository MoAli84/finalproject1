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

class entryOfficerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

        return view('EntryOfficer.index',['data'=>$data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
