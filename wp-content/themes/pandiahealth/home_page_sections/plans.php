<section id="plans">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="title"><?php echo $section['title']; ?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-start align-content-start flex-wrap flex-md-nowrap">
                    <?php foreach($section['plans'] AS $plan){ ?>
                        <div class="plan p-3 flex-grow-1">
                            <div class="plan-top">
                                <p class="plan-title"><?php echo $plan['plan_name']; ?></p>
                                <p class="plan-price"><?php echo $plan['plan_price']; ?></p>
                                <?php if($plan['plan_price_note_link']){ ?><a href="<?php echo $plan['plan_price_note_link']; ?>" class="plan-note"><?php }else{ ?><p class="plan-note"><?php } ?><?php echo $plan['plan_price_note']; ?><?php if($plan['plan_price_note_link']){ ?></a><?php }else{ ?></p><?php } ?>
                            </div>
                            <div class="plan-bottom">
                                <div class="plan-perks">
                                    <?php foreach($plan['plan_perks'] AS $perk){ ?>
                                        <p class="perk"><?php echo $perk['perk']; ?></p>
                                    <?php } ?>
                                </div>
                                <a href="<?php echo $plan['plan_link']; ?>" class="button"><?php echo $plan['plan_button_text']; ?></a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col text-center">
                <?php echo $section['disclaimer']; ?>
            </div>
        </div>
    </div>
</section>