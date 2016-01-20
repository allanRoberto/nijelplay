<?php
	while ( have_posts() ) : the_post(); 
	$count = 0;
	$images = rwmb_meta( 'gallery', 'type=image_advanced' );
			    	$first = true;
					foreach ( $images as $image ):
						if($first) {
							$active = 'active';
							$first = false;
						}else {
							$active = '';
						}
					  
				    	$item_gallery .= '<div class="item '.$active.'">
					    	<img src="'.$image['full_url'].'" />
				    	</div>';
						
						$navigation .= '<li data-target="#carousel-gallery" data-slide-to="'.$count.'" class="item-dotted '.$active.'">
							<img src="'.$image['url'].'" />
						</li>';
						$count++;
					endforeach;
			
	?>
	<div class="container-gallery">
	 	<div class="header-gallery">
	 		<h1 class="title-gallery"><?php the_title(); ?></h1>
	 	</div>
	 	<div class="gallery">
	 		<span class="glyphicon glyphicon-remove-circle close-modal" data-dismiss="modal" aria-label="Close"></span>

	 		<div id="carousel-gallery" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				 
				<div class="carousel-inner" role="listbox">
					<?php echo $item_gallery; ?>

				</div>


					<a class="left carousel-control" href="#carousel-gallery" role="button" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carousel-gallery" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					</a>
						<ol class="carousel-indicators">
				 	<?php echo $navigation; ?>
				 </ol>
				</div>
			</div>

		</div>
	<span class="call-to-action-popup"></span>
	

	<?php
	endwhile; 
?>
