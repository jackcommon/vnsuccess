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

    <div><img src="<?php echo get_template_directory_uri(); ?>/jacky/img/quang_cao.gif" alt=""></div>
    <!-- div class="aside_email">
      <img src="<?php echo get_template_directory_uri(); ?>/jacky/img/kit-kum.png" alt="">
    </div> -->

    <?php responsive_widgets_end(); // after widgets hook ?>
  </div><!-- end of #widgets -->
<?php responsive_widgets_after(); // after widgets container hook ?>
