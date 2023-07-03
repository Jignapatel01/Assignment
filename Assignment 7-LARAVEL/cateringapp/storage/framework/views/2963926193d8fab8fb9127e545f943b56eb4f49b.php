
<?php $__env->startSection('title_name'); ?>
::Register page
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<section id="content">
        <div class="container mt-5">
        <h2 align="center" class="featured-hr"><span>SignUp Here</span></h2>        
        
        <div class="row">
            <div class="col-md-5 p-5  text-dark">
                <h6>Create Account here</h6>
                <hr class="border border-1 w-50 border-white">
                <img src="https://media.tenor.com/D68fgAJz0tcAAAAM/ekrut-start-up.gif" style="width:100%; height:220px">
            </div>
            <div class="col-md-7 p-5">
                <h6>Register Form </h6>
                <hr class="border border-1 w-50 border-dark">
                <form method="post">
                    <div class="input-group mt-2">
                        <input type="text" name="email" placeholder="Email *" required class="form-control">
                    </div>
                    
                    <div class="input-group mt-2">
                        <input type="password" name="password" placeholder="Password *" required class="form-control">
                    </div>
        
                    <div class="input-group mt-2">
                        <input type="password" name="cpassword" placeholder="Confirm Password *" required class="form-control">
                    </div>
        
                    <div class="input-group mt-2">
                        <input type="text" name="phone" placeholder="Phone *" required class="form-control">
                    </div>

                    <div class="input-group mt-2">
                        <input type="file" name="img"  required class="form-control">
                    </div>
        
        
               
        
                    <div class="input-group mt-2">
                        <input type="submit" name="register" value="SignUp" placeholder="Email *" class="btn btn-dark text-white w-100">
                    </div>
                    <div class="input-group mt-2">
                        Already have an account ? &nbsp;<a href="/login" >Login here</a>
                        </div>
                </form>
            </div>
        
         </div>   
    
         
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PRACTICE\cateringapp\resources\views/register.blade.php ENDPATH**/ ?>