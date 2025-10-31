<?php get_header(); ?>

<section>
	<div class="wrapper">
		<div class="content  mx-auto ">
                  <!--  <div class="breadcrumbs text-xs ml-1 text-white/60 mb-8 transition-colors">
                        <?php echo generate_smart_breadcrumbs(); ?>
                    </div> -->
			  <h1 class="text-4xl font-bold leading-tight lg:text-5xl xl:text-6xl mb-16">
                        Blog
			</h1>
		</div>
	</div>

	<div class="wrapper">
		<div class="content  mx-auto ">

		<article class="blog-grid">

		<?php // Display blog posts on any page @ https://m0n.co/l
		$temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(); $wp_query->query('posts_per_page=8' . '&paged='.$paged);
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
		
		<div class="flex justify-center-safe gap-14 items-stretch content-between mb-16 bg-surface cloth-corner relative">
		<a href="<?php the_permalink(); ?>" title="Read more" class="absolute inset-0 size-full" style="background: linear-gradient(to right, var(--surface) 0%, transparent 70%);">
		</a>
			<a href="<?php the_permalink(); ?>" title="Read more"  class=" w-full featured_image  h-[300px]">
			<?php
			if ( has_post_thumbnail() ) {
			the_post_thumbnail( 'full', array( 'class' => 'w-full h-full object-cover' ) );
			}
			?>
			</a>


			<a href="<?php the_permalink(); ?>" title="Read more" class="absolute z-12  px-10 inset-0 flex flex-col justify-center-safe text-left">
					<h2><?php the_title(); ?></h2>
					<?php the_excerpt(); ?>
			</a>
		</div>
		<?php endwhile; ?>

		<?php
		the_posts_navigation( array(
			'prev_text'          => __( 'Previous page', 'vithouse' ),
			'next_text'          => __( 'Next page', 'vithouse' ),
			'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vithouse' ) . ' </span>',
		) );
		?>

	</article>
		</div>
	</div>
</section>






	










		<?php get_footer(); ?>
