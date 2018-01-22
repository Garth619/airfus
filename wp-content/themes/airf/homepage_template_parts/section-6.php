<section id="section_six">
	
	<div class="sec_six_inner">
		
		<span class="sec_six_title">Contact Us</span><!-- sec_six_title -->
		
		<div class="social_media">
			
			<?php if(get_field('facebook_url')) { ?>
			
				<a class="" href="<?php the_field( 'facebook_url' ); ?>" target="blank"><img src="<?php bloginfo('template_directory');?>/images/fb.svg"/></a>
			
			<?php } ?>
			
			<?php if(get_field('instagram_url')) { ?>
			
				<a class="" href="<?php the_field( 'instagram_url' ); ?>" target="blank"><img src="<?php bloginfo('template_directory');?>/images/instagram.svg"/></a>
			
			<?php } ?>
			
			<?php if(get_field('twitter_url')) { ?>
			
				<a class="" href="<?php the_field( 'twitter_url' ); ?>" target="blank"><img src="<?php bloginfo('template_directory');?>/images/twitter.svg"/></a>
			
			<?php } ?>
			
			<?php if(get_field('google_plus_url')) { ?>
			
				<a class="" href="<?php the_field( 'google_plus_url' ); ?>" target="blank"><img src="<?php bloginfo('template_directory');?>/images/google-plus.svg"/></a>
			
			<?php } ?>
			
		</div><!-- social_media -->
		
		<a class="contact_tel" href="tel:<?php the_field( 'phone_number' ); ?>"><?php the_field( 'phone_number' ); ?></a>
		
		<div class="form_wrapper">
		
			<?php gravity_form(1, false, false, false, '', true, 12); ?>
		
		</div><!-- form_wrapper -->
		
	</div><!-- sec_six_inner -->
	
</section><!-- section_six -->