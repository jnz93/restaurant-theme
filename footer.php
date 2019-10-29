<?php 
/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Restaurant_theme
 * @since 0.1.0
 */
?>

    </div> <!-- #content -->

    <footer id="colophon" class="site-footer">
        <?php get_template_part('template-parts/footer/footer', 'widgets'); ?>
        <div class="site-info">
            <?php $blog_info = get_bloginfo('name'); ?>
            <?php if (!empty($blog_info)) :?>
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="site-name"><?php bloginfo('name'); ?></a>
            <?php endif; ?>

            <a href="<?php echo esc_url(__('https://wordpress.org/'), 'TEXT_DOMAIN'); ?>" class="imprint">
                <?php 
                /** translators: %s: wordpress  */
                printf(__('Orgulhosamente criado por %s', 'TEXT_DOMAIN'), 'Wordpress');
                ?>
            </a>
        </div> <!-- .site-info -->
    </footer> <!-- #colophon -->

</div> <!-- #page -->

<?php wp_footer(); ?>

</body>
</html>