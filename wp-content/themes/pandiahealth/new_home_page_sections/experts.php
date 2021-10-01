<section class="experts redesign hide-on-mobile">
    <div>
        <!--<div class="row">
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
        </a>-->
        <div class='container redesign mt-4'>
                <div class='row mb-4 px-3 experts-row'>
				<div class="col-7">
				    <h2 class="title" style="text-align:left"><?php echo $section['title']; ?></h2>
					<?php foreach ($section['services'] as $services) { ?>
					<div class="row services">
						<div class='col-1 mt-3' id='expert-img-container'>
							<img src='<?php echo $section["icon"]['url'] ?>' alt="Check Mark">
                    	</div>
                    	<div class='col-11'>
							<p class="expert-title"><?php echo $services['title']; ?></p>
							<p class="expert-info"><?php echo $services['text']; ?></p>
                    	</div>
						
					</div>
				  <?php } ?>	
				</div>
				<div class='col-5'>
							 <?php $section_images = $section['images'];
					foreach ($section['images'] as $images) { ?>
						<a href="/about/#sectionour_doctors"><img src='<?php print_r($images['image']['url']) ?>' class="expert-image" alt="Expert Image" /></a>
					<?php } ?>
                </div>	
                </div>
        </div>
    </div>
</section>
<section class="experts experts-mobile redesign">
	     <div class="row">
            <div class="col text-center">
                <h2 class="title"><?php echo $section['title']; ?></h2>
            </div>
        </div>
        <div class="experts-list">
                <?php $section_images = $section['images'];
                foreach (array_slice($section['images'], 0, 3) as $images) { ?>
                    <img src='<?php print_r($images['image']['url']) ?>' style="max-width: calc((100% / 3) - 4vw );" alt="Expert Image" />
                <?php } ?>
        </div>
        <div class='container redesign mt-4'>
            <?php foreach ($section['services'] as $services) { ?>
                <div class='row mb-4 px-3'>
                    <div class='col-1 mt-3' id='expert-img-container'>
                        <img src='<?php echo $section["icon"]['url'] ?>' alt="Check Mark">
                    </div>
                    <div class='col-11 mobile-col-layout'>
                        <p class="expert-title"><?php echo $services['title']; ?></p>
                        <p class="expert-info"><?php echo $services['text']; ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
</section>