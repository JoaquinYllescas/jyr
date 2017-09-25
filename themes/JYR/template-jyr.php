<?php /* Template Name: JYR Template Home */ get_header(); ?>
<div class="data">
<?php
$fields = get_fields();
print_r($fields);
//echo get_theme_root_uri();

?> 
</div>

	<main role="main">
		<!-- section -->

		<section class="main" >

			<!-- <h1><?php the_title(); ?></h1> -->

			
				
				<!-- Si seleccionamos parallax -->
				<?php
					if(($fields["parallax/video/image"] == "parallax") &&  ($fields["background_parallax_back"]["url"] != "")  &&  ($fields["background_parallax_front"]["url"] != "") ){
				?>
					<div id="scene">
						<div class="bgScene" data-depth="0.2" style="background-image:url('<?php echo($fields["background_parallax_back"]["url"]); ?>');"></div>
			  			<div class="faceScene" data-depth="0.5" style="background-image:url('<?php echo($fields["background_parallax_front"]["url"]); ?>');" data-depth="0.6"></div>
		  			</div>
		  		<?php	
					}elseif(($fields["parallax/video/image"] == "video") &&  ($fields["background_video"]["url"] != "")  ){

				?>

				<!-- Si seleccionamos video -->
						<div>VIDEO</div>
				<?php
					}else{
				?>
				
				<?php
					}
				?>

				<!-- Si seleccionamos BG Image. Aparececera de cualquiera de las maneras -->
				<div class="staticBg" style="background-image:url('<?php echo($fields["bg_image"]["url"]); ?>');">
				</div>

			  
			

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
