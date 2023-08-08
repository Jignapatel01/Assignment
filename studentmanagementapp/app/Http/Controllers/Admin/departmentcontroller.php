<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddDepartmentModel;

class departmentcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.Adddepartment');
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
            'departmentname'=>'required'
        ]);


        $data=array(
            "departmentname"=>$request->departmentname
        );

        //elequent query builder
        AddDepartmentModel::create($data);
        return redirect('/admin-login/adddepartment')->with('success',"Department Added Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       $data=AddDepartmentModel::all();
       return view("Admin.managedepartment",["data"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editdata=AddDepartmentModel::where('id',$id)->first();
        return view('Admin.editdepartment',['editdata'=>$editdata]);
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
            "departmentname"=>$request->departmentname
        );

        //elequent query builder
        AddDepartmentModel::where('id',$id)->update($data);
        return redirect('/admin-login/managedepartment')->with('Success',"Successfully Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AddDepartmentModel::where('id',$id)->delete();
        return redirect('/admin-login/managedepartment')->with('del',"Successfully Deleted");
    }
}
