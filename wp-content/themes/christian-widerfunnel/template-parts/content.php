<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Christian-widerfunnel
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php

			if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php christian_widerfunnel_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php
			endif; ?>
	</header><!-- .entry-header -->

	<div class="row">
	  <div class="col">
	    <div class="card card__container--center">
	      <div class="card-image">
	        <?php the_post_thumbnail(); ?>
	        <span class="card-title">
	        	<?php
							if ( is_singular() ) :
								the_title( '<h1 class="entry-title">', '</h1>' );
							else :
								the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
							endif; 
						?>
	        </span>
	        <a href=<?php the_permalink() ?> class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
	      </div>
	      <div class="card-content">
	        <p>
		        <?php
							the_excerpt( sprintf(
								wp_kses(
									/* translators: %s: Name of current post. Only visible to screen readers */
									__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'christian-widerfunnel' ),
									array(
										'span' => array(
											'class' => array(),
										),
									)
								),
								get_the_title()
							) );

							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'christian-widerfunnel' ),
								'after'  => '</div>',
							) );
						?>
				</p>
	      </div>
	      <div class="card-action">
	        <a href="#">This is a link</a>
	        <footer class="entry-footer">
						<?php christian_widerfunnel_entry_footer(); ?>
					</footer><!-- .entry-footer -->
	      </div>
	    </div>
	  </div>
	</div>

	
</article><!-- #post-<?php the_ID(); ?> -->
