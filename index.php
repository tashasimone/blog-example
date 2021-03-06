<?php get_header(); ?>
    <main>        
        <div class="main-content index">   
             <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?> 
                <?php if ( $background = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' ) ) : ?>
                    <div style="background: url('<?php echo $background[0]; ?>') top right no-repeat; height:380px;" class="feature-img">
                        <article <?php post_class(); ?>>
                            <h2><a href="<?php the_permalink() ?>"><?php the_title();?></a></h2>
                            <div class="entry-content">
                                <?php the_content();?>
                            </div>
                        </article>
                    </div>
                <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>    
        </div>
        
        <div class="sidebar">
            <div class="bio">
                <?php dynamic_sidebar('bio'); ?>
            </div>
            <div class="advertisment">
                <img src="http://askanewyorker.com/blog/wp-content/uploads/2012/07/300x250_FourthMeal.jpg" alt="advertisment"/>
            </div>
            <div class="recent-posts">
                <?php dynamic_sidebar('recent-posts'); ?>
            </div>
        </div>
    </main>
<?php get_footer(); ?>
 