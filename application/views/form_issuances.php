<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/public/bootstrap/dist/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/components-font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/css/mainStyle.css">
</head>
<body>
<!-- 
<div class="container-fluid">

</div> -->
<nav class="navbar navbar-expand-sm " style="height: 30px; background-color: #f2f2f2; ">
  <!-- Brand -->
  <!-- <a class="navbar-brand" href="#">Logo</a> -->

  <!-- Links -->
  <ul class="navbar-nav">
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        &nbsp;DMAP
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#" style="color:blue;">
        	<i class="fa fa-home"></i>&nbsp;Visit Website
        </a>
        <a class="dropdown-item" href="#" style="color:blue;">
        	<i class="fa fa-sign-out"></i>&nbsp;Logout
        </a>
      </div>
    </li>
  </ul>
</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<br />
				  <!-- Nav tabs -->
				  <ul class="nav nav-tabs" role="tablist">
				    <li class="nav-item dropdown">
				      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" >
				      	<img src="<?php echo base_url() ?>public/images/team.png" style="width: 20px;" >
				      	&nbsp;Manage Users
				      </a>
				      <div class="dropdown-menu">
				        <a class="dropdown-item" href="#">Users</a>
				        <a class="dropdown-item" href="#">Add Users</a>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link" data-toggle="tab" href="#home">
				      	<img src="<?php echo base_url() ?>public/images/maps.png" style="width: 20px;" >&nbsp;Residential Mapping
				      </a>
				    </li>
				    <li class="nav-item dropdown">
				      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" >
				      	<img src="<?php echo base_url() ?>public/images/network.png" style="width: 20px;" >
				      	&nbsp;Manage residents
				      </a>
				      <div class="dropdown-menu">
				        <a class="dropdown-item" href="<?php echo base_url() ?>index.php/residents">Residents</a>
				        <a class="dropdown-item" href="<?php echo base_url() ?>index.php/residents/addResidents">Add Residents</a>
				    </li>
				    <li class="nav-item border-active">
				    	<a class="nav-link active" data-toggle="tab" href="<?php echo base_url() ?>index.php/Issuances">
				    		<img src="<?php echo base_url() ?>public/images/diploma.png" style="width: 20px;" >
				    		&nbsp;Form Issuances
				    	</a>
				    </li>
				    <li class="nav-item">
				    	<a class="nav-link" data-toggle="tab" href="<?php echo base_url() ?>index.php/residents">
				    		<img src="<?php echo base_url() ?>public/images/budget.png" style="width: 20px;" >&nbsp;Annual Budgeting Plan
				    	</a>
				    </li>
				    <li class="nav-item">
				    	<a class="nav-link" data-toggle="tab" href="<?php echo base_url() ?>index.php/residents">
				    		<img src="<?php echo base_url() ?>public/images/budget.png" style="width: 20px;" >&nbsp;Reports
				    	</a>
				    </li>
				  </ul>
				  	<div class="card" style="margin-top: .7em;" >
					  <div class="card-body" style="padding: 7px;">
					  	<div class="row">
						  	<div class="col-md-8">
					
						  	</div>
						  	<div class="col-md-4">
						  		<input type="text" class="form-control form-control-sm" name="" placeholder="Search">
						  	</div>
						</div>
					  </div>
					</div>
					<div class="card" style="overflow: auto; min-height: 500px; margin-top: .2em;">
					  <div class="card-body" style="min-width: 1700px; padding: 0px;">
						  <table class="table table-sm table-hover table-striped table-bordered">
						      <thead>
						        <tr>
						          <th>Lastname</th>
						          <th>Firstname</th>
						          <th>Middle Name</th>
						          <th style="min-width: 270px; max-width: 270px;">Action</th>
						        </tr>
						      </thead>
						      <tbody>
						      	<?php foreach ($residents as $key => $value) { ?>
						        <tr>
						          <td><?php echo $value->lastname; ?></td>
						          <td><?php echo $value->firstname; ?></td>
						          <td><?php echo $value->middlename; ?></td>
						          <td style="min-width: 270px; max-width: 270px;">
						          	<button class="btn btn-outline-dark btn-sm">
						          		<i class="fa fa-print"></i>&nbsp;Brgy Clearance
						          	</button>
						          	<button class="btn btn-outline-info btn-sm">
						          		<i class="fa fa-print"></i>&nbsp;Brgy Business Clearance
						          	</button>
						          	<button class="btn btn-outline-secondary btn-sm">
						          		<i class="fa fa-print"></i>&nbsp;Certificate of Indigency
						          	</button>
						          	<button class="btn btn-outline-success btn-sm">
						          		<i class="fa fa-print"></i>&nbsp;Live-In Certification
						          	</button>
						          	<button class="btn btn-outline-danger btn-sm">
						          		<i class="fa fa-print"></i>&nbsp;Death Certification
						          	</button>
						          </td>
						        </tr>
						      <?php } ?>
						      </tbody>
					    </table>
					  </div>
					</div>
				  </div> 
				</div>

			</div>
		</div>
	</div>
	<script type="text/javascript" src="http://localhost/ci_project/public/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>public/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>