<?php /* Template Name: JYR Template Photography */ get_header(); ?>
<div class="data">
<?php
$fields = get_fields();
print_r($fields);



$posts = get_posts(array(
	'numberposts'	=> -1,
	'post_type'		=> 'photo_project'
));
print_r($posts);
?> 
</div>

	<?php
		if(($fields["video/img"] == "Image") &&  ($fields["image_source"] != "") ){
	?>
			<main class="photography" role="main" style="background-image:url('<?php echo $fields["image_source"] ?>');">
	<?php 
		}elseif( ($fields["video/img"] == "Video")  &&  ($fields["video_source"] != "") ){
	?>
			<main class="photography" role="main">
				<video id="bgvid_photography" autoplay muted loop>
			    	<source src="<?php echo $fields["video_source"]  ?>" type="video/mp4">
			    </video>

    <?php 
    	}
    ?>

				<h1>
					<?php echo(get_the_title()); ?>
				</h1>
				
				<div class="projects">
					<!-- the loop -->
					<?php
					if( $posts ): ?>
						<ul>
							<?php foreach( $posts as $post ): ?>
								<li>
									<h2>
										<?php
											// print_r($post);
											echo $post->post_title;
										?>
									</h2>
									<img src="<?php echo (get_field( "background_project", $post->ID ));  ?>" alt="">
								</li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
					<!-- end of the loop -->
				</div>
				
			</main>



<?php
 // get_sidebar();
?>

<?php get_footer(); ?>
