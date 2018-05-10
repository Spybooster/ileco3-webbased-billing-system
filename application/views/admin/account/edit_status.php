<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
							<h3>Accounts/Edit/<?=$account->lname?></h3>	
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
		<div class="col-sm-6 col-sm-offset-3">
			<form action="<?=base_url('admin/account/update/'. $Billing->id)?>" method="post">
					<label for="">Billing Status</label>
				
				<label for="">Status</label>
				<select required type="text" name="type" class="form-control">
					<option value="pending" <?php echo ($Billing->type == "pending") ? "selected " : "" ?> >pending</option>
				    <option value="Paid" <?php echo ($Billing->type == "Paid") ? "selected " : "" ?> >Paid</option>
				    <option value="Unpaid" <?php echo ($Billing->type == "Unpaid") ? "selected " : "" ?> >Unpaid</option>
				    <option value="Disconnect" <?php echo ($Billing->type == "Disconnect") ? "selected " : "" ?> >Disconnect</option>
				</select>
				<br>	

			
				<button type="submit" class=" btn btn-default get"><i class="glyphicon glyphicon-floppy-save"></i>SaveChanges</button>
			</form>
		</div>
	</div>

</div>