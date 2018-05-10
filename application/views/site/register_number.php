<!-- Top content -->
        <div class="top-content">
            
            <div class="inner-bg">
            <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 form-box">
                    <div class="form-top">
                                <div class="form-top-left">
                                    <h4><b>Step #1: Validate your Account number.</b></h4>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-group"></i>
                                </div>
                            </div>
                   <div class="form-bottom">
                         <?=$this->session->flashdata('message1')?>
                                <form role="form" action="<?=site_url('Register/validate_number')?>" method="post" class="login-form">
                                    <div class="form-group">
                                        <label>Account Number:</label>
                                        <input type="text" name="number" placeholder="ex: 10-10062-18" class="form-password form-control" required="true">
                                    </div>
                                    <button type="submit" class="btn">Validate</button>
                                </form>
                    </div>
                 </div>
                </div>
            </div>
            
            </div>
        </div>