<?php
/**
 * Template part for displaying posts filter
 * Switch styles at Theme Options (WP Customizer)
 *
 *
 * @package Regn
 * @subpackage Templates
 * @since 1.0.0
 * @version 1.0.7
 *
 */

?>

<div class="cl-filter cl-filter--blog cl-filter--<?php echo esc_attr( codeless_get_mod( 'blog_filters', 'disabled' ) ) ?>">

<?php

	$taxonomies = empty( codeless_get_from_element( 'blog_taxonomies' ) ) ? '' : explode(',', codeless_get_from_element( 'blog_taxonomies' ) );
	$categories = get_categories( array(
	    'orderby' => 'name',
	    'order'   => 'ASC'
	) );
	if( empty( $taxonomies ) || !is_array( $taxonomies ) ){
		$taxonomies = $categories;
		$arr = array();
		foreach( $taxonomies as $category ):
			$arr[] = $category->cat_ID;
		endforeach;

		$taxonomies = $arr;
		
	}

?>
	<div class="cl-filter__inner">

		<a data-filter="*" href="<?php echo esc_url( codeless_get_permalink() ) ?>" class="active"><?php esc_html_e( 'All', 'regn' ) ?></a>
		

		<?php foreach( $categories as $category ): ?>
		<?php if( is_array( $taxonomies ) && !empty( $taxonomies ) && in_array($category->cat_ID, $taxonomies) ): ?>
	  		<a href="<?php echo esc_url( add_query_arg( 'cl_cat', $category->cat_ID, codeless_get_permalink() ) ) ?>" data-filter=".category-<?php echo esc_attr( $category->slug ) ?>"><?php echo esc_attr( $category->name ) ?></a>
		<?php endif; ?>
		<?php endforeach; ?>

	</div><!-- .cl-filter__inner -->

</div><!-- .cl-filter -->