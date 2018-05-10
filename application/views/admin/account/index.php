<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
							<h3>Accounts</h3>	
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
								<a href="<?=base_url('admin/account/bill')?>" class="btn btn-default get"><i class="fa fa-list-alt"></i> New Billing</a>	
							<a href="<?=base_url('admin/account/create')?>" class="btn btn-default get"><i class="fa fa-user"></i> NewAccount</a>	
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
						<th>Name</th>
						<th>Account Number</th>
						<th>Meter Serial Number</th>
						<th>Address</th>
						<th>ShowBill/Edit/Delete</th>
					</tr>
				</thead>
				<tbody>
					<?php if(count($accounts)): ?>
						<?php foreach($accounts->result() as $account):?>
							<tr>
								<td><?=$account->lname?>, <?=$account->fname?></td>
								<td><?=$account->account_number?></td>
								<td><?=$account->meter_number?></td>
								<td><?=$account->address?></td>
								<td>
									<a href="<?=base_url('admin/account/show/' . $account->id)?>" class="btn"><i class="glyphicon glyphicon-list-alt"></i></a>
									<a href="<?=base_url('admin/account/edit/' . $account->id)?>" class="btn"><i class="glyphicon glyphicon-pencil"></i></a>
									<a href="<?=base_url('admin/account/delete/' . $account->id)?>" class="btn"> <i class="glyphicon glyphicon-trash"></i></a>
								</td>
							</tr>
					    <?php endforeach;?>
					<?php else :?>
						<tr>
							<td colspan="5" align="center"> No Account Found</td>
						</tr>
				    <?php endif?>
				</tbody>
			</table>



	</div>
</div>
