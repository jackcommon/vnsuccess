<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
  exit;
}

/**
 * Archive Template
 *
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


<?php
  $args = array(
    "post_type" => "profile",
    "posts_per_page" => 10,
    'taxonomy' => 'Author',
  );
  query_posts($args);
?>
<div id="author_profile">
 
    <ul>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php
      $avatar = get_field("avatar");
      $nick = get_field("nick_name");
      $full_name = get_field("full_name");
      $email = get_field("email");
      $mobile = get_field("mobile");
      $country = get_field("country");
      $gender = get_field("gender");
      $birthday = get_field("birthday");  
    ?>
  <div class="bg_main">    
      <li>
        <div class="col_main">
          <p class="txt"><a href="<?php the_permalink(); ?>"><?php echo $full_name; ?></a></p>
          <div class="col_left">
            <a href="<?php the_permalink(); ?>"><img src="<?php echo $avatar; ?>" alt="<?php echo the_title(); ?>" /></a>
          <!-- /.col_left --></div>
          <div class="col_right">
            <p><span>Nick Name: </span><?php echo $nick; ?></p>
            <p><span>Email Address: </span><?php echo $email; ?></p>
            <p><span>Country: </span><?php echo $country; ?></p>
          <!-- /.col_right --></div>
        <!-- /.col_main --></div>
      </li>
      
  <!-- /.bg_main --></div>

    <?php endwhile; endif; ?>
    </ul>

<!-- /#author_profile --></div>




</div><!-- end of #content-archive -->
<?php get_sidebar('profile'); ?>
<?php get_footer(); ?>
