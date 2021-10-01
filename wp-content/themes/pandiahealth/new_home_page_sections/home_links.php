<script>
   $("div").css("display", "block")
</script>
<section id="home_links" class="redesign_links">
    <div class="container-fluid">
       
    <div class="row">
            <div class="col text-center">
                <h2 class="title"><?php echo $section['title']; ?></h2>
            </div>
    </div>
    <div class="row">
            <div class="col">
                <div class="homelinks-container">
                    <?php foreach($section['links'] AS $link){ ?>
                        <div class="home-link">
                            <div class="home-link-image">
                                <img style="object-fit: cover;" width="227" height="142" src="<?php echo $link['image']; ?>" alt="<?php echo $link['button_text']; ?>">
                            </div>
                            <div class="home-link-text text-center">
                                <p><?php echo $link['text']; ?></p>

                            </div>
                            <div class="button-row">
                                <a href="<?php echo $link['button_url']; ?>" class="button button-blue-homelinks"><?php echo $link['button_text']; ?></a>
                            </div>

                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>


        </div>

        <div class="row stay-touch">
        <?php foreach($section['links'] AS $link){ ?>
        <div class="card-">
        <div class="row no-gutters mb-4">
            <div class="col-auto">
            <img style="object-fit: cover;" width="280" height="160" src="<?php echo $link['image']; ?>" alt="<?php echo $link['button_text']; ?>">
            </div>
            <div class="col">
                <div class="card-block px-5">
                <p><?php echo $link['text']; ?></p>
                <a style="text-align:left;" href="<?php echo $link['button_url']; ?>" class="button button-blue-homelinks"><?php echo $link['button_text']; ?></a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
       
    </div>
</section>