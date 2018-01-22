<section id="section_three">
	
	
	<div class="sec_three_inner">
	
		<span class="team_title"><?php the_field( 'section_three_title' ); ?></span><!-- team_title -->
		
		<div class="team_wrapper">
			
			
			
			<?php if(get_field('team_members')): ?>
			 
				<?php while(has_sub_field('team_members')): ?>

					
					<div class="single_team">
						
						<?php $image = get_sub_field( 'image' ); ?>
						
						<?php if ( $image ) : ?>
			
							<img class="team_pic" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							
							<?php else :?>
							
							<img class="team_pic" src="<?php bloginfo('template_directory');?>/images/placholder.jpg"/>
							
		
						<?php endif; ?>
				
						
				
						<span class="name"><?php the_sub_field( 'name' ); ?></span><!-- name -->
				
						<span class="position"><?php the_sub_field( 'position' ); ?></span><!-- position -->
				
					</div><!-- single_team -->

			    
				<?php endwhile; ?>
			 
			<?php endif; ?>

			
		</div><!-- team_wrapper -->
	
	</div><!-- sec_three_inner -->
	
	
</section><!-- section_three -->