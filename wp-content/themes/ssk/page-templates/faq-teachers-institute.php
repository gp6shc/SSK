<?php
/*
Template Name: Teachers Institute FAQs
*/
?>
<?php get_header(); ?>
<script src="https://code.jquery.com/ui/jquery-ui-git.js"></script>
<script>
jQuery(document).ready(function() {
    jQuery("#accordion").accordion({
        heightStyle: "content",
        collapsible: true,
        active: false
    });         
    jQuery("#accordion").accordion();
    jQuery("#accordion").accordion("option", "icons", {
        // expand
        'header': 'icon-expand',
        // collapse
        'activeHeader': 'icon-collapse'
    });
});
</script>



	<div id="primary-page">
		<div id="content" class="clearfix">
		<div class="page-thumb">
		<?php
			if ( has_post_thumbnail() ) {
				// the current post has a thumbnail
				echo the_post_thumbnail();

			} else {
				//echo default thumb
			}
		?>
		</div>
			<?php while ( have_posts() ) : the_post(); ?>
			
			<div class="entry-content clearfix">

				<?php the_content(); ?>
				
				<!-- Teachers FAQS -->
				<div class="faqs" id="accordion">
				
				<h3>Q: When will I receive a kit for my school?</h3>
			    <div>
			        <p>A: You can request a kit by visiting <a href="http://shop.laurenskids.org" target="_blank">http://shop.laurenskids.org</a></p>
			    </div>
				
				
				
				
			    <h3>Q: Does this curriculum cost the District/school anything?</h3>
			    <div>
			        <p>A: Yes, the curriculum costs $150.</p>
			        <p>Yes, the curriculum costs $150. However, in the State of Florida any public or charter school, or VPK program can request these materials for free.</p>
			    </div>
			    
			    
			    
			    <h3>Q: Can I receive more kits for my school if we need more in the future?</h3>
			    <div>
			        <p>A: If you believe you need to order an additional kit due to loss, damage or would like to reorder "consumables," visit <a href="http://shop.laurenskids.org" target="_blank">www.shop.laurenskids.org</a> to purchase your Replenishment Package. The kits are designed so that the materials and files can be used year after year. The kit includes a USB drive with files for each item printed in your kit for reproduction.</p>
			    </div>
			    
			    
			    
			    <h3>Q: Do I have an obligation to report abuse? If so, how do I report abuse if I suspect it or a child discloses abuse?</h3>
			    <div>
			        <p>A: Yes, every teacher is considered a mandatory reporter. If you suspect abuse or a child discloses abuse, please visit the National Child Abuse Hotline to make a report: <a href="http://www.childhelp.org/pages/hotline-home" target="_blank">http://www.childhelp.org/pages/hotline-home</a>. There is also information in your Teacher’s Guide about reporting if you have additional questions.</p>
			    </div>
			    
			    
			    
			    <h3>Q: Is this curriculum approved?</h3>
			    <div>
			        <p>A: In Florida, <i>Safer, Smarter Kids</i> was legislatively directed. DOE has assisted and supported the Lauren's Kids foundation to distribute curriculum kits across the state.</p>
			        <p>If you would like your district to support the approval and implementation of <i>Safer, Smarter Kids</i> encourage your school board to implement and contact Lauren’s Kids with any questions at <a href="mailto:team@laurenskids.org">team@LaurensKids.org</a>.</p>
			    </div>
			    
			    
			
			    <h3>Q: Why can't I view the Lauren's Kids main website?</h3>
			    <div>
			        <p>A: Each school district has its own firewalls to protect faculty or students from visiting inappropriate websites. Because the Lauren's Kids website and videos contain the word "sex" many districts may have blocked the resources on the site. If you have experienced this, please contact your school district and request that they "whitelist the Lauren's Kids website, www.laurenskids.org" so that you can utilize the training videos and login system.</p>
			    </div>
			    
			    

			    </div><!--//#accordion -->
				<!--//Teachers FAQS -->	
				
				
				<?php
					wp_link_pages( array( 
					'before'            => '<div style="clear: both;"></div><div class="pagination clearfix">'.__( 'Pages:', 'spacious' ),
					'after'             => '</div>',
					'link_before'       => '<span>',
					'link_after'        => '</span>'
		      ) );
				?>
			</div>

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->
	
	<?php spacious_sidebar_select(); ?>

<?php get_footer(); ?>