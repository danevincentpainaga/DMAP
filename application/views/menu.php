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
				    <li class="nav-item dropdown border-active" style="font-size: 15px !important;">
				      <a class="nav-link active dropdown-toggle" data-toggle="dropdown" href="#" >
				      	<img src="<?php echo base_url() ?>public/images/network.png" style="width: 20px;" >
				      	&nbsp;Manage Resident Information
				      </a>
				      <div class="dropdown-menu">
				        <a class="dropdown-item" href="<?php echo base_url() ?>index.php/residents">Residents</a>
				        <a class="dropdown-item" href="<?php echo base_url() ?>index.php/residents/addResidents">Add Residents</a>
				    </li>
				    <li class="nav-item" style="font-size: 15px !important;">
				    	<a class="nav-link"  href="<?php echo base_url() ?>index.php/Issuances">
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
