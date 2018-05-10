		 <!-- Top content -->
        <div class="top-content">
          
            <div class="inner-bg">

		<div class="container">
			<div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                          <div class="form-top">
                            <div class="form-top-left">
                                <h4><b>Step #2: Create you're account:</b></h4>
                            </div>
                            <div class="form-top-right">
                              <i class="fa fa-pencil-square"></i>
                            </div>
                            </div>
                            <div class="form-bottom">
                          <form role="form" action="<?=site_url('Register/validate_account/'. $id)?>" method="post" class="login-form">
                                    <?=$this->session->flashdata('message1')?>

                            <input type="hidden" value="<?=$id?>" name="id">

                            <div class="form-group">
                                <label>Username</label>
                                <input type="Text" name="username" placeholder="Username" class="form-password form-control">
                            </div>

                             <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" placeholder="password" class="form-password form-control">
                            </div>

                                <br>
                                <button type="submit" class="btn">Save</button>
                            <div>
                          </form>
                          <br>
                          <div class="alert alert-info"><p>Note: Please make sure to remember you're password.</p></div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>



