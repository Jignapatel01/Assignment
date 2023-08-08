
<?php $__env->startSection('title_name'); ?>
::contact-us
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<section id="content">
        <div class="container mt-5">
        <h2 align="center" class="featured-hr"><span>Contact Us</span></h2>        
        
        <div class="row">
            <div class="col-md-5 p-5  text-dark">
                
                
            </div>
            <div class="col-md-7 p-5">
            <?php if($errors->any()): ?>
        <div class="alert alert-success">
            <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <?php echo e($err); ?>

            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <?php endif; ?>


                <h6>Contact Form </h6>
                <hr class="border border-1 w-50 border-dark">
                <?php if(Session("success")): ?>
                <div class="alert alert-info alert-dismissible fade show w-75" role="alert">
                    <strong> <?php echo e(session('success')); ?></strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php endif; ?>

                <form method="post">
                <?php echo csrf_field(); ?>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PRACTICE\studentmanagementapp\resources\views/contactus.blade.php ENDPATH**/ ?>