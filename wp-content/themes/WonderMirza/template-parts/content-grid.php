<div class="content-area">
    <div class="single-page-content">
        <?php
        if (have_posts()) :
            ?>
            <div class="row">
                <div class="page-title col-xs-6 col-sm-6">
                    <?php the_archive_title('<h1 class="page-title">', '</h1>'); ?>
                </div>
                <div class="col-xs-6 col-sm-6">
                    <?php echo get_search_form(); ?>
                </div>                
            </div>                
            <div class="section-content">
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div class="blog-masonry two-columns clearfix">
                            <?php
                            if (have_posts()) :
                                while (have_posts()) : the_post();
                                    get_template_part('template-parts/content', 'list');
                                endwhile;
                                ?>
                                <!-- End of the main loop -->   
                                <!-- Add the pagination functions here. -->
                                <div class="col-xs-12 col-sm-12">
                                    <?php
                                    the_posts_pagination(array(
                                        'mid_size' => 5,
                                        'prev_text' => __('Prev', 'textdomain'),
                                        'next_text' => __('Next', 'textdomain'),
                                    ));
                                    ?>
                                </div>
                                <?php
                            # echo paginate_links();
                            //previous_post_link();
                            //next_post_link();
                            else :
                                ?>
                                <div class="col-xs-12 col-sm-12">
                                    <?php esc_html_e('Sorry, no posts were found.', 'WonderMirza'); ?>                        
                                </div>
                                <div class="col-xs-12 col-sm-12">
                                    <?php echo get_search_form(); ?>
                                </div>
                            <?php
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        else:
            ?>
            <div class="section-content">
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div class="blog-masonry two-columns clearfix">                            
                            <p>Sorry, no posts matched your criteria.</p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>