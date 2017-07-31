<?php /* Template Name: Popstation-Page */ ?>
<?php get_header(); ?>

<section id="content">
	<div class="poppage">
	    <div class="row text-center">
		    	<img src="<?php echo get_template_directory_uri() ?>/img/text_popstation_hori_532x52.png" alt="" class="img-responsive pophead" />
	    </div>
	    <div class="row text-center">
		    	<img src="<?php echo get_template_directory_uri() ?>/img/img_popstation_webbanner_650x244.png" alt="" class="img-responsive poplogo" />
	    </div>

	    <div class="row text-center">
	    	<div class="col-sm-12 col-md-2 col-lg-2">
	    	</div>
	    	<div class="col-sm-12 col-md-8 col-lg-8">
		    	<p>
		    		Dreamsmart is experienced in providing software integration services for e-commerce sites and logistics companies to Singpost POPStation and other open locker systems
		    	</p>
		    </div>
		    <div class="col-sm-12 col-md-2 col-lg-2">
	    	</div>
	    </div>
	</div>

	<div class="popblue">
			<div class="col-sm-12 col-md-6 col-lg-6 poptext">
				<p>We have also built various software project for a  wide range of clients in transport and logistics.</p>
				<p>Our estimated quote for service is</p>
				 <p><span class="pop-big-text">4000 - 7000 </span>SGD</p>
				<p>Estimated completion of task given</p>
				 <p><span class="pop-big-text">4 - 6 </span>WEEKS</p>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-6 popcar">
			    	<img src="<?php echo get_template_directory_uri() ?>/img/img_673x470.png" alt="" class="img-responsive carbox" />   
	        </div>
    </div>

    <div class="zendesk">
	    <div class="row text-center">
	    	<div class="col-sm-12 col-md-2 col-lg-2">
	    	</div>
	    	<div class="col-sm-12 col-md-8 col-lg-8">
		    	<h2>You can contact us on</h2>
		    	<h4>Zendesk Chat</h4>
		    	<img src="<?php echo get_template_directory_uri() ?>/img/img_131x136.png" alt="" class="img-responsive poptelp" />
		    	<button type="button" class="btn btn-default poptelpbtn" onclick="window.location.href='popstation'" data-toggle="" data-target="">Chat Now</button>
		    	<h4>or</h4>
		    	<h1>+65 9666 3747</h1>
		    	<h4>For an immediate response</h4>
		    </div>
		    <div class="col-sm-12 col-md-2 col-lg-2">
	    	</div>
	    </div>
    </div>
</section>
<?php get_footer(); ?>
<script type="text/javascript">
	$('.headerpop').css('display', 'block');
	$('#header').css('display', 'none');

	$('#footerpop').css('display', 'block');
	$('#footer').css('display', 'none');

</script>
</body>
</html>