    </div>
    <footer>
        <div class="footer-socials">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h3 class="subtitle">
                            stay connected
                        </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center footer-socials-icons">
                        <?php if (get_field('facebook', 'option')) { ?>
                            <a href="<?php the_field('facebook', 'option'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Facebook_icon.png" alt="Facebook Icon"></a>
                        <?php } ?>
                        <?php if (get_field('youtube', 'option')) { ?>
                            <a href="<?php the_field('youtube', 'option'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Youtube_icon.png" alt="Youtube Icon"></a>
                        <?php } ?>
                        <?php if (get_field('twitter', 'option')) { ?>
                            <a href="<?php the_field('twitter', 'option'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Twitter_icon.png" alt="Twitter Icon"></a>
                        <?php } ?>
                        <?php if (get_field('instagram', 'option')) { ?>
                            <a href="<?php the_field('instagram', 'option'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Instagram_icon.png" alt="Instagram Icon"></a>
                        <?php } ?>
                        <?php if (get_field('linkedin', 'option')) { ?>
                            <a href="<?php the_field('linkedin', 'option'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Linkedin_icon.png" alt="Linkedin Icon"></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-contact">
            <div class="container-fluid">
                <div class="row">
                    <div class="col text-center footer-title">
                        <h3 class="subtitle">Got Questions?</h3>
                        <p>
                            We’ve got answers. And we’d love to connect!
                        </p>
                    </div>
                </div>
                <div class="row" id='contact-box-list'>
                    <div class="contact-box">
                        <div class='footer-icon-class'>
                            <a href="https://lc.chat/now/11052217/" class="contact-link" target="_blank">
                                <div class="table-element">
                                    <div class="table-cell">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer-old-message-icon.png" alt="chat icon">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class='footer-text-class'>
                            <h4>CHAT WITH US</h4>
                            <p>Live Chat Now</p>
                        </div>
                    </div>

                    <div class="contact-box">
                        <div class='footer-icon-class'>
                            <a href="mailto:<?php the_field('email', 'option'); ?>" class="contact-link" target="_blank">
                                <div class="table-element">
                                    <div class="table-cell">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer-old-mail-icon.png" alt="main icon">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class='footer-text-class'>
                            <h4>EMAIL US</h4>
                            <p><a style="color:inherit;" href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a></p>
                        </div>
                    </div>


                    <div class="contact-box">
                        <div class='footer-icon-class'>
                            <a href="<?php echo site_url(); ?>/faq" class="contact-link">
                                <div class="table-element">
                                    <div class="table-cell">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer-question-icon.png" alt="Question mark">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class='footer-text-class'>
                            <h4>ASK US</h4>
                            <p>Visit our FAQ</p>
                        </div>
                    </div>


                    <div class="contact-box">
                        <div class='footer-icon-class'>
                            <a href="tel:<?php the_field('phone', 'option'); ?>" class="contact-link">
                                <div class="table-element">
                                    <div class="table-cell">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer-phone-icon.png" alt="Phone icon">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class='footer-text-class'>
                            <h4>CALL US</h4>
                            <p><a href="tel:<?php the_field('phone', 'option'); ?>" style="color:inherit"><?php the_field('phone', 'option'); ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-section-text">
                <?php the_field('contact_section_text', 'option'); ?>
            </div>
        </div>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer-menus">
                            <div class="footer-menu">
                                <p>Our Story</p>
                                <?php wp_nav_menu(['theme_location' => 'footer-our-story']); ?>
                            </div>
                            <div class="footer-menu">
                                <p>Questions?</p>
                                <?php wp_nav_menu(['theme_location' => 'footer-questions']); ?>
                            </div>
                            <div class="footer-menu">
                                <p>Our Policies</p>
                                <?php wp_nav_menu(['theme_location' => 'footer-our-policies']); ?>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-5 offset-md-1 text-md-right text-center">
                       <p>Copyright &copy; 2016-2021 Pandia Health, Inc. | <a href="<?php echo site_url(); ?>/sitemap">Sitemap</a></p>
						<p>Telemedicine services provided by Pandia Medical Group, a medical corporation.
                        <p>Address: 1257 Elko Dr. Sunnyvale, CA 94089</p>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hipaa.png" class="d-block d-md-inline-block" alt="Hippa Icon">
                        <script src="https://static.legitscript.com/seals/1162270.js"></script>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <?php wp_footer(); ?>
 

    <!-- Start of LiveChat (www.livechatinc.com) code -->
    <script type="text/javascript">
    window.__lc = window.__lc || {};
    window.__lc.license = 11052217;
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)};
    var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){
    i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},
    get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");
    return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){
    var n=t.createElement("script");
    n.async=!0,n.type="text/javascript",
    n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};
    !n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
    </script>
    <noscript>
    <a href="https://www.livechatinc.com/chat-with/11052217/" rel="nofollow">Chat with us</a>,
    powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a>
    </noscript>
    <!-- End of LiveChat code -->

    <script>
        <!-- F’in sweet Webflow Hacks -->
<script>
// when the DOM is ready
$(document).ready(function() {
  // get the anchor link buttons
  const menuBtn = $('.menu');
  // when each button is clicked
  menuBtn.click(()=>{	
    // set a short timeout before taking action
    // so as to allow hash to be set
    setTimeout(()=>{
      // call removeHash function after set timeout
      removeHash();
    }, 5); // 5 millisecond timeout in this case
  });

  // removeHash function
  // uses HTML5 history API to manipulate the location bar
  function removeHash(){
    history.replaceState('', document.title, window.location.origin + window.location.pathname + window.location.search);
  }
});


</script>
        
    </script>


    </body>

    </html>