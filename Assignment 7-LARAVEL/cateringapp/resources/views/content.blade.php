@extends('home')
@section('title_name')
::Home page
@endsection
@section('content')

<!-- slider -->
<div class="container mt-5">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('assets/student/images/banner1.png')}}" class="d-block w-100" alt="..." width="200px" height="300px">
    </div>
    <div class="carousel-item">
    <img src="{{asset('assets/student/images/banner2.jpg')}}" class="d-block w-100" alt="..." width="200px" height="300px">
    </div>
    <div class="carousel-item">
    <img src="{{asset('assets/student/images/banner3.jpg')}}" class="d-block w-100" alt="..." width="200px" height="300px">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

<!-- content -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3 ">
            <img src="{{asset('assets/student/images/img1.png')}}" width="250px" height="380px">         
        </div>
        <div class="col-md-8 ms-5">
            <h4 class="bg-dark text-white"> Student Attendence Management System </h4>
            <button type="button" class="btn btn-sm bg-dark text-white" data-bs-toggle="modal" data-bs-target="#addstud">Add Students</button>
            <button type="button" class="btn btn-sm bg-danger text-white float-end">Export Data</button>

           <table class="table mt-5">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                  <th scope="col">Handle</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td><a href="#"><i class="bi bi-trash btn-sm bg-danger text-white"></i>|<i class="bi bi-pencil btn-sm bg-info"></i></a></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                  <td><a href="#"><i class="bi bi-trash btn-sm bg-danger text-white"></i>|<i class="bi bi-pencil btn-sm bg-info"></i></a></td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td colspan="2">Larry the Bird</td>
                  <td>@twitter</td>
                  <td><a href="#"><i class="bi bi-trash btn-sm bg-danger text-white"></i>|<i class="bi bi-pencil btn-sm bg-info"></i></a></td>
                </tr>
  </tbody>
</table>
       </div>
     </div>
</div>   
</div>

<!-- Modal -->
<div class="modal fade" id="addstud" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection

