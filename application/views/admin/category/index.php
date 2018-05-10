<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
							<h3>Category</h3>	
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<a href="<?=base_url('admin/category/create')?>" class="btn btn-default get"><i class="fa fa-pencil-square"></i>New Category</a>	
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
						
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php if(count($categorys)): ?>
						<?php foreach($categorys->result() as $category):?>
							<tr>
								
								<td><?=$category->name?></td>
								<td>
									<a href="<?=base_url('admin/category/edit/' . $category->id)?>" class="btn"><i class="glyphicon glyphicon-pencil"></i></a>
									<a href="<?=base_url('admin/category/delete/' . $category->id)?>" class="btn"> <i class="glyphicon glyphicon-trash"></i></a>
								</td>
							</tr>
					    <?php endforeach;?>
					<?php else :?>
						<tr>
							<td colspan="5" align="center"> No category Found</td>
						</tr>
				    <?php endif?>
				</tbody>
			</table>



	</div>
</div>
