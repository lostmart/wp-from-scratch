<section class="query_photos">
    <h2>Here there will be photos</h2>
    <div class="photos-container">
            
      
    <?php
        $args = array(
            'post_type' => 'photo',
            'posts_per_page' => 8,
            'orderby' => 'date',
            'order' => 'DESC',
            'paged' => 1,
        );

        $query = new WP_Query($args);
        if ($query->have_posts()) :
            while ($query->have_posts()) :
                $query->the_post();
                $image_url = get_the_post_thumbnail_url();
                $categories = get_the_category_list(', ');
                $reference = get_post_meta(get_the_ID(), 'reference', true);
               
                $post_id = get_the_ID();
        ?>
        
                <!-- card template -->
                <article class="card">
                   
                        <img class="post_img" 
                            src="<?php echo $image_url; ?>" 
                            alt="<?php the_title_attribute(); ?>" 
                            data-imgId="<?php echo $post_id; ?>"
                            data-reference="<?php echo $reference; ?>"
                            data-category="category here!"

                            
                            />
                    

                    <!-- Overlay Content -->
                    <div class="overlay">
                    
                        <span class="right-text">Reference: <?php echo $reference; ?></span>
                        <span class="left-text">Catégories: <?php echo $categories; ?></span>

                        <div class="center-icons">
                            <img class="fullscreen" src="<?php echo get_template_directory_uri(); ?>/assets/full.svg" alt="fullscreen logo" role="button" aria-pressed="false" />
                            <a href="<?php the_permalink(); ?>" >
                                <img class="lightbox-eye" src="<?php echo get_template_directory_uri(); ?>/assets/eye.svg" alt="lightbox eye" role="button" aria-pressed="false" />
                            </a>
                        </div>
                    </div>                    
                </article>

        <?php
            endwhile;
        else :
            _e('Sorry, no posts were found.', 'textdomain');
        endif;

        wp_reset_postdata();
        ?>
        </div> <!--- ./end - photos-container   --->
</section>