<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
							<h3><a href="<?=base_url('admin/account')?>">Accounts</a>/Edit Account(<?=$account->lname?>, <?=$account->fname?>)</h3>	
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
			<form action="<?=base_url('admin/account/update/'. $account->id)?>" method="post">
					<label for="">Account Number</label>
				<input required type="text" name="account_number" value="<?=$account->account_number?>" class="form-control">
				<br>
				<br>

				<label for="">Pole Number</label>
				<input required type="text" name="pole" value="<?=$account->pole?>" class="form-control">
				<br>

				<label for="">Meter Serial Number</label>
				<input required type="text" name="meter_number" value="<?=$account->meter_number?>" class="form-control">
				<br>

				<label for="">Multiplier</label>
				<input required type="number" name="multiplier" class="form-control" value="<?=$account->multiplier?>">
				<br>
				
				<label for="">First Name</label>
				<input required type="text" name="fname" value="<?=$account->fname?>" class="form-control">
				<br>
				
				<label for="">Last Name</label>
				<input required type="text" name="lname" value="<?=$account->lname?>" class="form-control">
				<br>

				<label for="">Address</label>
				<input required type="text" name="address" value="<?=$account->address?>" class="form-control">
				<br>
				<label for="">Phone Number</label>
				<input required type="text" name="number" value="<?=$account->number?>" class="form-control">
				<br>

				<label for="">Type</label>
				<select required type="text" name="type" class="form-control">
				    <option value="R" <?php echo ($account->type == "R") ? "selected " : "" ?> >Residential </option>
				    <option value="C" <?php echo ($account->type == "C") ? "selected " : "" ?> >Commercial </option>
				    <option value="I" <?php echo ($account->type == "I") ? "selected " : "" ?> >Industrial </option>
				</select>
				<br>	

			
				<button type="submit" class=" btn btn-default get"><i class="glyphicon glyphicon-floppy-save"></i>SaveChanges</button>
			</form>
		</div>
	</div>

</div>