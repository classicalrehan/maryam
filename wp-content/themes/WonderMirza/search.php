<?php

if (!defined('ABSPATH')) {
    die();
}
get_header();

if (have_posts()) :    
    get_template_part('template-parts/content', 'grid');
else:    
    
    get_template_part('template-parts/content', 'none');
endif;

get_footer();

