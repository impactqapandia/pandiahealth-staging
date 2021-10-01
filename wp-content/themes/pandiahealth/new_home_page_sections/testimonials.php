<section id="testimonials" class="redesigned_testimonials">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="title">
                    <?php echo $section['testimonials_title']; ?>
                </h2>
            </div>
        </div>
 
        <div class="row testimonial-desktop">
            <div class='autoplay'>
                <?php
                foreach ($section['testimonials'] as $testimonial) { ?>
                    <div class="slick-container">
                        <!--<div class = 'bg-gradient'>
                </div>-->
                        <div class='testimonials-big-quotes'>
                            <img src='<?php echo $section["top_icon"]["url"] ?>' alt="Quotes Icon">
                        </div>
                        <div class="row testimonial-text">
                            <div class='col'>
                                <p>
                                    <?php echo $testimonial['text']; ?>
                                </p>
                            </div>
                        </div>
                        <div class='row signatures'>
                            <div>
                                <img src='<?php echo $testimonial['social_media_image']['url'] ?>' alt='yelp'>
                            </div>
                            <div>
                                <p>
                                    - <?php echo $testimonial['name']; ?>
                                </p>
                                <p>
                                    5-star rating
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>


        <div class="row testimonial-mobile">
            <!--<div class='bg-gradient'>
            </div>-->
            <div class="col">
                <div id="testimonialsCarousel" class="carousel slide" data-ride="carousel">
                    <div class='testimonials-big-quotes'>
                        <img src='<?php echo $section["top_icon_mobile"]["url"] ?>'>
                    </div>
                    <div class="carousel-inner">
                        <?php $count = 0;
                        foreach ($section['testimonials'] as $testimonial) { ?>
                            <div class="carousel-item <?php if ($count === 0) { ?>active<?php } ?>">
                                <div class="container">
                                    <div class="row testimonial-text">
                                        <div class='col'>
                                            <p>
                                                <?php echo $testimonial['text']; ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class='row signatures'>
                                        <div>
                                            <img src='<?php echo $testimonial['social_media_image']['url'] ?>' alt='yelp'>
                                        </div>
                                        <div>
                                            <p>
                                                - <?php echo $testimonial['name']; ?>
                                            </p>
                                            <p>
                                                5-star rating
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php $count++;
                        } ?>
                    </div>
                    <a class="carousel-control-prev" href="#testimonialsCarousel" role="button" data-slide="prev">
                        <img src="<?php echo $section['arrow_icon']['url'] ?>">
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#testimonialsCarousel" role="button" data-slide="next">
                        <img src="<?php echo $section['arrow_icon']['url'] ?>">
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>