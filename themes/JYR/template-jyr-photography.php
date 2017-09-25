<?php /* Template Name: JYR Template Photography */ get_header(); ?>
<div class="data">
<?php
$fields = get_fields();
print_r($fields);
//echo get_theme_root_uri();

?> 
</div>

	<main role="main">
		
		<h1>
			<?php echo(get_the_title()); ?>
		</h1>
	</main>


<?php
 // get_sidebar();
?>

<?php get_footer(); ?>
