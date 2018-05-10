<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
							<h3><a href="<?=base_url('admin/account')?>">Accounts</a>/New Accounts(Consumer)</h3>	
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
			<form action="<?=base_url('admin/account/store')?>" method="post">
				<label for="">Account Number</label>
				<input required type="text" name="account_number" class="form-control">
				<br>

				<label for="">Pole Number</label>
				<input required type="text" name="pole" class="form-control" value="PO">
				<br>
				
				<label for="">Meter Serial Number</label>
				<input required type="text" name="meter_number" class="form-control">
				<br>
				
				<label for="">Multiplier</label>
				<input required type="number" name="multiplier" class="form-control" value="1">
				<br>

				<label for="">First Name</label>
				<input required type="text" name="fname" class="form-control">
				<br>
				
				<label for="">Last Name</label>
				<input required type="text" name="lname" class="form-control">
				<br>

				<label for="">Address</label>
				<input required type="text" name="address" class="form-control">
				<br>
				<label for="">Phone Number</label>
				<input required type="text" name="number"  class="form-control" value="+63">
				<br>
				<label for="">Type</label>
				<select type="text" name="type" class="form-control">
				    <option value="R" >Residential </option>
				    <option value="C" >Commercial </option>
				    <option value="I" >Industrial </option>
				</select>
				<br>

				

				<button type="submit" class=" btn btn-default get"><i class="glyphicon glyphicon-floppy-save"></i>save</button>
			</form>
		</div>
	</div>

</div>