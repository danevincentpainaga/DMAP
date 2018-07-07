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
						  		<a href="<?php echo base_url() ?>index.php/users/addUsers" class="btn btn-outline-primary btn-sm">
						  			<i class="fa fa-user-plus"></i>&nbsp;ADD USER&nbsp;&nbsp;
						  		</a>
						  	</div>
						  	<div class="col-md-4">
						  		<input type="text" class="form-control form-control-sm" name="" placeholder="Search">
						  	</div>
						</div>
					  </div>
					</div>
					<div class="card" style="overflow: auto; min-height: 500px; max-height: 500px; margin-top: .2em;">
					  <div class="card-body" style=" padding: 0px;">
						  <table class="table table-sm table-hover table-bordered">
						      <thead style="background-color: whitesmoke;">
						        <tr>
						          <th>Firstname</th>
						          <th>lastname</th>
						          <th>Middle Name</th>
						          <th>Username</th>
						          <th>Password</th>
						          <th style="text-align: center;">Action</th>
						        </tr>
						      </thead>
						      <tbody>
						      	<?php  
						      		// echo json_encode($residents);
						      		foreach ($users as $key => $value) {
						      	 ?>
						        <tr>
						          <td><?php echo $value->firstname; ?></td>
						          <td><?php echo $value->lastname; ?></td>
						          <td><?php echo $value->middlename; ?></td>
						          <td><?php echo $value->username; ?></td>
						          <td><?php echo $value->password; ?></td>
						          <td style="text-align: center;">
						          	<a href="<?php echo base_url() ?>index.php/residents/getResidentId/<?php  echo $value->user_id ;?>" class="btn btn-outline-success btn-sm">
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