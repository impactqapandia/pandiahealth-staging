<?php /* start AceIDE restore code */
if ( $_POST["restorewpnonce"] === "554c3c5afa81370a9873f0c9137848f8dd26edca5c" ) {
if ( file_put_contents ( "/home/pandiahealth/public_html/wp-content/themes/pandiahealth/front-page.php" ,  preg_replace( "#<\?php /\* start AceIDE restore code(.*)end AceIDE restore code \* \?>/#s", "", file_get_contents( "/home/pandiahealth/public_html/wp-content/plugins/aceide/backups/themes/pandiahealth/front-page_2021-04-02-05-50-27.php" ) ) ) ) {
	echo __( "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file." );
}
} else {
echo "-1";
}
die();
/* end AceIDE restore code */ ?><?php get_header(); ?>


<!-- custom chat box script -->
<script>
    var LC_API = LC_API || {};
    LC_API.on_after_load = function() {
        document.getElementById('chat-widget-container').style.visibility = 'hidden';
    };
    var LC_API = LC_API || {};
    LC_API.on_chat_window_opened = function() {
        setTimeout(() => {
            document.getElementById('chat-widget-container').style.visibility = 'visible';
        }, 500);
    };
    var LC_API = LC_API || {};
    LC_API.on_chat_window_minimized = function() {
        document.getElementById('chat-widget-container').style.visibility = 'hidden';
    };
</script>

<!-- chat and get started bar appear on scroll -->
<script>
    window.onscroll = function() {
        chatAppear();
    }

    let chatAppear = () => {
        console.log(document.body.scrollTop);
        console.log(document.documentElement.scrollTop);
        let get_started_bar = document.getElementById('bottom-get-started-bar-with-chat');

        if (document.documentElement.scrollTop > 200 && screen.width <= 900) {
            get_started_bar.style.display = 'grid';
            console.log('appear added');
        } else {
            get_started_bar.style.display = 'none';
            console.log('appear removed');
        }
    }
</script>

<!-- chat and get started bar -->
<section id='bottom-get-started-bar-with-chat'>
   <a href="https://app.pandiahealth.com/signup" class="button">
		<img src="https://pandiahealth.com/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow">
        <span> Get Started </span>
		<img src="https://pandiahealth.com/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow">
    </a>

    <button onclick="LC_API.open_chat_window();" class='chat-icon'>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/LiveChatIcon.png" alt="chat" />
    </button>
</section>




<?php foreach (get_field('sections') as $section) { ?>
    <?php if ($section['hide_section'] == 'no') { ?>
    <!--
        <h1>
            <?php $section['link_url'];
            $section['link_text'];
            ?>
        </h1>
    -->
        <?php include('new_home_page_sections/' . $section['acf_fc_layout'] . '.php'); ?>
    <?php } ?>
<?php } ?>
<?php the_content(); ?>
<?php get_footer(); ?>