<?php
/**
 * Template part for displaying page content in pagebuilder.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

?>

<div class="entry-content">



	<?php

	if( have_rows('page_builder') ):

		// loop through the rows of data
		while ( have_rows('page_builder') ) : the_row();

			if( get_row_layout() == 'e_example' ):

				get_template_part('elements/e_example/e_example');

			endif;

		endwhile;
	endif;
	?>

</div><!-- .entry-content -->
