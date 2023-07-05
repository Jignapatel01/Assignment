
<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title ">Manage All Customer</h4>
                    <p class="card-description"> <a href="<?php echo $mainurl;?>dashboard">Home </a>
                        <!-- <code>.table-bordered</code> -->
                    </p>
                    <table class="table table-bordered" >
                      <thead>
                        <tr>
                          <th style="width:5%;"> s_id </th>
                          <th style="width:15%;"> Firstname </th>
                          <th style="width:15%;"> Lastname </th>
                          <th style="width:20%;"> Email</th>
                          <th style="width:20%;"> Photo</th>
                          <th style="width:20%;"> Gender</th>
                          <th style="width:20%;"> Hobby</th>
                          <th style="width:20%;"> Phone</th>
                          <th style="width:20%;"> Course</th>
                          <th style="width:20%;"> State</th>
                          <th style="width:20%;"> City</th>
                          <th style="width:20%;"> registered_date_time </th>
                                                    
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        foreach($prof as $row)
                        {
                            ?>
                        <tr>
                          <td> <?php echo $row["s_id"];?> </td>
                          <td> <?php echo $row["Firstname"];?> </td>
                          <td> <?php echo $row["Lastname"];?> </td>
                          <td> <?php echo $row["Email"];?> </td>
                          <td><img src="../<?php echo $row["Photo"];?>" width="110px" height="80px"> </td>
                          <td> <?php echo $row["Gender"];?> </td>
                          <td> <?php echo $row["Hobby"];?> </td>
                          <td> <?php echo $row["Phone"];?> </td>
                          <td> <?php echo $row["coursename"];?> </td>
                          <td> <?php echo $row["statename"];?> </td>
                          <td> <?php echo $row["cityname"];?> </td>
                          <td> <?php echo $row["Registered_date_time"];?> </td>
                          
                          <td><a href="<?php echo $mainurl;?>Admin-managecustomer?delets_id=<?php echo $row["s_id"];?>" class= "btn btn-danger btn-md"><span class=" bi bi-trash"  ></span></a> |
                            <a href="<?php echo $mainurl;?>Admin-managecustomer?edits_id=<?php echo $row["s_id"];?>" class= "btn btn-info btn-md"><span class=" bi bi-pencil"  ></span></a></td>
                              </tr>
                       <?php
                        }
                        ?>       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>