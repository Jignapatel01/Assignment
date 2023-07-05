<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body" style="overflow:auto;">
                    <h4 class="card-title">Manage Course</h4>
                    <p class="card-description"> <a href="<?php echo $mainurl;?>">Home </a>
                        <!-- <code>.table-bordered</code> -->
                    </p>
                    <table id="tblcourse" class="table table-bordered">
                      <thead>
                        <tr>
                          <th style="width:5%;"> list_id </th>
                          <th style="width:5%;"> coursecategory_Name </th>
                          <th style="width:15%;"> Course_Name </th>
                          <th style="width:15%;"> Photo </th>
                          <th style="width:20%;"> Duration</th>
                          <th style="width:20%;"> Course_price</th>
                          <th style="width:20%;"> Offer_Price</th>
                          <th style="width:20%;"> Description </th>
                          <th style="width:20%;"> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        foreach($joincourse as $row)
                        {
                            ?>
                        <tr>
                          <td> <?php echo $row["courselist_id"];?> </td>
                          <td> <?php echo $row["course"];?> </td>
                          <td> <?php echo $row["Coursename"];?> </td>
                          <td> <?php echo $row["Photo"];?> </td>
                          <td> <?php echo $row["Duration"];?> </td>
                          <td> <?php echo $row["CoursePrice"];?> </td>
                          <td> <?php echo $row["OfferPrice"];?> </td>
                          <td> <?php echo $row["Description"];?> </td>

                          <td><a href="<?php echo $mainurl;?>Admin-managecourse?deletcourselist_id=<?php echo $row["courselist_id"];?>" class= "btn btn-danger btn-md"><span class=" bi bi-trash"  ></span></a> |
                            <a href="<?php echo $mainurl;?>Admin-managecourse?editcourselist_id=<?php echo $row["courselist_id"];?>" class= "btn btn-info btn-md"><span class=" bi bi-pencil"  ></span></a></td>
                              </tr>
                       <?php
                        }
                        ?>       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <script>
  $(document).ready(function () 
{
  $('#tblcourse').DataTable();
});
</script>