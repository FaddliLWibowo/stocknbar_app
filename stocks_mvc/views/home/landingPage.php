<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="initial-scale=1.0,maximum-scale=2.0,width=device-width" name="viewport">
    
    <title>International Startups Exchange</title>

    <meta content="<?php echo google_verify(); ?>" name="google-site-verification">
  	<meta content="<?php echo detectify_verify(); ?>" name="detectify-verification">
  	<meta content="notranslate" name="google">
  	<meta content="<?php echo seo_description(); ?>" name="description">
  	<meta content="<?php echo seo_keyword(); ?>" name="keywords">

  	<meta content="<?php echo static_url('images/stocknbar-big.png'); ?>" name="image" property="og:image">
  	<link href="<?php echo base_url(); ?>" rel="canonical">
  	<meta content="<?php echo site_name(); ?>" property="og:site_name">
  	<meta content="<?php echo title(); ?>" property="og:title">
  	<meta content="<?php echo seo_description(); ?>" property="og:description">
  	<meta content="<?php echo site_url(); ?>" property="og:url">

  	<meta content="summary" name="twitter:card">
  	<meta content="<?php echo site_name(); ?>" name="twitter:site">
  	<meta content="<?php echo title(); ?>" name="twitter:title">
  	<meta content="<?php echo seo_description(); ?>" name="twitter:description">
  	<meta content="<?php echo static_url('images/stocknbar-big.png'); ?>" name="twitter:image:src">

  	<link href="<?php echo static_url('images/favicon.png'); ?>" rel="shortcut icon">
  	<link href="<?php echo static_url('images/icons/Icon.png'); ?>" rel="apple-touch-icon-precomposed" sizes="57x57">
  	<link href="<?php echo static_url('images/icons/Icon-72.png'); ?>" rel="apple-touch-icon-precomposed" sizes="72x72">
  	<link href="<?php echo static_url('images/icons/Icon@2x.png'); ?>" rel="apple-touch-icon-precomposed" sizes="114x114">
  	<link href="<?php echo static_url('images/icons/Icon-72@2x.png'); ?>" rel="apple-touch-icon-precomposed" sizes="144x144">

  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo static_url('3rdparty/normalize-3.0.2/normalize.css'); ?>">
  	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <script type="text/javascript">alert("ie dobol");</script>
      <![endif]-->

      <link rel="stylesheet" href="<?php echo static_url('css/stocknbar-1st.css'); ?>">
  </head>
  <body>
    <div class="container snb-home">
      <div class="text-center">
        <img src="<?php echo static_url('images/stocknbar-big.png'); ?>" class="snb-logo"><span class="snb-text-logo" id="snb-text-logo"></span>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">

          <h3 class="snb-title-mvp text-center" id="snb-slogan"></h3>
          <div class="snb-concept">
            <p class="snb-lead" id="snb-concept-1" style="display:none;">pendanaan adalah kunci pertumbuhan startup, kami menyediakan tempat untuk founder dan co-founder dengan idenya untuk menyampaikan konsep bisnis kepada para investor individu dan venture capital</p>
            <p class="snb-lead" id="snb-concept-2" style="display:none;">banyak ide-ide brilian startup yang berasal dari daerah berkembang tidak tersampaikan, sehingga investor belum tahu konsep bisnis potensial yang berasal dari daerah berkembang di dunia. stocknbar mengumpulkan startup dengan konsep bisnis mereka untuk para investor</p>
            <p class="snb-lead" id="snb-concept-3" style="display:none;">startup yang telah berhasil bertahan membutuhkan dana untuk berekspansi, kami menyediakan grafik real-time perkembangan startup dan portfolio yang dapat dimonitor setiap saat oleh investor</p>
            <p class="snb-lead" id="snb-concept-4" style="display:none;">kami mengundang anda untuk mencoba stocknbar.com, isikan email anda untuk merequest undangan eksklusif stocknbar beta (email anda tidak digunakan untuk hal lain)</p>
          </div>
        </div>

        <div class="col-md-8 col-md-offset-2">
          <p class="snb-registration-message text-center" id="snb-registration-message"><?php
            if ($this->session->userdata('invitation_status') == 'registered') {
              echo 'anda sudah terdaftar menjadi penerima undangan eksklusif, terima kasih';
            }
          ?></p>
          <?php
          if ($this->session->userdata('invitation_status') == '') { ?>
          <form id="snb-form">
            <div class="snb-checkbox text-center">
              anda adalah :
              <div class="radio-inline">
                <label>
                  <input type="radio" name="invitation_type" id="invitation_type" value="startup" checked>
                  startup
                </label>
              </div>
              <div class="radio-inline">
                <label>
                  <input type="radio" name="invitation_type" id="invitation_type" value="investor">
                  investor
                </label>
              </div>
            </div>
            <div class="form-group col-md-8">
              <input type="email" class="form-control" id="email" name="email" placeholder="your_email@address.com">
            </div>
            <button type="submit" class="btn btn-info col-md-3 col-xs-12">Pesan Undangan Beta</button>
          </form>
          <?php } ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2 snb-qty-subscriber">

          <p class="snb-footer text-center">total pendaftar undangan eksklusif</p>

        </div>
      </div>
      <div class="row">

        <div class="col-md-4 col-xs-6 col-md-offset-2">

            <div class="snb-quantity text-center" id="snb-total-startups"><?php echo $total_startups; ?></div>
            <div class="snb-signup-type text-center">startup</div>

        </div>
        <div class="col-md-4 col-xs-6">

            <div class="snb-quantity text-center" id="snb-total-investors"><?php echo $total_investors; ?></div>
            <div class="snb-signup-type text-center">investor</div>

        </div>
      </div>

      <div class="row">
        <div class="col-md-8 col-md-offset-2">

          <p class="snb-footer text-center">stocknbar beta tidak melakukan pendaftaran terbuka, pendaftaran web beta menggunakan invitation code<br>Stock N' Bar - 1st launch 23 Agust 2015 - partner@stocknbar.com</p>

        </div>
      </div>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="<?php echo static_url('3rdparty/shuffleLetters/js/jquery.shuffleLetters.js'); ?>"></script>
    <script src="<?php echo static_url('js/1st-landing-page.js'); ?>"></script>
  </body>
</html>