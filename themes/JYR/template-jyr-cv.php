<?php /* Template Name: JYR Template CV */ get_header(); ?>
<div class="data">
<?php
$fields = get_fields();
print_r($fields);
//echo get_theme_root_uri();

?> 
</div>

	<main role="main">
		<!-- section -->
		<section class="main" style="background-image:url('<?php echo($fields["background"]["url"]); ?>');">

			<!-- <h1><?php the_title(); ?></h1> -->

			<p>
				<?php
					

				?> 
			</p>
			<br/>
			<br/>
			<br/>
			<p>
				
			</p>


		</section>
		<!-- /section -->
	</main>


<?php
 // get_sidebar();
?>

<?php get_footer(); ?>
