<script>
// jquery bvalidator validation
$(document).ready(function(){
  $("#frm1").bValidator();
})
</script>

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
                    <form class="forms-sample" method="post" id="frm1" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputUsername1">Course Category</label>
                        <select name="coursecat" class="form-control" id="exampleInputUsername1" data-bvalidator="required" >
                            <option value=""> --select course--</option>
                            <?php
                               foreach($shwcourse as $shwcourse1)
                               {
                                ?>
                                <option value="<?php echo $shwcourse1['coursecategory_id'];?>"><?php echo $shwcourse1['course'];?> </option>

                            <?php
                               }
                               ?>

                      </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Course Name</label>
                        <input type="text" name="cnm" class="form-control" id="exampleInputUsername1" placeholder="Category Name*" data-bvalidator="required">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Course Image</label>
                        <input type="file" name="cimg" class="form-control" id="exampleInputUsername1" placeholder="Category Name*" data-bvalidator="required">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Course Duration</label>
                        <input type="text" name="duration" class="form-control" id="exampleInputUsername1" placeholder="Category Name*" data-bvalidator="required">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Price</label>
                        <input type="text" name="cprice" class="form-control" id="exampleInputUsername1" placeholder="Category Name*" data-bvalidator="required">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Offer Price</label>
                        <input type="text" name="oprice" class="form-control" id="exampleInputUsername1" placeholder="Category Name*" data-bvalidator="required">
                      </div>


                      <div class="form-group">
                        <label for="exampleInputEmail1">Course Description</label>
                        <input type="text" name="cdesc" class="form-control" id="exampleInputEmail1" data-bvalidator="required">
                      </div>

                      <button type="submit" name="Addcourse" class="btn btn-gradient-primary me-2">Add Course</button>
                      <button type="reset" class="btn btn-light">Reset</button>
                    </form>
                  </div>
                </div>
              </div>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>