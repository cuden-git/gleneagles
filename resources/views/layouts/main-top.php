<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('views/partials/head'); ?>
  <!-- checkCookie() : Cookie disclaimer -->
  <body <?php body_class(); ?>>
  <!-- Google Tag Manager (noscript) -->

  <!-- End Google Tag Manager (noscript) -->
    <?php do_action('get_header'); ?>
    <?php get_template_part('views/partials/header-desktop') ?>
    <?php get_template_part('views/partials/header-mobile') ?>
    <div class="wrap" role="document">
      <div class="content">
        <main class="main">

        <!-- Cookie Disclaimer Banner - start -->
        <div class="cb-featured-cookie-disclaimer cb-featured-cookie-disclaimer--type-one" id="cb-featured-cookie-disclaimer__cookieConsent">
          <div class="cb-featured-cookie-disclaimer--col-left">
          This site uses cookies to provide you with a great user experience. By using Gleneagles, you accept our <a href="#" target="_blank">use of cookies</a>.
          </div>
          <div class="cb-featured-cookie-disclaimer--col-right cb-featured-cookie-disclaimer--col-right__desktop">
          <a class="cb-featured-cookie-disclaimer__cookieConsentOK" id="close">Close</a>
          </div>
          <div class="cb-featured-cookie-disclaimer--col-right cb-featured-cookie-disclaimer--col-right__mobile">
          <a class="cb-featured-cookie-disclaimer__cookieConsentOK" id="close">&#10005;</a>
          </div>
        </div>
        <!-- Cookie Disclaimer Banner - end -->
