<?php include("includes/connection.php");

$msg='';
 if(isset($_POST['create_vender']))
 {
$vender_name=$_POST['vender_name'];
$user_name=$_POST['user_name'];
$password=$_POST['password'];
 


$sql = "insert into vender (vender_name,user_name , password)values('$vender_name', '$user_name', '$password')";
$insert= mysqli_query($con, $sql);

if($insert){
	 
	$msg="<div style='color:green'> <h6 style='color:white'>data insertaed</h6></div>";
}
else
{
	$msg="<div style='color:red'><h6 style='color:white'>error insertaed</h6></div>";
	
}
}


if(isset($_GET['delete'])){
	$Id=$_GET['delete'];

 
 $del="Delete from vender where Id='$Id'";
 $delete=mysqli_query($con, $del);
 if($delete)
 {
	 echo "data deleted";
	 header("Location:create_vender.php");
 }
 else
 {
	 echo "error";
 }

}

include ('includes/header.php');
?>




<div class="hor-content main-content" style="margin-bottom: 75px;">
    <div class="container">
        <!--Page header-->
        <div class="page-header">
            <div class="page-leftheader">
                <!--<h4 class="page-title mb-0 text-primary">Dashboard</h4>-->
            </div>
        </div>
        <!--End Page header-->

        <!--Row-->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header" style="display: block; padding: 1.5rem 1.5rem;">
                        <div style="float: left;">
                            <h3 class="card-title">All Venders</h3>
                        </div>
                        <a class="btn btn-primary" data-bs-target="#modaldemo3" data-bs-toggle="modal" href="" style="float: right;"><i class="fa fa-plus-square me-2 fs-14"></i>Create Vender </a>
                    </div>
                    <div class="card-body">

                  <?php  echo $msg;
                  ?>
                        <div class="table-responsive">
                            <table class="table table-bordered card-table table-vcenter text-nowrap" id="datatable">
                                <thead>
                                    <tr>
                                        <th> Id</th>
                                        <th>Name</th>
                                        <th>email </th>
                                        
                                        <th>Actions</th>
                                        
   
                                             </tr>
                                </thead>
                                <tbody>   
                                    
                                                         
                                <?php        
                                  
                                  $sql = "Select * from vender ";
                                  $select = mysqli_query($con, $sql);
                                  
                                  if(mysqli_num_rows($select) > 1)
                                  {
                                     
                                      while ($row = mysqli_fetch_array($select))
                                      {
                                        
                                      ?>

                                      <tr>
                                        <td><?php echo $row['Id']; ?></td>
                                        <td><?php echo $row['vender_name']; ?></td>
                                        <td><?php echo $row['user_name']; ?></td>
                                        
                                        <td>
                                        
                                          <a href="edit_vender.php?update=<?php echo $row['Id']; ?>"><i class="fa fa-pencil"></i></a>
                                           <a href="create_vender.php?delete=<?php echo $row['Id'];?>"><i class="fa fa-trash"></i></a>
                                        </td> 
                                     
                                      </tr>

                                      <?php
                                      } 
                                  }
                                  else
                                  {
                                  ?>
                                  <tr colspan="2">No record found</tr>
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
</div>
<!-- End app-content-->




<div class="modal fade" id="modaldemo3">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Create Vender</h6>
                <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form class="form-horizontal" name="contactForm" method="post"  action="create_vender.php" onsubmit="return validateForm()">
                        <div class="row">
                     
                           
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Vender Name <span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="vender_name" placeholder="Enter Vender Name" />
                                    <div class="error" id="descriptionsErr" style="color: red;"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">User Name <span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="user_name" placeholder="Enter User Name" />
                                    <div class="error" id="descriptionsErr" style="color: red;"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Password <span class="text-red">*</span></label>
                                    <input type="password" class="form-control" name="password" placeholder="Enter Password" />
                                    <div class="error" id="descriptionsErr" style="color: red;"></div>
                                </div>
                            </div>
                            

                           
                            <div class="col-lg-12 col-md-12 text-right">
                                <!--<input type="submit" href='test_all.php' class="btn btn-primary" value="Create Test" />-->
                                <input id="number_rows1" name="number_rows1" type="hidden" value="1" />
                                <button type="submit" class="btn btn-success" name="create_vender">Create</button>
                                <button type="reset" class="btn btn-danger"><a href="test_all.php" style="color: white;">Cancel</a></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="modaldemo4">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Create Vender</h6>
                <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form class="form-horizontal" name="contactForm" method="edit.post" onsubmit="return validateForm()">
                        <div class="row">
                     
                           
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Vender Name <span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="test_short_description" placeholder="Enter Vender Name" />
                                    <div class="error" id="descriptionsErr" style="color: red;"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">User Name <span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="test_short_description" placeholder="Enter User Name" />
                                    <div class="error" id="descriptionsErr" style="color: red;"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Password <span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="test_short_description" placeholder="Enter Password" />
                                    <div class="error" id="descriptionsErr" style="color: red;"></div>
                                </div>
                            </div>
                            

                           
                            <div class="col-lg-12 col-md-12 text-right">
                                <!--<input type="submit" href='test_all.php' class="btn btn-primary" value="Create Test" />-->
                                <input id="number_rows1" name="number_rows1" type="hidden" value="1" />
                                <button type="submit" class="btn btn-success" name="create_test_type">Create</button>
                                <button type="reset" class="btn btn-danger"><a href="test_all.php" style="color: white;">Cancel</a></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include ('includes/footer.php');?>
