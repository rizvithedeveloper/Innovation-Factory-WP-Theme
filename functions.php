<?php
add_theme_support("post-thumbnails");

function solutions_post_type() {
    $args = array(
        "labels" => array(
            "name" => "Solutions",
            "singular_name" => "Solution",
        ),
        "hierarchical" => true,
        "public" => true,
        "has_archive" => false,
        "menu_icon" => "dashicons-lightbulb",
        "supports" => array("title", "editor", "thumbnail", "excerpt"),
        "show_in_rest" => true, 
    );

    register_post_type("solutions", $args);
}
add_action("init", "solutions_post_type");
?>