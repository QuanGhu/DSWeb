<?php get_header(); ?>
<section id="content">
   <div class="big-logo light-green" >
      <img src="<?php echo get_template_directory_uri() ?>/img/logo_with_text.png" alt="dreamsmart_logo" class="img-responsive ds-logo"  />
   </div>

   <div class="reality dark-blue">
      <div class="row">
        <div class="col-md-12">
            <?php
                $the_query = new WP_Query( 'p=20' );
                while ( $the_query->have_posts() ) :
                 $the_query->the_post();

                 if($the_query->current_post == 0) {
                    echo '<h1 class="big-title">'.get_the_title().'</h1>';
                    echo '<p data-aos="flip-left" data-aos-duration="1500">';
                    echo get_the_content();
                    echo '</p>';
                  }
                endwhile;
                wp_reset_postdata();
            ?>
        </div>
      </div>
   </div>

   <div class="our-services blue">
      <div class="row text-center">
         <div class="col-md-4">
             <img src="<?php echo get_template_directory_uri() ?>/img/moon.png" alt="" class="img-responsive cloud-wmoon"/>
             <?php
                 $the_query = new WP_Query( 'p=22' );
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
         <div class="col-md-4">
             <img src="<?php echo get_template_directory_uri() ?>/img/earth.png" alt="" class="img-responsive cloud-wearth"/>
             <?php
                 $the_query = new WP_Query( 'p=24' );
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
         <div class="col-md-4">
             <img src="<?php echo get_template_directory_uri() ?>/img/android.png" alt="" class="img-responsive cloud-wandro" />
             <?php
                 $the_query = new WP_Query( 'p=26' );
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
      </div>
      <div class="row text-center">
         <button type="button" class="btn btn-default" onclick="window.location.href='/services'">Our Services</button>
      </div>
      <img src="<?php echo get_template_directory_uri() ?>/img/cloud 2.png" alt="" class="img-responsive mid-cloud" />
      <img src="<?php echo get_template_directory_uri() ?>/img/cloud 3.png" alt="" class="img-responsive bot-cloud" />
   </div>

   <div class="planning light-blue">
       <img src="<?php echo get_template_directory_uri() ?>/img/cloud 1.png" alt="" class="img-responsive big-cloud" />
      <div class="row text-center">
         <div class="col-md-12">
             <?php
                 $the_query = new WP_Query( 'p=29' );
                 while ( $the_query->have_posts() ) :
                  $the_query->the_post();

                  if($the_query->current_post == 0) {
                     echo '<h1 class="big-title">'.get_the_title().'</h1>';
                     echo '<p data-aos="zoom-in-down" data-aos-duration="1500">';
                     echo get_the_content();
                     echo '</p>';
                   }
                 endwhile;
                 wp_reset_postdata();
             ?>
         </div>
     </div>
      <div class="blue-print">
          <img src="<?php echo get_template_directory_uri() ?>/img/compass.png" alt="" class="img-responsive compass"/>
          <img src="<?php echo get_template_directory_uri() ?>/img/ruler.png" alt="" class="img-responsive ruler"/>
      </div>
   </div>

   <div class="costumized yellow">
       <div class="row text-center">
          <div class="col-md-12">
              <?php
                  $the_query = new WP_Query( 'p=31' );
                  while ( $the_query->have_posts() ) :
                   $the_query->the_post();

                   if($the_query->current_post == 0) {
                      echo '<h1 class="big-title">'.get_the_title().'</h1>';
                      echo '<p data-aos="zoom-out" data-aos-duration="1500">';
                      echo get_the_content();
                      echo '</p>';
                    }
                  endwhile;
                  wp_reset_postdata();
              ?>
             <button type="button" class="btn btn-default" onclick="window.location.href='/portfolio'">Our Portfolio</button>
          </div>
      </div>
      <div class="tablet">
          <img src="<?php echo get_template_directory_uri() ?>/img/tablet.png" alt="" class="img-responsive bottom-img" data-aos="fade-up" data-aos-offset="300" data-aos-duration="1500" />
          <!-- left side -->
          <img src="<?php echo get_template_directory_uri() ?>/img/gear 2.png" alt="" class="img-responsive gear-left-up rotate-animate-fast to-left"/>
          <img src="<?php echo get_template_directory_uri() ?>/img/gear 1.png" alt="" class="img-responsive gear-center-left rotate-animate-slow to-right"/>
          <img src="<?php echo get_template_directory_uri() ?>/img/gear 2.png" alt="" class="img-responsive gear-left-bottom rotate-animate-fast to-left"/>


          <!-- right side -->
          <img src="<?php echo get_template_directory_uri() ?>/img/gear 2.png" alt="" class="img-responsive gear-center-right rotate-animate-fast to-right"/>
          <img src="<?php echo get_template_directory_uri() ?>/img/gear 1.png" alt="" class="img-responsive gear-right-bottom rotate-animate-slow to-left"/>
          <img src="<?php echo get_template_directory_uri() ?>/img/gear 1.png" alt="" class="img-responsive gear-right-up rotate-animate-slow to-left"/>
      </div>
   </div>

   <div class="talk orange">
       <div class="text-center">
           <div class="col-md-15">

           </div>
           <div class="col-md-15">
               <img src="<?php echo get_template_directory_uri() ?>/img/chat bubble 1.png" alt="" class="img-responsive bubble-left"/>
           </div>
           <div class="col-md-15">
               <?php
                   $the_query = new WP_Query( 'p=33' );
                   while ( $the_query->have_posts() ) :
                    $the_query->the_post();

                    if($the_query->current_post == 0) {
                       echo '<h1 class="big-title">'.get_the_title().'</h1>';
                       echo '<p data-aos="zoom-in" class="aos-init aos-animate">';
                       echo get_the_content();
                       echo '</p>';
                     }
                   endwhile;
                   wp_reset_postdata();
               ?>
                 <button type="button" class="btn btn-default" onclick="window.location.href='/talk-to-us'">Contact Us</button>
           </div>
           <div class="col-md-15">
               <img src="<?php echo get_template_directory_uri() ?>/img/chat bubble 2.png" alt="" class="img-responsive bubble-right" />
           </div>
           <div class="col-md-15">

           </div>
       </div>
   </div>
</section>
<?php get_footer(); ?>