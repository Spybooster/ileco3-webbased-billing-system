<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
							<h3><a href="<?=base_url('admin/account')?>">Accounts</a>/New Billings- <?=date('m-y')?></h3>	
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
						
						</div>	
					</div>
				</div>
			</div>
</div>
<div class="container">
	<div class="row">
	<form action="<?=base_url('admin/account/bill_store')?>" method="post">
			<div class="col-sm-3">
				<label>Month</label><br>
				<input class="form-control" required name="month" type="month" value="<?=date('m-y')?>">
			</div>
			<div class="col-sm-3">
				<label>Due Date</label><br>
				<input class="form-control" required name="due_date" type="date">
			</div>	
			<div class="col-sm-3">
				<label>Disconnection</label><br>
				<input class="form-control" required name="disconnection" type="date">
			</div>
			<div class="col-sm-3">
				<label>Select Pole</label><br>

				<select id="pole_select">
					<option value=""> -select pole -</option>
					<?php
					 foreach ($poles->result() as $pole):?>
				
						<option value="<?=$pole->pole?>" <?php echo $this->uri->segment(4) == $pole->pole ? "selected" : ""?> ><?=$pole->pole?></option>

					<?php endforeach;?>
				</select>
			</div>		
			</div>


			<hr>		
			<table class="table table-stripped" id="table1">
				<thead>
					<tr>
						<th>Current Usage</th>
						<th>Pole Number</th>
						<th>Account Number</th>
						<th>Meter Serial Number</th>
						<th>Name</th>
						<th>Address</th>
						
					</tr>
				</thead>
				<tbody>
					<?php if(count($accounts)): ?>
						<?php foreach($accounts->result() as $account):?>
							<tr>
								<td>
								<input class="form-control input-sm" type="number" name="current[]" placeholder=" Current Usage">
									<input type="hidden" name="account_id[]" value="<?=$account->id?>">
								 </td>
								<td><?=$account->pole?></td>
								<td><?=$account->account_number?></td>
								<td><?=$account->meter_number?></td>
								<td><?=$account->lname?>, <?=$account->fname?></td>
								<td><?=$account->address?></td>
								
							</tr>
					    <?php endforeach;?>
					<?php else :?>
						<tr>
							<td colspan="5" align="center"> No Account Found</td>
						</tr>
				    <?php endif?>
				</tbody>
			</table>



			<button type="submit" class="btn btn-default get pull-right"><i class="glyphicon glyphicon-saved"></i>save</button>
		</form>

	</div>
</div>

