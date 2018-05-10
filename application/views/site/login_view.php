		 <!-- Top content -->
        <div class="top-content">
          
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                          <div class="form-top">
                            <div class="form-top-left">
                                <h3></h3>
                                <p>Enter your username and password to log on:</p>
                            </div>
                            <div class="form-top-right">
                              <i class="fa fa-lock"></i>
                            </div>
                            </div>
                            <div class="form-bottom">
                          <form role="form" action="<?=site_url('login/validate')?>" method="post" class="login-form">
                                    <?=$this->session->flashdata('message')?>
                            <div class="form-group">
                              <label class="sr-only" for="form-username">Username</label>
                                <input type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username">
                              </div>
                              <div class="form-group">
                                <label class="sr-only" for="form-password">Password</label>
                                <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
                              </div>
                                <br>
                                <center>
                                      <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i>  Sign in!</button>
                                       <br><br>
                                     Not Register yet? <a href="<?=site_url('register')?>" class="btn btn-info"><i class="fa fa-pencil-square"></i> Register Account </a>
                                </center>
                            <div class="clearfix"></div>
                            <div>
                          </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
<!--/login form-->
					</div>
                       <!--  <div class="col-sm-8 form-box">
                          <div class="form-top">
                            <div class="form-top-left">
                                <p>Not Registered Yet?</p>
                                <p>Please Fill-Up the following information below:</p>
                            </div>
                            <div class="form-top-right">
                              <i class="fa fa-pencil-square"></i>
                            </div>
                            </div>
                            <div class="form-bottom">
                          <form role="form" action="<?=site_url('Register/validate_number')?>" method="post" class="login-form">
                                    <?=$this->session->flashdata('message1')?>

                            <div class="form-group">
                              <p>
                              	Please be sure that youre account number to validate is correspondedly correct
                              	to your ILECO Bill.
                              </p>
                            </div>
                              
                            <div class="form-group">
                                <input type="Text" name="number" placeholder="Account Number of Your ILECO Electric Bill Here" class="form-password form-control" id="form-password">
                            </div>

                                <br>
                                <button type="submit" class="btn">Validate</button>
                          
                            <div class="clearfix"></div>
                            <div>
                          </form>
                        </div>
                        </div> -->
                        
                    </div>
                </div>
            </div>
            
        </div>



