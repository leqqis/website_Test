<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package website_test
 */
?>


	<footer class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<h2><?php bloginfo('name'); ?></h2>
			</div>
			
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pull-right text-right">
					<h3>Continue. Convert. Complete.</h3>
					<img src="images/facebook.png">
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
