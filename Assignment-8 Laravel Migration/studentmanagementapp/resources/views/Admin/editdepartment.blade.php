@extends('Admin.layout')
@section('title_name')
::Add Department 
@endsection
@section('dashboard-content')


<section id="content">
        <div class="container mt-5 p-5 " >
        <h2  style="margin-left:20%;" class="featured-hr"><span>Edit Department</span></h2>        
        
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


                <h6>Edit Department Here </h6>
                <hr class="border border-1 w-50 border-dark">
                @if(Session("success"))
                <div class="alert alert-info alert-dismissible fade show w-75" role="alert">
                    <strong> {{session('success')}}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <form method="post">
                @csrf
                
                <div class="input-group mt-2">
                   <input type="text" name="departmentname" value="{{ $editdata->departmentname}}" placeholder="Edit Department Name *"  class="form-control">
                 </div>
                
                  
                <div class="input-group mt-2">
                   <input type="submit" name="editdept" value="Update" class="btn btn-dark text-white w-25 mx-auto">
                </div>
                    
                </form>
            </div>
        
         </div>   
    
         
    </div>
</section>

@endsection
