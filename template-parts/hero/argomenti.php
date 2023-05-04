<?php
global $post;

$testo_argomenti = dsi_get_option("testo_argomenti", "setup");

?>
    <section class="section bg-petrol py-5 position-relative d-flex align-items-center overflow-hidden" >
        <div class="container">
            <div class="row variable-gutters">
                <div class="col-md-5">
                    <div class="hero-title text-left">
                        <h1 class="p-0 mb-2"><?php the_title(); ?></h1>
                        <h2 class="h4 font-weight-normal"><?php echo $testo_argomenti; ?></h2>
                    </div><!-- /hero-title -->
                </div><!-- /col-md-5 -->
            </div><!-- /row -->
        </div><!-- /container -->
    </section><!-- /section -->