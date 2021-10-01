<section class="birth_control_benefits redesign">
        <div class='container redesign mt-4'>
			<div class="row benefits-icons">
				<div class="col-8">
					<h2 class="title"><?php echo $section['benefits_of_birth_control_title']; ?></h2>
				</div>
				<div class="col-2 text-center">
					<img src='<?php echo $section["icon_pandia"]['url'] ?>'>  
					<p class="benefits"><?php echo $section['pandia_title']; ?></p>   
				</div>
				 <div class="col-2">
					 <img src='<?php echo $section["icon_in_person"]['url'] ?>'>
					 <p class="benefits"><?php echo $section['in_person_title']; ?></p> 
				</div>
        	</div>
            <?php foreach ($section['benefits_of_birth_control'] as $benefits) { ?>
                <div class='row mb-4 px-3'>
                    <div class='col-8'>
						<p class="benefits"><?php echo $benefits['text']; ?></p>        
                    </div>
                    <div class="col-2 img-container">
                         <img src='<?php echo $section["icon_one"]['url'] ?>'>
                    </div>
					<div class="col-2 img-container">
                         <img src='<?php echo $section["icon_two"]['url'] ?>'>
                    </div>
                </div>
            <?php } ?>
        </div>
</section>