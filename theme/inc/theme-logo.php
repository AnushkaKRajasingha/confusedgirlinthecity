<div class="logo-inner container">
        	<div class="logo-box">            	
                <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'website_logo')) :  ?>
					<a  href=" <?php  echo home_url(); ?> "><img src='<?php echo ot_get_option( 'website_logo' ); ?>' alt='logo'></a>
                <?php  else :  ?>
                	<a  href=" <?php  echo home_url(); ?> "><img src="<?php echo get_template_directory_uri().'/images/logo.png' ?>" alt="logo"/></a>
				<?php endif ; endif; ?>
                <p><?php bloginfo('description'); ?></p>
            </div><!--/.logo-box-->
            <div class="border-logo"></div>
     	</div><!--/.logo-->