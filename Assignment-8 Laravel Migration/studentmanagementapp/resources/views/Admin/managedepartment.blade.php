@extends('Admin.layout')
@section('title_name')
::Manage College 
@endsection
@section('dashboard-content')

<main id="main" class="main">

<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/admin-login/admin-dashboard">Home</a></li>
      <li class="breadcrumb-item active">Manage Department</li>
    </ol>
  </nav>
</div><!-- End Page Title -->


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Manage Department</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Colleges</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
    

            @if(session('del'))
            <!-- <div class="alert alert-success">
             <span class="text-dark">{{session('del')}}</span>   
            </div> -->
            <div class="alert alert-warning alert-dismissible fade show w-75" role="alert">
            <strong> {{session('del')}}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
            @endif
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>

                        <th>Id</th>    
                        <th>DepartmentName</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        
                        <th>Id</th>    
                        <th>DepartmentName</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($data as $row)
                     <tr>
                     <td>{{$row["id"]}}</td>
                     <td>{{$row["departmentname"]}}</td>
                    <td><a href="https://api.whatsapp.com/send?phone=+91{{$row['phone']}}&text=hi" class="btn btn-success btn-sm"><i class="bi bi-whatsapp"></i></a>|
                        <a href="{{ url('/admin-login/managedepartment/'.$row->id) }}" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>|
                    
                        <a href="{{ url('/admin-login/editdepartment/'.$row->id) }}" class="btn btn-sm btn-info"><i class="bi bi-pencil"></i></a>
                    
                    
                    </td>
                    </tr>
                     @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
</main>
@endsection