<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>/public/bootstrap/dist/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/components-font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/css/mainStyle.css">
</head>
<body>
				  <br />
				  <div class="row">
					  <div class="col-md-11">
					  	  <div class="alert alert-success" id="message-holder">
						    <!-- <a href="" class="close" data-dismiss="alert" aria-label="close" id="close-holder">&times;</a> -->
						    <label class="center" id="message"></label><strong>!</strong>
						  </div>
					  </div>
					  <div class="col-md-1">
					  	<a href="<?php echo base_url() ?>/index.php/residents" class="btn btn-outline-info btn-sm">
					  		<i class="fa fa-arrow-circle-left"></i>&nbsp;Return
					  	</a>
					  </div>				  	
				  </div>
				  <br />
				  <?php foreach ($resident_data as $key => $value) {
				  	// print_r($value);
				  } ?>
				  <div class="row">
				  	<div class="col-md-3">
				  		<input type="hidden" name="" value="<?php echo $value->resident_id ?>" id="resident-id">
				  		<label>Lastname:</label>
				  		<input type="text" name="" placeholder="lastname" class="form-control form-control-sm" value="<?php echo $value->lastname ?>" id="lastname">
				  	</div>
				  	<div class="col-md-3">
				  		<label>Firstname:</label>
				  		<input type="text" name="" placeholder="firstname" class="form-control form-control-sm" value="<?php echo $value->firstname ?>" id="firstname">
				  	</div>
				  	<div class="col-md-3">
				  		<label>Middle Name:</label>
				  		<input type="text" name="" placeholder="middle name" class="form-control form-control-sm" value="<?php echo $value->middlename ?>" id="middlename">
				  	</div>
				  	<div class="col-md-3">
				  		<label>Maiden Name:</label>
				  		<input type="text" name="" placeholder="maiden name" class="form-control form-control-sm" value="<?php echo $value->maiden ?>" id="maiden">
				  	</div>
				  </div>
				  <br />
				  <div class="row">
				  	<div class="col-md-3">
				  		<label>Place of Birth:</label>
				  		<input type="text" name="" placeholder="place of birth" class="form-control form-control-sm" value="<?php echo $value->placeofbirth ?>" id="placeofbirth">
				  	</div>
				  	<div class="col-md-3">
				  		<label>Date of birth:</label>
				  		<input type="text" name="" placeholder="date of birth" class="form-control form-control-sm" value="<?php echo $value->dateofbirth ?>" id="dateofbirth">
				  	</div>
				  	<div class="col-md-3">
				  		<label>Sex:</label>
				  		<select class="form-control form-control-sm" id="sex">
				  			<option value="<?php echo $value->sex ?>"><?php echo $value->sex ?></option>
				  			<option value="female">female</option>
				  		</select>
				  	</div>
				  	<div class="col-md-3">
				  		<label>Civil Status:</label>
				  		<select class="form-control form-control-sm" id="civilstatus">
				  			<option value="<?php echo $value->civilstatus ?>"><?php echo $value->civilstatus ?></option>
				  			<option value="married">married</option>
				  		</select>
				  	</div>
				  </div>
				  <br />
				  <div class="row">
				  	<div class="col-md-3">
				  		<label>citizenship:</label>
				  		<input type="text" name="" placeholder="citizenship" class="form-control form-control-sm" value="<?php echo $value->citizenship ?>" id="citizenship">
				  	</div>
				  	<div class="col-md-3">
				  		<label>Occupation:</label>
				  		<input type="text" name="" placeholder="occupation" class="form-control form-control-sm" value="<?php echo $value->occupation ?>" id="occupation
				  		">
				  	</div>
				  	<div class="col-md-3">
				  		<label>Educational Attainment:</label>
				  		<input type="text" name="" placeholder="educational attainment" class="form-control form-control-sm" value="<?php echo $value->educational_attainment ?>" id="educational_attainment">
				  	</div>
				  	<div class="col-md-3">
				  		<label>Status</label>
				  		<select class="form-control form-control-sm" id="status">
				  			<option value="<?php echo $value->statusId ?>"><?php echo $value->status ?></option>
				  		<?php if($value->statusId == 1 ){ ?>
				  			<option value="2">In-Active</option>
				  		<?php }else{ ?>
				  			<option value="1">Active</option>
				  		<?php } ?>
				  		</select>
				  	</div>
				  </div>
				  <br />
				  <div class="row">
				  	<div class="col-md-12">
				  		<button class="btn btn-outline-success btn-sm" id="update-resident">
				  			<i class="fa fa-save"></i>&nbsp;SAVE
				  		</button>
				  	</div>
				  </div> 

	<br />
	<br />
	<script type="text/javascript" src="<?php echo base_url() ?>public/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>public/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

	<script type="text/javascript">
		var services = {
			updateResidentData: function(residentData, message_elem, message){
				$.ajax({
					type: 'POST',
					url: 'http://localhost/ci_project/index.php/residents/updateResidents',
					data: { res: residentData },
					success: function(response){
						console.log(response);
						message_elem.show();
						message.text(response);
						setTimeout(function(){
							message_elem.hide();
						}, 3000 );
					}
				});
			},
		};

		(function($){
			var update = $('#update-resident');
			var messageHolder = $('#message-holder');
			var message = $('#message');
			var close = $('#close-holder');

			messageHolder.hide();
			update.on('click', function(){
				var updatedData = {
					resident_id: $('#resident-id').val(),
					lastname: $('#lastname').val(),
					firstname: $('#firstname').val(),
					middlename: $('#middlename').val(),
					maiden: $('#maiden').val(),
					placeofbirth: $('#placeofbirth').val(),
					dateofbirth: $('#dateofbirth').val(),
					sex: $('#sex').val(),
					civilstatus: $('#civilstatus').val(),
					citizenship: $('#citizenship').val(),
					occupation: $('#occupation').val(),
					educational_attainment: $('#educational_attainment').val(),
					StatusId: $('#status').val(),
				}
				console.log(updatedData);
				services.updateResidentData(updatedData, messageHolder, message);
			});



		})(jQuery);
	</script>
</body>
</html>


<!-- 
						        <tr style="background-color: #e4f1ff;">
						          <td><?php// echo $value->h_lastname; ?></td>
						          <td><?php //echo $value->h_firstname; ?></td>
						          <td><?php //echo $value->h_middlename; ?></td>
		  				          <td><?php //echo $value->h_maiden; ?></td>
						          <td><?php //echo $value->h_qualifier; ?></td>
						          <td><?php// echo $value->h_placeofbirth; ?></td>
						          <td><?php// echo $value->h_dateofbirth; ?></td>
						          <td><?php //echo $value->h_sex; ?></td>
						          <td><?php //echo $value->h_civilstatus; ?></td>
		  				          <td><?php ///echo $value->h_citizenship; ?></td>
						          <td><?php //echo $value->h_occupation; ?></td>
						          <td><?php //echo $value->h_educational_attainment; ?></td>
						          <td>
						          	<button class="btn btn-outline-success btn-sm">
						          		<i class="fa fa-edit"></i>Edit
						          	</button>
						          	<button class="btn btn-outline-danger btn-sm">
						          		<i class="fa fa-times-circle"></i>Delete
						          	</button>
						          </td>
						        </tr> -->