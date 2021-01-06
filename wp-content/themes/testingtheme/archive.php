<?php get_header();?>
    <h1 class="mb-5 text-center"><?php single_cat_title();?></h1>
    <div class="container">
        <div class="row row-cols-1 justify-content-center row-cols-md-3 g-4">
            <?php if (have_posts()) : while(have_posts()) : the_post();?>
                <div class="col mb-4">
                    <div class="card shadow-sm" style="max-width: 500px;">
                        <div class="card-img-top">
                            <?php if(has_post_thumbnail()):?>
                                <a href="<?php the_permalink();?>"><img src="<?php the_post_thumbnail_url('smallest');?>" class="img-fluid"></a>
                            <?php endif;?>
                        </div>
                        <div class="card-body text-center">
                            <h3><?php the_title();?></h3>
                            <?php the_excerpt();?>
                            <?php if(get_post_meta($post->ID, 'Price', true)):?>
                                <div class="container">
                                    <h2 style="font-size: 24px;">$<?php echo get_post_meta($post->ID, 'Price', true);?></h2>
                                </div>
                            <?php endif;?>
                        </div>
                        <div class="card-footer d-grid">
                            <button class="btn btn-success btn-lg">Add To Order</button>
                        </div>
                    </div>
                </div>
            <?php endwhile; endif;?>
        </div>
    </div>
    
<?php get_footer();?>