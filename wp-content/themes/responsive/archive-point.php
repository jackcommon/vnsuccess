<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
  exit;
}

/**
 * Archive Template
 *
 Template Name: point
 *
 * @file           archive.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.1
 * @filesource     wp-content/themes/responsive/archive.php
 * @link           http://codex.wordpress.org/Theme_Development#Archive_.28archive.php.29
 * @since          available since Release 1.0
 */

get_header(); ?>

<div id="content-archive" class="<?php echo implode( ' ', responsive_get_content_classes() ); ?>">
<div id="contentPoint">
<?php
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $args = array(
    "post_type" => "point",
    "posts_per_page" => 10,
    'paged' => $paged
  );
  query_posts($args);
?>

<div id="havePoint">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
?>
<?php
  $image = get_field("gifts");
  $name = get_field("name_gift");
  $point = get_field("get_point");
?>
<div class="itemPoint">
  <a href="#"><img src="<?php echo $image; ?>" alt="<?php echo the_title(); ?>" /></a>
  <div class="item_name">
    <h2><?php echo $name; ?></h2>
  <!-- /.item --></div>
  <div class="item_point">
    <p><?php echo $point; ?></p>
  <!-- /.item_point --></div>
<!-- /.itemPoint --></div>



<?php endwhile; ?>
<!-- /#havePoint --></div>

<div id="paging">
<?php
global $wp_rewrite;
global $paged;
$paginate_base = get_pagenum_link(1);
if (strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()) {
  $paginate_format = '';
  $paginate_base = add_query_arg('paged', '%#%');
} else {
  $paginate_format = (substr($paginate_base, -1 ,1) == '/' ? '' : '/') . 
  user_trailingslashit('page/%#%/', 'paged');;
  $paginate_base .= '%_%';
}
echo paginate_links( array(
  'base' => $paginate_base,
  'format' => $paginate_format,
  'total' => $wp_query->max_num_pages,
  'mid_size' => 0,
  'current' => ($paged ? $paged : 1),
  'next_text' => 'Next',
  'prev_text' => 'Prev'
));
?>
<?php endif; wp_reset_query(); ?>
<!-- end of #paging --></div>

<!-- end of #contentPoint --></div>

</div><!-- end of #content-archive -->
<?php get_sidebar('profile'); ?>
<?php get_footer(); ?>
