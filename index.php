<?php get_header(); ?>
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <h1>Aktualności</h1>
            <div class="container">
                <div class="blog-items">
                    <?php
                    if (have_posts()):
                        while (have_posts()) : the_post();
                    ?>
                            <article>
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <div class="meta-info">
                                    <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                                    <p>Categories: <?php the_category(' '); ?></p>
                                    <p>Tags: <?php the_tags('', ', '); ?></p>
                                </div>
                                <?php the_excerpt(); ?>
                            </article>
                        <?php
                        endwhile;
                    else: ?>
                        <p>Nothing yet to be displayed!</p>
                    <?php endif; ?>
                </div>
            </div>
        </main>
    </div>
</div>
<?php get_footer(); ?>