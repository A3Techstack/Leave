<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Leave Application</title>

    <!-- Bootstrap Core CSS -->
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../assets/css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
					<ul class="sidebar-nav">
						<li class="sidebar-brand">
							<a href="LeaveApplication.php" style="color:#DAA520;">Leave application</a>
						</li>
						<li>
							<a href="UserProfile.php">User Profile</a>
						</li>
						<li>
							<a href="ListOfUserBlood.php">Blood Group</a>
						</li>
						<li>
							<a href="Leavehistory.php">Leave History</a>
						</li>
						<li>
							<a href="../controller/LogoutController.php">Logout</a>
						</li>
					</ul>
				</div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu Bar</a>
						
									<h1 align="center">Leave History</h1>
								
						<div class="table-responsive">
							
							<table class="table table-bordered table-hover table-striped">
							
								<thead>
								
									<tr class="success">
										<th>From</th>
										<th>To</th>
										<th>Total</th>
										<th>Reason</th>
										<th>LeaveType</th>
									</tr>
									
								</thead>
								
								<tbody>
								
									<?php
								    // $empId = $_SESSION['livApplicationId'];
                                    // echo $empId;
                                    // unset($_SESSION['livApplicationId']);
                                    
                                    $objDepartment = new Employee();
											$result = $objDepartment->getAllleaveHistoryForOneUser($applicantUserCodeNumber);
											while($row = mysqli_fetch_array($result))
                                    {
                                        $applicantUserCodeNumber = $row['lEmployeeCodeNumberWhoApply'];
											?>
												<tr>
													<td><?php echo $row['lLeaveFromDate'] ?></td>
													<td><?php echo $row['lLeaveToDate'] ?></td>
													<td><?php echo $row['lTotalLeaveDays'] ?> Days</td>
											        <td><?php echo $row['lLeaveReason'] ?></td>
													<td><?php echo $row['lType'] ?></td>
												</tr>
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
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
