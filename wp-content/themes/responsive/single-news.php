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
<?php
  $image = get_field("banner");
  $content_post = get_field("content_post");
  $authors_post = get_field("authors_post");
  $avatar = get_field("avatar");
?>
  <div class="article">
    <?php while (have_posts()) : the_post(); ?>
      <h1 class="big_title"><?php echo the_title(); ?></h1>
      <div class="featured_img">
        <img src="<?php echo $image; ?>" alt="" />
      <!-- /.featured_img --></div>
      <div class="row_post">
        <div class="author_media">
          <div class="author_img">
            <img src="<?php echo $avatar; ?>" alt="" />
            <span><?php echo $authors_post; ?></span>
          </div>
        <!-- /.author_media --></div>
        <div class="content_ofPost">
          <p><?php echo $content_post; ?></p>
        <!-- /.content_ofPost --></div>
      <!-- /.row_post --></div>
    <?php endwhile; // end of the loop. ?>    
  <!-- /.article --></div>
    <div class="related_stories">
      <div class="title">
        <h3 class="top_items">➤&nbsp;Related stories</h3>
      </div>
      <div class="related">
      <?php
        $args = array(
          "post_type" => "news",
          "posts_per_page" => -1
        );
        query_posts($args);
      ?>
      <ul>
      <?php if ( have_posts() ) :
      // get only thumbnail of category
      while ( have_posts() ) : the_post();?>
      <?php
        $image = get_field("banner");
      ?> 
      <li>
        <a href="<?php the_permalink(); ?>"><img src="<?php echo $image; ?>" alt="" /></a>
        <p><?php echo the_title(); ?></p>
      </li>
      <?php endwhile; endif; wp_reset_query(); ?>
      </ul>
      <!-- /.related --></div>
    <!-- /.related_stories --></div>
</div><!-- end of #content -->
<?php get_footer(); ?>
<script>
;(function($, win){

  
  $(function(){
    var pathname = $(location).attr("href") ; 

    $(".related_stories").find(".related ul li").each(function() {
      var position =  $(this).children().attr("href");
      

      if( position == pathname ) {

        $(this).css( "display" , "none" );
      };
    });
  });

}(jQuery, window));  
</script>