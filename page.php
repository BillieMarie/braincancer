<?php get_header();?>
	
    
    <div class="clear"></div>
    
    <div id="primary" class="site-content">
    <div id="content">
   
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    
    <article class="halfcol left">
    	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_post_thumbnail(); ?>
        
        <p><?php the_content(); ?></p>
   </article>      
       
	
	<?php endwhile; else: ?>
    	<p>Sorry no posts to display</p>
    
	<?php endif; ?>
    
    <?php if( get_the_excerpt() ){ ?>
    	<h3 class="tagline"><?php echo get_the_excerpt(); ?></h3>
    <?php } ?>
   
  
   
   

   
</div><!-- #content -->   
</div><!-- #primary -->

<div id="sidebar">
<?php get_sidebar(right); ?> 
</div><!-- #sidebar -->



<?php get_footer(); ?>
