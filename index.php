<?php get_header(); ?>
<div>
    <div>
        <ul>
            <?php
            global $query_string;
            $arg = array(
                'category_in' => array(2, 6),
                'posts_per_page' => 5,
                'order' => 'ASC',
            );
            query_posts($arg);
            // query_posts($query_string . '&posts_per_page=5&order=ASC');

            if (have_posts()) :
                while (have_posts()) :
                    the_post();
            ?>
                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php
                endwhile;
            endif;
            ?>
        </ul>
    </div>
</div>

<?php get_footer(); ?>