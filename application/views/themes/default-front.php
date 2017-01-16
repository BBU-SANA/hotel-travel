<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>
    <?php echo $title; ?>
  </title>
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Font awesome icon -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/materialize.min.css" media="screen,projection"
  />
  <!-- Custom main css -->
  <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main-style.css" media="screen,projection" />

  <?php
  /** -- Copy from here -- */
  if(!empty($meta))
  foreach($meta as $name=>$content){
    echo "\n\t\t";
    ?><meta name="<?php echo $name; ?>" content="<?php echo $content; ?>" /><?php
       }
  echo "\n";

  if(!empty($canonical))
  {
    echo "\n\t\t";
    ?><link rel="canonical" href="<?php echo $canonical?>" /><?php

  }
  echo "\n\t";

  foreach($css as $file){
    echo "\n\t\t";
    ?><link rel="stylesheet" href="<?php echo $file; ?>" type="text/css" /><?php
  } echo "\n\t";

  /** -- to here -- */
  ?>

</head>

<body>
  <header>
    <nav class="white">
      <div class="nav-wrapper container">
        <a href="<?php echo base_url();?>" class="brand-logo">Logo</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="<?php echo base_url();?>">Home</a></li>
          <li><a href="<?php echo base_url();?>service">Services</a></li>
          <li><a href="<?php echo base_url();?>booking">Bookings</a></li>
          <li><a href="<?php echo base_url();?>location">Locations</a></li>
          <li><a href="<?php echo base_url();?>gallery">Gallery</a></li>
          <li><a href="<?php echo base_url();?>contact">Contact</a></li>
          <?php
          if($this->session->userdata('is_logged_in') OR $this->session->userdata('logged_in')){
      			echo '<li><a class="waves-effect waves-light btn" href="signout">Sign Out</a></li>';
          }else{
            echo '<li><a class="waves-effect waves-light btn" href="signin">Sign In</a></li>';
          }
          ?>
        </ul>
        <ul class="side-nav" id="mobile-demo">
          <li><a href="<?php echo base_url();?>"><i class="material-icons">home</i>Home</a></li>
          <li><a href="<?php echo base_url();?>service"><i class="material-icons">near_me</i>Services</a></li>
          <li><a href="<?php echo base_url();?>booking"><i class="material-icons">hotel</i>Bookings</a></li>
          <li><a href="<?php echo base_url();?>location"><i class="material-icons">location_on</i>Locations</a></li>
          <li><a href="<?php echo base_url();?>gallery"><i class="material-icons">photo</i>Gallery</a></li>
          <li><a href="<?php echo base_url();?>contact"><i class="material-icons">phone</i>Contact</a></li>
          <?php
          if($this->session->userdata('is_logged_in') OR $this->session->userdata('logged_in')){
      			echo '<li><a href="signout"><i class="material-icons">input</i>Sign Out</a></li>';
          }else{
            echo '<li><a href="signup"><i class="material-icons">group_add</i>Register</a></li>';
            echo '<li><a href="signin"><i class="material-icons">input</i>Sign In</a></li>';
          }
          ?>
        </ul>
      </div>
    </nav>
  </header>

  <!-- content link to another pages -->
  <?php echo $output;?>
  <!-- ============ -->

  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support
            and continue development on this project and is greatly appreciated.</p>

        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        &copy; 2016 Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">BBU Students</a>
      </div>
    </div>
  </footer>

  <!-- firebase google api -->
  <script src="https://www.gstatic.com/firebasejs/3.6.4/firebase.js"></script>

  <?php
  /** -- Copy from here -- */
  foreach($js as $file){
      echo "\n\t\t";
      ?><script src="<?php echo $file; ?>"></script><?php
  } echo "\n\t";

  /** -- to here -- */
  ?>

  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.min.js"></script>
  <!-- Custom jQuery -->
  <script type="text/javascript">
      $( document ).ready(function(){
        $(".button-collapse").sideNav();
        $(".parallax").parallax();
      });

      $('.checkindate').pickadate({
          selectMonths: true, // Creates a dropdown to control month
          selectYears: 15, // Creates a dropdown of 15 years to control years
          onStart: function ()
          {
              var date = new Date();
              this.set('select', [date.getFullYear(), date.getMonth(), date.getDate()]);
          },
          min: true,
      });
      $('.checkoutdate').pickadate({
          selectMonths: true, // Creates a dropdown to control month
          selectYears: 15, // Creates a dropdown of 15 years to control years
          onStart: function ()
          {
              var date = new Date();
              this.set('select', [date.getFullYear(), date.getMonth(), date.getDate()]);
          },
          min: 1,
      });

      $(document).ready(function() {
        $('select').material_select();
      });

    </script>
</body>

</html>
