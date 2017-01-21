<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administor</title>

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/materialize.min.css" media="screen,projection"
    />
    <!-- Custom main css -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main-style.css" media="screen,projection" />
  </head>
  <body>
    <section>
      <div class="container">
        <div class="section">
          <br>
          <div class="row">
            <h4 class="thin center">ADMIN SYSTEM</h4>
          </div class>
          <!-- sign in from -->
          <div class="row" style="margin: auto; width: 300px;">
            <!-- sign in with email register -->
            <?php
            $attributes = array('class' => 'form-signin');
            echo form_open('admin/index/validate_credentials', $attributes);

            if(isset($message_error) && $message_error == TRUE){
              echo "<div class='form__error-wrapper js-form__err-animation'>";
                echo "<p class='z-depth-1 form__error'>";
                echo "<strong>Oh snap!</strong> Change a few things up and try submitting again.";
                echo "</p>";
              echo "</div>";
            }
            ?>
              <div class="row">
                <div class="input-field col s12">
                  <input name="user_name" id="username" type="text" class="validate">
                  <label for="username">Username</label>
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
            <?php
            echo form_close();
            ?>
            <div class="row center">
              <div class="col s12">
                <a href="#">Forget Password?</a>
              </div>
            </div>
            <br>
            <div class="row center">
              <div class="col s12">
                <a href="<?php echo base_url();?>" class="btn grey">homepage <svg style="width:24px;height:24px;top: 6px; position: relative; right: 2px;" viewBox="0 0 24 24">
                <path fill="#ffffff" d="M5.59,7.41L7,6L13,12L7,18L5.59,16.59L10.17,12L5.59,7.41M11.59,7.41L13,6L19,12L13,18L11.59,16.59L16.17,12L11.59,7.41Z" />
                </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>

  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.7.1.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.min.js"></script>

</html>
