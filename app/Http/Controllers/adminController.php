<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nationality;
use App\Models\Year;

class adminController extends Controller
{
    /**
     
     * @return \Illuminate\Http\Response
     */
    public function index_nationality()
    {
        $data=Nationality::get();
        return view('Admin.admin_indexNationality',['data'=>$data]);
    }

    /**
     
     * @return \Illuminate\Http\Response
     */
    public function create_nationality()
    {
        return view('Admin.admin_addNationality');
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
        return view('Admin.admin_editNationality',['data'=>$data]);
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
        return view('Admin.admin_indexYear',['data'=>$data]);
    }

    /**
     
     * @return \Illuminate\Http\Response
     */
    public function create_year()
    {
        return view('Admin.admin_addYear');
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
        return view('Admin.admin_editYear',['data'=>$data]);
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
}
