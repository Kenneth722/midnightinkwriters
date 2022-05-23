<div id="site-content">
      <div class="container">
            <h1><?php echo lang('change_password_heading');?></h1>

            <div id="infoMessage"><?php echo $message;?></div>

            <div class="row">
                  <div class="col-md-6 col-sm-6">
                        <div class="card bg-purple text-white">
                              <div class="card-body">

                                    <?php echo form_open("auth/change_password");?>

                                          <p>
                                                <?php echo lang('change_password_old_password_label', 'old_password');?> <br />
                                                <?php echo form_input($old_password);?>
                                          </p>

                                          <p>
                                                <label for="new_password"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label> <br />
                                                <?php echo form_input($new_password);?>
                                          </p>

                                          <p>
                                                <?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?> <br />
                                                <?php echo form_input($new_password_confirm);?>
                                          </p>

                                          <?php echo form_input($user_id);?>
                                          <p><?php echo form_submit('submit', lang('change_password_submit_btn'));?></p>

                                    <?php echo form_close();?>

                              </div>
                        </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                        <section id="hero" class="p-0">
                              <div class="hero-img">
                                    <center>
                                          <img src="<?php echo base_url(); ?>/assets/img/homepagebook.jpg" class="img-fluid animated" alt="">
                                    </center>
                              </div>
                        </section>
                  </div>
            </div>
      </div>
</div>