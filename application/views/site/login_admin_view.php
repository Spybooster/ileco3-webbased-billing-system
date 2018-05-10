		 <!-- Top content -->
        <div class="top-content">
          
            <div class="inner-bg">

		<div class="container">
			<div class="row">
			    <div class="col-sm-4 col-sm-offset-4">
						<div class="login-form">
						<!--login form-->
							
							<div class="form-top">
                            <div class="form-top-left">
							<b>Administrator Login </b>
							</div>
                            <div class="form-top-right">
                              <i class="fa fa-lock "></i>
                            </div>
                        </div>
                        <div class="form-bottom">
							<form action="<?=base_url('login/admin_validate')?>" method="post">
								<?=$this->session->flashdata('message')?>
							<div class="form-group">
                                <input required type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username">
                            </div>
							<div class="form-group">
                                <input required type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
                            </div>
								<br>
								<button type="submit" class="btn btn-default">Login</button>
							</form>
						</div><!--/login form-->
					</div>
				</div>

				</div>
		<br>

		<br>

		<br>
		</div>


