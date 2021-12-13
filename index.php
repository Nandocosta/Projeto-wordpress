<?php get_header(); ?>


<div class="box-liste-post">
    <?php 
        $args = array ('post_type'=>'post');
        $my_posts = get_posts ( $args );
    ?>

    <?php 
        $cont = 1; 
        if($my_posts) : foreach( $my_posts as $post) :  setup_postdata( $post);
    ?>
    <div class="liste-post" <?php  echo "liste-post" .$cont; ?> >

        <div class="post-img"><?php the_post_thumbnail(); ?></div>

        <div class="box-conteudo">
            <h2><?php the_title(); ?></h2>
            <?php $content = get_the_excerpt(); echo mb_strimwidth($content, 0, 150, '...'); ?>
            <a href="<?php the_permalink(); ?>" class="text-link" >Leia mais</a>
            <br/>
            <br/>
            <?php echo get_the_date ('j F' ); ?>
            
        </div>
    </div>
    <?php $cont ++ ; endforeach; endif; ?>
</div>

<div class="clear"></div>

<?php get_footer();?>