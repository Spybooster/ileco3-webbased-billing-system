<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
							<h3><a href="<?=base_url('admin/component')?>">Components</a>/Edit(<?=$component->name?>-<?=$component->price?>)</h3>	
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
			<form action="<?=base_url('admin/component/update/' . $component->id)?>" method="post">
				<label for=""> Name</label>
				<input required type="text" name="name" value="<?=$component->name?>" class="form-control">
				<br>

				<label for=""> Category</label>
				<select name="component_category_id" id="" required class="form-control">
					<?php foreach($category->result() as $category):?>
						<option value="<?=$category->id?>" <?php echo $component->component_category_id == $category->id ? " selected" : "" ?>><?=$category->name?></option>
					<?php endforeach;?>
				</select>
				<br>

				<label for=""> Rate</label>
				<input required type="text" value="<?=$component->price?>" name="price" class="form-control">
				<br>
				

				<input type="checkbox" value="1" id="taxable" <?php echo $component->taxable ? "checked" : "" ?> name="taxable"> <label for="taxable"> Taxable</label>
				<br>
				
				

				<button type="submit" class=" btn btn-default get"><i class="glyphicon glyphicon-floppy-save"></i>SaveChanges</button>
			</form>
		</div>
	</div>

</div>