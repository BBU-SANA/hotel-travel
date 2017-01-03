<section>
  <div class="container">
    <div class="section">
      <div class="row">
        <h4 class="thin center">Sign In</h4>
      </div class>
      <!-- sign in from -->
      <div class="row" style="margin: auto; width: 300px;">
        <!-- sign up with social media -->
        <div class="row">
          <div class="col s6" style="padding: 0px;">
            <a class="waves-effect waves-light btn-large red darken-3" style="padding-left: 20px;"><i class="fa fa-google-plus left"></i>google</a>
          </div>
          <div class="col s6" style="padding: 0px;">
            <a class="waves-effect waves-light btn-large blue darken-4 right" style="padding-left: 20px;"><i class="fa fa-facebook left"></i>facebook</a>
          </div>
        </div>
        <!-- sign in with email register -->
        <?php
        echo form_open('member/validate_credentials');
        ?>
        <div class="row">
          <div class="row">
            <div class="input-field col s12">
              <input name="user_name" id="email" type="email" class="validate">
              <label for="email">Email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input name="password" id="password" type="password" class="validate">
              <label for="password">Password</label>
            </div>
          </div>
          <div class="row">
            <div class="col s12">
              <button class="col s12 btn waves-effect waves-light btn-large" type="submit" name="action">
                Sign In
              </button>
            </div>
          </div>
        </div>
        <?php
        echo form_close();
        ?>

        <div class="row center">
          <div class="col s12">
            <a href="#">Forget Password?</a>
          </div>
        </div>
        <div class="row center">
          <div class="col s12">
            Don't have an account? &nbsp;<a href="<?php echo base_url();?>signup">SIGN UP</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
