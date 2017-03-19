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
		<!--Top-->
    <div class="footer-newsletter">
      
    </div>  

    <!--Middle-->
    <div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'realtors-to-the-rescue' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'realtors-to-the-rescue' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'realtors-to-the-rescue' ), 'realtors-to-the-rescue', '<a href="https://automattic.com/" rel="designer">Team Flare</a>' ); ?>
		</div>

    <!--Bottom-->
    <div class="footer-bottom">
      
    </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
