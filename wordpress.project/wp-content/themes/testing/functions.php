<?php
    function testing_assets() {
        wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/css/normalize.css' );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );
        wp_enqueue_style( 'media', get_template_directory_uri() . '/assets/css/media.css' );
        wp_enqueue_style( 'post', get_template_directory_uri() . '/assets/css/post.css' );
        wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array(), '20151215', true );
    }
    add_action('wp_enqueue_scripts', 'testing_assets');
    add_theme_support( 'testing' );
    add_theme_support( 'post-thumbnails' );
    //show_admin_bar(true);
    function custom_pagination() {
        ob_start();
        ?>
                <?php
                    global $wp_query;
                    $current = max( 1, absint( get_query_var( 'paged' ) ) );
                    $pagination = paginate_links( array(
                        'base' => str_replace( PHP_INT_MAX, '%#%', esc_url( get_pagenum_link( PHP_INT_MAX ) ) ),
                        'format' => '?paged=%#%',
                        'current' => $current,
                        'total' => $wp_query->max_num_pages,
                        'type' => 'array',
                        'prev_text' => null,
                        'next_text' => null,
                    ) ); ?>
                <?php if ( ! empty( $pagination ) ) : ?>
                    <ul class="pagination list-reset">
                        <?php foreach ( $pagination as $key => $page_link ) : ?>
                            <li class="pagination__item<?php if ( strpos( $page_link, 'current' ) !== false ) { echo ' pagination__item--current'; } ?>"><?php echo $page_link ?></li>
                        <?php endforeach ?>
                    </ul>
                <?php endif ?>
        <?php
        $links = ob_get_clean();
        return apply_filters( 'sa_bootstap_paginate_links', $links );
    }