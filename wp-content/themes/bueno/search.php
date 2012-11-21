<?php get_header(); ?>
       
    <div id="content" class="col-full">
		<div id="main" class="fullwidth">

            <?php if (have_posts()) : $count = 0; ?>
            
                
                
            <?php while (have_posts()) : the_post(); $count++; ?>
                                                                        
                <div class="post">

                    <h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                    

                    
                    <div class="entry">
                    	<?php the_content(); ?>
                    </div>
                    
                    

                </div><!-- /.post -->
                                                    
               <?php endwhile; else: ?>
					<div class="post">
                		<p><?php _e('Sorry, no posts matched your criteria.', 'woothemes') ?></p>
             	   </div><!-- /.post -->
         	   <?php endif; ?>  
        
                <div class="more_entries">
                    <?php if (function_exists('wp_pagenavi')) wp_pagenavi(); else { ?>
                    <div class="fl"><?php next_posts_link(__('&larr; Previous Entries', 'woothemes')) ?></div>
                    <div class="fr"><?php previous_posts_link(__('Next Entries &rarr;', 'woothemes')) ?></div>
                    <br class="fix" />
                    <?php } ?> 
                </div>	
                
        </div><!-- /#main -->

        <?php get_sidebar(); ?>

    </div><!-- /#content -->
		
<?php get_footer(); ?>