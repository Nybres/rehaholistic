<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our theme. We will simply require it into the script here so that we
| don't have to worry about manually loading any of our classes later on.
|
*/

if (! file_exists($composer = __DIR__.'/vendor/autoload.php')) {
    wp_die(__('Error locating autoloader. Please run <code>composer install</code>.', 'sage'));
}

require $composer;

/*
|--------------------------------------------------------------------------
| Register The Bootloader
|--------------------------------------------------------------------------
|
| The first thing we will do is schedule a new Acorn application container
| to boot when WordPress is finished loading the theme. The application
| serves as the "glue" for all the components of Laravel and is
| the IoC container for the system binding all of the various parts.
|
*/

if (! function_exists('\Roots\bootloader')) {
    wp_die(
        __('You need to install Acorn to use this theme.', 'sage'),
        '',
        [
            'link_url' => 'https://roots.io/acorn/docs/installation/',
            'link_text' => __('Acorn Docs: Installation', 'sage'),
        ]
    );
}

\Roots\bootloader()->boot();

/*
|--------------------------------------------------------------------------
| Register Sage Theme Files
|--------------------------------------------------------------------------
|
| Out of the box, Sage ships with categorically named theme files
| containing common functionality and setup to be bootstrapped with your
| theme. Simply add (or remove) files from the array below to change what
| is registered alongside Sage.
|
*/

collect(['setup', 'filters'])
    ->each(function ($file) {
        if (! locate_template($file = "app/{$file}.php", true, true)) {
            wp_die(
                /* translators: %s is replaced with the relative file path */
                sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file)
            );
        }
    });


// USŁUGI
// function custom_post_type_services() {
//     $labels = array(
//         'name'                  => 'Usługi',
//         'singular_name'         => 'Usługa',
//         'menu_name'             => 'Usługi',
//         'add_new'               => 'Dodaj nową usługę',
//         'add_new_item'          => 'Dodaj nową usługę',
//         'edit_item'             => 'Edytuj usługę',
//         'new_item'              => 'Nowa usługa',
//         'view_item'             => 'Zobacz usługę',
//         'view_items'            => 'Zobacz usługi',
//         'search_items'          => 'Szukaj usług',
//         'not_found'             => 'Brak usług',
//         'not_found_in_trash'    => 'Brak usług w koszu',
//         'all_items'             => 'Wszystkie usługi',
//         'archives'              => 'Archiwum usług',
//         'attributes'            => 'Atrybuty usługi',
//         'insert_into_item'      => 'Wstaw do usługi',
//         'uploaded_to_this_item' => 'Wgrano do tej usługi',
//         'filter_items_list'     => 'Filtruj listę usług',
//         'items_list_navigation' => 'Nawigacja listą usług',
//         'items_list'            => 'Lista usług',
//     );

//     $args = array(
//         'labels'                => $labels,
//         'public'                => true,
//         'has_archive'           => true,
//         'menu_icon'             => 'dashicons-hammer',
//         'supports'              => array( 'title', 'editor', 'thumbnail' ),
//         'capability_type'     => 'page',
//         'rewrite'               => array( 'slug' => '/' ),
//     );

//     register_post_type( 'uslugi', $args );
// }

// add_action( 'init', 'custom_post_type_services' );



// Modyfikacja url wpisu blogowego
// function custom_post_link( $permalink, $post ) {
//     if ( 'post' === $post->post_type ) {
//         $categories = get_the_category($post->ID);
//         if ( ! empty( $categories ) ) {
//             $category = $categories[0]->slug;
//             if ( $category !== 'domyslna' ) {
//                 $permalink = home_url( '/blog/' . $category . '/' . $post->post_name . '/' );
//             } else {
//                 $permalink = home_url( '/blog/' . $post->post_name . '/' );
//             }
//         }
//     }
//     return $permalink;
// }
// add_filter( 'post_link', 'custom_post_link', 10, 2 );

