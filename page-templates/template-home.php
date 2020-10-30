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

$title = get_field('banner_heading');
$subTitle = get_field('banner_subheading');
$image = get_field('banner_image')
?>

<?php if($image):?>
  <div class="home-banner" style="background-image: url(<?php echo $image; ?>);">
<?php endif;?>
    <div class="container">
      <div class="home-content">
        <?php if($title):?>
          <h1><?php echo $title ?></h1>
        <?php endif;?>
        <?php if($subTitle):?>
          <h2><?php echo $subTitle ?></h2>
        <?php endif;?>
        <div class="home-buttons">
          <a href="#" class="btn primary-btn">Services</a>
          <a href="#" class="btn secondary-btn">Request a quote</a>
        </div>
      </div>
    </div>
  </div>

<?php
get_footer();
