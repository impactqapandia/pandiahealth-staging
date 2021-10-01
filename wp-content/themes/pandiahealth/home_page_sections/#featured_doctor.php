<section class="featured_doctor">
    <div class="container">
        <div class="featured-doctor-image">
            <a href="<?php echo $section['link_url']; ?>">
                <img src="<?php echo $section['doctor_image']; ?>" alt="Expert Doctor">
            </a>
        </div>
        <div class='featured-doctor-text'>
            <h2 class="title"><?php echo $section['title']; ?></h2>
            <p><?php echo $section['subtitle']; ?></p>
            <a href="<?php echo $section['link_url']; ?>" class="button button-blue"><?php echo $section['link_text']; ?></a>
        </div>
    </div>
</section>