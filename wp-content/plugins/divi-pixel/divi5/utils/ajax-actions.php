<?php

add_action( 'wp_ajax_dipi_action_get_image_sizes', 'dipi_action_get_image_sizes' );
function dipi_action_get_image_sizes() {
    $data = dipi_get_image_sizes();
    wp_send_json_success($data);
    wp_die();
}

add_action( 'wp_ajax_dipi_action_get_post_types', 'dipi_action_get_post_types' );
function dipi_action_get_post_types() {
    $post_types = dipi_get_posts_types_with_terms();
    wp_send_json_success($post_types);
    wp_die();
}

add_action( 'wp_ajax_dipi_action_get_posts_count', 'dipi_action_get_posts_count' );
function dipi_action_get_posts_count() {
    $postedData = isset($_GET['options']) ? sanitize_text_field($_GET['options']) : ''; //phpcs:ignore
    $tempData = str_replace("\\", "", $postedData);
    $cleanData = (array) json_decode($tempData);
    
    $count = dipi_count_posts($cleanData);
    wp_send_json_success( [
        'count' => $count
    ]);
    wp_die();
    
}

function dipi_get_post_types_to_count()
{
    global $wp_post_types;
    $post_types = array(
        'post' => $wp_post_types['post']->labels->name,
        'page' => $wp_post_types['page']->labels->name,
    );

    foreach (get_post_types(array('public' => true, '_builtin' => false), 'objects', 'and') as $post_type) {
        $post_types[$post_type->name] = $post_type->labels->name;
    }

    return $post_types;
}
 



function dipi_count_posts($args ) {
    $count = 0;
    $post_types = dipi_get_posts_types_with_terms();
    foreach ($post_types as $post_type => $post_type_name) {
        //Check if we should count this post type
        if($args["count_{$post_type}"] !== 'on'){
            continue;
        }
        
        //Get all taxonomies for this post type
        $taxnomoy_objects = get_object_taxonomies($post_type, 'objects');

        //If we have taxonomies, we need to count based on them. If there are no taxonomies 
        //on this post type, we simply count all posts of this post type
        if($taxnomoy_objects && count($taxnomoy_objects) > 0) {

            //Build a WP_Query with Tax Query to count based on the selected terms
            $query_args = array(
                'post_type'     => $post_type, 
                'post_status'   => 'publish', //TODO: Maybe configurable?
                'posts_per_page' => -1,
                'tax_query' => array(
                    'relation' => 'OR',
                )
            );

            foreach($taxnomoy_objects as $taxonomy) {
                
                //Skip taxonomies for which we don't show settings
                if(!$taxonomy->show_ui || !$taxonomy->show_in_menu || !$taxonomy->public){
                    continue;
                }

                if($args["count_{$post_type}_{$taxonomy->name}_all_terms"] === 'on'){
                    $query_args['tax_query'][] = [
                        'taxonomy' => $taxonomy->name,
                        'operator' => 'EXISTS'
                    ];
                } else {
                    $selected_terms = $args["{$post_type}_{$taxonomy->name}"];
                    if(isset($selected_terms) && count($selected_terms)>0){
                        $term_ids = $selected_terms;
                    } else {
                        $term_ids = [];
                    }
                    
                    $query_args['tax_query'][] = [
                        'taxonomy' => $taxonomy->name,
                        'field' => 'id',
                        'terms' => $term_ids
                    ];
                }

                if($args["count_{$post_type}_{$taxonomy->name}_without_terms"] === 'on'){
                    $query_args['tax_query'][] = [
                        'taxonomy' => $taxonomy->name,
                        'operator' => 'NOT EXISTS'
                    ];
                }
            }

            $query = new WP_Query($query_args);
            $count += $query->post_count;
        } else {
            $count += wp_count_posts($post_type)->publish;
        }
    }

    return $count;
}