<script>
// jquery bvalidator validation
$(document).ready(function(){
  $("#frm1").bValidator();
})

<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Admin Add Course </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo $mainurl;?>dashboard">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Course</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card ms-5">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add Course</h4>
                    <br>
                    <form class="forms-sample" method="post" id="frm1">
                    <div class="form-group">
                        <label for="exampleInputUsername1">Course Category</label>
                        <select name="catnm" class="form-control" id="exampleInputUsername1" >
                            <option value=""> --select course--</option>
                            <?php
                               foreach($showcourse as $showcourse1)
                               {
                                ?>
                                <option value="<?php echo $showcourse1['coursecategory_id'];?>"><?php echo $showsubcat1['Category_Name'];?> </option>

                            <?php
                               }
                               ?>

                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Course Name</label>
                        <input type="text" name="subcatnm" class="form-control" id="exampleInputUsername1" placeholder="Category Name*">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Course Image</label>
                        <input type="text" name="subcatnm" class="form-control" id="exampleInputUsername1" placeholder="Category Name*">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Course Duration</label>
                        <input type="text" name="subcatnm" class="form-control" id="exampleInputUsername1" placeholder="Category Name*">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Price</label>
                        <input type="text" name="subcatnm" class="form-control" id="exampleInputUsername1" placeholder="Category Name*">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Offer Price</label>
                        <input type="text" name="subcatnm" class="form-control" id="exampleInputUsername1" placeholder="Category Name*">
                      </div>


                      <div class="form-group">
                        <label for="exampleInputEmail1">Course Description</label>
                        <input type="date" name="subdt" class="form-control" id="exampleInputEmail1" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <textarea  id="" cols="30" rows="5" name="subdesc" class="form-control" id="exampleInputPassword1"></textarea>
                      </div>
                      
                      <button type="submit" name="Addcourse" class="btn btn-gradient-primary me-2">Add Course</button>
                      <button class="btn btn-light">Reset</button>
                    </form>
                  </div>
                </div>
              </div>