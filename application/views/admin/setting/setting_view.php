

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
	<div class="row">
		<table class="table">
			<thead>
				<tr>
					<th>Name</th>
					<th>Username</th>
					<th></th>
				</tr>
			</thead>

			<tbody>
				<?php foreach($users->result() as $user): ?>
					<tr>
						<td><?=$user->name?></td>
						<td><?=$user->username?></td>
						<td>
							<a href="<?=base_url('admin/setting/edit/' . $user->id)?>" class="btn"><i class="glyphicon glyphicon-pencil"></i></a>
						</td>
					</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</div>

</div>