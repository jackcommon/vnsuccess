<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Index Template
 *
 *
 * @file           index.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/index.php
 * @link           http://codex.wordpress.org/Theme_Development#Index_.28index.php.29
 * @since          available since Release 1.0
 */
?>

<?php get_header(); ?>
<div id="content" class="grid col-800">
<?php
/*	<?php if( have_posts() ) : ?>

		<?php while( have_posts() ) : the_post(); ?>

			<?php responsive_entry_before(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php responsive_entry_top(); ?>

				<?php get_template_part( 'post-meta-page' ); ?>

				<div class="post-entry">
					<?php if( has_post_thumbnail() ) : ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail(); ?>
						</a>
					<?php endif; ?>
					<?php the_content( __( 'Read more &#8250;', 'responsive' ) ); ?>
					<?php wp_link_pages( array( 'before' => '<div class="pagination">' . __( 'Pages:', 'responsive' ), 'after' => '</div>' ) ); ?>
				</div><!-- end of .post-entry -->

				<?php get_template_part( 'post-data' ); ?>

				<?php responsive_entry_bottom(); ?>
			</div><!-- end of #post-<?php the_ID(); ?> -->
			<?php responsive_entry_after(); ?>

			<?php responsive_comments_before(); ?>
			<?php comments_template( '', true ); ?>
			<?php responsive_comments_after(); ?>

		<?php
		endwhile;

		get_template_part( 'loop-nav' );

	else :

		get_template_part( 'loop-no-posts' );

	endif;
	?>
  */
?>
<?php
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $args = array(
    "post_type" => "news",
    "posts_per_page" => 10,
    'taxonomy' => 'Categories',
    'term' => 'tin-tuc',
    'paged' => $paged
  );
  query_posts($args);
?>
<?php

  date_default_timezone_set( 'Asia/Ho_Chi_Minh' );

  $current_date = date('Y-m-d');
?>  
<div id="all_post">
<?php if ( have_posts() ) : 
  $i = 0;

while ( have_posts() ) : the_post(); 
$i++;
?>
<?php
  $image = get_field("banner");
  $authors_post = get_field("authors_post");
  $content_post = get_field("content_post");
?>
  <?php if($i==1) : ?>
  <div class="box_left">
      <div class="banner_top">
        <a href="<?php the_permalink(); ?>"><img src="<?php echo $image; ?>" alt="<?php echo the_title(); ?>" /></a>
      </div>
      <div class="txt_row">
        <p class="author">By <a href="<?php the_permalink(); ?>"><?php echo $authors_post; ?></a> &mdash; <?php the_time( get_option( 'date_format' ) ); ?></p>
        <h2 class="title"><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
        <p class="txt"><?php echo substr($content_post, 0, 294). '...' ?></p>
        <a class="read_more" href="<?php the_permalink(); ?>">Keep reading &rarr;</a>
      </div>
  </div>
  <?php if(1< $i && $i<3) : ?>
  <div class="box_right">
      <div class="banner_top">
        <a href="<?php the_permalink(); ?>"><img src="<?php echo $image; ?>" alt="<?php echo the_title(); ?>" /></a>
      <!-- /.box_left --></div>
      <div class="txt_row">
        <p class="author"><span class="date"><?php the_time( get_option( 'date_format' ) ); ?>&mdash; By</span> <a href="<?php the_permalink(); ?>"><?php echo $authors_post; ?></a></p>
        <h2 class="title"><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
      <!-- /.txt_row --></div>   
  </div>
<?php else : ?>
    <div class="loop_post">
      <div class="banner_top">
        <a href="<?php the_permalink(); ?>"><img src="<?php echo $image; ?>" alt="<?php echo the_title(); ?>" /></a>
      <!-- /.box_left --></div>
      <div class="txt_row">
        <p class="author"><span class="date"><?php the_time( get_option( 'date_format' ) ); ?>&mdash; By</span> <a href="<?php the_permalink(); ?>"><?php echo $authors_post; ?></a></p>
        <h2 class="title"><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
      <!-- /.txt_row --></div>
    </div>
<?php endif; endif; ?>
<?php  
/*
    <div class="loop_post">
      <div class="banner_top">
        <a href="<?php the_permalink(); ?>"><img src="<?php echo $image; ?>" alt="<?php echo the_title(); ?>" /></a>
      <!-- /.box_left --></div>
      <div class="txt_row">
        <p class="author"><span class="date"><?php the_time( get_option( 'date_format' ) ); ?>&mdash; By</span> <a href="<?php the_permalink(); ?>"><?php echo $authors_post; ?></a></p>
        <h2 class="title"><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
      <!-- /.txt_row --></div>
    </div>
*/    
?>        
<?php endwhile; ?>
<!-- /.all_post --></div>

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
<script>
  ;(function($, win){
  $(function() {
    var setHeight = function(){
        $('#all_post').each( function(){
          var maxHeight = 0;
          $('.loop_post', this).each( function(){
            maxHeight = Math.max($(this).height(), maxHeight );
          }).height(maxHeight)
        });
    }

    $(window).resize(setHeight).trigger('resize');
  });
}(jQuery, window));
</script>