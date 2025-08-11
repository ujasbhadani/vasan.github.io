<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package IT Security
 */

get_header(); ?>

<div class="container">
    <div id="content" class="contentsecwrap">
        <section class="site-main">
            <header class="page-header">
                <h1 class="entry-title"><?php esc_html_e( '404 Not Found', 'it-security' ); ?></h1>
            </header>
            <div class="page-content">
                <p><?php esc_html_e( 'Looks like you have taken a wrong turn.....Don\'t worry... it happens to the best of us.', 'it-security' ); ?></p>
            </div>
        </section>
        <div class="clear"></div>
    </div>
</div>

<?php get_footer(); ?>