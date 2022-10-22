<?php

namespace Plop\Plopinator\Shortcodes;

/**
 *  * This is the class responsible for the 'rainbowplop' shortcode.
 *   */
class Swabber { 

	public function Swabber ()
	
	{

		global $wpdb;

		$duplicate_titles = $wpdb->get_col("SELECT post_title FROM {$wpdb->posts} WHERE `post_type` = 'post' GROUP BY post_title HAVING COUNT(*) > 1");

		foreach( $duplicate_titles as $title ) {
			
			$post_ids = $wpdb->get_col( $wpdb->prepare( "SELECT ID FROM {$wpdb->posts} WHERE post_title=%s", $title ) );
			
			// Iterate over the second ID with this post title till the last
			
			foreach( array_slice( $post_ids, 1 ) as $post_id ) {
				
				wp_delete_post( $post_id, true ); // Force delete this post
			
			}
		
		}

	}

	public function init()

	{

		add_shortcode('swabber', array($this, 'Swabber'));

	}

}

