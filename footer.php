<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package rara
 */
?>

<footer id="footer" role="content-info">

		<div class="holder">

			<?php $my_theme = wp_get_theme();  ?>


            <p>  <?php esc_attr_e('Copyright &copy;', 'rara-clean'); ?> <?php echo date('Y'); ?>

            	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">

            	     <?php bloginfo( 'name' ); ?>

                 </a>  


             </p>


		
		</div>

		<?php wp_footer(); ?>

</footer>

</body>

</html>

