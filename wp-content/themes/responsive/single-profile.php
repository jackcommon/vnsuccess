<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
  exit;
}

/**
 * Single Posts Template
 *
 *
 * @file           single.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/single.php
 * @link           http://codex.wordpress.org/Theme_Development#Single_Post_.28single.php.29
 * @since          available since Release 1.0
 */

get_header(); ?>

<div id="content">

<div id="list_author">
 
<?php while ( have_posts() ) : the_post(); ?>
<?php
  $avatar = get_field("avatar");
  $nick = get_field("nick_name");
  $full_name = get_field("full_name");
  $email = get_field("email");
  $mobile = get_field("mobile");
  $country = get_field("country");
  $gender = get_field("gender");
  $birthday = get_field("birthday");
  $id_author = get_field("id_author");
  $history = get_field("history");
?>
<dl> 
      <dt><?php echo $full_name; ?></dt>
      <dd>
        <span><img src="<?php echo $avatar; ?>" alt="<?php echo the_title(); ?>" /></span>
        <p><?php echo $history; ?></p>
      </dd>
</dl>
<?php endwhile; ?>
<!-- /#list_author --></div>
<div id="metasrow">
  <h3><span>Stories by</span> <p class="headline"><?php echo $nick; ?></p></h3>
<!-- /#metasrow --></div>
<div class="post_of_author">
<?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $type = 'news';
    $args=array(
      'post_type' => $type,
      'post_status' => 'publish',
      'posts_per_page' => 10,
      'caller_get_posts'=> 1,
      'paged' => $paged
    );
    $my_query = null;
    $my_query = new WP_Query($args);

    if( $my_query->have_posts() ) :
      while ($my_query->have_posts()) : $my_query->the_post();
    ?>
    <?php
      $id_post = get_field("id_post");
      $image = get_field("banner");
    ?>
    <div>
      <?php if ($id_post == $id_author) : ?>
      
      <div class="loop_post">
        <div class="banner_top">
          <a href="<?php the_permalink(); ?>"><img src="<?php echo $image; ?>" alt="<?php echo the_title(); ?>" /></a>
        <!-- /.box_left --></div>
        <div class="txt_row">
          <p class="author"><span class="date"><?php the_time( get_option( 'date_format' ) ); ?></span></p>
          <h2 class="title"><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
        <!-- /.txt_row --></div>
      </div>

      <?php endif; ?>  
    </div>
    <?php
      endwhile;
  ?>
</div>
<!-- /.post_of_author -->
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

</div>
</div><!-- end of #content -->

<?php get_footer(); ?>
