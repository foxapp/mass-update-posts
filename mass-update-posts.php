function my_update_posts() {
    //$myposts = get_posts('showposts=-1');//Retrieve the posts you are targeting
    $args = array(
        'post_type' => 'product',//select wich posts need to be updated
        'numberposts' => -1
    );
    $myposts = get_posts($args);
    foreach ($myposts as $mypost){
        //$mypost->post_title = $mypost->post_title.'';
        wp_update_post( $mypost );
    }
}
add_action( 'wp_loaded', 'my_update_posts' );
