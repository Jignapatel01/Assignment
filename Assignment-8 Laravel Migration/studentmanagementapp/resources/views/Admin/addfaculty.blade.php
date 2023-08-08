@extends('Admin.layout')
@section('title_name')
::Dashboard 
@endsection
@section('dashboard-content')


<section id="content">
        <div class="container mt-5 p-5 " >
        <h2  style="margin-left:20%;" class="featured-hr"><span>Add Faculty</span></h2>        
        
        <div class="row">
            <div class="col-md-5 p-5  text-dark">
                
                
            </div>
            <div class="col-md-7 p-5">
            @if($errors->any())
                <div class="alert alert-success">
            <ul>
            @foreach($errors->all() as $err)
            <li>
                {{$err}}
            </li>
            @endforeach
            </ul>
        </div>
        @endif


                <h6>Add Faculty Here </h6>
                <hr class="border border-1 w-50 border-dark">
                @if(Session("success"))
                <div class="alert alert-info alert-dismissible fade show w-75" role="alert">
                    <strong> {{session('success')}}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <form method="post" enctype="multipart/form-data">
                @csrf
                <div class="input-group mt-2">
                   <input type="text" name="Name" placeholder="Faculty Name *"  class="form-control">
                 </div>

                 <div class="input-group mt-2">
                   <input type="file" name="photo" placeholder="Faculty Photo *"  class="form-control">
                 </div>

                 <div class="input-group mt-2">
                   <select name="collegename"  class="form-control">
                    <option value=" "> --Select College-- </option>
                    @foreach($collegename as $collegename1)
                    <option value="{{$collegename1->id}} "> {{$collegename1->collegename}} </option>
                    @endforeach
                   </select>
                </div>

                
                <div class="input-group mt-2">
                   <select name="departmentname"  class="form-control">
                    <option value=" "> --Select Department-- </option>
                    @foreach($deptnm as $deptnm1)
                    <option value="{{$deptnm1->id}} "> {{$deptnm1->departmentname}} </option>
                    @endforeach
                    </select>
                </div>

                
                <div class="input-group mt-2">
                   <input type="text" name="subject" placeholder="Faculty Subject *"  class="form-control">
                </div>
                                               
                <div class="input-group mt-2">
                   <input type="text" name="phone" placeholder="Phone *"  class="form-control">
                </div>

                 
                <div class="input-group mt-2">
                   <input type="text" name="age" placeholder="Faculty Age *"  class="form-control">
                </div>
                    <div class="input-group mt-2">
                       <textarea name="address" class="form-control" placeholder="Faculty Address *"></textarea>
                    </div>
   
                       
                    <div class="input-group mt-2">
                        <input type="submit" name="addfaculty" value="Add Faculty" class="btn btn-dark text-white w-25 mx-auto">
                    </div>
                    
                </form>
            </div>
        
         </div>   
    
         
    </div>
</section>

@endsection
