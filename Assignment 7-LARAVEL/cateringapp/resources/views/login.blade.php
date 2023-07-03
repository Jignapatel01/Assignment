@extends('home')
@section('title_name')
::Login page
@endsection
@section('content')

<section id="content">
        <div class="container mt-5">
        <h2 align="center" class="featured-hr"><span>Login Here</span></h2>        
        
        <div class="row">
            <div class="col-md-5 p-5  text-dark">
                <!-- <h6>Login here</h6> -->
                <hr class="border border-1 w-50 border-white">
                <img src="https://rurutek.com/jio/assets/img/login-animate.gif" style="width:100%; height:230px">
            </div>
            <div class="col-md-7 p-5">
                <h6>Login Form </h6>
                <hr class="border border-1 w-50 border-dark">
                <form method="post">
                    <div class="input-group mt-2">
                        <input type="text" name="email" placeholder="Email *" required class="form-control">
                    </div>
                    
                    <div class="input-group mt-2">
                        <input type="password" name="password" placeholder="Password *" required class="form-control">
                    </div>
        
                           
                    <div class="input-group mt-2">
                        <input type="submit" name="log" value="SignIn"  class="btn btn-dark text-white w-100">
                    </div>
                    <div class="input-group mt-2">
                        don't have an account ? &nbsp;<a href="/register">Register here</a>
                        </div>
                </form>
            </div>
        
         </div>   
    
         
    </div>
</section>

@endsection
