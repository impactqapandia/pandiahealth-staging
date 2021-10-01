<section id="brands">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h3 class="subtitle"><?php echo $section['brands_title']; ?></h3>
                <p><?php echo $section['brands_text']; ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="brands">
                    <?php foreach ($section['brands'] as $brand) { ?>
                        <div class="brand">
                            <a href='<?php echo $section["link_url"] ?>'>
                                <img src="<?php echo $brand['logo']; ?>" alt="Brand logos">
                            </a>
                        </div>

                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <a href="<?php echo $section['brands_link_url']; ?>" class="button"><?php echo $section['brands_link_text']; ?></a>
            </div>
        </div>
    </div>
</section>