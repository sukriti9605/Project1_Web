<?php
/**
* The template for displaying all pages.
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages and that other
* 'pages' on your WordPress site will use a different template.
*
*/
get_header(); ?>

<div class="main-wrapper-item">
	<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
		<div class="bread-title-holder">
			<div class="bread-title-bg-image full-bg-breadimage-fixed"></div>
			<div class="container">
				<div class="row-fluid">
					<div class="container_inner clearfix">
						<h1 class="title"><?php the_title(); ?></h1>
						<?php if ((class_exists('foodeez_lite_breadcrumb_class'))) {$foodeez_lite_breadcumb->custom_breadcrumb();} ?>
					</div>
				</div>
			</div>
		</div>

	<div class="page-content default-pagetemp">
		<div class="container post-wrap">
			<div class="row-fluid">
				<div id="content" class="span8">
					<div class="post clearfix" id="post-<?php the_ID(); ?>">
						<div class="skepost">
							<?php the_content(); ?>
							<?php wp_link_pages( array('before' => '<p><strong>'.__('Pages :','foodeez-lite').'</strong>','after' => '</p>', __('number','foodeez-lite') ) ); ?>
						</div>
					<!-- skepost -->
					</div>
					<!-- post -->
					<?php edit_post_link( __('Edit','foodeez-lite'), '', ''); ?>
					<?php if ( comments_open() || get_comments_number() ) {
						comments_template();
					} ?>
					<?php endwhile; ?>
					<?php else :  ?>
						<div class="post">
							<h2><?php _e('Page Does Not Exist','foodeez-lite'); ?></h2>
						</div>
					<?php endif; ?>
						<div class="clearfix"></div>
				</div>
				<!-- content -->

				<!-- Sidebar -->
				<div id="sidebar" class="span4">
					<?php get_sidebar('page'); ?>
				</div>
				<div class="clearfix"></div>
				<!-- Sidebar -->
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
