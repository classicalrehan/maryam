<div class="content-area single-page-area">
    <div class="single-page-content">
        <article class="post">
            <div class="post-thumbnail">
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('single-banner');
                }
                ?>
            </div>

            <div class="post-content">
                <!-- /Entry header -->
                <header class="entry-header">                    
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <span class="post-meta-infos">
                        <time class="date-container minor-meta updated float-left" itemprop="datePublished" datetime=""><?php the_time('F jS, Y'); ?></time>
                        <span class="text-sep text-sep-date float-left"> / in </span>
                        <span class="blog-categories minor-meta float-left"><?php echo the_category('', '', get_the_ID()); ?> </span>                                                
                        </span>
                    </span>
                    
                </header>
                <!-- /Entry header -->

                <!-- Entry content -->
                <div class="entry-content clear">
                    <div class="row">
                        <div class=" col-xs-12 col-sm-12 ">
                            <div class="col-inner">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Entry content -->

                <div class="entry-meta entry-meta-bottom">
                    <div class="date-author">
                        <span class="entry-date">
                            <a href="#" rel="bookmark">
                                <i class="far fa-clock"></i> <span class="entry-date"> <?php echo get_the_date(); ?></span>
                            </a>
                        </span>
                        <span class="author vcard">
                            <a class="url fn n" href="<?php echo esc_url(get_author_posts_url(get_post_field('post_author'))); ?>" title="<?php echo esc_attr(get_the_author()); ?>"><?php the_author(); ?>
                                <i class="fas fa-user"></i> 
                                <?php the_author_meta('display_name', 1); ?></a>                                                                                                                
                    </div>

                    <!-- Share Buttons -->
                    <div class="entry-share btn-group share-buttons">
                        <a href="#" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" class="btn" target="_blank" title="Share on Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>

                        <a href="#" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" class="btn" target="_blank" title="Share on Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>

                        <a href="#" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="btn" title="Share on LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                    <!-- /Share Buttons -->
                </div>

                <div class="post-tags">
                    <div class="tags">
                        <?php the_tags('', ' '); ?>
                    </div>
                </div>
                <?php previous_post_link(); ?>  ||  <?php next_post_link(); ?>
                <?php
                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;
                ?>
            </div>
        </article>                     
    </div>
</div>