<?php
/*
Template Name: Parents FAQs
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
				
				<!-- Parents FAQS -->
				<div class="faqs" id="accordion">
			    <h3>Q: Is this material age-appropriate for my child?</h3>
			    <div>
			        <p>A: The curriculum contains no sensitive material and does not deal with sexual abuse overtly. The purpose of this curriculum is to empower children to protect themselves in situations where someone would abuse them by arming them with a few basic, protective principles.</p>
			    </div>
			    
			    
			    
			
			    <h3>Q: I do not want to talk to my children about sexual abuse because I do not want to frighten them. Is this the right thing to do?</h3>
			    <div>
			        <p>A: It is helpful for parents to keep in mind that you play a pivotal role in preventing child abuse. You can use our <a href="http://parenttoolkit.laurenskids.org/" target="_blank">Parent Tool Kit</a> to help facilitate the conversation between you and your child. The kit provides helpful tips to help you speak with your children about abuse.</p>
			    </div>
			    
			    
			
			
			    <h3>Q: Is Safer, Smarter Kids a required course for my child?</h3>
			    <div>
			        <p>A: No, but we encourage all school districts to implement the health-based curriculum, created by career educators, vital to protect our children. The age-appropriate curriculum is designed with a Social Studies framework and allows teachers to meet existing education requirements.</p>
			    </div>
			    
			    
			    
			    
			    <h3>Q: How can I lower my child’s or any child’s risk of sexual assault?</h3>
			    <div>
			        <p>A: 95 percent of sexual abuse is preventable, meaning the most effective prevention happens before a child is harmed. Children are safer when parents and caregivers take the time to teach preventative tactics to their children and become educated about the warning signs of abuse. Parents and caregivers who make a commitment to speak up as soon as they have a concern play a crucial role in a child’s safety.</p>
			    </div>
			    
			    
			    
			    
			    <h3>Q: What does the typical child abuse perpetrator look like?</h3>
			    <div>
			        <p>A: There is not a typical profile of a perpetrator and you cannot pick out a sex offender in a crowd. People who may sexually abuse a child are 90 percent of the time someone the child knows. They come from all classes, races and religious backgrounds.</p>
			    </div>
			    
			    
			    
			    <h3>Q: If I suspect abuse, where can I go for help?</h3>
			    <div>
			        <p>A: If you, your child or someone you know has been sexually assaulted, remember to tell them that it’s ok to tell. Sexual abuse is a crime and it’s important to seek professional help. Reporting and getting help from trained service providers is critical to healing.</p>
			        <p>Call your local law enforcement authorities immediately and your local Child Protective Service Provider.</p>
			    </div>
			    
			 
			    
			    <h3>Q: How can children ever recover from such an experience?</h3>
			    <div>
			        <p>A: Healing is possible through loving support. It takes time, but a supportive family response and professional intervention can help heal victims and their families.</p>
			    </div>
			    
			    
			    </div><!--//#accordion -->
				<!--//Parents FAQS -->	
				
				
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