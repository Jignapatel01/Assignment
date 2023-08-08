<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ContactusModel;
use App\Mail\EmailSend;
use Mail;

class ContactusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contactus');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
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
            "firstname"=>'required',
            "lastname"=>'required',
            "email"=>'required | email',
            "phone"=>'required | max:10',
            "message"=>'required'

        ]);

        $data=array(
           "firstname"=>$request->firstname,
           "lastname"=>$request->lastname,
           "email"=>$request->email,
           "phone"=>$request->phone,
           "message"=>$request->message,
        );

        //elequent query builder
        
        ContactusModel::create($data);
        Mail::to('jigna434@gmail.com')->send(new EmailSend($data));
        return redirect("/contact-us")->with("success","Thanks for contact with us");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //elequient query builder
        $data=ContactusModel::all();
        return view('Admin.managecontact',["data"=>$data]);
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
        //elequent query builder
        ContactusModel::where('id',$id)->delete();
        return redirect("/admin-login/managecontact")->with('del','Record Successfully deleted');

    }
}
