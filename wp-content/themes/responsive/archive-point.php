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

<div id="content-archive" class="<?php //echo implode( ' ', responsive_get_content_classes() ); ?>">
<div id="contentPoint">

  <div id="category_gifts">
    <div class="detail">
      <h2>Meaningful gifts</h2>
      <ol class="list_gifts">
        <li><p>login if you want change your point to gifts.</p></li>
        <li><p>Choose and click ok to change your gifts you like.</p></li>
        <li><p>your point is down you can get more point by post translate’s categotery.</p></li>
      </ol>
    <!-- /.detail --></div>
    <div class="videopc">
      <iframe width="560" height="625" src="//www.youtube.com/embed/Unh3Nv0bcz0" frameborder="0" allowfullscreen></iframe>
    <!-- /.videopc --></div>
    <div id="loginbox">
      <div id="login">
        <h1>Login to Change Gifts</h1>
        <div class="login-card">
          <h1>Log-in</h1><br>
        <form action="/point/" method="post">
          <input type="text" name="user" placeholder="Username">
          <input type="password" name="pass" placeholder="Password">
          <input type="submit" name="login" class="login login-submit" value="login">
        </form>

        <div class="login-help">
          <a href="#">Register</a> • <a href="#">Forgot Password</a>
        </div>
</div>     
    <!-- #login--></div>      
    <!-- /#loginbox --></div>
  </div>
  <div id="welcome_user">
    <div id="metasrow">
      <h3><span>Welcome!</span><p class="headline">Đức Thịnh - $30</p></h3>
    <!-- /#metasrow --></div>
  <!-- /#welcome_user --></div>
  <!-- /#category_gifts -->


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
    <ul>
      <li class="left pointTxt"><?php echo $point; ?></li>
      <li class="right"><img src="<?php echo get_template_directory_uri(); ?>/jacky/img/btn-buy.png" alt="button change"></li>
    </ul>
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
<?php //get_sidebar('login'); ?>
<?php get_footer(); ?>
