<?php
require_once("all.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr" xmlns:fb="http://ogp.me/ns/fb#">
  <head>
    <title><?php __("Help La Quadrature defend our rights online against ACTA and beyond") ?></title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="<?php __("For the past four years, La Quadrature du Net has raised awareness and campaigned against ACTA. <br/>We need your help to defeat ACTA and move forward, advocating for a positive agenda to protect our freedoms."); ?>" />
    <meta name="author" content="la Quadrature du Net" />
    <meta property="og:image" content="/images/LQDN_support_against_ACTA_and_beyond_125*125.gif"/> 
    <link rel="icon" type="image/png" href="/favicon.ico" />
    <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
    <link type="text/css" rel="stylesheet" href="css/campaign.css"/>
    <link type="text/css" rel="stylesheet" href="jquery-ui-1.8.20.custom/css/custom-theme/jquery-ui-1.8.20.custom.css"/>
    <script  type="text/javascript" src="js/less-1.3.0.min.js"></script>
    <script  type="text/javascript" src="jquery-ui-1.8.20.custom/js/jquery-1.7.2.min.js"></script>
    <script  type="text/javascript" src="jquery-ui-1.8.20.custom/js/jquery-ui-1.8.20.custom.min.js"></script>
    <script  type="text/javascript" src="socialshareprivacy/jquery.socialshareprivacy.js"></script>

    <meta property="og:title" content="<?php __("Help La Quadrature defend our rights online against ACTA and beyond") ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo "http".(($_SERVER["HTTPS"])?"s":"")."://".$_SERVER["HTTP_HOST"]."/"; ?>" />
    <meta property="og:site_name" content="La Quadrature du Net" />
    <meta property="og:image" content="<?php echo "http".(($_SERVER["HTTPS"])?"s":"")."://".$_SERVER["HTTP_HOST"]."/"; ?>images/LQDN_support_against_ACTA_and_beyond_125*125.gif" />
    <meta property="og:description" content="<?php __("For the past four years, La Quadrature du Net has raised awareness and campaigned against ACTA. <br/>We need your help to defeat ACTA and move forward, advocating for a positive agenda to protect our freedoms."); ?>" />

    <script type="text/javascript">
        jQuery(document).ready(function($){
          if($('#socialshareprivacy').length > 0){
            $('#socialshareprivacy').socialSharePrivacy({
                services : {
                  facebook : {
                    'txt_info' : '“Like” in two clicks. This behaviour prevents Facebook from tracking you by default as soon you load this page. Click on it if you want to see the “share” button.'
                  },
                  twitter : {
                    'status': 'off'
                  },
                  gplus : {
                    'status': 'off'
                  }
                } 
            }); 
          }
        });
    </script>
    <script  type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
<div class="langselect">
<a href="https://support.laquadrature.net/">[ EN ]</a> <a href="https://soutien.laquadrature.net/">[ FR ]</a>
</div>

  <?php include(dirname(__FILE__) . "/00_noscript.php"); ?>

  <?php include(dirname(__FILE__) . "/10_topheader.php"); ?>

  <?php include( dirname(__FILE__) . "/20_dark_blue_rollover.php"); ?>

  <?php include(dirname(__FILE__) . "/40_progress_bar.php"); ?>
  
      
     <div class="container-wrapper" id="support"><!-- donation form -->
        <div class="container" style="overflow:hidden">
    
         <?php include(dirname(__FILE__) . "/30_donation_form.php"); ?>
         <?php include(dirname(__FILE__) . "/50_faq.php"); ?>      
  
        </div>
     </div>


  <?php include(dirname(__FILE__) . "/60_footer.php"); ?>

  <script type="text/javascript" src="js/campaign.js"></script>
  
  </body>
</html>
