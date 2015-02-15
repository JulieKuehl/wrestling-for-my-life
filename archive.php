<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-9">

			<div class="page-header">
				<h1><?php wp_title( '' ); ?></h1>
			</div><!-- .page-header -->

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<article class="post">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p><em>
						By <?php the_author(); ?>
						on <?php echo the_time( 'l j F Y' ); ?>
						in <?php the_category( ', '); ?>
						<a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
					</em></p>

					<?php the_excerpt(); ?>

					<hr />

				</article>

			<?php endwhile; else: ?>
				<div class="page-header">
					<h1>Oh no!</h1>
				</div><!-- .page-header -->

				<p>No content is appearing for this page!</p>

			<?php endif; ?>
		</div><!-- .col-md-9 -->

		<?php get_sidebar( 'blog' ); ?>

	</div>

<?php get_footer(); ?>