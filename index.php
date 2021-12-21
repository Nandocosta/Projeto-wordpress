<?php get_header(); ?>
    <main>
        <!-- Carousel inicio -->
        <section>
            <div id="mainSlider" class="carousel slide" data-bs-ride="carousel" classs="w-100">
                <ol class="carousel-indicators">
                    <?php
                        $args = array ('post_type' => 'slider');
                        $my_slider = get_posts( $args );
                        $count = 0; 
                        if($my_slider) : foreach($my_slider as $post) : setup_postdata($post);
                    ?>
                    <li type="button" data-bs-target="#mainSlider" data-bs-slide-to="<?php echo $count; ?>" 
                        class="active"></li>
                    <?php 
                        $count ++;
                        endforeach; 
                        endif; 
                    ?>
                </ol>

                <div class="carousel-inner">
                    <?php
                    $cont = 0 ; if($my_slider) : foreach($my_slider as $post) : setup_postdata( $post ); 
                    ?>
                    <div class="carousel-item <?php if($cont == 0) echo"active"; ?>">
                        <img src="<?php the_post_thumbnail_url(); ?>" class="d-block w-100" alt="Projeto de e-commerce">
                    </div>
                    <?php 
                        $cont ++;
                        endforeach; 
                        endif; 
                    ?>
                </div>
                <a href="#mainSlider" class="carousel-control-prev" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true" ></span>
                    <span class="visually-hidden">Previous</span>
                </a> 
                <a href="#mainSlider" class="carousel-control-next" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true" ></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </section>
        <!-- Carousel final -->

        <!-- Inicio dos post  -->
        <section>
            <div id="area-posts">
                <!-- inicio dos card do post -->
                <div class="container">
                    <div id="box-post" class="row row-cols-1 row-cols-md-3 g-4" >
                        <?php 
                            $args = array ('post_type'=>'post');
                            $my_posts = get_posts ( $args );
                        ?>

                        <?php 
                            $cont = 1; 
                            if($my_posts) : foreach( $my_posts as $post) :  setup_postdata( $post);
                        ?>
                        <div class="col">
                            <div class="card h-100" >
                                <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" >
                                <div class="card-body">
                                    <h3 class="card-title"><?php the_title(); ?></h3>
                                    <p class="card-text"><?php $content = get_the_excerpt(); echo mb_strimwidth($content, 0, 150, '...'); ?>
                                    <a href="<?php the_permalink(); ?>" >Ler mais</a>
                                    </p>
                                    <p class="card-text"><small class="text-muted"><?php echo get_the_date ('j F' ); ?></small></p>
                                </div>
                            </div>
                        </div>
                        <?php $cont ++ ; endforeach; endif; ?>
                    </div>
                </div>
                <!-- final dos card do post -->
            </div>
        </section>
        <section>
            <div class="container">
                <div class="card-testimonials">
                    <div class="card-img">
                        <img src="https://pbs.twimg.com/profile_images/1451275454267203599/jnWWcGO1_400x400.jpg" alt="">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Julius Wormand</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural.</p>
                        <p class="card-text"><small class="text-muted">Design</small></p>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php get_footer();?>