<?php get_header();

$pagename = get_query_var('pagename');

switch ($pagename) {
    case "":
        if (is_single()) {
            get_template_part('content-single');
        } else {
            get_template_part('landing');
        }
        break;
    case "blogs":
        get_template_part('content');
        break;
}
get_footer();
