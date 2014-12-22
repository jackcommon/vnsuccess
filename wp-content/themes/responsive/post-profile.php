<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
  exit;
}

/**
 * Post Data Template-Part File
 *
 * @file           post-profile.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.1.0
 * @filesource     wp-content/themes/responsive/post-profile.php
 * @link           http://codex.wordpress.org/Templates
 * @since          available since Release 1.0
 */
?>

<?php if( !is_page() && !is_search() ) { ?>

  <div class="post-profile">
<?php
  $args = array(
    "post_type" => "profile",
    "show-post" => -1,
  );
  query_posts($args);
?>
<div id="list_author">
<ul>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php
  $avatar = get_field("avatar");
  $full_name = get_field("full_name");
  $email = get_field("email");
  $mobile = get_field("mobile");
  $country = get_field("country");
  $gender = get_field("gender");
  $birthday = get_field("birthday");  
?>
  <li>
    <a href="#"><img src="<?php echo $avatar; ?>" alt="<?php echo the_title(); ?>" /></a>
    <p><span>Full Name: </span><?php echo $full_name; ?></p>
    <p><span>Email Address: </span><?php echo $email; ?></p>
    <p><span>Mobile Phone: </span><?php echo $mobile; ?></p>
    <p><span>Country: </span><?php echo $country; ?></p>
    <p><span>Gender: </span><?php echo $gender; ?></p>
    <p><span>Birthday: </span><?php echo $birthday; ?></p>
  </li>
  

<?php endwhile; endif; ?>
</ul>
<!-- /#list_author --></div>
  </div><!-- end of .post-profile -->

<?php } ?>

<div class="post-edit"><?php edit_post_link( __( 'Edit', 'responsive' ) ); ?></div>