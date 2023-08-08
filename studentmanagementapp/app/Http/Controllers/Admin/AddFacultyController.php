<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddFacultyModel;
use DB;

class AddFacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collegename=DB::table('addcolleges')->get();    
        $deptnm=DB::table('adddepartment')->get();
        return view('Admin.addfaculty',["collegename"=>$collegename,"deptnm"=>$deptnm]);
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
          "Name"=>"required",
          "photo"=>"required",
          "collegename"=>"required",
          "departmentname"=>"required",
          "subject"=>"required",
          "phone"=>"required",
          "age"=>"required",
          "address"=>"required",
        ]);


        //upload photo
        $path=rand().''.$request->photo->extension();
        $request->photo->move(public_path('assets/student/images'),$path);


          $data=array(
            "name"=>$request->Name,
            "photo"=>$path,
            "college_id"=>$request->collegename,
            "department_id"=>$request->departmentname,
            "subject"=>$request->subject,
            "phone"=>$request->phone,
            "age"=>$request->age,
            "address"=>$request->address
          );

         
            

          //elequent query builder
          AddFacultyModel::create($data);
          return redirect("/admin-login/addfaculty")->with("success","Faculty Successfully Added");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = DB::table('addfaculties')
        ->join('addcolleges', 'addfaculties.college_id', '=', 'addcolleges.id')
        ->join('adddepartment', 'addfaculties.department_id', '=', 'adddepartment.id')
        ->select('addfaculties.*', 'addcolleges.collegename', 'adddepartment.departmentname')
        ->get();
        
            return view("Admin.managefaculty",["data"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editdata = DB::table('addfaculties')
        ->join('addcolleges', 'addfaculties.college_id', '=', 'addcolleges.id')
        ->join('adddepartment', 'addfaculties.department_id', '=', 'adddepartment.id')
        ->select('addfaculties.*', 'addcolleges.collegename', 'adddepartment.departmentname')
        ->get()->where('id',$id)->first();
        
        $collegename=DB::table('addcolleges')->get();    
        $deptnm=DB::table('adddepartment')->get();
        
        return view('Admin.editfaculty',['editdata'=>$editdata,'collegename'=>$collegename,'deptnm'=>$deptnm]);
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
        
        //upload photo
        $path=rand().''.$request->photo->extension();
        $request->photo->move(public_path('assets/student/images'),$path);


          $data=array(
            "name"=>$request->Name,
            "photo"=>$path,
            "college_id"=>$request->collegename,
            "department_id"=>$request->departmentname,
            "subject"=>$request->subject,
            "phone"=>$request->phone,
            "age"=>$request->age,
            "address"=>$request->address
          );

          //query builder
          $data=AddFacultyModel::where('id',$id)->update($data);
          return redirect("/admin-login/managefaculty")->with("success","successfully Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AddFacultyModel::where("id",$id)->delete($id);
        return redirect("/admin-login/managefaculty")->with('del',"Successfully Deleted");
    }
}
