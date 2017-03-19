<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Realtors_to_The_Rescue
 */

?>

	</div><!-- #content -->

	<footer class="site-footer" role="contentinfo">
		<!--
    Sign Up for Newsletter
    <div class="footer-newsletter">
      <form action="">
        <label>Newsletter Sign-Up</label>
        <input type="text" name="email" placeholder="Enter Email">
        <input type="submit" value="Subscribe">
      </form>
    </div> 
    --> 

    <!--Middle-->
    <div class="site-info">
      <div class="row">
        <div class="footer-logo">logo</div>
        <div class="instagram-header">
          <h3>Gallery Instagram</h3>
        </div>
      </div>

      <div class="row">
        <div class="footer-content">
          <p>
            REALTORS&reg; To The Rescue is a 501(c)(3) not-for-profit organization. Our mission is to mobilize the REALTOR&reg; community to address and impact the plight of homeless pets. We are not a shelter or rescue organization. Rather, we are a volunteer-run, charitable service organization. 
          </p>          
        </div>
        <div class="footer-address">
          <span class="ion-ios-location"></span>
          <address>
            2405 N. Sheffield Ave, #14075<br>
            Chicago, IL 60614
          </address>  

          <p><?php echo do_shortcode("[wp-social-likes]"); ?></p>

        </div>
        <div class="instagram-feed">
          <?php echo do_shortcode("[instagram-feed]"); ?>
        </div>
      </div>

      <!--<div class="footer-nav">site map</div>-->

		</div>

    <div class="footer-bottom">
      <p>&copy; 2017 – <?php echo date('Y'); ?> Realtors&reg; To The Rescue.  All rights reserved.</p>
      <ul>
        <a href="https://www.facebook.com/RealtorsToTheRescue/" target="_blank"><li class="ion-social-facebook"></li></a>
        <a href="https://www.instagram.com/realtorstotherescue/" target="_blank"><li class="ion-social-instagram"></li></a>
      </ul>
    </div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
