<?php
/**
 * Template Name: Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="home-banner">
  <div class="container">
    <div class="home-content">
      <h1>Restore. Shine. Protect</h1>
      <h2>Premium Auto Detailing and Paint Protection</h2>
      <div class="home-buttons">
        <a href="#" class="btn primary-btn">Services</a>
        <a href="#" class="btn secondary-btn">Request a quote</a>
      </div>
    </div>
  </div>
</div>

<?php
get_footer();
