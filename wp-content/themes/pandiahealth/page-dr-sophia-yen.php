<?php get_header(); ?>
<style>
 
     
    #our_team .doctor-title {
    display: flex;
    align-items: center;
    align-content: center;
    justify-content: space-between;
    }
    .doctor-img img {width:auto;}

  
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
        <?php foreach(get_field('doctors') AS $doctor){ ?>
            <div class="row">
                <div class="col-md-10 offset-md-1 text-center">
                <div class="doctor-img">
                                <img height="180" src="<?php echo $doctor['image']; ?>" alt="<?php echo $doctor['name']; ?>">
                </div>
                    <h2 class="title"><?php the_field('our_doctors_title'); ?></h2>
                    <p><?php the_field('our_doctors_text'); ?></p>
                </div>
            </div>
            
                <!-- <div class="row">
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
                </div> -->
            <?php } ?>
            <!-- <div class="row">
                <div class="col text-center">
                    <a href="<?php the_field('our_doctors_button_url'); ?>" class="button"><div class="left-icon button-icon">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-right.png" class="default-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-right-hover.png" class="hover-icon"></div>
                        <?php the_field('our_doctors_button_text'); ?>
                        <div class="right-icon button-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-left.png" class="default-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-left-hover.png" class="hover-icon"></div>
                    </a>
                </div>
            </div> -->
        </div>
    </section>
  

 


<?php get_footer(); ?>