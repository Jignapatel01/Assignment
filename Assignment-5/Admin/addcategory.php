<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Admin Add Category </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo $mainurl;?>dashboard">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Category</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card ms-5">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add Category</h4>
                    <br>
                    <form class="forms-sample" method="post">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Category Name</label>
                        <input type="text" name="catnm" class="form-control" id="exampleInputUsername1" placeholder="Category Name*">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Added Date</label>
                        <input type="date" name="adddt" class="form-control" id="exampleInputEmail1" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <textarea  id="" cols="30" rows="5" name="desc" class="form-control" id="exampleInputPassword1"></textarea>
                      </div>
                      
                      <button type="submit" name="Addcat" class="btn btn-gradient-primary me-2">Add Category</button>
                      <button class="btn btn-light">Reset</button>
                    </form>
                  </div>
                </div>
              </div>