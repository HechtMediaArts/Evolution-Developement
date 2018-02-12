<?php 
/**
 * Template Name: Sitemap
 * 
 * The Evolution Framework.
 *
 * WARNING: This file is part of the core Evolution Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 * 
 * @package Evolution\Templates\
 * @author  Andreas Hecht
 * @license GPL-2.0+
 * @link https://andreas-hecht.com/wordpress-themes/evolution-wordpress-framework/
 */
get_header(); ?>

<div id="primary" class="content-area">
<main id="main" class="site-main">

<section class="content">

	<div class="pad group">
 <article>
     <h1 class="entry-title"><?php the_title(); ?></h1>
	<div class="mh-row mh-sitemap clearfix">
		<div class="mh-col-1-3">
			<h5 class="mh-widget-title">
				<span class="mh-widget-title-inner">
					<?php esc_html_e('Latest Articles', 'evolution'); ?>
				</span>
			</h5>
			<ul class="mh-sitemap-list"><?php
				$recent = new WP_query(array('posts_per_page' => 20));
				while ($recent->have_posts()) : $recent->the_post(); ?>
					<li class="sitemap-list-item">
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</li><?php
				endwhile; wp_reset_postdata(); ?>
			</ul>
			<h5 class="mh-widget-title">
				<span class="mh-widget-title-inner">
					<?php esc_html_e('All Pages', 'evolution'); ?>
				</span>
			</h5>
			<ul class="mh-sitemap-list"><?php
				wp_list_pages(array('title_li' => '', 'post_status' => 'publish')); ?>
			</ul>
		</div>
		<div class="mh-col-1-3">
			<h5 class="mh-widget-title">
				<span class="mh-widget-title-inner">
					<?php esc_html_e('The Archives', 'evolution'); ?>
				</span>
			</h5>
			<ul class="mh-sitemap-list">
				<?php wp_get_archives('type=monthly&show_post_count=1'); ?>
			</ul>
		</div>
		<div class="mh-col-1-3">
			<h5 class="mh-widget-title">
				<span class="mh-widget-title-inner">
					<?php esc_html_e('Categories', 'evolution'); ?>
				</span>
			</h5>
			<ul class="mh-sitemap-list"><?php
				wp_list_categories(array('title_li' => '', 'feed' => 'RSS', 'show_option_none' => esc_html__('No categories', 'evolution'))); ?>
			</ul>
		</div>
	</div>
</article>
</div><!--/.pad-->

</section><!--/.content-->
</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>