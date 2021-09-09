<div class="item post-1">
    <div class="blog-card">
        <div class="media-block">

            <a href="<?php echo get_permalink(get_the_ID()); ?>" title="<?php the_title(); ?>">                                        
                <?php
                $image = get_the_post_thumbnail_url(get_the_ID());
                if (!empty($image)) {
                    ?>
                    <img src="<?php echo $image; ?>" class="size-blog-masonry-image-two-c" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
                <?php } ?>
                <div class="mask"></div>
            </a>
        </div>
        <div class="post-info">
            <div class="entry-content">
                <div class="row">
                    <div class=" col-xs-12 col-sm-12 ">
                        <div class="col-inner">
                            <a href="<?php echo get_permalink(get_the_ID()); ?>" title="<?php the_title(); ?>">                                        
                                <h4 class="blog-item-title"><?php echo the_title(); ?></h4>
                            </a>
                        </div>
                    </div>
                </div>                                              
            </div>
            <div class="post-date">

                <span class="post-meta-infos">
                    <time class="date-container minor-meta updated float-left" itemprop="datePublished" datetime=""><?php the_time('F jS, Y'); ?></time>
                    <span class="text-sep text-sep-date float-left"> / </span>
                    <span class="blog-categories minor-meta float-left"><?php echo the_category('', '', get_the_ID()); ?> </span>
                    <span class="text-sep text-sep-cat float-left"> / </span>
                    <span class="blog-author minor-meta float-left"> by <?php the_author_posts_link() ?>
                    </span>
                </span>

            </div>
        </div>
    </div>
</div>