<?php /* Template Name: Service-Page */ ?>
<?php get_header(); ?>
<section id="content">
    <div class="our-service-content">
        <div class="row block-top">
            <div class="col-md-3 our">
                <?php
                    $the_query = new WP_Query( 'p=36' );
                    while ( $the_query->have_posts() ) :
                     $the_query->the_post();

                     if($the_query->current_post == 0) {
                        echo '<h1 class="mid-title">'.get_the_title().'</h1>';
                        echo the_content();
                      }
                    endwhile;
                    wp_reset_postdata();
                ?>
            </div>
            <div class="col-md-9 yellow web">
                <div class="col-md-3">
                    <?php
                        $the_query = new WP_Query( 'p=38' );
                        while ( $the_query->have_posts() ) :
                         $the_query->the_post();

                         if($the_query->current_post == 0) {
                            echo '<h1 class="mid-title service-title">'.get_the_title().'</h1>';
                            echo the_content();
                          }
                        endwhile;
                        wp_reset_postdata();
                    ?>

                </div>
                <div class="col-md-9">
                       <img src="<?php echo get_template_directory_uri() ?>/img/chat bubble - hello world.png" alt="" class="img-responsive"/>
                </div>
            </div>
        </div>
        <div class="row block-bot">
            <div class="col-md-6 blue mobile">
                <div class="col-md-6">
                    <?php
                        $the_query = new WP_Query( 'p=40' );
                        while ( $the_query->have_posts() ) :
                         $the_query->the_post();

                         if($the_query->current_post == 0) {
                            echo '<h1 class="mid-title service-title">'.get_the_title().'</h1>';
                            echo the_content();
                          }
                        endwhile;
                        wp_reset_postdata();
                    ?>
                </div>
                <div class="col-md-6">
                    <div class="apple-andro">
                        <img src="<?php echo get_template_directory_uri() ?>/img/apple.png" alt="" class="img-responsive apple" data-aos="fade-left" data-aos-duration="3000" data-aos-delay="1500"/>
                        <img src="<?php echo get_template_directory_uri() ?>/img/android 2.png" alt="" class="img-responsive big-andro" data-aos="fade-left" data-aos-duration="3000"/>
                    </div>
                </div>
            </div>
            <div class="col-md-6 dark-blue ui">
                    <h1 class="mid-title">UI &</h1>
                    <h1 class="mid-title service-title">UX DESIGN</h1>
                    <?php
                        $the_query = new WP_Query( 'p=42' );
                        while ( $the_query->have_posts() ) :
                         $the_query->the_post();

                         if($the_query->current_post == 0) {
                            echo the_content();
                          }
                        endwhile;
                        wp_reset_postdata();
                    ?>
                    <img src="<?php echo get_template_directory_uri() ?>/img/rocket.png" alt="" class="img-responsive rocket" data-aos="fade-up-left" data-aos-duration="3000"/>
            </div>
        </div>
        <div class="row block-pop">
            <div class="col-md-6 our popstation-img">
                <img src="<?php echo get_template_directory_uri() ?>/img/img_popstation_482x265.png" alt="" class="img-responsive " data-aos="fade-up-left" data-aos-duration="3000"/>
            </div>
            <div class="col-md-6 our">
                <img src="<?php echo get_template_directory_uri() ?>/img/text_popstation_351x72.png" alt="" class="img-responsive poptitle"  data-aos-duration="3000"/>
                <div class="popp">
                    <?php
                        $the_query = new WP_Query( 'p=110' );
                        while ( $the_query->have_posts() ) :
                         $the_query->the_post();

                         if($the_query->current_post == 0) {
                            echo the_content();
                          }
                        endwhile;
                        wp_reset_postdata();
                    ?>
                </div>
                    <button type="button" class="btn btn-default pop" onclick="window.location.href='/popstation'" data-toggle="" data-target="">Learn More</button>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
