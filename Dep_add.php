<?php
require_once("db.php");
require_once("operation.php");
?>
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
                    <h1 class="py-4">Department</h1>
                    </div>
                    <div class="row">
                    <div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Namw</span>
  </div>
  <form action="" method="post">
  <input type="text" class="form-control" name="dep_name" placeholder="Department Name" aria-label="Departmentname" aria-describedby="basic-addon1">
<button type="submit" name="create" class="btn btn-success">Add</button>
</form>
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