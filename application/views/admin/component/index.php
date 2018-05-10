<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
							<h3>Components</h3>	
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<a href="<?=base_url('admin/component/create')?>" class="btn btn-default get"><i class="fa fa-list"></i>New Component</a>	
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
						<th>Rate</th>
						<th>Taxable</th>
						<th>Category</th>
						
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php if(count($components)): ?>
						<?php foreach($components->result() as $component):?>
							<tr>
								
								<td><?=$component->component_name?></td>
								<td><?=$component->price?></td>
								<td><?php echo $component->taxable == 1 ? "Yes" : "" ?></td>
								<td><?=$component->name?></td>
								<td>
									<a href="<?=base_url('admin/component/edit/' . $component->component_id)?>" class="btn"><i class="glyphicon glyphicon-pencil"></i></a>
									<a href="<?=base_url('admin/component/delete/' . $component->component_id)?>" class="btn"><i class="glyphicon glyphicon-trash"></i></a>
								</td>
							</tr>
					    <?php endforeach;?>
					<?php else :?>
						<tr>
							<td colspan="5" align="center"> No component Found</td>
						</tr>
				    <?php endif?>
				</tbody>
			</table>



	</div>
</div>
