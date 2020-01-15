 <!--  PAPER WRAP -->
 <div class="wrap-fluid">
        <div class="container-fluid paper-wrap bevel tlbr">
            <div class="content-wrap">
                <div class="row">
                    <div class="col-sm-6" style="display: none ">
                        <div class="chart-wrap" >
                            <div class="chart-dash">
                                
                                <div id="placeholder" style="width:100%;height:200px;"></div>
                            </div>
                        </div>  
                    </div>

                <!-- center page-->
                 <div class="content-wrap">
                <div class="row text-center">
                    <h1>Department</h1>
                    </div>
                    <form action="" method="post">
                      <button type="submit" name="refresh" class="btn btn-primary">Refresh</button>
                    </form>
                    <div class="d-flex table-data text-center">
                    <table class="table table-striped table-dark">
                    <thead class="thead-dark">
                    <tr>
                    <th class="text-center">Department</th>
                    </tr>
                    </thead>
                    <tbody>
                  <?php
                  if(isset($_POST['refresh'])){
                    $result=getData();
                    if($result){
                      while($row=mysqli_fetch_assoc($result)){?>
                      <tr>
                        <td>
                          <?php echo $row['dep_name'];?>
                        </td>
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
            </div>

                </div>
                   
                   

            </div>                          
        </div>
    </div>
             
                <!-- /END OF CONTENT -->
                </div>
        </div>
    </div>
    <!--  END OF PAPER WRAP -->