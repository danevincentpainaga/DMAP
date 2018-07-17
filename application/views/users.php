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
				        <a class="dropdown-item" href="#">Mark head of House hold</a>
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
				        <a class="dropdown-item" href="#">Update</a>
				        <a class="dropdown-item" href="#">New</a>
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
				    		<img src="<?php echo base_url() ?>public/images/newspaper.png" style="width: 20px;" >&nbsp;Information Bulliten
				    	</a>
				    </li>
				  </ul>
				  	<div class="card" style="margin-top: .7em;" >
					  <div class="card-body" style="padding: 7px;">
					  	<div class="row">
						  	<div class="col-md-8">
						  		<a href="<?php echo base_url() ?>index.php/users/addUsers" class="btn btn-outline-info btn-sm">
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
						      <thead style="background-color: skyblue;">
						        <tr>
						          <th>Name</th>
						          <!-- <th>lastname</th> -->
						          <th>Middle Name</th>
						          <th>Username</th>
						          <th style="text-align: center;">Status</th>
						          <th style="text-align: center;">Action</th>
						        </tr>
						      </thead>
						      <tbody>
						      	<?php  
						      		foreach ($users as $key => $value) {
						      	 ?>
						        <tr>
						          <td style="display: none;"><?php  echo $value->user_id ;?></td>
						          <td>
						          	<i class="fa fa-user-circle"></i>&nbsp;
						          		<?php echo $value->firstname; ?>&nbsp;
						          		<?php echo $value->lastname; ?>
						      	  </td>
						          <td><?php echo $value->middlename; ?></td>
						          <td><?php echo $value->username; ?></td>
						          <td style="text-align: center;max-width: 70px;">
						          	<?php if($value->status_id == 1){ ?>
							          	<label class="status-active"><?php echo $value->status; ?></label>
						          	<?php }else{ ?>
						          		<label class="status-inactive"><?php echo $value->status; ?></label>
						          	<?php } ?>
						          </td>
						          <td style="text-align: center;" class="action-td">
						          	<a href="<?php echo base_url() ?>index.php/users/updateUser/<?php  echo $value->user_id ;?>" class="btn btn-outline-success btn-sm">
						          		<i class="fa fa-edit"></i>&nbsp;Update
						          	</a>
						          	<button class="btn btn-outline-danger btn-sm" id="delete-user">
						          		<i class="fa fa-times-circle"></i>&nbsp;Delete
						       		</button>
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
	<script type="text/javascript" src="<?php echo base_url() ?>public/jquery-confirm-master/js/jquery-confirm.js"></script>

	<script type="text/javascript">

var e = {
	val: function(element){
		return $('#'+ element).val();
	},
	id:function(element){
		return $('#'+ element);
	},
	deleteUserData:function(userid, index){
		$.ajax({
			type:'post',
			url: 'http://localhost/DMAP/index.php/users/deleteUser',
			data: { userId: userid },
			success: function(response){
				console.log(response);
				$('tr').eq(index).remove();
		        $.alert(response);
			}
		});
	}
};

(function($){
	var parent = $('.table tbody');
	
	parent.on('click', '#delete-user', function(){
		var userid = $(this).closest('tr').find('td:eq(0)').text();
		var index = $(this).closest('tr').index()

		$.confirm({
		    boxWidth: '30%',
		    useBootstrap: false,
		    title:'<i class="fa fa-warning" style="color: orange; font-size: 2.3em;"></i>',
		    content:'Are you sure you want to delete this user?',
		    theme:'modern',
		    buttons: {
		        delete: {
		            text: 'delete',
		            btnClass:'btn-red',
		            action: function () {
		                e.deleteUserData(userid, index+1);
		            }
		        },
		        cancel: {
		            text: 'cancel',
		            btnClass:'btn-info',
		            action: function () {

		            }
		        },
		    }
		});
	});

})(jQuery)

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