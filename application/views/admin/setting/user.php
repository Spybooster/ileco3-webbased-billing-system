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
		<table class="table table-stripped" id="table">
			<thead>
				<tr>
					<th>AccountNumber</th>
					<th>Name</th>
					<th>Username</th>
					<th>Password</th>
					<th>Status</th>
					<th></th>
				</tr>
			</thead>

			<tbody>
				<?php if(count($accounts)): ?>
						<?php foreach($accounts->result() as $account):?>
					<tr>
						<td><?=$account->account_number?></td>
						<td><?=$account->lname?>, <?=$account->fname?></td>
						<td><?=$account->username?></td>
						<td><?=$account->password?></td>
						<td>
							<?php
								if($account->used == 1){
									echo 'Activited';
								}else{
									echo 'Not Activite Yet!';
								}
							?>
						</td>
						<td>
							<a href="<?=base_url('admin/setting/reset_consumer/' . $account->id)?>" class="btn"><i class="glyphicon glyphicon-repeat"></i>ResetAccount</a>
						</td>
					</tr>
				<?php endforeach;?>
			<?php else :?>
				<tr>
					<td colspan="5" align="center"> No Consumers Account Found!!</td>
				</tr>
			<?php endif?>
			</tbody>
		</table>
	</div>

</div>