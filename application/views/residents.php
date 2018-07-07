<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>/public/bootstrap/dist/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/components-font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/css/mainStyle.css">
</head>
<body>
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
					  <div class="card-body" style="min-width: 1750px; padding: 0px;">
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
						          <th>Educational Atainment</th>
						          <th>Household Head</th>
						          <th>Status</th>
						          <th>Action</th>
						        </tr>
						      </thead>
						      <tbody>
						      	<?php  
						      		// echo json_encode($residents);
						      		foreach ($residents as $key => $value) {
						      	 ?>
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
						          <td><?php echo $value->h_lastname; ?>&nbsp;<?php echo $value->h_lastname; ?></td>
						          <td><?php echo $value->status; ?></td>
						          <td>
						          	<a href="<?php echo base_url() ?>index.php/residents/getResidentId/<?php  echo $value->resident_id ;?>" class="btn btn-outline-success btn-sm">
						          		<i class="fa fa-edit"></i>Update
						          	</a>
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

	<script type="text/javascript">
		var services = {
			updateResidentData: function(residentData){
				$.ajax({
					type: 'POST',
					url: 'http://localhost/ci_project/index.php/residents/updateResidents',
					data: residentData,
					success: function(response){
						console.log(response);
					}
				});
			},
		};

		(function($){
			var parent = $('.table tbody');
			// var update = $('#update-resident');

			parent.on('click', '#update-resident', function(){
				console.log($(this).closest('tr').find('td').eq(1).text());
			var residentObj = {
					lastname: $(this).closest('tr').find('td').eq(0).text(),
					firstname: $(this).closest('tr').find('td').eq(1).text(),
					middlename: $(this).closest('tr').find('td').eq(2).text(),
					maiden: $(this).closest('tr').find('td').eq(3).text(),
					placeofbirth: $(this).closest('tr').find('td').eq(5).text(),
					dateofbirth: $(this).closest('tr').find('td').eq(6).text(),
					sex: $(this).closest('tr').find('td').eq(7).text(),
					civilstatus: $(this).closest('tr').find('td').eq(8).text(),
					citizenship: $(this).closest('tr').find('td').eq(9).text(),
					occupation: $(this).closest('tr').find('td').eq(10).text(),
					educational_attainment: $(this).closest('tr').find('td').eq(11).text(),
				};
				// console.log(residentObj);
				services.updateResidentData(residentObj);
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