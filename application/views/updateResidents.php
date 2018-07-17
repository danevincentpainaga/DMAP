<body>
				  <br />
				  <div class="row">
					  <div class="col-md-11">
					  	  <div class="alert alert-success" id="message-holder">
						    <label class="center" id="message"></label><strong>!</strong>
						  </div>
					  </div>
					  <div class="col-md-1">
					  	<a href="<?php echo base_url() ?>index.php/residents" class="btn btn-info btn-sm" style="box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);">
					  		<i class="fa fa-arrow-circle-left"></i>&nbsp;Return
					  	</a>
					  </div>				  	
				  </div>
				  <div class="card-body">
				  	<div class="card" >
					  <div class="card-body">
					  	<h5 style="color:">
					  		<i class="fa fa-users"></i>&nbsp;Update Resident
					  	</h5>
					  	<hr>
				  <?php foreach ($resident_data as $key => $value) {
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
				  			
						  			<option value="male">male</option>
						  			<option value="female">female</option>
						  		
				  			</select>
				  	







				  	</div>
				  	<div class="col-md-3">
				  		<label>Civil Status:</label>
				  		<select class="form-control form-control-sm" id="civilstatus">
				  			<option value="<?php echo $value->civilstatus ?>"><?php echo $value->civilstatus ?></option>
				  			<?php if($value->civilstatus == 'single' ){ ?>
					  			<option value="married">married</option>
					  			<option value="widowed">widowed</option>
					  		<?php }else if($value->civilstatus == 'married'){ ?>
					  			<option value="single">single</option>
					  			<option value="widowed">widowed</option>
					  		<?php }else{ ?>
					  			<option value="single">single</option>
					  			<option value="married">married</option>
					  		<?php } ?>
				  		</select>
				  	</div>
				  </div>
				  <br />
				  <div class="row">
				  	<div class="col-md-3">
				  		<label>Citizenship:</label>
				  		<input type="text" name="" placeholder="citizenship" class="form-control form-control-sm" value="<?php echo $value->citizenship ?>" id="citizenship">
				  	</div>
				  	<div class="col-md-3">
				  		<label>Occupation:</label>
				  		<input type="text" name="" placeholder="occupation" id="occupation" class="form-control form-control-sm" value="<?php echo $value->occupation ?>" id="occupation
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
				  			<option value="2">Inactive</option>
				  		<?php }else{ ?>
				  			<option value="1">Active</option>
				  		<?php } ?>
				  		</select>
				  	</div>
				  </div>
			</div>
		</div>
		<br />
		<div class="card" >
		  <div class="card-body" style="padding: 10px;">
		  	<div class="row">
			  	<div class="col-md-12">
			  		<button class="btn btn-outline-success btn-sm" id="update-resident" style="box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12); width: 110px; float: right;">
			  			<i class="fa fa-save"></i>&nbsp;SAVE
			  		</button>
			  	</div>
			</div>
		  </div>
		</div>
	</div>
	<br />
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
		};
		var services = {
			updateResidentData: function(residentData, elementToShow, message){
				$.ajax({
					type: 'POST',
					url: 'http://localhost/DMAP/index.php/residents/updateResidents',
					data: { res: residentData },
					success: function(response){
						console.log(response);
						message.text(response);
						elementToShow.show();
						setTimeout(function(){
							elementToShow.hide();
						}, 3000 );
					}
				});
			},
		};

		(function($){

			e.id('message-holder').hide();
			
			e.id('update-resident').on('click', function(){
				var updatedData = {
					resident_id: e.val('resident-id'),
					lastname: e.val('lastname'),
					firstname: e.val('firstname'),
					middlename: e.val('middlename'),
					maiden: e.val('maiden'),
					placeofbirth: e.val('placeofbirth'),
					dateofbirth: e.val('dateofbirth'),
					sex: e.val('sex'),
					civilstatus: e.val('civilstatus'),
					citizenship: e.val('citizenship'),
					occupation: e.val('occupation'),
					educational_attainment: e.val('educational_attainment'),
					StatusId: e.val('status'),
				}
				console.log(updatedData);
				services.updateResidentData(updatedData, e.id('message-holder'), e.id('message'));
			});
		})(jQuery);
	</script>
</body>
</html>