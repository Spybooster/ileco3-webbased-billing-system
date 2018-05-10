<br>
<br>
<div class="container">

		<div class="search_box pull-right">
			<button class="btn btn-default get" onclick="printContent('print-body')"> <i class="fa fa-print"></i>Print Bill</button>
		</div>

		<div class="row">
					<div class="col-sm-9">
							<h3><a href="<?=base_url('admin/account')?>">Accounts</a>/<a href="<?=base_url('admin/account/show/' . $consumer->id)?>">Billings</a>/show(<?=$consumer->lname.', '. $consumer->fname?> - <?=$previous->month?>)</h3>
							<br />	
					</div>
<div class="col-sm-8 col-sm-offset-2">

<div id="print-body">
<table style="font-size:12px" class="table table-bordered table-hover table-condensed">
			<thead>
				<tr class="info">
                  <th>Account Number</th>
                  <th>Meter Serial Number</th>
                  <th>Type</th>
                  <th>Due Date</th>
                </tr>
              </thead>
               <tbody>
                <tr>
                  <td><?=$consumer->account_number?></td>
                  <td><?=$consumer->meter_number?></td>
                  <td><?=$consumer->type?></td>
                  <td><?=$previous->due_date?></td>
				</tr> 
              </tbody>
              <tbody>
              	<tr>
              		<td colspan="3" class="" ><h4><?=$consumer->lname.', '.$consumer->fname?></h4><sub><?=$consumer->address?></sub></td>
              		<td colspan="1"><h5>Multiplier</h5><sub><?=$consumer->multiplier?></sub></td>
              	</tr>
              </tbody>
              <thead>
        				  <tr class="info">
        				    <td colspan="4" align="center">Period Covered</td>
        				  </tr>
    				</thead>
      				<thead>
      				    <tr class="info">
          				  <td colspan="1" align="center">From</td>
                    <td colspan="1" align="center">To</td>
          				  <td colspan="2" align="center">Year/Month</td>
          				</tr>
                </thead>
				        <tbody>
                      <tr>
						<td></td>
                        <td colspan="1" align="center"><?=$previous->date_to?></td>
                        <td colspan="2" align="center"><?=$previous->month?></td>
      				        </tr>
				        </tbody>
        				<thead>
            				  <tr class="info">
            					   <td colspan="4" align="center">Meter Reading</td>
            					</tr>
        				</thead>
        				<thead>
                          <td colspan="1" align="center" class="info">Previous</td>
                          <td colspan="1" align="center" class="info">Present</td>
        				          <td colspan="2" align="center" class="info">KWH Used</td>
        				</thead>
        				<tbody>
        				    <tr>
                          <td colspan="1" align="center"><?=$previous->previous_use?></td>
                          <td colspan="1" align="center"><?=$previous->present_use?></td>
        				          <td colspan="2" align="center"><?=$used?></td>
                    </tr>
        				</tbody>
                <thead>
	                <tr class="info">
	                    <th>Clasification</th>
	                    <th>Rate Component</th>
	                    <th>Rate</th>
	                    <th>Ammount</th>
                    </tr>
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
					$amount = $used * $component->price;
					
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
									<b>Php <?=round($amount, 2)?></b>
								</td>
								</tr>
								
							<?php endforeach;?>	
						</tr>
						<tr>
						<td colspan="2" align="center"><b>Sub-Total</b></td>
						<td colspan="2" align="right"><b><?=round($subtotol, 2)?></b></td>
					  </tr>
					<?php endforeach;?>
					<tr>
						<td colspan="2"><b>Total</b></td>
						<td colspan="2" align="right"><b>P<?=round($total, 2)?></b></td>
					</tr>
				</tbody>
				</tbody>
				 <tr class="info">
                  <td colspan="1" align="center"></td>
                  <td colspan="1" align="center">Pole Number</td>
                  <td colspan="2" align="center">Schedule of Disconnection</td>
          </tr>
                </thead>
        <tbody>
                <tr>
                  <td colspan="1" align="center"></td>
                  <td colspan="1" align="center"><i><?=$consumer->pole?></i></td>
                  <td colspan="2" align="center"><i><?=$previous->disconnection?></i></td>
                </tr>
              </tbody>


			</table>
	</div>
	</div>
	</div>
</div>
</div>