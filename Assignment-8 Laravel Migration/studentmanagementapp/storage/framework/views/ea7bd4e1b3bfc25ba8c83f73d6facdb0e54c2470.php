
<?php $__env->startSection('title_name'); ?>
::Add Department 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('dashboard-content'); ?>


<section id="content">
        <div class="container mt-5 p-5 " >
        <h2  style="margin-left:20%;" class="featured-hr"><span>Add Department</span></h2>        
        
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


                <h6>Add Department Here </h6>
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
                   <input type="text" name="departmentname" placeholder="Department Name *"  class="form-control">
                 </div>
                
                  
                <div class="input-group mt-2">
                   <input type="submit" name="adddept" value="Add Department" class="btn btn-dark text-white w-25 mx-auto">
                </div>
                    
                </form>
            </div>
        
         </div>   
    
         
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PRACTICE\studentmanagementapp\resources\views/Admin/Adddepartment.blade.php ENDPATH**/ ?>