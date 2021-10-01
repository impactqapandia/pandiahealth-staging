<section id="why_ph">
    <div class="container-fluid">
        <div class="row">
            <div class="col text-center">
                <h2 class="title white"><?php echo $section['why_ph_title']; ?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="why-points">
                    <?php foreach($section['why_ph_points'] AS $point){ ?>
                        <div class="why-point">
                            <div class="why-point-content">
                                <a href="<?php echo $point['link']; ?>"><img src="<?php echo $point['icon']; ?>" alt="<?php echo $point['title']; ?>"></a>
                                <h3><?php echo $point['title']; ?></h3>
                                <p><?php echo $point['text']; ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>