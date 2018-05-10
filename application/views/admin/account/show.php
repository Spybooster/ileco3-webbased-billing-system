<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
							<h3><a href="<?=base_url('admin/account')?>">Accounts</a>/Billings(<?=$account->lname.', '. $account->fname?>)</h3>	
					</div>
				</div>
			</div>
</div>
<div class="container">
	<div class="row">
			<div class="col-sm-12">	
					<table class="table table-stripped">
						<thead>
							<tr>
								<th>Month</th>
								<th>From</th>
								<th>To</th>
								<th>Previous KWH</th>
								<th>Current KWH</th>
								<th>Total Consumed</th>
								<th>Due Date</th>
								<th>Status</th>
								<th>Disconnection</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php if(count($billings)): ?>
								<?php foreach($billings->result() as $billing):?>
									<tr>
										<td><?=$billing->month?></td>
										<td><?=$billing->date_from?></td>
										<td><?=$billing->date_to?></td>
										<td><?=$billing->previous_use?></td>
										<td><?=$billing->present_use?></td>
										<td><b>PHP <?=$billing->total_consume?></b></td>
										<td><?=$billing->due_date?></td>
										<td><?=$billing->status?></td>
										<td><?=$billing->disconnection?></td>
										<td>
										<a href="<?=base_url('admin/account/showbill/' . $billing->id)?>" class="btn"> Bills</a>
										<!-- <a href="<?=base_url('admin/account/edit_status/' . $billing->id)?>" class="btn"><i class="glyphicon glyphicon-pencil"></i></a> -->
										</td>
									</tr>
							    <?php endforeach;?>
							<?php else :?>
								<tr>
									<td colspan="5" align="center"> No billing Found</td>
								</tr>
						    <?php endif?>
						</tbody>
					</table>
			</div>
	</div>
</div>
