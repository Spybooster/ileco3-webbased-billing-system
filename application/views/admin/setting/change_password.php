

	<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class=" pull-left">
							<ul class="nav navbar-nav">
								<li class="active"><a href="<?=base_url('admin/setting')?>"><i class="fa fa-user"></i> Admin_User |</a></li>
								<!-- <li><a href="<?=base_url('admin/setting/slideshow')?>"><i class="fa fa-crosshairs"></i> Slide show |</a></li> -->
								<li><a href="<?=base_url('admin/setting/change_password')?>"><i class="fa fa-edit"></i>Admin_Change Password |</a>
								<li><a href="<?=base_url('admin/setting/users')?>"><i class="fa fa-users"></i> Consumer Accounts|</a>
								</li>
							</ul>
						</div>	
					</div>
				</div>
			</div>
</div>
<div class="container">
<div class="col-sm-9">
	<h3>Change Password</h3>	
</div>

	<div class="row">

		<div class="col-sm-5 col-sm-offset-4">
		<form action="<?=site_url('admin/setting/validatepass')?>" method="post">
			<?php echo $this->session->flashdata('message');?>
			<label>Old Password</label>
			<input class="form-control" type="password" name="old_password" requried >
			<br>
			<label>New Password</label>
			<input class="form-control" type="password" name="_new_password" requried >
			<br>
			<label>Confirm Password</label>
			<input class="form-control" type="password" name="repeat_password" requried >
			
			<br>
			<button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-floppy-save"></i>Submit</button>
			</form>
		</div>
	</div>

</div>