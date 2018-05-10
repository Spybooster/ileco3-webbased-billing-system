	

</div>
<div style="height:30px;"></div>	
	<footer id="footer"><!--Footer-->
		

		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">&copy;Copyright - Ileco-III 2017-2018™.</p>
					<p class="pull-right">Develop by:<span>Computer Science-Group3-NIPSC.</span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	


    <script src="<?=base_url('dist/js/jquery.js')?>"></script>
	<script src="<?=base_url('dist//bootstrap.min.js')?>"></script>
	<script src="<?=base_url('dist/js/bootstrap.min.js')?>"></script>
	<script src="<?=base_url('dist/js/jquery.scrollUp.min.js')?>"></script>
	<script src="<?=base_url('dist/js/price-range.js')?>"></script>
    <script src="<?=base_url('dist/js/jquery.prettyPhoto.js')?>"></script>
    <script src="<?=base_url('dist/datatables/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?=base_url('dist/datatables/js/dataTables.bootstrap.js')?>"></script>

    <script>
        $(document).ready(function(){
            $('#table').dataTable();
            });

      		$('#pole_select').change(function(){
      			var pole = $(this).val();
      			if(pole){

      			window.open('<?=site_url('admin/account/bill/')?>/' + pole, '_self');
      			}else{
      				window.open('<?=site_url('admin/account/bill/')?>', '_self');
      			}
      		})

        	$('#current').keyup(function(){
        		var prev = $('#previous').val()
        		$('#used').val($(this).val()- prev)
        	})

        	// $('#distribution').keyup(function){
        	// 	var 
        	// })
        </script>

    <script src="<?=base_url('dist/js/main.js')?>"></script>
</body>
</html>