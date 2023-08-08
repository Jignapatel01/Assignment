@extends('admin.layout')
@section('title_name')
::Edit college
@endsection
@section('dashboard-content')
<!-- Begin Page Content -->
<div class="container" style='margin-left:25%; margin-top:6%'>
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Edit College here</h1>


<!-- DataTales Example -->
<div class="card shadow mb-4 mt-5 ">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit here</h6>
    </div>
    <div class="card-body ">
         <!-- validation error message -->

         @if($errors->any())
         <div class="alert alert-danger">
         @foreach($errors->all() as $err) 
         <ul>
             <li>{{$err}}</li>
          </ul>
          @endforeach
         </div>
         @endif
         @if(Session("success"))
         <div class="alert alert-success">
         <span class="text-dark">{{session("success")}}</span>
         </div>
         @endif
    <form method="post">
        @csrf
        <div class="form-group mt-3">
         <input type="text" name="collegename"  value="{{$editdata->collegename}}" placeholder="Enter College name *" class="form-control">
        </div>    
    
     
        <div class="form-group mt-3">
            <input type="submit" name="editcollege" value="Update" class="btn btn-lg btn-primary">
        </div>    
    </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
@endsection