<body>
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
				    <li class="nav-item dropdown border-active" style="font-size: 15px !important;">
				      <a class="nav-link active dropdown-toggle" data-toggle="dropdown" href="#" >
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
				  <br />
				  <div class="row" >
					  <div class="col-md-12">
					  	  <div class="alert alert-success" id="message-holder">
						    <label class="center" id="message"></label><strong>!</strong>
						  </div>
					  </div>			  	
				  </div>
				  	<div class="card" >
					  <div class="card-body">
					  	<h5>
					  		<i class="fa fa-user-plus"></i>&nbsp;Add User
					  	</h5>
					  	<hr>
					  	<div class="row" style="margin-top: .7em;">
						  	<div class="col-md-4">
						  		<label>Firstname:</label>
						  		<input type="text" class="form-control form-control-sm" name="" id="firstname" placeholder="Enter firstname">
						  	</div>
						  	<div class="col-md-4">
						  		<label>Lastname:</label>
						  		<input type="text" class="form-control form-control-sm" name="" id="lastname" placeholder="Enter lastname">
						  	</div>
						  	<div class="col-md-4">
						  		<label>Middle Name:</label>
						  		<input type="text" class="form-control form-control-sm" name="" id="middlename" placeholder="Enter middle name">
						  	</div>
						</div>
						<br />
						<div class="row">
						  	<div class="col-md-4">
						  		<label>Username</label>
						  		<input type="text" class="form-control form-control-sm" name="" id="username" placeholder="Enter username">
						  	</div>
						  	<div class="col-md-4">
						  		<label>Password:</label>
						  		<input type="text" class="form-control form-control-sm" name="" id="password" placeholder="Enter password">
						  	</div>
						  	<div class="col-md-4">
						  		<label>Confirm Password:</label>
						  		<input type="text" class="form-control form-control-sm" name="" id="re_password" placeholder="Retype password">
						  	</div>
						</div>
						<br />
				  </div>
				  <br /> 
				</div>
					<br />
				  	<div class="card" >
					  <div class="card-body" style="padding: 10px;">
					  	<div class="row">
						  	<div class="col-md-9">
						  	</div>
						  	<div class="col-md-3">
						  		<button class="btn btn-success btn-sm" id="save-user" style="width: 110px;box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12)">
						  			<i class="fa fa-save"></i>&nbsp;Save
						  		</button>
						  		<button class="btn btn-info btn-sm" id="save-user" style="width: 110px;box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12)">
						  			<i class="fa fa-ban"></i>&nbsp;Clear
						  		</button>
						  	</div>
						</div>
					  </div>
					</div>
	<br />
	<script type="text/javascript" src="<?php echo base_url() ?>public/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>public/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
var e = {
	val: function(element){
		return $('#'+ element).val();
	},
	id:function(element){
		return $('#'+ element);
	},
	addUser:function(userObj, elementToShow, message){
		$.ajax({
			type:'POST',
			url: 'http://localhost/DMAP/index.php/users/addNewUser',
			data: { addedUser: userObj },
			success: function(response){
				console.log(response);
				message.text(response);
				elementToShow.show();
				setTimeout(function(){
					elementToShow.hide();
				}, 3000 );
			}
		})
	}
};

(function($){

	e.id('message-holder').hide();

	e.id('save-user').on('click', function(){
		var addedUserData = {
			firstname: e.val('firstname'),
			lastname: e.val('lastname'),
			middlename: e.val('middlename'),
			username: e.val('username'),
			password: e.val('password'),
			statusId: 1,
			// re_password: e.val('re_password'),
		};	
		console.log(addedUserData);
		e.addUser(addedUserData, e.id('message-holder'), e.id('message') );
	});

})(jQuery)

</script>
</body>
</html>