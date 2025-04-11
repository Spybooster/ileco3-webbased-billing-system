<section id="intro" class="intro">
    <div class="intro-content">
        <section id="service" class="home-section nopadding paddingtop-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                        <div class="profile_img">
                            <div class="avatar-view" title="Change the avatar">
                                <img src="<?= base_url('img/Profile/img-1.jpg') ?>" width="50%" height="50%" class="img-thumbnail" alt="Avatar">
                            </div>
                        </div>
                        
                        <?php if ($consumer): ?>
                            <h5><?= $consumer->fname . ' ' . $consumer->lname ?></h5>
                            <ul class="list-unstyled user_data">
                                <li><i class="fa fa-map-marker user-profile-icon"></i> <?= $consumer->address ?></li>
                                <li><i class="fa fa-bookmark user-profile-icon"></i> <?= $consumer->account_number ?></li>
                                <li><i class="fa fa-home user-profile-icon"></i> <?= $consumer->type ?></li>
                            </ul>
                        <?php else: ?>
                            <p>User information is not available. Please make sure you are logged in.</p>
                        <?php endif; ?>
                    </div>

                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="profile_title">
                            <div>
                                <h2>Profile Information</h2>
                            </div>
                        </div>

                        <div>
                            <p>Only the administrator is authorized to change the following information. If there are any updates to the details above, please contact us or visit <b style="color: yellowgreen;">ILECO III Cooperative</b>.</p>

                            <div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                                <img style="width: 50%; height: 50%;" src="<?= base_url('img/dummy/img-4.png') ?>" class="img-responsive" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>