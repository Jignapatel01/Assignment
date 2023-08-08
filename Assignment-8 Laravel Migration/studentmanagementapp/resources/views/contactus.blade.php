@extends('home')
@section('title_name')
::contact-us
@endsection
@section('content')

<section id="content">
        <div class="container mt-5">
        <h2 align="center" class="featured-hr"><span>Contact Us</span></h2>        
        
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


                <h6>Contact Form </h6>
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
                   <input type="text" name="firstname" placeholder="FirstName *"  class="form-control">
                 </div>
                <div class="input-group mt-2">
                   <input type="text" name="lastname" placeholder="LastName *"  class="form-control">
                </div>

                <div class="input-group mt-2">
                   <input type="text" name="email" placeholder="Email *"  class="form-control">
                </div>
                                               
                <div class="input-group mt-2">
                   <input type="text" name="phone" placeholder="Phone *"  class="form-control">
                </div>

                    <div class="input-group mt-2">
                       <textarea name="message" class="form-control" placeholder="Message*"></textarea>
                    </div>
   
                       
                    <div class="input-group mt-2">
                        <input type="submit" name="send" value="Send" class="btn btn-dark text-white w-25 mx-auto">
                    </div>
                    
                </form>
            </div>
        
         </div>   
    
         
    </div>
</section>

@endsection
