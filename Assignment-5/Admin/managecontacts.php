<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Manage All contacts</h4>
                    <p class="card-description"> <a href="<?php echo $mainurl;?>">Home </a>
                        <!-- <code>.table-bordered</code> -->
                    </p>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th style="width:5%;"> Id </th>
                          <th style="width:15%;"> Name </th>
                          <th style="width:20%;"> Email </th>
                          <th style="width:20%;"> Enquiry </th>
                          <th style="width:5%;"> Phone </th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        foreach($shwdata as $row)
                        {
                            ?>
                        <tr>
                          <td> <?php echo $row["Id"];?> </td>
                          <td> <?php echo $row["Name"];?> </td>
                          <td> <?php echo $row["Email"];?> </td>
                          <td> <?php echo $row["Enquiry"];?> </td>
                          <td> <?php echo $row["Phone"];?> </td>
                          <td><a href="<?php echo $mainurl;?>Admin-managecontact?deletcontactid=<?php echo $row["Id"];?>" class="btn btn-sm btn-danger"><i class="bi bi-trash"></a></td>
                              </tr>
                       <?php
                        }
                        ?>       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>