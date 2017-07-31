<?php /* Template Name: Contact-us */ ?>
<?php get_header(); ?>
    <section id="content">
        <div class="contact-us">
            <div class="row text-center">
                <?php
                    $the_query = new WP_Query( 'p=72' );
                    while ( $the_query->have_posts() ) :
                     $the_query->the_post();

                     if($the_query->current_post == 0) {
                        echo '<h1 class="mid-title" data-aos="zoom-in" data-aos-duration="3000">'.get_the_title().'</h1>';
                        echo '<p data-aos="zoom-in" data-aos-duration="3000" data-aos-delay="1500">'.get_the_content().'</p>';
                      }
                    endwhile;
                    wp_reset_postdata();
                ?>

                <div class="mail-icon">
                    <img src="<?php echo get_template_directory_uri() ?>/img/mail.png" class="img-responsive mail" />
                </div>

                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#contact-modal">CONTACT US</button>
            </div>
        </div>
        <div class="map-box">
          <div class="row text-center">
            <div class="mapframebox">
              <iframe class="mapframe" width="833" height="376" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Dreamsmart%20Solution&key=AIzaSyCPEgl5F60fGnzNU4T7SmAyP2eGyEQjHFI" allowfullscreen>
              </iframe>
              <!-- <img src="<?php echo get_template_directory_uri() ?>/img/contact-map.png" class="img-responsive map" /> -->
            </div>
          </div>
        </div>

        <div id="contact-modal" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-body">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <div class="row text-center">
                          <div class="col-md-12">
                              <h3>Contact Us </h3>
                          </div>
                      </div>
                    <?php echo do_shortcode('[contact-form-7 id="75" title="Dreamsmart Contact"]'); ?>
                  </div>
                </div>

              </div>
        </div>
    </section>
<?php get_footer(); ?>
