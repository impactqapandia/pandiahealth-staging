<section id="insurance">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h3 class="subtitle"><?php echo $section['insurance_title']; ?></h3>
                <p><?php echo $section['insurance_text']; ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="insurances">
                    <?php foreach($section['insurance'] AS $insurance){ ?>
                        <div class="insurance">
                            <img src="<?php echo $insurance['logo']; ?>">
                        </div>

                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <a href="<?php echo $section['insurance_link_url']; ?>" class="button"><?php echo $section['insurance_link_text']; ?></a>
            </div>
        </div>
    </div>
</section>