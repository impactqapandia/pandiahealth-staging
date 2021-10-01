    </div>
    <footer>
    
       
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
						<p>Telemedicine services provided by Pandia Health Group, in Person acne treatment.
                        <p>Address: 1257 Elko Dr. Sunnyvale, CA 94089</p>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hipaa.png" class="d-block d-md-inline-block" alt="Hippa Icon">
                        <script src="https://static.legitscript.com/seals/1162270.js"></script>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
    <script async type="text/javascript" src="https://static.klaviyo.com/onsite/js/klaviyo.js?company_id=XaZzd8"></script>


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

        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

                <script>
               (function($){
                
                jQuery(".expand").hide();	    
                jQuery("#show").click(function(){
                jQuery(".expand").toggle();
                });

                jQuery(".expand2").hide();	    
                jQuery("#show1").click(function(){
                jQuery(".expand2").toggle();
                });

            })(jQuery); 

                 </script>

    </body>

    </html>