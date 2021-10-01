<section class="faq-section redesign">
        <div class='container redesign'>
			<div class="row faq-title" >
				<div class="col text-center">
					<h2 class="title"><?php echo $section['faq_title']; ?></h2>
				</div>
        	</div>
			 <?php foreach ( $section['faq_questions'] as $faq_questions ) : ?>
				<div id="" class="row faq-questions accordion">
					<div class="col">
						<div class="transform">
							<p class="question"><?php echo $faq_questions['text']; ?></p>
							<div class="row questions">
									<p class="answer"><?php echo $faq_questions['text_copy']; ?></p>
									<?php if($faq_questions['link_url'] !='' && $faq_questions['link_url'] !=''){?>

										<a href="<?php echo $faq_questions['link_url']; ?>" class="button redesign home-new">
											<img src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow" alt="Right Arrow">
											<span><?php echo $faq_questions['link_text']; ?></span>
											<img src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow" alt="Left Arrow">
										</a>
									<?php }?>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
			<div class="row faq-button">
				<div class="col">
					<a href="<?php echo $section['faq_link_url']; ?>" class="button button-blue redesign" style="font-weight:600;"><?php echo $section['faq_link_text']; ?></a>
				</div>
			</div>
        </div>
</section>