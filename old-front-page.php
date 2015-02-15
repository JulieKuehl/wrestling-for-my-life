<?php get_header(); ?>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
	<div class="container">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; endif; ?>
	</div><!-- .container -->
</div><!-- .jumbotron -->

<div class="container">
	<div class="row"><!-- Row of columns -->
		<div class="col-md-4">
			<?php if ( dynamic_sidebar( 'front-left' ) ); ?>
		</div><!-- .col-md-4 -->
		<div class="col-md-4">
			<?php if ( dynamic_sidebar( 'front-center' ) ); ?>
		</div><!-- .col-md-4 -->
		<div class="col-md-4">
			<?php if ( dynamic_sidebar( 'front-right' ) ); ?>
		</div><!-- .col-md-4 -->
	</div><!-- .row -->
</div><!-- .container -->

<div class="fat-footer">
	<div class="container">
		<div class="row"><!-- Fat footer row -->
			<div class="col-md-4">
				<?php if ( dynamic_sidebar( 'fat-footer-left' ) ); ?>
			</div><!-- .col-md-4 -->
			<div class="col-md-4">
				<?php if ( dynamic_sidebar( 'fat-footer-center' ) ); ?>
			</div><!-- .col-md-4 -->
			<div class="col-md-4">
				<?php if ( dynamic_sidebar( 'fat-footer-right' ) ); ?>
			</div><!-- .col-md-4 -->
		</div><!-- .row -->
		</div><!-- .container -->
</div><!-- .fat-footer -->

<div class="container">

<?php get_footer(); ?>