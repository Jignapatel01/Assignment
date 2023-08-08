
<?php $__env->startSection('title_name'); ?>
::Dashboard 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('dashboard-content'); ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/admin-login/admin-dashboard">Home</a></li>
      <li class="breadcrumb-item active">ManageFaculty</li>
    </ol>
  </nav>
</div><!-- End Page Title -->


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Manage Faculty</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Faculties</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
    

            <?php if(session('del')): ?>
           
            <div class="alert alert-warning alert-dismissible fade show w-75" role="alert">
                <strong> <?php echo e(session('del')); ?></strong>
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif; ?>

            <?php if(session('success')): ?>
           
           <div class="alert alert-warning alert-dismissible fade show w-75" role="alert">
               <strong> <?php echo e(session('success')); ?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
           </div>
           <?php endif; ?>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>

                        <th>Id</th>    
                        <th>Name</th>
                        <th>Photo</th>
                        <th>College</th>
                        <th>Department</th>
                        <th>Subject</th>
                        <th>Phone</th>
                        <th>Age</th>
                        <th>Address</th>
                        <th>send msg</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        
                    <th>Id</th>    
                        <th>Name</th>
                        <th>Photo</th>
                        <th>College</th>
                        <th>Department</th>
                        <th>Subject</th>
                        <th>Phone</th>
                        <th>Age</th>
                        <th>Address</th>
                        <th>send msg</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <tr>
                     <td><?php echo e($row->id); ?></td>
                     <td><?php echo e($row->name); ?></td>
                     <td><img src="<?php echo e(asset('assets/student/images/'.$row->photo)); ?>"/></td>
                     <td><?php echo e($row->collegename); ?></td>
                    <td><?php echo e($row->departmentname); ?></td>
                    <td><?php echo e($row->subject); ?></td>
                    <td><?php echo e($row->phone); ?></td>
                    <td><?php echo e($row->age); ?></td>
                    <td><?php echo e($row->address); ?></td>
                    <td><a href="https://api.whatsapp.com/send?phone=+91<?php echo e($row->phone); ?>&text=hi" class="btn btn-success btn-sm"><i class="bi bi-whatsapp"></i></a></td>
                    <td><a href="<?php echo e(url('/admin-login/editfaculty/'.$row->id)); ?>" class="btn btn-sm btn-info"><i class="bi bi-pencil"></i></a></td>
                    <td><a href="<?php echo e(url('/admin-login/managefaculty/'.$row->id)); ?>" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a></td>
                    
                    </td>
                    </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PRACTICE\studentmanagementapp\resources\views/Admin/managefaculty.blade.php ENDPATH**/ ?>