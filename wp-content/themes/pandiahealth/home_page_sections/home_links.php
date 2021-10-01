<section id="home_links">
    <div class="container-fluid">
        <div class="row">
            <div class="col text-center">
                <h2 class="title"><?php echo $section['title']; ?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="homelinks-container">
                    <?php foreach($section['links'] AS $link){ ?>
                        <div class="home-link">
                            <div class="home-link-image">
                                <img src="<?php echo $link['image']; ?>" alt="<?php echo $link['button_text']; ?>">
                            </div>
                            <div class="home-link-text text-center">
                                <p><?php echo $link['text']; ?></p>

                            </div>
                            <div class="button-row">
                                <a href="<?php echo $link['button_url']; ?>" class="button button-blue-homelinks"><?php echo $link['button_text']; ?></a>
                            </div>

                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>