<div id="site-content">
  <div class="container">
    <h1><?php echo lang('login_heading');?></h1>
    <p><?php echo lang('login_subheading');?></p>

    <div id="infoMessage"><?php echo $message;?></div>


    <div class="row">
      <div class="col-md-6 col-sm-6">
        <div class="card bg-purple text-white">
          <div class="card-body">
            <?php echo form_open("auth/login");?>
              <p>
                <?php echo lang('login_identity_label', 'identity');?>
                <?php echo form_input($identity);?>
              </p>

              <p>
                <?php echo lang('login_password_label', 'password');?>
                <?php echo form_input($password);?>
              </p>

              <p>
                <?php echo lang('login_remember_label', 'remember');?>
                <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
              </p>

              <p><?php echo form_submit($submit);?></p>
            <?php echo form_close();?>
            <p><a href="forgot_password" class="text-white"><?php echo lang('login_forgot_password');?></a></p>
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