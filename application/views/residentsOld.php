<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>/public/bootstrap/dist/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/components-font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/css/mainStyle.css">
</head>
<body>
<nav class="navbar navbar-expand-sm " style="height: 30px; background-color: #f2f2f2; ">
  <!-- Brand -->
  <!-- <a class="navbar-brand" href="#">Logo</a> -->

  <!-- Links -->
  <ul class="navbar-nav">
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        <i class="fa fa-cogs fa-spin"></i>&nbsp;DMAP
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="http://localhost/cez/index.php" style="color:blue;">
        	<i class="fa fa-home"></i>&nbsp;Visit Website
        </a>
        <a class="dropdown-item" href="#" style="color:blue;">
        	<i class="fa fa-sign-out"></i>&nbsp;Logout
        </a>
      </div>
    </li>
  </ul>
</nav>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<br />
				  <!-- Nav tabs -->
				  <ul class="nav nav-tabs" role="tablist">
				    <li class="nav-item dropdown">
				      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" >
				      	<img src="<?php echo base_url() ?>public/images/team.png" style="width: 20px;" >
				      	&nbsp;User Account Management
				      </a>
				      <div class="dropdown-menu">
				        <a class="dropdown-item" href="#">Users</a>
				        <a class="dropdown-item" href="#">Add Users</a>
				        <a class="dropdown-item" href="#">Activate</a>
				        <a class="dropdown-item" href="#">Reactivate</a>
				    </li>
				    <li class="nav-item dropdown">
				      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
				      	<img src="<?php echo base_url() ?>public/images/maps.png" style="width: 20px;" >&nbsp;Residential Mapping
				      </a>
				      <div class="dropdown-menu">
				        <a class="dropdown-item" href="#">Add</a>
				        <a class="dropdown-item" href="#">Mark head of Household</a>
				        <a class="dropdown-item" href="http://google.com/map">Search</a>
				    </li>
				    <li class="nav-item dropdown border-active">
				      <a class="nav-link active dropdown-toggle" data-toggle="dropdown" href="#" >
				      	<img src="<?php echo base_url() ?>public/images/network.png" style="width: 20px;" >
				      	&nbsp;Manage Resident Information
				      </a>
				      <div class="dropdown-menu">
				        <a class="dropdown-item" href="<?php echo base_url() ?>index.php/residents">Residents</a>
				        <a class="dropdown-item" href="<?php echo base_url() ?>index.php/residents/addResidents">Add Residents</a>
				    </li>
				    <li class="nav-item">
				    	<a class="nav-link"  href="<?php echo base_url() ?>index.php/Issuances">
				    		<img src="<?php echo base_url() ?>public/images/diploma.png" style="width: 20px;" >
				    		&nbsp;Form Issuances
				    	</a>
				    </li>
				    <li class="nav-item dropdown">
				    	<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
				    		<img src="<?php echo base_url() ?>public/images/budget.png" style="width: 20px;" >&nbsp;Annual Budgeting Plan
				    	</a>
				    	<div class="dropdown-menu">
				        <a class="dropdown-item" href="#">View</a>
				        <a class="dropdown-item" href="#">New</a>
				        <a class="dropdown-item" href="#">Update</a>
				        <a class="dropdown-item" href="#">Report</a>

				    </li>
				    </li>
				    <li class="nav-item">
				    	<a class="nav-link" data-toggle="tab" href="<?php echo base_url() ?>index.php/residents">
				    		<img src="<?php echo base_url() ?>public/images/budget.png" style="width: 20px;" >&nbsp;Blotter Reports
				    	</a>
				    	
				    </li>
				    <li class="nav-item">
				    	<a class="nav-link" data-toggle="tab" href="<?php echo base_url() ?>index.php/residents">
				    		<img src="<?php echo base_url() ?>public/images/newspaper.png" style="width: 20px;" >&nbsp;Information Bulletin
				    	</a>
				    </li>
				  </ul>
				  	<div class="card" style="margin-top: .7em;" >
					  <div class="card-body" style="padding: 7px;">
					  	<div class="row">
						  	<div class="col-md-8">
						  		<a href="<?php echo base_url() ?>index.php/residents/addResidents" class="btn btn-outline-primary btn-sm">
						  			<i class="fa fa-plus"></i>&nbsp;ADD&nbsp;&nbsp;
						  		</a>
						  	</div>
						  	<div class="col-md-4">
						  		<input type="text" class="form-control form-control-sm" name="" placeholder="Search">
						  	</div>
						</div>
					  </div>
					</div>
					<div class="card" style="overflow: auto; min-height: 500px; max-height: 500px; margin-top: .2em;">
					  <div class="card-body" style="min-width: 1700px; padding: 0px;">
						  <table class="table table-sm table-hover table-bordered">
						      <thead style="background-color: whitesmoke;">
						        <tr>
						          <th>Lastname</th>
						          <th>Firstname</th>
						          <th>Middle Name</th>
						          <th>Maiden</th>
						          <th>Relationship to Household Head</th>
						          <th>Place of Birth</th>
								  <th>Date of Birth</th>
						          <th>Sex</th>
						          <th>Civil Status</th>
						          <th>Citizenship</th>
						          <th>Occupation</th>
						          <th>Educational Attainment</th>
						          <th>Action</th>
						        </tr>
						      </thead>
						      <tbody>
						      	<?php  
						      		// echo json_encode($residents);
						      		foreach ($residents as $key => $value) {
						      	 ?>
						        <tr style="background-color: #e4f1ff;">
						          <td><?php echo $value->h_lastname; ?></td>
						          <td><?php echo $value->h_firstname; ?></td>
						          <td><?php echo $value->h_middlename; ?></td>
		  				          <td><?php echo $value->h_maiden; ?></td>
						          <td><?php echo $value->h_qualifier; ?></td>
						          <td><?php echo $value->h_placeofbirth; ?></td>
						          <td><?php echo $value->h_dateofbirth; ?></td>
						          <td><?php echo $value->h_sex; ?></td>
						          <td><?php echo $value->h_civilstatus; ?></td>
		  				          <td><?php echo $value->h_citizenship; ?></td>
						          <td><?php echo $value->h_occupation; ?></td>
						          <td><?php echo $value->h_educational_attainment; ?></td>
						          <td>
						          	<button class="btn btn-outline-success btn-sm">
						          		<i class="fa fa-edit"></i>Update
						          	</button>
						          	<button class="btn btn-outline-danger btn-sm">
						          		<i class="fa fa-times-circle"></i>Delete
						          	</button>
						          </td>
						        </tr>
						        <tr>
						          <td><?php echo $value->lastname; ?></td>
						          <td><?php echo $value->firstname; ?></td>
						          <td><?php echo $value->middlename; ?></td>
		  				          <td><?php echo $value->maiden; ?></td>
						          <td><?php echo $value->relation; ?></td>
						          <td><?php echo $value->placeofbirth; ?></td>
						          <td><?php echo $value->dateofbirth; ?></td>
						          <td><?php echo $value->sex; ?></td>
						          <td><?php echo $value->civilstatus; ?></td>
		  				          <td><?php echo $value->citizenship; ?></td>
						          <td><?php echo $value->occupation; ?></td>
						          <td><?php echo $value->educational_attainment; ?></td>
						          <td>
						          	<button class="btn btn-outline-success btn-sm">
						          		<i class="fa fa-edit"></i>Update
						          	</button>
						          	<button class="btn btn-outline-danger btn-sm">
						          		<i class="fa fa-times-circle"></i>Delete
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
	<br />
	<br />
	<script type="text/javascript" src="<?php echo base_url() ?>public/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>public/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>