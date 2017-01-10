<!-- content home page -->
<!-- slider section -->
<section>
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center">Hotel & Travel</h1>
        <div class="row center">
          <h5 class="header col s12 light">The best service at the lowest price</h5>
        </div>
        <div class="row center">

          <?php
          if($this->session->userdata('is_logged_in') && ($this->session->userdata('is_member')==false)){
            echo '<a href="admin/dashboard" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Start Booking</a>';
          }elseif($this->session->userdata('logged_in') && ($this->session->userdata('is_member')==true)){
            echo '<a href="member/dashboard" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Start Booking</a>';
          }else{
            echo '<a href="signin" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Start Booking</a>';
          }
          ?>
          
        </div>
        <br><br>
      </div>
    </div>
    <div class="parallax"><img src="<?php echo base_url(); ?>assets/images/img-hotel.jpg" alt="Unsplashed background img 1"></div>
  </div>
</section>
<!-- ============================= -->

<!-- content information section -->
<section>
  <div class="container">
    <div class="section">
      <div class="row">
        <h3 class="thin center">Welcome Hotel & Travel</h3>
      </div>
      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m6 center">
          <img class="card lighten-1" width="100%" src="<?php echo base_url(); ?>assets/images/hotel1.jpg"
            alt="">
        </div>

        <div class="col s12 m6">
          <p class="light welcome-message">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates
            components and animations that provide more feedback to users. Additionally, a single underlying responsive
            system across all platforms allow for a more unified user experience.</p>
        </div>
      </div>
    </div>

    <div class="section">
      <!-- Feature List -->
      <div class="row center" id="feature">
        <span id="features" class="scrollspy"></span>
        <h3 class="thin">Tour Guides</h3>

        <div id="feature-table" class="card light">
          <div class="feature-item">
            <p class="flow-text">Unlimited Messages<i class="mdi-navigation-check"></i></p>
          </div>
          <div class="feature-item">
            <p class="flow-text"><a href="/message-archive">Message Archive</a><i class="mdi-navigation-check"></i></p>
          </div>
          <div class="feature-item">
            <p class="flow-text"><a href="/delivery-reports">Delivery Reports</a><i class="mdi-navigation-check"></i></p>
          </div>
          <div class="feature-item">
            <p class="flow-text"><a href="/online-signup">Web Signups</a><i class="mdi-navigation-check"></i></p>
          </div>
          <div class="feature-item">
            <p class="flow-text"><a href="/daily-digest-email">Daily Digest</a><i class="mdi-navigation-check"></i></p>
          </div>
          <div class="feature-item">
            <p class="flow-text"><a href="/custom-email-footer">Custom Footers</a><i class="mdi-navigation-check"></i></p>
          </div>
          <div class="feature-item">
            <p class="flow-text">Import/Export Members<i class="mdi-navigation-check"></i></p>
          </div>
          <div class="feature-item">
            <p class="flow-text"><a href="/custom-domains">Custom Domains</a><i class="mdi-navigation-check"></i></p>
          </div>
          <a href="#create" class="btn btn-large create-list-link">Get Started <svg style="width:24px;height:24px;top: 6px; position: relative; right: 2px;" viewBox="0 0 24 24">
          <path fill="#ffffff" d="M5.59,7.41L7,6L13,12L7,18L5.59,16.59L10.17,12L5.59,7.41M11.59,7.41L13,6L19,12L13,18L11.59,16.59L16.17,12L11.59,7.41Z" />
          </svg>


          </a>
        </div>
      </div>

      <div class="section">
        <div class="row">
          <h3 class="thin center">Gallery</h3>
        </div>

        <div class="row">
          <div class="col l4 m6 s12">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="<?php echo base_url(); ?>assets/images/travel1.jpg" height="180">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Siem Reap<i class="material-icons right">more_vert</i></span>
                <p><a target="_blank" href="https://www.google.com/destination?q=cambodia+travel&client=firefox-b-ab&site=search&output=search&dest_mid=/m/0ggdlz&sa=X&ved=0ahUKEwiBzfeBsfDQAhWDyLwKHQjGA6kQ69EBCB0oATAA">More Details</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Siem Reap<i class="material-icons right">close</i></span>
                <p>
                  Siem Reap, a resort town in northwestern Cambodia, is the gateway to the ruins of Angkor, the seat of the Khmer kingdom from the 9th–15th centuries. Angkor’s vast complex of intricate stone buildings includes preserved Angkor Wat, the main temple, which is pictured on Cambodia’s flag. Giant, mysterious faces are carved into the Bayon Temple at Angkor Thom.
                </p>
              </div>
            </div>
          </div>

          <div class="col l4 m6 s12">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="<?php echo base_url(); ?>assets/images/travel2.jpg" height="180">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Sihanoukville<i class="material-icons right">more_vert</i></span>
                <p><a target="_blank" href="https://www.google.com/destination?q=cambodia+travel&client=firefox-b-ab&site=search&output=search&dest_mid=/m/02h2bd&sa=X&ved=0ahUKEwiB0tOWtPDQAhUGT7wKHarKAqUQ69EBCCEoAzAA">More details</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Sihanoukville<i class="material-icons right">close</i></span>
                <p>
                  Sihanoukville is a province in southwest Cambodia known for its beaches, tropical islands and the mangrove jungles of Ream National Park. Set around a deep-water port on a peninsula jutting into the Gulf of Thailand, the provincial capital of Sihanoukville is lined with palm-fringed beaches, seafood restaurants and late-night bars. Overlooking the capital is the hilltop Buddhist temple of Wat Leu.
                </p>
              </div>
            </div>
          </div>

          <div class="col l4 m6 s12">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="<?php echo base_url(); ?>assets/images/travel3.jpg" height="180">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Kampot<i class="material-icons right">more_vert</i></span>
                <p><a target="_blank" href="https://www.google.com/destination?client=firefox-b-ab&site=async/decc&output=search&dest_mid=/m/0c3ntb&tpd=&sa=X&ved=0ahUKEwiZlpeNvPDQAhVJNJQKHZWMDMQQh9IBCCo">More Details</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Kampot<i class="material-icons right">close</i></span>
                <p>
                  Kampot is a city in southern Cambodia and the capital of Kampot Province. It is situated at the Praek Tuek Chhu river southeast of the Elephant Mountains and around 5 km from the Gulf of Thailand. Kampot was the capital of the Circonscription Résidentielle de Kampot under French rule and Cambodia's most important sea port after the loss of the Mekong Delta and before the establishment of Sihanoukville. Its center is unlike most Cambodian provincial capitals composed of 19th century French colonial architecture.
                </p>
              </div>
            </div>
          </div>
        </div>
    </div>
</section>
