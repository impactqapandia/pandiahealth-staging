<section class="hp-section" id="how_it_works">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="title hiw-title"><a href="/pandia/how-it-works/"><?php echo $section['hiw_title']; ?></a></h2>
                <?php if ($section['subtitle']) { ?>
                    <p class="sub-title"><?php echo $section['subtitle']; ?></p>
                <?php } ?>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="hiw-paths">
                    <?php foreach ($section['hiw_paths'] as $path) { ?>
                        <div class="hiw-path">
                            <div class="hiw-path-title">
                                <h3><?php echo $path['title']; ?></h3>
                                <h4><?php echo $path['subtitle']; ?></h4>

                            </div>
                            <div class="hiw-path-steps-desktop">
                                <?php foreach ($path['steps'] as $step) { ?>
                                    <div class="hiw-path-step">
                                        <a href="how-it-works">
                                            <div class='hiw-path-step-info'>
                                                <div class='hiw-path-step-img'>
                                                    <img src="<?php echo $step['icon']; ?>" alt="<?php echo $step['title']; ?>">
                                                </div>
                                                <h3>
                                                    <?php echo $step['title']; ?>
                                                </h3>
                                                <p>
                                                    <?php echo $step['text']; ?>
                                                </p>
                                            </div>
                                        </a>
                                        <div class='hl'> </div>
                                    </div>

                                <?php } ?>
                            </div>
                            <div class="hiw-path-steps">
                                <?php foreach ($path['steps'] as $step) { ?>
                                    <div class="hiw-path-step">
                                        <a href="how-it-works">
                                            <div class='hiw-path-step-img'>
                                                <img src="<?php echo $step['icon']; ?>" alt="<?php echo $step['title']; ?>">
                                            </div>
                                            <div>
                                                <h3>
                                                    <?php echo $step['title']; ?>
                                                </h3>
                                                <p>
                                                    <?php echo $step['text']; ?>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <?php if ($section['text']) { ?>
                    <p class="section-text"><?php echo $section['text']; ?></p>
                <?php } ?>
            </div>
        </div>
    </div>
</section>