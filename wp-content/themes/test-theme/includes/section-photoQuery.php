<section class="query_photos">
    <h2>Here there will be photos</h2>
    <div class="photo-grid">
            
      
    <?php
        $args = array(
            'post_type' => 'photo',
            'posts_per_page' => 9,
            'orderby' => 'date',
            'order' => 'DESC',
            'paged' => 1,
            // 'tax_query' => array(
            //         array(
            //             'taxonomy' => 'photo_category',
            //             'field'    => 'slug',    
            //             'terms'    => 'data-sheets',
            //         ),
            // ),
        );

        $query = new WP_Query($args);
        if ($query->have_posts()) :
            while ($query->have_posts()) :
                $query->the_post();
                $image_url = get_the_post_thumbnail_url();
                $category = null;
                $format = null;
                $reference = get_post_meta(get_the_ID(), 'reference', true);
               
                $post_id = get_the_ID();

                    $category_terms = get_the_terms( $post_id, 'photo_category' );
                        if ($category_terms) {
                            foreach($category_terms as $term) {
                                $category = $term->slug; 
                                //Expected Result: "Job Offer" or "job-offer", prefer to retrieve slug name of custom category
                            } 
                        }
                    
                    $photo_format = get_the_terms( $post_id, 'format' );
                        if ($photo_format) {
                            foreach($photo_format as $fom_term) {
                                $format = $fom_term->slug; 
                                //Expected Result: "Job Offer" or "job-offer", prefer to retrieve slug name of custom category
                            } 
                        }


                
        ?>


                        


        
                <!-- card template -->
                 <?php
                 $help_class = "";
                 (trim($format)=="portrait") ? $help_class = "card-tall" : $help_class = "card-wide";
                 ?>
                <article class="card <?php echo $help_class ?>"
                    style="background-image:url('<?php echo $image_url; ?>')"
                    data-imageUrl="<?php echo $image_url; ?>"
                    data-imgId="<?php echo $post_id; ?>"
                    data-reference="<?php echo $reference; ?>"
                    data-category="<?php echo $category; ?>"
                    data-format="<?php echo $format; ?>"

                    
                    >
                    

                    <!-- Overlay Content -->
                    <div class="overlay">
                    
                        <span class="right-text"><?php echo the_title(); ?></span>
                        <span class="left-text"><?php echo $category; ?></span>

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