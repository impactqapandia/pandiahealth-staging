<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<style>
#TB_ajaxContent{
		width:100% !important;
	}
	#TB_window {
		height: auto !important;
		width:98% !important;
		margin-left: 10px!important;
		left: 10px;
	}
	#TB_iframeContent{
		width:100% !important;
	}
</style>

		<div class="dazz_detail_hi ">
			<div class="texture-layer">
				
					<div class="dazz_detail_hb"><a class="btn btn-danger btn-lg " href="https://goo.gl/4rSmH6" target="_blank">Buy Coming Soon Pro Now</a><a class="btn btn-success btn-lg " href="https://goo.gl/E6J2Tp" target="_blank">View Demo</a></div>
					<div class="dazz_detail_inner">
						<h1 style="">Unlock More Features In Coming Soon Pro Version</h1>
					</div>
					<div style="overflow:hidden;display:block;width:100%">
						<div class="col-md-3">
							<ul>
								<li> <i class="fa fa-check"></i>8 Coming Soon Design Templates </li>
								<li> <i class="fa fa-check"></i>User White list Access  </li>
								<li> <i class="fa fa-check"></i>Landing Pages access </li>
								<li> <i class="fa fa-check"></i>Ip access </li>
								<li> <i class="fa fa-check"></i>Contact Form integrated  </li>
								<li> <i class="fa fa-check"></i>Google Map integrated</li>
								<li><i class="fa fa-check"></i> 17+ Social Profiles Integrated</li>
								
							</ul>
						</div>
						<div class="col-md-3">
							<ul>								
								<li> <i class="fa fa-check"></i>Countdown Auto Launch </li>
								<li> <i class="fa fa-check"></i>5+ Additional Pages </li>
								<li> <i class="fa fa-check"></i>10+ Slide show Background images </li>
								<li> <i class="fa fa-check"></i>Service Section with 10+ services </li>
								<li> <i class="fa fa-check"></i>About Us Section </li>
								<li> <i class="fa fa-check"></i>Team Section </li>
								<li> <i class="fa fa-check"></i>500+ Google Font integrated</li>						
								
							</ul>
						</div>
						<div class="col-md-3">
							<ul>
								
								<li> <i class="fa fa-check"></i>Subscriber List Integrated</li>
								<li> <i class="fa fa-check"></i>8+ Email Newsletter Services </li>
								<li> <i class="fa fa-check"></i>Subscriber list view & export</li>
								<li> <i class="fa fa-check"></i>Drag & drop Social position </li>
								<li> <i class="fa fa-check"></i>Redirect to another website</li>
								<li> <i class="fa fa-check"></i>Mailchimp Newsletter Integrated</li>
								
								<li> <i class="fa fa-check"></i>Madmimi Newsletter Integrated</li>
							</ul>
						</div>
						<div class="col-md-3">
							<ul>
								
								<li> <i class="fa fa-check"></i>Icontact Newsletter Integrated</li>
								<li> <i class="fa fa-check"></i>Constant Contact Integrated</li>
								<li> <i class="fa fa-check"></i>Campaign Monitor Integrated</li>
								<li> <i class="fa fa-check"></i>GetResponse  Integrated</li>
								<li> <i class="fa fa-check"></i>Export Subscriber Email List</li>
								<li> <i class="fa fa-check"></i>All Wordpress Themes Supported</li>
								<li> <i class="fa fa-check"></i>High Priority Support</li>
							</ul>
						</div>
						
						
					</div>
				
			</div>
			
		</div>
		

<div class="coming-soon-wp-panel">

		<div class="tab" role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab"><?php _e('Dashboard','DAZZ_CSW_TEXT_DOMAIN'); ?></a></li>
                    <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab"><?php _e('SEO','DAZZ_CSW_TEXT_DOMAIN'); ?></a></li>
                    <li role="presentation"><a href="#Section3" aria-controls="messages" role="tab" data-toggle="tab"><?php _e('Design','DAZZ_CSW_TEXT_DOMAIN'); ?></a></li>
                    <li role="presentation"><a href="#Section4" aria-controls="messages" role="tab" data-toggle="tab"><?php _e('Social','DAZZ_CSW_TEXT_DOMAIN'); ?></a></li>
                    <li role="presentation"><a href="#Section5" aria-controls="messages" role="tab" data-toggle="tab"><?php _e('Contact Info','DAZZ_CSW_TEXT_DOMAIN'); ?></a></li>
                    <li role="presentation"><a href="#Section6" aria-controls="messages" role="tab" data-toggle="tab"><?php _e('Help','DAZZ_CSW_TEXT_DOMAIN'); ?></a></li>
					<li role="presentation"><a style="background:#000000;color:#fff" href="#Section7" aria-controls="messages" role="tab" data-toggle="tab"><?php _e('Pro Features','DAZZ_CSW_TEXT_DOMAIN'); ?></a></li>
                    <li role="presentation"><a style="background:#2196f3;color:#fff" href="<?php echo home_url(); ?>?dazz_cs_preview=true&TB_iframe=true&width=900&height=80" class="thickbox"  ><?php _e('Live Preview','DAZZ_CSW_TEXT_DOMAIN'); ?></a></li>
					
				</ul>
                <!-- Tab panes -->
                <div class="tab-content tabs">
                    <div role="tabpanel" class="tab-pane fade in active" id="Section1">
						<?php require_once('dashboard.php'); ?>
					</div>
                    <div role="tabpanel" class="tab-pane fade" id="Section2">
						<?php require_once('seo.php'); ?>
					</div>
                    <div role="tabpanel" class="tab-pane fade" id="Section3">
						<?php require_once('design.php'); ?>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="Section4">
						<?php require_once('social.php'); ?>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="Section5">
						<?php require_once('contact.php'); ?>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="Section6">
						<?php require_once('help.php'); ?>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="Section7">
						<?php require_once('pro.php'); ?>
					</div>
                </div>
            </div>
			<br />
			
			
        <div class="dazz_cs_loding" id="dazz_loding_image"></div>
		<button data-dialog="somedialog" class="dialog-button" style="display:none;">Open Dialog</button>
		<div id="somedialog" class="dialog" style="position: fixed; z-index: 9999;">
			<div class="dialog__overlay"></div>
			<div class="dialog__content">
				<div class="morph-shape" data-morph-open="M33,0h41c0,0,0,9.871,0,29.871C74,49.871,74,60,74,60H32.666h-0.125H6c0,0,0-10,0-30S6,0,6,0H33" data-morph-close="M33,0h41c0,0-5,9.871-5,29.871C69,49.871,74,60,74,60H32.666h-0.125H6c0,0-5-10-5-30S6,0,6,0H33">
					<svg xmlns="" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="none">
						<path d="M33,0h41c0,0-5,9.871-5,29.871C69,49.871,74,60,74,60H32.666h-0.125H6c0,0-5-10-5-30S6,0,6,0H33"></path>
					</svg>
				</div>
				<div class="dialog-inner">
					<h2><strong></strong><?php _e('Setting Saved Successfully','DAZZ_CSW_TEXT_DOMAIN'); ?></h2><div><button class="action dialog-button-close" data-dialog-close id="dialog-close-button" ><?php _e('Close','DAZZ_CSW_TEXT_DOMAIN');?></button></div>
				</div>
			</div>
		</div>
  <?php require_once('fs.php'); ?>
</div>
<a href="https://goo.gl/4rSmH6" target="_blank">	
	<img src="<?php echo DAZZ_CSW_PLUGIN_URL.'assets/images/temp.jpg'; ?>" style="width:100%;height:auto"  />
</a>	