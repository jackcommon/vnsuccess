<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
  exit;
}

/**
 * Main Widget Template
 *
 *
 * @file           sidebar.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/sidebar.php
 * @link           http://codex.wordpress.org/Theme_Development#Widgets_.28sidebar.php.29
 * @since          available since Release 1.0
 */

/*
 * Load the correct sidebar according to the page layout
 */
?>

<?php responsive_widgets_before(); // above widgets container hook ?>
  <div id="widgets" class="<?php echo implode( ' ', responsive_get_sidebar_classes() ); ?>">
    <?php responsive_widgets(); // above widgets hook ?>

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
    <!-- div class="aside_email">
      <img src="<?php echo get_template_directory_uri(); ?>/jacky/img/kit-kum.png" alt="">
    </div> -->

    <?php responsive_widgets_end(); // after widgets hook ?>
  </div><!-- end of #widgets -->
<?php responsive_widgets_after(); // after widgets container hook ?>
