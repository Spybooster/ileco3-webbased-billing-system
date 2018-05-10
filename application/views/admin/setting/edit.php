<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
							<h3><a href="<?=base_url('admin/setting')?>"> Settings</a>/Edit/Account-Admin(<?=$any->username?>)</h3>	
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
			<form action="<?=base_url('admin/setting/update/'. $any->id)?>" method="post">
					<label for="">Name</label>
				<input required type="text" name="name" value="<?=$any->name?>" class="form-control">
				<br>
				<label for="">Username</label>
				<input required type="text" name="Username" value="<?=$any->username?>" class="form-control">
				<br>

			
				<br>	

			
				<button type="submit" class=" btn btn-default get"><i class="glyphicon glyphicon-floppy-save"></i>SaveChanges</button>
			</form>
		</div>
	</div>

</div>