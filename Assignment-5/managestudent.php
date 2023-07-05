<div class="container-fluid p-5"> 
<div class="row">
<div class="col-md-4 shadow">
  <h4 align="center"class="p-4 mt-5" > Student management System</h4>
  <img src="<?php echo $baseurl;?>images/student.png" width="100%" height="300px" >
</div>
<div class="col-md-8 shadow">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-left:85%;" >
    Add data
  </button>

<!-- student data table -->
   <div class="col-lg-12 grid-margin stretch-card " style="margin-top:2%;">
    <div class="card">
      <div class="card-body" style="overflow:auto;">
        <h4 class="card-title">Manage All student</h4>
      

        <table id="stdtbl" class="table table-striped" style="width:100%">
          <thead>
            <tr>
              <th> FirstName </th>
              <th> LastName </th>
              <th> Email </th>
              <th> Photo </th>
              <th> Gender </th>
              <th> Hobby </th>
              <th> Phone </th>
              <th> Course </th>
              <th> State </th>
              <th> City </th>
              <th> Registered Date </th>
              <th> Action </th>
              
            </tr>
          </thead>
          <tbody>
            <?php
           foreach($join1 as $row)
            {
                ?>
            <tr>
              
              <td> <?php echo $row["Firstname"];?></td>
              <td> <?php echo $row["Lastname"];?> </td>
              <td> <?php echo $row["Email"];?> </td>
              <td> <img src=" <?php echo $row["Photo"];?>" width="80px" height="100px"> </td>
              <td> <?php echo $row["Gender"];?> </td>
              <td> <?php echo $row["Hobby"];?> </td>
              <td> <?php echo $row["Phone"];?> </td>
              <td> <?php echo $row["coursename"];?> </td>
              <td> <?php echo $row["statename"];?> </td>
              <td> <?php echo $row["cityname"];?> </td>
           <td> <?php echo $row["Registered_date_time"];?> </td>
              <td><a href="<?php echo $row['course_id']?>" class="btn btn-sm btn-info">
              <i class="bi bi-pencil"></i></a>|<a href="<?php echo $row['course_id'];?>" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a></td>
            </tr>
           <?php
            }
            ?>       
          </tbody>
         
        </table>
      </div>
    </div>
  </div>
</div>
  </div>
          </div>
<script>
  $(document).ready(function () 
{
  $('#stdtbl').DataTable();
});
</script>