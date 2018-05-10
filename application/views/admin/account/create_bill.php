<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
							<h3>Accounts > Billings</h3>	
					</div>
					<div class="col-sm-3">
						
					</div>
				</div>
			</div>
</div>
<div class="container">
	<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<div class="row">
					<form action="<?=base_url('admin/account/createbill/' . $account->id)?>" method="get">
						<div class="col-sm-3">
						<label for="">Previous KWH</label>
						<input type="number" id="previous" name="previous"  readonly value="<?=$previous?>" class="form-control">
						</div>
						<div class="col-sm-3">
						<label for="">Current KWH</label>
						<input type="number" required name="current" id="current"  class="form-control">
						</div>
						<div class="col-sm-3">
						<label for="">Used KWH</label>
						<input type="number" name="used"  readonly id="used"  class="form-control">
						</div>

                        <div class="col-sm-2">
                            <br>
                            <button class="btn btn-default" type="submit">Apply</button>
                        </div>
                    </form>
                    <br>
				</div>
			<br>
			<table class="table table-stripped table-bordered" style="font-size:11px">
                <thead>
                    <th>Clasification</th>
                    <th>Rate Component</th>
                    <th>Rate</th>
                    <th>Ammount</th>
                </thead>
				<tbody>
					<?php 
						$first_counter = 0;
						$total = 0;
						$taxable_total = 0;
						$others = 0;
					foreach($categories->result() as $category):
						$first_counter++;
						
					  $components = get_components($category->id);
					 $count = 0;
					
					?>

					<?php 
					
					$subtotol = 0;
					
					
					
					foreach($components->result() as $component): 
					$amount = $this->input->get('used') * $component->price;
					
					if($component->taxable){
					
						$taxable_total += $amount;
					
					}

					if($category->name == "Others")
					{
						$others += $amount;
					}
					

					
					if($component->name == 'Distribution'){
						
						$amount = $taxable_total * $component->price;
					
					}

					if($component->name == 'Others'){
						
						$amount = $others * $component->price;
					
					}
					
					$subtotol += $amount;
					
					$total += $amount;
					
					$count++;

					?>
						<tr>
							<td ><b><?php echo $count == 1 ?  $category->name : "" ?></b></td>
							 	
								<td><?=$component->name?></td>
								<td align="right"><?=$component->price?></td>
								<td align="right">
									<b>Php <?=round($amount, 4)?></b>
								</td>
								</tr>
								
							<?php endforeach;?>	
						</tr>
						<tr>
						<td colspan="2" align="center"><b>Sub-Total</b></td>
						<td colspan="2" align="right"><b><?=round($subtotol, 4)?></b></td>
					  </tr>
					<?php endforeach;?>
					<tr>
						<td colspan="2"><b>Total</b></td>
						<td colspan="2" align="right"><b>P<?=round($total, 4)?></b></td>
					</tr>
				</tbody>


			</table>
			</div>


	</div>
</div>
