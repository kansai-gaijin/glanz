<?php get_header(); ?>

<?php
    /**
     * Functions hooked into `theme/header` action.
     *
     * @hooked Glanz\Theme\render_header - 10
     */
    do_action('theme/header');
?>

<section class="contents-wrapper">
  <section class="contents">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post() ?>
            <?php
                /**
                 * Functions hooked into `theme/page/content` action.
                 *
                 * @hooked Glanz\Theme\App\Structure\render_page_content - 10
                 */
                do_action('theme/page/content');
            ?>
        <?php endwhile; ?>
    <?php endif; ?>
  </section>
</section>

<?php get_footer(); ?>
