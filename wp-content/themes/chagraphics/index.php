<!-- HEADER -->						
<?php get_header(); ?> 

<!-- LOOP WORDPRESS -->
<!-- CONTENT -->

<!-- ARTICLE -->
<div id="content">

    <?php if (have_posts()) : ?>

        <div id="slides">
            <ul class="slides-container">

                <?php while (have_posts()) : the_post(); ?>	

                    <li id="slider_img" style="background-image: url(<?php echo get_field('slider_cover'); ?>);">

                        <div class="slide-content">

                            <h2><a  title="<?php the_title(); ?>">
                                    <?php the_title(); ?>
                                </a></h2>

                            <p class="postcontent"> 
                                <?php the_content(); ?>
                            </p>

                        </div> 

                    </li> 

                <?php endwhile; ?>

            </ul>

            <nav class="slides-navigation">
                <a href="#" class="next">></a>
                <a href="#" class="prev"><</a>
            </nav>
        </div>		

    <?php endif; ?>

</div>

<!-- SIDERBAR -->
<?php get_sidebar(); ?>
<!-- FOOTER -->
<?php get_footer(); ?>