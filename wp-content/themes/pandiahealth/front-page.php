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
<section id='bottom-get-started-bar-with-chat'>
<a href="https://app.pandiahealth.com/signup" class="button home-new">
							<img data-src="https://www.pandiahealth.com/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow ls-is-cached lazyloaded" src="https://www.pandiahealth.com/wp-content/themes/pandiahealth/img/arrow-right.png"><noscript><img   data-src="https://www.pandiahealth.com/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   data-src="https://www.pandiahealth.com/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="https://www.pandiahealth.com/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow"></noscript>
							<span>Get Started</span>
							<img data-src="https://www.pandiahealth.com/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow ls-is-cached lazyloaded" src="https://www.pandiahealth.com/wp-content/themes/pandiahealth/img/arrow-left.png"><noscript><img   data-src="https://www.pandiahealth.com/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   data-src="https://www.pandiahealth.com/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="https://www.pandiahealth.com/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow"></noscript>
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