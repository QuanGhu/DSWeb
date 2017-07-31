<section id="footer">
   <div class="row text-center black">
      <div class="col-md-12">
         <p>DREAMSMART SOLUTIONS PTE LTD &copy;2017</p>
      </div>
   </div>
</section>


<section id="footerpop">
   <div class="row text-center black">
      <div class="col-md-12">
         <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>">RETURN TO DREAMSMART</a></p>
      </div>
   </div>
</section>


</div>


<script>
  $('#footerpop').css('display', 'none');
  $('#footer').css('display', 'block');
</script>

<script src="<?php echo get_template_directory_uri() ?>/js/TweenMax.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/ScrollMagic.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/ScrollToPlugin.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/debug.addIndicators.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/animation.gsap.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/aos.js"></script>
<script>
  AOS.init();
</script>


<script type="text/javascript">
(function(){
    $(document).ready(function(){


     var $window = $(window);
     var scrollTime = 1;
     var scrollDistance = 250;


     var iPadAgent = navigator.userAgent.match(/iPad/i) != null;
     var iPodAgent = navigator.userAgent.match(/iPhone/i) != null;
     var AndroidAgent = navigator.userAgent.match(/Android/i) != null;
     var webOSAgent = navigator.userAgent.match(/webOS/i) != null;


     if(webOSAgent){
         var controller = new ScrollMagic.Controller({container: "#content"});
         $('#content').height($(window).height());
         $('#content').width($(window).width());
     }
     else{

         $window.on("mousewheel DOMMouseScroll", function(event){

             event.preventDefault();

             var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
             var scrollTop = $window.scrollTop();
             var finalScroll = scrollTop - parseInt(delta*scrollDistance);

             TweenMax.to($window, scrollTime, {
                 scrollTo : { y: finalScroll, autoKill:true },
                     ease: Power1.easeOut,
                     overwrite: 5
                 });
         });
     }
     var controller = new ScrollMagic.Controller();

     //------ Cloud ------ //
     var cloudwmoon = $('.cloud-wmoon').css('top');

     var scene1 = new ScrollMagic.Scene({triggerHook: "0", triggerElement: ".big-logo img", duration: 3500})
                     .addTo(controller)
                     .on("progress", function (e) {
                         var newpercent = 1-e.progress.toFixed(3);
                         var newspace = parseInt(cloudwmoon)*newpercent;


                         $('.cloud-wmoon').css('top', newspace+'px');
                     });

     var cloudwearth = $('.cloud-wearth').css('top');

     var scene2 = new ScrollMagic.Scene({triggerHook: "0", triggerElement: ".reality", duration: 3800})
                     .addTo(controller)
                     .on("progress", function (e) {
                         var newpercent = 1-e.progress.toFixed(3);
                         var newspace = parseInt(cloudwearth)*newpercent;


                         $('.cloud-wearth').css('top', newspace+'px');
                     });

     var cloudwandro = $('.cloud-wandro').css('top');

     var scene2 = new ScrollMagic.Scene({triggerHook: "0", triggerElement: ".big-logo", duration: 3500})
                     .addTo(controller)
                     .on("progress", function (e) {
                         var newpercent = 1-e.progress.toFixed(3);
                         var newspace = parseInt(cloudwandro)*newpercent;


                         $('.cloud-wandro').css('top', newspace+'px');
                     });


               var scrollMagicController = new ScrollMagic.Controller();
                   var bigcloud = TweenMax.to('.big-cloud', 0.5, {
                     left : -200
                   });
                   var scene3 = new ScrollMagic.Scene({
                     triggerElement: '.our-services',
                     duration: 3000
                   })
                   .setTween(bigcloud)
                   .addTo(scrollMagicController);

                   var midcloud = TweenMax.to('.mid-cloud', 0.5, {
                     left : -300
                   });
                   var scene4 = new ScrollMagic.Scene({
                     triggerElement: '.our-services',
                     duration: 5500
                   })
                   .setTween(midcloud)
                   .addTo(scrollMagicController);

                   var botcloud = TweenMax.to('.bot-cloud', 0.5, {
                     left : -100
                   });
                   var scene5 = new ScrollMagic.Scene({
                     triggerElement: '.our-services',
                     duration: 1800
                   })
                   .setTween(botcloud)
                   .addTo(scrollMagicController);

                   var compass = TweenMax.to('.compass', 0.5, {
                       rotation: 30
                   });
                   var scene6 = new ScrollMagic.Scene({
                     triggerElement: '.our-services',
                     duration: 6000
                   })
                   .setTween(compass)
                   .addTo(scrollMagicController);

                   var ruler = TweenMax.to('.ruler', 0.5, {
                       rotation: 20
                   });
                   var scene6 = new ScrollMagic.Scene({
                     triggerElement: '.our-services',
                     duration: 6000
                   })
                   .setTween(ruler)
                   .addTo(scrollMagicController);

                   var scrolltonav = TweenMax.to(".ds-logo", 0.5, {
                     autoAlpha: 0,
                     y: 150,
                     scale: 0.7,
                     force3D:true
                 });

                 // build scene
                 var scene7 = new ScrollMagic.Scene({
                         duration: 1000,
                         triggerHook: "onLeave"
                     })
                     .setTween(scrolltonav)
                     .addTo(scrollMagicController);

                 if(iPadAgent){
                     var scrollMagicController = new ScrollMagic.Controller();
                         var midcloud = TweenMax.to('.mid-cloud', 0.5, {
                           left : -300
                         });
                         var scene4 = new ScrollMagic.Scene({
                           triggerElement: '.our-services',
                           duration: 8500
                         })
                         .setTween(midcloud)
                         .addTo(scrollMagicController);
                         var botcloud = TweenMax.to('.bot-cloud', 0.5, {
                           left : -100
                         });
                         var scene5 = new ScrollMagic.Scene({
                           triggerElement: '.our-services',
                           duration: 9000
                         })
                         .setTween(botcloud)
                         .addTo(scrollMagicController);

                 }


                 //    scene2.addIndicators();

     });
 })();
</script>




</body>
</html>
