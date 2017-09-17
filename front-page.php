<?php get_header(); ?>
    
<?php

$post_data = get_post( 14 );

global $post;

$post = $post_data;

setup_postdata($post);

get_template_part('elements/I-section');

wp_reset_postdata();

?>

<?php

$post_data = get_post( 16 );

global $post;

$post = $post_data;

setup_postdata($post);

get_template_part('elements/II-section');

wp_reset_postdata();

?>

<?php

$post_data = get_post( 20 );

global $post;

$post = $post_data;

setup_postdata($post);

get_template_part('elements/III-section');

wp_reset_postdata();

?>

<?php get_footer(); ?>