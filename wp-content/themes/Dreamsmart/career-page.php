
<?php /* Template Name: Career-Page */ ?>
<?php get_header(); ?>
<section id="content">
    <div class="join">
        <div class="row text-center">
            <?php
                $the_query = new WP_Query( 'p=66' );
                while ( $the_query->have_posts() ) :
                 $the_query->the_post();

                 if($the_query->current_post == 0) {
                    echo '<h1 class="big-title" data-aos="zoom-in" data-aos-duration="3000">'.get_the_title().'</h1>';
                    echo '<p data-aos="zoom-in" data-aos-duration="3000" data-aos-delay="1500">'.get_the_content().'</p>';
                  }
                endwhile;
                wp_reset_postdata();
            ?>
            <div class="recruit" data-aos="zoom-in" data-aos-duration="3000" data-aos-delay="3000">
                <img src="<?php echo get_template_directory_uri() ?>/img/dreamsmart logo 2.png" alt="" class="img-responsive" />

                <button type="button" class="btn btn-default apply" data-toggle="modal" data-target="#apply-modal">APPLY NOW</button>
            </div>
        </div>
    </div>
    <div class="row list-develop">
        <div class="col-md-4 software yellow" data-aos="fade-down-right" data-aos-duration="3000">
            <h1 class="mid-title">Software Engineers</h1>
        </div>
        <div class="col-md-4 corporate blue" data-aos="fade-down" data-aos-duration="3000">
            <h1 class="mid-title">Project Managers / Assistants</h1>
        </div>
        <div class="col-md-4 game dark-blue" data-aos="fade-down-left" data-aos-duration="3000">
            <h1 class="mid-title">Super Interns</h1>
        </div>
    </div>

            <div id="apply-modal" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-body">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <div class="row text-center">
                          <div class="col-md-12">
                              <h3>Application Form</h3>
                          </div>
                      </div>
                    <?php echo do_shortcode('[contact-form-7 id="85" title="Dreamsmart Apply"]'); ?>
                  </div>
                </div>

              </div>
        </div>


</section>
<?php get_footer(); ?>
