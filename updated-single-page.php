<?php
/**
 * The template for displaying all pages
 */
?>

<?php get_header(); ?>

<?php remove_header(); ?>
<!-- Twitter universal website tag code -->
<script>
!function(e,t,n,s,u,a){e.twq||(s=e.twq=function(){s.exe?s.exe.apply(s,arguments):s.queue.push(arguments);
},s.version='1.1',s.queue=[],u=t.createElement(n),u.async=!0,u.src='//static.ads-twitter.com/uwt.js',
a=t.getElementsByTagName(n)[0],a.parentNode.insertBefore(u,a))}(window,document,'script');
// Insert Twitter Pixel ID and Standard Event data below
twq('init','nxuom');
twq('track','PageView');
</script>
<!-- End Twitter universal website tag code -->
		<div id="container">
		<?php mnky_hook_page_top(); ?>
			<div id="content">
			<?php mnky_hook_page_content_top(); ?>

				<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> >
					<div class="entry-content clearfix">
					<?php
					the_content();
					wp_link_pages( array(
						'before'      => '<nav class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'upscale' ) . '</span>',
						'after'       => '</nav>',
						'link_before' => '<span>',
						'link_after'  => '</span>',
					) );
					?>
					</div><!-- .entry-content -->
				</article>

				<?php if ( comments_open() ) {
					comments_template( '', true );
				} ?>
				<?php endwhile; ?>

			<?php mnky_hook_page_content_bottom(); ?>
			</div><!-- #content -->
		<?php mnky_hook_page_bottom(); ?>
		</div><!-- #container -->

<?php get_footer(); ?>
