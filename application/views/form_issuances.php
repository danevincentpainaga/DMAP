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
        <i class="fa fa-globe fa-spin"></i>&nbsp;DMAP
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="http://localhost/cez/index.php" style="color:#43b2c4;">
        	<i class="fa fa-home"></i>&nbsp;Visit Website
        </a>
        <a class="dropdown-item" href="#" style="color:#43b2c4;">
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
				  <!-- Nav tabs -->
				  <ul class="nav nav-tabs" role="tablist">
				    <li class="nav-item dropdown" style="font-size: 15px !important;">
				      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" >
				      	<img src="<?php echo base_url() ?>public/images/team.png" style="width: 20px;" >
				      	&nbsp;User Account Management
				      </a>
				      <div class="dropdown-menu">
				        <a class="dropdown-item" href="<?php echo base_url() ?>index.php/users">Users</a>
				        <a class="dropdown-item" href="<?php echo base_url() ?>index.php/users/addUsers">Add Users</a>
				    </li>
				    <li class="nav-item dropdown" style="font-size: 15px !important;">
				      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
				      	<img src="<?php echo base_url() ?>public/images/maps.png" style="width: 20px;" >&nbsp;Residential Mapping
				      </a>
				      <div class="dropdown-menu">
				        <a class="dropdown-item" href="#">Add</a>
				        <a class="dropdown-item" href="#">Mark head of Household</a>
				        <a class="dropdown-item" href="http://google.com/map">Search</a>
				    </li>
				    <li class="nav-item dropdown" style="font-size: 15px !important;">
				      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" >
				      	<img src="<?php echo base_url() ?>public/images/network.png" style="width: 20px;" >
				      	&nbsp;Manage Resident Information
				      </a>
				      <div class="dropdown-menu">
				        <a class="dropdown-item" href="<?php echo base_url() ?>index.php/residents">Residents</a>
				        <a class="dropdown-item" href="<?php echo base_url() ?>index.php/residents/addResidents">Add Residents</a>
				    </li>
				    <li class="nav-item border-active" style="font-size: 15px !important;">
				    	<a class="nav-link active"  href="<?php echo base_url() ?>index.php/Issuances">
				    		<img src="<?php echo base_url() ?>public/images/diploma.png" style="width: 20px;" >
				    		&nbsp;Form Issuances
				    	</a>
				    </li>
				    <li class="nav-item dropdown" style="font-size: 15px !important;">
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
				    <li class="nav-item" style="font-size: 15px !important;">
				    	<a class="nav-link" data-toggle="tab" href="<?php echo base_url() ?>index.php/residents">
				    		<img src="<?php echo base_url() ?>public/images/budget.png" style="width: 20px;" >&nbsp;Blotter Reports
				    	</a>
				    	
				    </li>
				    <li class="nav-item" style="font-size: 15px !important;">
				    	<a class="nav-link" data-toggle="tab" href="<?php echo base_url() ?>index.php/residents">
				    		<img src="<?php echo base_url() ?>public/images/newspaper.png" style="width: 20px;" >&nbsp;Information Bulletin
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
					<div class="card" style="overflow: auto; min-height: 550px; margin-top: .2em;">
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
						      	<?php foreach ($residents as $key => $value) { ; ?>
						        <tr>
						          <td><?php echo $value->lastname; ?></td>
						          <td><?php echo $value->firstname ?></td>
						          <td><?php echo $value->middlename ?></td>
						          <td style="min-width: 270px; max-width: 270px;">
						          	<a href="<?php echo base_url() ?>/index.php/Issuances/barangay_clearance" class="btn btn-outline-dark btn-sm">
						          		<i class="fa fa-print"></i>&nbsp;Brgy Clearance
						          	</a>
						          	<button class="btn btn-outline-info btn-sm">
						          		<i class="fa fa-print"></i>&nbsp;Brgy Business Clearance
						          	</button>
						          	<button class="btn btn-outline-secondary btn-sm">
						          		<i class="fa fa-print"></i>&nbsp;Certificate of Indigency
						          	</button>
						          	<a href="<?php echo base_url() ?>/index.php/Issuances/print_live_in_certificate" class="btn btn-outline-success btn-sm">
						          		<i class="fa fa-print"></i>&nbsp;Live-In Certification
						          	</a>
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
					<ul class="pagination pagination-sm" style="margin-top: .5em;">
					  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
					  <li class="page-item"><a class="page-link" href="#">1</a></li>
					  <li class="page-item"><a class="page-link" href="#">2</a></li>
					  <li class="page-item"><a class="page-link" href="#">3</a></li>
					  <li class="page-item"><a class="page-link" href="#">Next</a></li>
					</ul>
				  </div> 
				</div>

			</div>
		</div>
	</div>
	<script type="text/javascript" src="<?php echo base_url() ?>public/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>public/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>