<?php
include ("includes/connection.php");

if(isset($_POST['submit'])){
	

$vender_name = $_REQUEST['vender_name'];
$user_name = $_REQUEST['user_name'];
$password = $_REQUEST['password'];
$Id = $_REQUEST['Id'];

$update="update vender set vender_name='$vender_name', user_name='$user_name',  password='$password' where Id='$Id'";

$sql = mysqli_query($con, $update);

if($sql)
{
	echo "data updated";
	
    header("Location:create_vender.php");
}
else
{
	echo "error";
}
}


$Id= $_REQUEST['Id'];

$sql="select * from vender where Id='$Id'";
$select = mysqli_query($con, $sql);
$row=mysqli_fetch_array($select);



 

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
                      
                    </div>
                    <div class="card-body">
                    <form  method="post">
<input type="text" name="vender_name" class="form-control" value="<?php echo $row['vender_name'];?> " placeholder="Enter name"/><br>
<input type="text" name="user_name" class="form-control" value="<?php echo $row['user_name'];?>" placeholder="Enter email"/><br>
<input type="password" name="password" class="form-control" value="<?php echo $row['password'];?>" placeholder="Enter password"/><br>
<input type="hidden" name="Id" value="<?php echo $Id;?>" placeholder="Enter Id"/>

<button type="submit" name="submit" class="btn btn-primary">submit</button>
</form>
                  

                           
                             
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


<!-- <?php
include ("connection.php");

// $Id= $_REQUEST['Id'];

// $sql="select * from vender where Id='$Id'";
// $select = mysqli_query($con, $sql);
// $row=mysqli_fetch_array($select);
?>
<html>
<body>
<form action="create_vender.php" method="post">
<input type="text" name="vender_name" value="<?php echo $row['vender_name'];?> " placeholder="Enter name"/><br>
<input type="text" name="user_name" value="<?php echo $row['user_name'];?>" placeholder="Enter email"/><br>
<input type="password" name="password" value="<?php echo $row['password'];?>" placeholder="Enter password"/><br>
<input type="hidden" name="Id" value="<?php echo $Id;?>" placeholder="Enter Id"/>

<button type="submit">submit</button>
</form>
</body>
</html> -->

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
