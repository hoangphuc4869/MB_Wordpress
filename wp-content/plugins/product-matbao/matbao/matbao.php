<?php
// Hook <strong>ql_custom_portfolio()</strong> to the init action hook


// The custom function to register a movie post type
function custom_matbao()
{

    register_post_type('product-matbao', [
        'label' => __('Mat Bao', 'txtdomain'),
        'public' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-cart',
        'supports' => ['title', 'editor', 'thumbnail', 'author', 'revisions', 'comments', 'excerpt', 'custom-fields', 'post-formats', 'page-attributes', 'trackbacks'],
        'show_in_rest' => true,
        'rewrite' => ['slug' => 'product-matbao'],
        'taxonomies' => ['category-product'],
        'labels' => [
            'singular_name' => __('product-matbao', 'txtdomain'), // name in ACF rules
            'add_new_item' => __('Add new product matbao', 'txtdomain'),
            'new_item' => __('New product-matbao', 'txtdomain'),
            'view_item' => __('View product-matbao', 'txtdomain'),
            'not_found' => __('No product-matbao found', 'txtdomain'),
            'not_found_in_trash' => __('No product-matbao found in trash', 'txtdomain'),
            'all_items' => __('All Product matbao', 'txtdomain'),
            'insert_into_item' => __('Insert into product-matbao', 'txtdomain')
        ],
    ]);

    // muc category

    register_taxonomy('category-product', ['product-matbao'], [
        'label' => __('Category Product', 'txtdomain'),
        'hierarchical' => true,
        'rewrite' => ['slug' => 'category-product'],
        'show_admin_column' => true,
        'show_in_rest' => true,
        'labels' => [
            'singular_name' => __('category-product', 'txtdomain'),
            'all_items' => __('All category-product', 'txtdomain'),
            'edit_item' => __('Edit category-product', 'txtdomain'),
            'view_item' => __('View category-product', 'txtdomain'),
            'update_item' => __('Update category-product', 'txtdomain'),
            'add_new_item' => __('Add New category product', 'txtdomain'),
            'new_item_name' => __('New category-product Name', 'txtdomain'),
            'search_items' => __('Search category-product', 'txtdomain'),
            'parent_item' => __('Parent category product', 'txtdomain'),
            'parent_item_colon' => __('Parent category-product:', 'txtdomain'),
            'not_found' => __('No category-product found', 'txtdomain'),
        ],
    ]);
    register_taxonomy_for_object_type('category-product', 'product-matbao');
}
add_action('init', 'custom_matbao');