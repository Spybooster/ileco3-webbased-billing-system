
 <section id="intro" class="intro">
		<div class="intro-content">
				<!-- Section: services -->
    <section id="service" class="home-section nopadding paddingtop-60">

		<div class="container">
			<div class="container">
				<div class="row">
					<h5>Previous Bills</h5>
			<div class="col-sm-9">	
					<table class="table table-condensed">
						<thead>
							<tr>
								<th>Month</th>
								<th>Total KWH</th>
								<th>Electric Consumed(Php)</th>
								<th>Due Date</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php if(count($billings)): ?>
								<?php foreach($billings->result() as $billing):?>
									<tr>
										<td><?=$billing->month?></td>
										<td><?=$billing->present_use - $billing->previous_use?></td>
										<td>PHP <?=$presents->total_consume?></td>
										<td><?=$billing->due_date?></td>
										<td>
											<a href="<?=base_url('consumer/bills/showbill/' . $billing->id)?>" class="btn btn-success"><i class="glyphicon glyphicon-eye-open"></i>View</a>
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
			<div class="col-sm-3">
				<h3>Current Accounts</h3>
				
				<label>Month</label>
				<input type="month" class="form-control"  value="<?=$presents->month?>" readonly value="">
				<br>
				<h3>PHP <?=$presents->total_consume?></h3>
				<hr>
				<label>Previous KWH</label>
				<input type="text" class="form-control" value="<?=$presents->previous_use?>" readonly value="">
				<br>
				<label>Present KWH</label>
				<input type="text" class="form-control" value="<?=$presents->present_use?>" readonly value="">
				<br>
				<label>Due Date</label>
				<input type="date" class="form-control" value="<?=$presents->due_date?>"  readonly >
				<br>
				<label>Disconnection</label>
				<input type="date" class="form-control" value="<?=$presents->disconnection?>" readonly >
				<hr>
				<br>
			</div>

<br>
<br>


</div>
</div>
</section>
</div>
</section>