<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
							<h3><a href="<?=base_url('admin/category')?>">Category</a>/Edit(<?=$category->name?>)</h3>	
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
			<form action="<?=base_url('admin/category/update/'. $category->id)?>" method="post">
					<label for="">Name</label>
				<input required type="text" name="name" value="<?=$category->name?>" class="form-control">
				<br>

			
				<br>	

			
				<button type="submit" class=" btn btn-default get"><i class="glyphicon glyphicon-floppy-save"></i>SaveChanges</button>
			</form>
		</div>
	</div>

</div>