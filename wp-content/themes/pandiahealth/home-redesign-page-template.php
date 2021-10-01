<?php /* Template Name: Home Redesign Page Template */ ?>
<?php get_header(); ?>

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

<section id='bottom-get-started-bar-with-chat' class="redesign">
    <a href="<?php echo the_field('hiw_link_url'); ?>" class='button'>
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-right.png" class="unhover-arrow">
        <span><?php echo the_field('hiw_link_text'); ?></span>
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-left.png" class="unhover-arrow">
    </a>

   <!-- <button onclick="LC_API.open_chat_window();" class='chat-icon'>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/chat-bubble.png" alt="chat" />
    </button>-->
</section>
<?php foreach(get_field('sections') as $section){ alog('$section',$section,__FILE__,__LINE__);?>
    <?php if($section['hide_section'] == 'no'){ ?>
        <?php include('new_home_page_sections/'.$section['acf_fc_layout'].'.php'); ?>
    <?php } ?>
<?php } ?>



<?php get_footer(); ?>