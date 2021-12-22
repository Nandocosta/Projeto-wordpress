<?php get_header();?>
    <div class="container">
        <?php echo the_post_thumbnail(); ?>
        <div>
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
        </div>
    </div>
<?php get_footer();?>