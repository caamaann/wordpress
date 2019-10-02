<?php get_header(); 

$pagename = get_query_var('pagename');  
switch($pagename){
    case "":
        get_template_part( 'landing' ); 
    break;
    case "sample-page":
        $current_page = get_queried_object();
        $content      = apply_filters( 'the_content', $current_page -> post_content );
        echo $content;
    break;
}
get_footer(); 
?>