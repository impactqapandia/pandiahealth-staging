<?php
/**
 * Thrive Themes - https://thrivethemes.com
 *
 * @package thrive-visual-editor
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Silence is golden!
}

?>
<div id="tve-video_cover-component" class="tve-component" data-view="VideoCover">
	<div class="dropdown-header" data-prop="docked">
		<?php echo __( 'Main Options', 'thrive-cb' ); ?>
	</div>
	<div class="dropdown-content">
		<div class="control-grid full-width tcb-responsive-video-thumbnail wrap no-space mb-10">
			<label class="label full-width pb-0">
				<?php echo __( 'Video thumbnail', 'thrive-cb' ); ?>
			</label>
			<div class="tve-video-thumbnail-control full-width"></div>
		</div>
		<div class="tve-control" data-view="PreloadThumbnail"></div>
		<div class="tve-control" data-view="VerticalPosition"></div>
	</div>
</div>
