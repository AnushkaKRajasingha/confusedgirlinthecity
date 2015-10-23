    <div id="footer" class="container">
    <div class="row">
    <div class="span12 text-center instagram-widget">
<!-- INSTANSIVE WIDGET --><script src="//instansive.com/widget/js/instansive.js"></script><iframe src="//instansive.com/widgets/e6eeae9686c4da423fee1a499150b62ec71b94d3.html" id="instansive_e6eeae9686" name="instansive_e6eeae9686"  scrolling="no" allowtransparency="true" class="instansive-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
    </div></div>
    <div class="row">
    <div class="span12 text-center mailchimp-widget">
    <!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<section class="container center"> 
  <h3>SIGNUP FOR OUR NEWSLETTER AND WIN 20% OFF!</h3>
  <p>A new winner is selected monthly!<br/>We never share your information and you may unsubscribe at anytime.
</section>
<form action="//confusedgirlinthecity.us8.list-manage.com/subscribe/post?u=4bb1bc6b48f2478213f134702&amp;id=777fabc8e4" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Sign up for our email updates" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_4bb1bc6b48f2478213f134702_777fabc8e4" tabindex="-1" value=""></div>
    <div class="mail-chimp-action"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->
    </div></div>
    	<div class="row">
        	<?php
			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-sidebar') ) :
			endif;
			?>
        </div><!--/.row-->
        <div class="copyright clearfix">
        	<?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'copyright_text')) :   ?>
            <p><?php echo ot_get_option( 'copyright_text' ); ?></p>
            <?php endif ; endif; ?>
        </div>
    </div><!--footer-->
  
    
<?php wp_footer(); ?>


</body>
</html>