<?php
/*
Template Name: Landing Page (main)
*/

get_header('landing'); ?>

<?php while ( have_posts() ) : the_post(); //loop statement ?>


<article>
   <div class="col12 push0"></div>
</article>

<!-- Thought Bubbles -->
<article class="thoughts">
	<div class="col3 push2">
		<a href="<?php echo home_url(); ?>/teachers"><img class="wow bounceIn" data-wow-duration="2s" data-wow-delay="0s" data-wow-iteration="1" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/_landing-thought-teachers.png" /></a>
	</div>
	
	<div class="col3 push4">
		<a href="<?php echo home_url(); ?>/parents"><img class="wow bounceIn" data-wow-duration="2s" data-wow-delay="1s" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/_landing-thought-parents.png" /></a>
	</div>
	
	<div class="col3 push6">
		<a href="<?php echo home_url(); ?>/kids"><img class="wow bounceIn" data-wow-duration="2s"  data-wow-delay="2s" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/_landing-thought-kids.png" /></a>
	</div>
</article><!--//.thoughts-->

<div class="footer">
	<div class="col12 push0">
	
		<img id="ssk" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/bg-landing-an.gif" />
		
		<div class="grass">
			<p><i>Safer, Smarter Kids</i> is an abuse prevention education curriculum designed for PreK and elementary-aged children. The education program uses developmentally appropriate information to arm children with the tools and language they need to better protect themselves from abuse.</p>
			<p class="copy">All content &copy; <?php echo date('Y') ?> Lauren's Kids. | All rights reserved. <a href="http://laurenskids.org" target="_blank"> LaurensKids.org</a></p>
			
			<div class="audio-player">
				 <audio id="audio-player"autoplay="autoplay" loop="loop" src="<?php bloginfo('stylesheet_directory') ?>/assets/music/ssk-theme.mp3" type="audio/mp3" controls="controls"></audio>
			</div><!--//.audio-player-->
			
		</div><!--//.grass-->
	</div><!--//.col12-->
</div><!--//.footer-->


<?php endwhile; // end of the loop ?>

<script>
//wowjs
jQuery(document).ready(function() {
	new WOW().init();
  });

// audio player
jQuery(document).ready(function() {
  jQuery('#audio-player').mediaelementplayer({
    alwaysShowControls: true,
    features: ['playpause','progress','volume'],
    audioVolume: 'horizontal',
    audioWidth: 450,
    audioHeight: 75,
    iPadUseNativeControls: false,
    iPhoneUseNativeControls: false,
    AndroidUseNativeControls: false
  });
});
</script>

<?php if ( get_option("parent_modal") == 1): ?>
	<div id="temp" class="modal fade out" tabindex="-1" role="dialog">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Visit SaferSmarterFamilies.org</h4>
	      </div>
	      <div class="modal-body">
	      		<p>Learn what customized resources are available to your family on <a href="http://safersmarterfamilies.org" target="_blank" data-dismiss="modal">SaferSmarterFamilies.org</a> – or continue to the Parent Toolkit. The toolkit is especially great for parents with younger children, while the <i>Safer, Smarter Families</i> website is best for parents of kids in Pre-K through high school. This family safety site also includes resources for parents of children with special needs.</p>
	      </div>
	      <div class="modal-footer">
	        <a href="/parents/toolkit/" class="btn">Continue to Toolkit</a>
	        <a href="http://safersmarterfamilies.org" target="_blank" class="btn">SaferSmarterFamilies.org</a>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory') ?>/assets/js/mediaelement-and-player.min.js"></script>
	<script src="<?= get_template_directory_uri();?>/assets/js/modal.js"></script>
	<script>
	jQuery('article.thoughts > div.col3.push4 > a').on('click', function(e) {
		e.preventDefault();
		jQuery("#temp").modal();
	})	;
	</script>
<?php endif;?>
<?php wp_footer(); ?>
</body>
</html>