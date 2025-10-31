<?php get_header(); ?>
<?php 
get_template_part('template-parts/title-section', null, [
    
    'title' => get_the_title()
]);
?>
<section>
	<div class="wrapper">
		<div class="content text-center m-auto md:max-w-4xl py-16 md:pb-20 lg:pb-22">

			<article class="article-full">
			<div class="single__post-header">
				
				<div class="single__post-meta">
				<span class="single__post-date"><?php echo get_the_date(); ?></span>
				<span class="single__post-author"><?php echo get_the_author(); ?></span>
				</div>
			</div>

			<div class="single__post-content">
				<?php the_content(); ?>
			</div>
			</article>
		</div>
	</div>
</section>	


<?php get_sidebar(); ?>

<?php get_footer(); ?>
