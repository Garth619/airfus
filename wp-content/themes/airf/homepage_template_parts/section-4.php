<section id="section_four">
	
	<div class="sec_four_inner">
		
		<div class="sec_four_header">
			
			<img src="<?php bloginfo('template_directory');?>/images/heart.svg"/>
		
			<h1 class="sec_four"><?php the_field( 'section_four_title' ); ?></h1><!-- sec_four -->
		
		</div><!-- sec_four_header -->
		
		<div class="sec_four_content">
			
			<div class="sec_four_col">
			
				<?php the_field( 'section_four_col_one' ); ?>
		
			</div><!-- sec_four_col -->
			
			<div class="sec_four_col">
				
				<?php the_field( 'section_four_col_two' ); ?>			
			
			</div><!-- sec_four_col -->

			
		</div><!-- sec_four_content -->
		
	</div><!-- sec_four -->
	
</section><!-- section_four -->