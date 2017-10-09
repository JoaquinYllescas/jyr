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
					}elseif(($fields["parallax/video/image"] == "video")   ){

				?>

				<!-- Si seleccionamos video -->
						
						<!-- <video poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg" id="bgvid" playsinline autoplay muted loop>
						  WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button 
						<source src="http://thenewcode.com/assets/videos/polina.webm" type="video/webm">
						<source src="http://thenewcode.com/assets/videos/polina.mp4" type="video/mp4">
						</video> -->

						
						  <video id="bgvid" autoplay muted loop>
						    <source src="http://jyr.dev/wp-content/uploads/2017/09/flores.mp4" type="video/mp4">
						  </video>
						
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
<!-- 
<?php get_footer(); ?> -->
