

<?php get_header(); ?>

    <div class="content-area">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()): the_post(); ?>
                <article id="<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <h2 class="entry-title">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                    </header>
                    <div class="entry-summary">
                        <?php the_excerpt(); ?>
                    </div>
                    <footer class="entry-footer">
                        <span class="posted-on">发布于 <?php the_date(); ?></span>
                        <span class="byline">by <?php the_author(); ?></span>
                    </footer>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p>抱歉，没找到文章。</p>
        <?php endif; ?>
    </div>    

<?php get_footer(); ?>