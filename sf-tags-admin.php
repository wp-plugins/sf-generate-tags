<?php
class SFTags_Admin {
	/**
	 * Constructor
	 */
	public function __construct() {
		// Box for advanced tags
		add_action( 'add_meta_boxes', array(__CLASS__, 'add_meta_boxes'), 10, 1 );
	}
	
	public static function add_meta_boxes( $post_type ) {
		add_meta_box('sf-tags-settings', __('Autogenerate Tags - Settings', 'sf-tags'), array(__CLASS__, 'metabox'), $post_type, 'side', 'core' );
	}
	
	public static function metabox( $post ) {
?>	
	<div class="sf-generate-tags-form">
		<input type="checkbox" name="sf_from_images" value="sf_from_images" id="sf_from_images" checked="checked" />From Images
		<input type="checkbox" name="sf_from_text" value="sf_from_images" id="sf_from_text" checked="checked"/>From Text
		<input type="hidden" name="sf_post_id" id="sf_post_id" value="<?php global $post; echo "$post->ID"; ?>">
    	<a class="button" id="btnSubmit">Generate Tags</a>
		<br />
		<p>Exclude words (comma separated):</p>
		<input type="text" name="sf_remove_words" id="sf_remove_words" value=""/>
		<br />
		<br />
		(save the post to get all of the content evaluated)
	</div>

<?php
	}
}
