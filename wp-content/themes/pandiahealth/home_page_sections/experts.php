<section class="experts">
    <div>
        <div class="row">
            <div class="col text-center">
                <h2 class="title"><?php echo $section['title']; ?></h2>
            </div>
        </div>
        <a href='<?php echo $section["link_url"] ?>'>
            <div class="experts-list">
                <?php $section_images = $section['images'];
                foreach ($section['images'] as $images) { ?>
                    <img src='<?php print_r($images['image']['url']) ?>' style="max-width: calc((100% / <?php echo count($section['images']); ?>) - 5vw);" />
                <?php } ?>
            </div>
        </a>
        <div class='container mt-4'>
            <?php foreach ($section['experts'] as $expert) { ?>
                <div class='row mb-4 px-3'>
                    <div class='col-2 mt-3 pr-5' id='expert-img-container'>
                        <img src='<?php echo $section["icon"]['url'] ?>'>
                    </div>
                    <div class='col-10'>
                        <p class="expert-title"><?php echo $expert['title']; ?></p>
                        <p class="expert-info"><?php echo $expert['text']; ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>