<?php

if (!defined('ABSPATH')) {
    die();
}
get_header();
$page = get_query_var('paged') ? get_query_var('paged') : get_query_var('page');
if (!$page || $params['paginate'] == 'no') {
    $page = 1;
}
$perPage = 1;
$offest = ( ( $page - 1 ) * $perPage);

//query_posts('post_type=post&posts_per_page='.$perPage.'&paged='.$page.'&offeset='.$offest);
if (have_posts()) {
    
   
   if (is_front_page() ) {
        get_template_part('template-parts/content', 'homepage');
    } elseif (is_single()) {
        get_template_part('template-parts/content', 'single');
    } else {                   
        get_template_part('template-parts/content', 'grid');
    }
} else {
    
    get_template_part('template-parts/content', 'none');
}

get_footer();

