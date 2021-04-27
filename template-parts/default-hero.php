<div class="acs-hero default-hero">
	<div class="hero-overlay">
		<h1>
		<?php the_title(); ?>
	</h1>
	</div>
</div>
<style>
	.default-hero{
		background-image:url("<?php echo get_the_post_thumbnail_url(); ?>")
	}
</style>