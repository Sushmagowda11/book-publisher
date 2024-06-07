<?php include ('includes/header.php');?>

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
                            <h3 class="card-title">All Books</h3>
                        </div>
                        <a class="btn btn-primary" data-bs-target="#modaldemo3" data-bs-toggle="modal" href="" style="float: right;"><i class="fa fa-plus-square me-2 fs-14"></i> Upload Book </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered card-table table-vcenter text-nowrap" id="datatable">
                                <thead>
                                    <tr>
                                        <th>Book Id</th>
                                        <th scope="row">Book Image</th>
                                        <th>Book Name</th>
                                        <th>Author Name</th>
                                        <th>Purchage Link</th>
                                        <th>Price</th>
                                        
                                        <th>Quantity</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a class="font-weight-normal1" href="">TESTCAT0068</a>
                                        </td>
                                        <td style="text-transform: uppercase;"><img src="assets\images\book.jpg" style="width: 50px;"></td>

                                        <td style="text-transform: uppercase;">SECRET</td>
                                        <td>BYRNE RHONDA</td>
                                        <td><a href=""></a></td>
                                        <td>₹836</td>
                                        <td>250</td>
                                        <!-- <td>
                                            <a href="javascript:act(68)"><span class="badge bg-success-light border-success fs-11">Active </span></a>
                                        </td> -->
                                        <!--<td>Maths Section</td>-->
                                        <td>
                                            <span style="margin-right: 20px;">
                                                <a data-bs-target="#modaldemo4" data-bs-toggle="modal" href="" title="Edit Test"><i class="fa fa-pencil" style="font-size: 22px;"></i></a>
                                            </span>
                                            <a href="javascript:delete_id(68)" title="Delete Test"> <i class="fa fa-trash-o" style="font-size: 22px;"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-weight-normal1" href="">TESTCAT0068</a>
                                        </td>
                                        <td style="text-transform: uppercase;"><img src="assets\images\book.jpg" style="width: 50px;"></td>

                                        <td style="text-transform: uppercase;">SECRET</td>
                                        <td>BYRNE RHONDA</td>
                                        <td><a href=""></a></td>
                                        <td>₹836</td>
                                        <td>250</td>
                                        <!-- <td>
                                            <a href="javascript:act(68)"><span class="badge bg-success-light border-success fs-11">Active </span></a>
                                        </td> -->
                                        <!--<td>Maths Section</td>-->
                                        <td>
                                            <span style="margin-right: 20px;">
                                                <a data-bs-target="#modaldemo4" data-bs-toggle="modal" href="" title="Edit Test"><i class="fa fa-pencil" style="font-size: 22px;"></i></a>
                                            </span>
                                            <a href="javascript:delete_id(68)" title="Delete Test"> <i class="fa fa-trash-o" style="font-size: 22px;"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-weight-normal1" href="">TESTCAT0068</a>
                                        </td>
                                        <td style="text-transform: uppercase;"><img src="assets\images\book.jpg" style="width: 50px;"></td>

                                        <td style="text-transform: uppercase;">SECRET</td>
                                        <td>BYRNE RHONDA</td>
                                        <td><a href=""></a></td>
                                        <td>₹836</td>
                                        <td>250</td>
                                        <!-- <td>
                                            <a href="javascript:act(68)"><span class="badge bg-success-light border-success fs-11">Active </span></a>
                                        </td> -->
                                        <!--<td>Maths Section</td>-->
                                        <td>
                                            <span style="margin-right: 20px;">
                                                <a data-bs-target="#modaldemo4" data-bs-toggle="modal" href="" title="Edit Test"><i class="fa fa-pencil" style="font-size: 22px;"></i></a>
                                            </span>
                                            <a href="javascript:delete_id(68)" title="Delete Test"> <i class="fa fa-trash-o" style="font-size: 22px;"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-weight-normal1" href="">TESTCAT0068</a>
                                        </td>
                                        <td style="text-transform: uppercase;"><img src="assets\images\book.jpg" style="width: 50px;"></td>

                                        <td style="text-transform: uppercase;">SECRET</td>
                                        <td>BYRNE RHONDA</td>
                                        <td><a href=""></a></td>
                                        <td>₹836</td>
                                        <td>250</td>
                                        <!-- <td>
                                            <a href="javascript:act(68)"><span class="badge bg-success-light border-success fs-11">Active </span></a>
                                        </td> -->
                                        <!--<td>Maths Section</td>-->
                                        <td>
                                            <span style="margin-right: 20px;">
                                                <a data-bs-target="#modaldemo4" data-bs-toggle="modal" href="" title="Edit Test"><i class="fa fa-pencil" style="font-size: 22px;"></i></a>
                                            </span>
                                            <a href="javascript:delete_id(68)" title="Delete Test"> <i class="fa fa-trash-o" style="font-size: 22px;"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-weight-normal1" href="">TESTCAT0068</a>
                                        </td>
                                        <td style="text-transform: uppercase;"><img src="assets\images\book.jpg" style="width: 50px;"></td>

                                        <td style="text-transform: uppercase;">SECRET</td>
                                        <td>BYRNE RHONDA</td>
                                        <td><a href=""></a></td>
                                        <td>₹836</td>
                                        <td>250</td>
                                        <!-- <td>
                                            <a href="javascript:act(68)"><span class="badge bg-success-light border-success fs-11">Active </span></a>
                                        </td> -->
                                        <!--<td>Maths Section</td>-->
                                        <td>
                                            <span style="margin-right: 20px;">
                                                <a data-bs-target="#modaldemo4" data-bs-toggle="modal" href="" title="Edit Test"><i class="fa fa-pencil" style="font-size: 22px;"></i></a>
                                            </span>
                                            <a href="javascript:delete_id(68)" title="Delete Test"> <i class="fa fa-trash-o" style="font-size: 22px;"></i></a>
                                        </td>
                                    </tr>
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
                <h6 class="modal-title">Upload Book</h6>
                <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form class="form-horizontal" name="contactForm" method="post" onsubmit="return validateForm()">
                        <div class="row">
                     
                           
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Book Name <span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="test_short_description" placeholder="Enter Book Name" />
                                    <div class="error" id="descriptionsErr" style="color: red;"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Author Name <span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="test_short_description" placeholder="Enter Author Name" />
                                    <div class="error" id="descriptionsErr" style="color: red;"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Purchage Link <span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="test_short_description" placeholder="Add Purchage Link" />
                                    <div class="error" id="descriptionsErr" style="color: red;"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Price <span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="test_short_description" placeholder="Add Price" />
                                    <div class="error" id="descriptionsErr" style="color: red;"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Quantity <span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="test_short_description" placeholder="Add Price" />
                                    <div class="error" id="descriptionsErr" style="color: red;"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Book Image <span class="text-red">*</span></label>

                                    <input type="file" class="form-control" name="test_name"  />
                                    <div class="error" id="nameErr" style="color: red;"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label"> Description <span class="text-red">*</span></label>

                                    <textarea class="content" name="example"></textarea>
                                </div>
                            </div>

                           
                            <div class="col-lg-12 col-md-12 text-right">
                                <!--<input type="submit" href='test_all.php' class="btn btn-primary" value="Create Test" />-->
                                <input id="number_rows1" name="number_rows1" type="hidden" value="1" />
                                <button type="submit" class="btn btn-success" name="create_test_type">Add Book</button>
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
                <h6 class="modal-title">Upload Book</h6>
                <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form class="form-horizontal" name="contactForm" method="post" onsubmit="return validateForm()">
                        <div class="row">
                     
                           
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Book Name <span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="test_short_description" value="Enter Book Name" />
                                    <div class="error" id="descriptionsErr" style="color: red;"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Author Name <span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="test_short_description" value="Enter Author Name" />
                                    <div class="error" id="descriptionsErr" style="color: red;"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Purchage Link <span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="test_short_description" value="Add Purchage Link" />
                                    <div class="error" id="descriptionsErr" style="color: red;"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Price <span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="test_short_description" value="Add Price" />
                                    <div class="error" id="descriptionsErr" style="color: red;"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Quantity <span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="test_short_description" value="250" />
                                    <div class="error" id="descriptionsErr" style="color: red;"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Book Image <span class="text-red">*</span></label>

                                    <input type="file" class="form-control" name="test_name"  />
                                    <div class="error" id="nameErr" style="color: red;"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label"> Description <span class="text-red">*</span></label>

                                    <textarea class="content" name="example"></textarea>
                                </div>
                            </div>

                           
                            <div class="col-lg-12 col-md-12 text-right">
                                <!--<input type="submit" href='test_all.php' class="btn btn-primary" value="Create Test" />-->
                                <input id="number_rows1" name="number_rows1" type="hidden" value="1" />
                                <button type="submit" class="btn btn-success" name="create_test_type">Add Book</button>
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
