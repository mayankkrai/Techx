 <!--  PAPER WRAP -->
 <div class="wrap-fluid">
        <div class="container-fluid paper-wrap bevel tlbr">
           <!-- center page-->
                 <div class="content-wrap">
                <div class="row text-center text-dark">
                    <h1 class="heading">Department</h1>
                    </div>
                    <form action="" method="post">
                      <button type="submit" name="refresh" class="btn btn-primary">Refresh</button>
                    </form>
                    <div class="d-flex table-data text-center">
                    <table class="table table-striped table-dark">
                    <thead class="thead-dark">
                    <tr>
                    <th class="text-center">Department</th>
                    <th class="text-center">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <?php
                  if(isset($_POST['refresh'])){
                    $result=getData();
                    if($result){
                      while($row=mysqli_fetch_assoc($result)){?>
                      <tr>
                        <td>
                          <?php echo $row['dep_name'];?>
                        </td>
                        <td><form action="" method="post"><button type="submit" value="$row['id']"<?php $id=$row['id'];?> name="delete">Delete</button></form></td>
                      </tr>
                      <?php
                    }
                  }
                }
                  ?>
                    </tbody>
                    </table>
                    </div>

                        
                        
                        
                        
                    </div>
             
                <!-- /END OF CONTENT -->
        </div>
    </div>
    <!--  END OF PAPER WRAP -->