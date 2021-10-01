<section id="birth_control" class="redesigned_testimonials">
    <div class="container redesign">
        <div class="row">
            <div class="col text-center">
                <h2 class="title">
                    <?php echo $section['birth_control_methods_title']; ?>
                </h2>
				<h3 class="subtitle">
                    <?php echo $section['birth_control_methods_subtitle']; ?>
                </h3>
            </div>
        </div>
        <div class="row birth-control-methods-desktop">
            <div class='autoplay_birth_control_methods'>
                <?php
                foreach ($section['birth_control_methods'] as $birth_control_method) { ?>
                    <div class="slick-container">
                        <div class='birth-control-method-image'>
                            <img src='<?php echo $birth_control_method['image'] ?>' alt="Birth Control Method">
                        </div>
						<div class="row birth-control-method-title">
                            <div class='col'>
                                <p>
									<?php echo $birth_control_method['method']; ?>
								</p>
                            </div>
                        </div>
                        <div class="row birth-control-method-text">
                            <div class='col'>
                                <p>
                                    <?php echo $birth_control_method['text']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="row birth-control-methods-mobile">
			 <div class='autoplay_birth_control_methods_mobile'>
                <?php
                foreach ($section['birth_control_methods'] as $birth_control_method) { ?>
                    <div class="slick-container">
                        <div class='birth-control-method-image'>
                            <img src='<?php echo $birth_control_method['image'] ?>' alt="Birth Control Method">
                        </div>
						<div class="row birth-control-method-title">
                            <div class='col'>
                                <p>
									<?php echo $birth_control_method['method']; ?>
								</p>
                            </div>
                        </div>
                        <div class="row birth-control-method-text">
                            <div class='col'>
                                <p>
                                    <?php echo $birth_control_method['text']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class='bg-gradient'>
            </div>
            <!--<div class="col">
                <div id="testimonialsCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php $count = 0;
                        foreach ($section['birth_control_methods'] as $birth_control_method) { ?>
                            <div class="carousel-item <?php if ($count === 0) { ?>active<?php } ?>">
                                <div class="container">
                                    <div class='birth-control-method-image'>
                            			<img src='<?php echo $birth_control_method['image'] ?>' alt="Birth Control Method">
                        			</div>
									<div class="row birth-control-method-title">
                            			<div class='col'>
                                			<p>
                                   				 <?php echo $birth_control_method['method']; ?>
                                			</p>
                            			</div>
                        			</div>
                        			<div class="row birth-control-method-text">
                            			<div class='col'>
                                		<p>
                                    		<?php echo $birth_control_method['text']; ?>
                                		</p>
                            			</div>
                        			</div>
                                </div>
                            </div>
                        <?php $count++;
                        } ?>
                    </div>
                </div>
            </div>-->
        </div>
    </div>
</section>