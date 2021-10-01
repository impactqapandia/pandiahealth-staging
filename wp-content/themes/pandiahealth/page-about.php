<?php get_header(); ?>
<style>
    html {
    scroll-behavior: smooth;
    }
     
    #our_team .doctor-title {
    display: flex;
    align-items: center;
    align-content: center;
    justify-content: space-between;
    }

  
    @media only screen and (max-width: 768px) {
    .doctor-img img {
    width: 100%;
    max-width: 250px;
    margin: 0 auto 15px;
    height:250px;
    }
    }
</style>
    <section id="our_doctors">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1 text-center">
                    <h2 class="title"><?php the_field('our_doctors_title'); ?></h2>
                    <p><?php the_field('our_doctors_text'); ?></p>
                </div>
            </div>
            <?php foreach(get_field('doctors') AS $doctor){ ?>
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="doctor-row">
                            <div class="doctor-img">
                                <img height="180" src="<?php echo $doctor['image']; ?>" alt="<?php echo $doctor['name']; ?>">
                            </div>
                            <div class="doctor-content">
                                <div class="doctor-title">
                                    <h3><?php echo $doctor['name']; ?></h3>
                                    <?php if($doctor['bio_link']){ ?>
                                        <a href="<?php echo $doctor['bio_link']; ?>" target="_blank"><span>BIO</span> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bio-link.png"></a>
                                    <?php } ?>
                                </div>
                                <div class="doctor-bio">
                                    <p style="text-align:left;"><?php echo $doctor['bio']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="row">
                <div class="col text-center">
                    <a href="<?php the_field('our_doctors_button_url'); ?>" class="button"><div class="left-icon button-icon">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-right.png" class="default-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-right-hover.png" class="hover-icon"></div>
                        <?php the_field('our_doctors_button_text'); ?>
                        <div class="right-icon button-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-left.png" class="default-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-left-hover.png" class="hover-icon"></div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="why_pandia_video">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1 text-center">
                    <h2 class="title white"><?php the_field('why_pandia_title'); ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="<?php the_field('why_pandia_video'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="why_pandia">
        <div class="container">
            <div class="row mt-4">
                <div class="col-md-6 text-center">
                    <div class="why-pandia-text">
                        <h3 class="subtitle">The Story Behind the Name "Pandia Health"</h3>
                        <?php the_field('the_story'); ?>
                    </div>

                </div>
                <div class="col-md-6">
                    <img src="<?php the_field('the_story_image'); ?>" alt="The Story Behind the Name 'Pandia Health'">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <img src="<?php the_field('making_womens_lives_easier_img'); ?>" alt="Making Women's Lives Easier">
                </div>
                <div class="col-md-6 text-center">
                    <div class="why-pandia-text">
                        <h3 class="subtitle">Making Women's Lives Easier</h3>
                        <?php the_field('making_womens_lives_easier'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

 
    <section id="our_team">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1 text-center">
                    <h2 class="title"><?php the_field('our_team_title'); ?></h2>
                    <p><?php the_field('our_team_text'); ?></p>
                </div>
            </div>
            <?php foreach(get_field('team') AS $team){ ?>
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="doctor-row">
                            <div class="doctor-img">
                                <img src="<?php echo $team['image']; ?>" alt="<?php echo $team['name']; ?>">
                            </div>
                            <div class="doctor-content">
                                <div class="doctor-title">
                                    <h3><?php echo $team['name']; ?> <?php if($team['linked_in']){ ?><a href="<?php echo $team['linked_in']; ?>" target="_blank"><i style="position:relative;right:-6px;top:0;" class="fab fa-linkedin-in"></i></a> <?php } ?> </h3>
                                    <span class="text-white"><?php echo $team['title']; ?></span>
                                </div>
                                <div class="doctor-bio">
                                    <p class="text-left"><?php echo $team['bio']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
 
<!-- <script type="text/javascript">
    jQuery(document).ready(function($){
         var hash = location.hash.replace(/section/,'');
         if(hash){
            $('html,body').scrollTop($(hash).offset().top - 125);
        }
    });
    
</script> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

<!-- <script>
// The function actually applying the offset
function offsetAnchor() {
  if (location.hash.length !== 0) {
    window.scrollTo(window.scrollX, window.scrollY - 100);
  }
}

// Captures click events of all a elements with href starting with #
$(document).on('click', 'a[href^="#"]', function(event) {
  // Click events are captured before hashchanges. Timeout
  // causes offsetAnchor to be called after the page jump.
  window.setTimeout(function() {
    offsetAnchor();
  }, 0);
});

// Set the offset when entering page with hash present in the url
window.setTimeout(offsetAnchor, 100);

</script> -->

<script>
 $(document).ready(function () {
    $('a').on('click', function (e) {
        e.preventDefault();

        var target = this.hash,
            $target = $(target);

       $('html, body').stop().animate({
        'scrollTop': $target.offset().top-49
    }, 900, 'swing', function () {
    });

        console.log(window.location);

        return true;
    });
});

</script>


<?php get_footer(); ?>