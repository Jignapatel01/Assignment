<div class="container-fluid mt-5 p-3">
<div class="row">
 <div class="col-md-3 shadow p-3 mt-2">
    <h4 class="text-center p-2">Select Course</h4>
    <hr class="border border-1 w-50 mx-auto">
    <ul class="sidebar-link">
    <li style="list-style-type:none;padding:5px 15px;">
    <a href="<?php echo $mainurl;?>courselist" style=" text-decoration:none; font-size:25px;color:black">All Courses</a>
    </li>
    
    <?php
        foreach($shwcourse as $shwcourse1)
         {
        ?>
      <li style="list-style-type:none;padding:5px 15px;"><a href="<?php echo $mainurl;?>course-details?coursedetail=<?php echo $shwcourse1["coursecategory_id"]?>" style=" text-decoration:none; font-size:25px;color:black"><?php echo $shwcourse1["course"];?></a></li>
        <?php   
          }
        ?>
    </ul>
 </div>
 
 <div class="col-md-9 shadow p-4 mt-2">
  <h3 class="bg-dark text-white text-center mt-2 p-2">50% off in fees on Register Today's</h3> 
  <hr class="border border-1 w-50 mx-auto">
  <div class="row">
   
   <?php
  foreach($shwcourselist as $row)
  {
    ?>
  <div class="col-md-6 mt-5 p-3 shadow">
  
    <div class=row>
    <div class="col-md-4 mt-2 p-2">
    <img src="Admin/<?php echo $row["Photo"];?>" style="width:130%; height:110px">
    </div>
   
       <div class="col-md-6 ms-5 mt-2">
      <h4><?php echo $row["Coursename"];?></h4>
      <p><b>Duration :</b><?php echo $row["Duration"];?></p>
      <p><b>CoursePrice :</b> Rs.<del><?php echo $row["CoursePrice"];?></del><b>  
      <br>New Price: </b><?php echo $row["OfferPrice"];?></p>
      <P><b>Course Description:</b><details>
      <summary>Click to see more detail</summary>
      <?php echo $row["Description"];?></details></p>
      <button type="button" name="bookcourse"  class="btn btn-info btn-md text-white">Book Your Seat</button>


    </div>
  </div>
  </div>
  
  <?php
  }
  ?>
  
 </div>
</div>      

</div>
</div>