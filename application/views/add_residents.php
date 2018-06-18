<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>public/bootstrap/dist/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/components-font-awesome/css/font-awesome.min.css">

</head>
<body>
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
				      <a class="nav-link active dropdown-toggle" data-toggle="dropdown" href="#" >
				      	<img src="<?php echo base_url() ?>public/images/network.png" style="width: 20px;" >
				      	&nbsp;Manage residents
				      </a>
				      <div class="dropdown-menu">
				        <a class="dropdown-item" href="<?php echo base_url() ?>index.php/residents">Residents</a>
				        <a class="dropdown-item" href="<?php echo base_url() ?>/index.php/residents/addResidents">Add Residents</a>
				    </li>
				    <li class="nav-item">
				    	<a class="nav-link" data-toggle="tab" href="<?php echo base_url() ?>index.php/residents">
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
				<div class="card" style="min-height: 630px; margin-top: .7em;">
				  <div class="card-header">
				  	<i class="fa fa-plus" style="color: #007bff;"></i>&nbsp;Add Residents
				  </div>
				  <div class="card-body">
				  	<div class="card" >
					  <div class="card-body">
					  	<h5>Household Head</h5>
					  	<div class="row" style="margin-top: .7em;">
						  	<div class="col-md-4">
						  		<input type="text" class="form-control form-control-sm" name="" placeholder="firtsname">
						  	</div>
						  	<div class="col-md-4">
						  		<input type="text" class="form-control form-control-sm" name="" placeholder="lastname">
						  	</div>
						  	<div class="col-md-4">
						  		<input type="text" class="form-control form-control-sm" name="" placeholder="Middle Name">
						  	</div>
						</div>
						<br />
						<div class="row">
						  	<div class="col-md-4">
						  		<input type="text" class="form-control form-control-sm" name="" placeholder="Maiden">
						  	</div>
						  	<div class="col-md-4">
						  		<select class="form-control form-control-sm">
						  			<option value="">Select Qualifier</option>
						  			<option value="jr">Jr</option>
						  			<option value="sr">Sr</option>
						  		</select>
						  	</div>
						  	<div class="col-md-4">
						  		<input type="text" class="form-control form-control-sm" name="" placeholder="Place of Birth">
						  	</div>
						</div>
						<br />
						<div class="row">
						  	<div class="col-md-4">
						  		<input type="text" class="form-control form-control-sm" name="" placeholder="Date of Birth">
						  	</div>
						  	<div class="col-md-4">
						  		<select class="form-control form-control-sm">
						  			<option value="male">Male</option>
						  			<option value="female">Female</option>
						  		</select>
						  	</div>
						  	<div class="col-md-4">
						  		<select class="form-control form-control-sm">
						  			<option value="single">Single</option>
						  			<option value="married">Married</option>
						  		</select>
						  	</div>
						</div>
						<br />
						<div class="row">
						  	<div class="col-md-4">
						  		<input type="text" class="form-control form-control-sm" name="" placeholder="Citizen-Ship">
						  	</div>
						  	<div class="col-md-4">
								<input type="text" class="form-control form-control-sm" name="" placeholder="Occupation">
						  	</div>
						  	<div class="col-md-4">
								<input type="text" class="form-control form-control-sm" name="" placeholder="Educational Attainment">
						  	</div>
						</div>
					  </div>
					</div>
					<br />
				  	<div class="card" >
					  <div class="card-body" style="padding: 10px;">
					  	<div class="row">
						  	<div class="col-md-9">
						  		Related to Household Head
						  	</div>
						  	<div class="col-md-3">
						  		<button class="btn btn-success btn-sm" id="add-relation">
						  			<i class="fa fa-plus"></i>&nbsp;Add Relation
						  		</button>
						  		<button class="btn btn-info btn-sm" id="save" style="width: 110px;">
						  			<i class="fa fa-save"></i>&nbsp;Save
						  		</button>
						  	</div>
						</div>
					  </div>
					</div>
					<br />
					<div class="col-md-12" style="overflow: auto;padding: 0px;">
						<table class="table table-sm table-striped table-bordered" id="residents-table">
						      <thead>
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
						          <th>Educational Atainment</th>
						          <th>Action</th>
						        </tr>
						      </thead>
						      <tbody>
						        <tr>
						          <td style="min-width: 250px;"><input type="text" class="form-control form-control-sm" name="" id="lastname"></td>
						          <td style="min-width: 250px;"><input type="text" class="form-control form-control-sm" name="" id="firtsname"></td>
						          <td style="min-width: 250px;" ><input type="text" class="form-control form-control-sm" name="" id="middlename"></td>
						          <td style="min-width: 250px;"><input type="text" class="form-control form-control-sm" name="" id="maiden"></td>
						          <td style="min-width: 250px;"><input type="text" class="form-control form-control-sm" name="" id="relation"></td>
						          <td style="min-width: 250px;"><input type="text" class="form-control form-control-sm" name="" id="placeofbirth"></td>
						          <td style="min-width: 250px;"><input type="text" class="form-control form-control-sm" name="" id="dateofbirth"></td>
						          <td style="min-width: 250px;">
						          	<select class="form-control form-control-sm" id="sex">
						          		<option value="male">Male</option>
						          		<option value="female">Female</option>
						          	</select>
						          </td>
						          <td style="min-width: 250px;">
						          	<select class="form-control form-control-sm" id="civilstatus">
						          		<option value="single">Single</option>
						          		<option value="married">Married</option>
						          	</select>
						          </td>
						          <td style="min-width: 250px;"><input type="text" class="form-control form-control-sm" name="" id="citizenship"></td>
						          <td style="min-width: 250px;"><input type="text" class="form-control form-control-sm" name="" id="occupation"></td>
						          <td style="min-width: 250px;"><input type="text" class="form-control form-control-sm" name="" id="educational_attainment"></td>
						          <td style="min-width: 100px;">
						          	<button class="btn btn-danger btn-sm" id="remove">Remove</button>
						          </td>
						        </tr>
						      </tbody>
					    </table>
					    </div>
				  </div> 
				  <div class="card-footer" style="text-align: right;">Powered By: DMAP</div>
				</div>
			</div>
		</div>
	</div>
	<br />
	<script type="text/javascript" src="http://localhost/ci_project/public/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>public/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">

	var rs ={
	 residents: '<tr>'+
		          '<td style="min-width: 250px;"><input type="text" class="form-control form-control-sm" name="" id="lastname"></td>'+
		          '<td style="min-width: 250px;"><input type="text" class="form-control form-control-sm" name="" id="firtsname"></td>'+
		          '<td style="min-width: 250px;"><input type="text" class="form-control form-control-sm" name="" id="middlename"></td>'+
		          '<td style="min-width: 250px;"><input type="text" class="form-control form-control-sm" name="" id="maiden"></td>'+
		          '<td style="min-width: 250px;"><input type="text" class="form-control form-control-sm" name="" id="relation"></td>'+
		          '<td style="min-width: 250px;"><input type="text" class="form-control form-control-sm" name="" id="placeofbirth"></td>'+
		          '<td style="min-width: 250px;"><input type="text" class="form-control form-control-sm" name="" id="dateofbirth"></td>'+
		          '<td style="min-width: 250px;">'+
		          	'<select class="form-control form-control-sm" id="sex">'+
		          		'<option value="male">Male</option>'+
		          		'<option value="female">Female</option>'+
		          	'</select>'+
		          '</td>'+
		          '<td style="min-width: 250px;">'+
		          	'<select class="form-control form-control-sm" id="civilstatus">'+
		          		'<option value="single">Single</option>'+
		          		'<option value="married">Married</option>'+
		          	'</select>'+
		          '</td>'+
		          '<td style="min-width: 250px;"><input type="text" class="form-control form-control-sm" name="" id="citizenship"></td>'+
		          '<td style="min-width: 250px;"><input type="text" class="form-control form-control-sm" name="" id="occupation"></td>'+
		          '<td style="min-width: 250px;"><input type="text" class="form-control form-control-sm" name="" id="educational_attainment"></td>'+
		          '<td style="min-width: 100px;">'+
		          	'<button class="btn btn-danger btn-sm" id="remove" >Remove</button>'+
		          '</td>'+
		        '</tr>',
	};

(function($){
	var add = $('#add-relation');
	var remove = $('.table tbody');
	var save = $('#save');
	var tr = $('#residents-table tr:last');
	add.on('click', function(){
		console.log('triggered');
		tr.after(rs.residents);
	});
	remove.on('click', '#remove', function(){
		$(this).closest('tr').remove();
	});
	save.on('click', function(){
		var arr = [];
		$('tr').each(function(val, i){
			if(val > 0){
				var data = {
					lastname: $(this).find('#lastname').val(),
					firtsname: $(this).find('#firtsname').val(),
					middlename: $(this).find('#middlename').val(),
					maiden: $(this).find('#maiden').val(),
					relation: $(this).find('#relation').val(),
					placeofbirth: $(this).find('#placeofbirth').val(),
					dateofbirth: $(this).find('#dateofbirth').val(),
					sex: $(this).find('#sex').val(),
					civilstatus: $(this).find('#civilstatus').val(),
					citizenship: $(this).find('#citizenship').val(),
					occupation: $(this).find('#occupation').val(),
					educational_attainment: $(this).find('#educational_attainment').val(),
				}
				arr.push(data);
			}
		});
		console.log(arr);
	});
})(jQuery)

</script>
</body>
</html>