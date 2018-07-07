<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>public/bootstrap/dist/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/components-font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/css/mainStyle.css">
</head>
<body>
				<div class="card" style=" margin-top: .7em;">
				  <div class="card-header">
				  	<i class="fa fa-user-plus" style="color: #007bff;"></i>&nbsp;Add User
				  </div>
				  <div class="card-body">
				  <div class="row" >
					  <div class="col-md-12">
					  	  <div class="alert alert-success" id="message-holder">
						    <label class="center" id="message"></label><strong>!</strong>
						  </div>
					  </div>			  	
				  </div>
				  	<div class="card" >
					  <div class="card-body">
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
						  		<label>Retype Password:</label>
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
						  	<div class="col-md-10">
						  	</div>
						  	<div class="col-md-2">
						  		<button class="btn btn-info btn-sm" id="save-user" style="width: 110px;box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12)">
						  			<i class="fa fa-save"></i>&nbsp;Save
						  		</button>
						  	</div>
						</div>
					  </div>
					</div>
			</div>
		</div>
	</div>
	<br />
	<script type="text/javascript" src="http://localhost/ci_project/public/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>public/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
var e = {
	val: function(element){
		return $('#'+ element).val();
	},
	addUser:function(userObj, elementToShow, message){
		$.ajax({
			type:'POST',
			url: 'http://localhost/ci_project/index.php/users/addNewUser',
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
	var save = $('#save-user');
	var messageHolder = $('#message-holder');
	var message = $('#message');

	messageHolder.hide();

	save.on('click', function(){
		var addedUserData = {
			firstname: e.val('firstname'),
			lastname: e.val('lastname'),
			middlename: e.val('middlename'),
			username: e.val('username'),
			password: e.val('password'),
			// re_password: e.val('re_password'),
		};	
		console.log(addedUserData);
		e.addUser(addedUserData, messageHolder, message );
	});

})(jQuery)

</script>
</body>
</html>