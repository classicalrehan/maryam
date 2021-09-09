<div class="content-area">
    <div class="single-page-content">
        <div class="page-title">
            <h1 class="page-title"><?php _e('Nothing Found', 'WonderMirza'); ?></h1>
        </div>


        <div class="post-content">
            <div class="section-content">
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div class="blog-masonry two-columns clearfix">
                            <div class=" col-xs-12 col-sm-12 ">
                                <?php
                                if (is_home() && current_user_can('publish_posts')) :

                                    printf(
                                            '<p>' . wp_kses(
                                                    /* translators: %s: Link to WP admin new post page. */
                                                    __('Ready to publish your first post? <a href="%s">Get started here</a>.', 'twentynineteen'),
                                                    array(
                                                        'a' => array(
                                                            'href' => array(),
                                                        ),
                                                    )
                                            ) . '</p>',
                                            esc_url(admin_url('post-new.php'))
                                    );

                                elseif (is_search()) :
                                    ?>

                                    <p><?php _e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'twentynineteen'); ?></p>
                                    <?php
                                    get_search_form();

                                else :
                                    ?>

                                    <p><?php _e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'twentynineteen'); ?></p>
                                    <?php
                                    get_search_form();

                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                    <!-- /Entry content -->




                </div>                   
            </div>
        </div>
    </div>
</div>
