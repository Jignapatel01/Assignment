<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddCollegeModel;

class AddCollegeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.addcollege');
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
       //validation
       $request->validate([
        "collegename"=>"required",
          ]);


        $data=array(
          "collegename"=>$request->collegename,
          
        );

        //elequent query builder
        AddCollegeModel::create($data);
        return redirect("/admin-login/addcollege")->with("success","College Successfully Added");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data=AddCollegeModel::all();
        return view("Admin.managecollege",["data"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editdata=AddCollegeModel::where('id',$id)->first();
        return view('Admin.editcollege',['editdata'=>$editdata]);
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
        $data=array(
            "collegename"=>$request->collegename,
           );
  
          //elequent query builder
          AddCollegeModel::where('id',$id)->update($data);
          return redirect("/admin-login/managecollege")->with("success","College Successfully Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AddCollegeModel::where('id',$id)->delete();
        return redirect('/admin-login/managecollege')->with('del','Successfully Deleted');
    }
}
