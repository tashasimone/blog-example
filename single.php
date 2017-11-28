 <?php get_header(); ?>
    <main>
        <div class="main-content"> 
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?> 
                <article <?php post_class(); ?>>
                    <?php if ( $background = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' ) ) : ?>
                        <div style="background: url('<?php echo $background[0]; ?>') top right no-repeat; height:400px;" class="feature-img">
                        <article <?php post_class(); ?>>
                            <h2><a href="<?php the_permalink() ?>"><?php the_title();?></a></h2>
                        </article>
                        </div>
                    <?php endif; ?>
                    <p><?php the_author(); ?> 
                       | <?php echo get_the_date('F d, Y');?></p>
                    <div class="entry-content">
                        <?php the_content();?>
                    </div>
                </article>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        
        <div class="sidebar">
            <div class="bio">
                <?php dynamic_sidebar('bio'); ?>
            </div>
            <div class="advertisment">
                <img src="http://pcgamingadvisers.com/wp-content/uploads/2016/10/300x250-ad-300x250.png" alt="advertisment"/>
            </div>
            <div class="recent-posts">
                <?php dynamic_sidebar('recent-posts'); ?>
            </div>
        </div>
    </main>
<?php get_footer(); ?>

