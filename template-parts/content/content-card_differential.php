<?php 
/**
 * Display template differential card
 *
 * @package WordPress
 * @subpackage Restaurant_theme
 * @since 0.4.0
 */
?>

<div id="post-<?php echo the_ID() ?>" class="card card__type1">
    <header class="card__headerIcon">
        <?php the_post_thumbnail(); ?>
    </header>
    <span class="card__separator"></span>
    <div class="card__content">
        <?php the_excerpt(); ?>
    </div>
</div>