<!-- 引入 header header.php -->
<?php get_header(); ?>

<!-- 設定 query_posts() 條件 -->
<?php
global $query_string;
$args = array(
    'posts_per_page' => 21,
    'post_type' => 'any',
    'post_status' => 'any',
);
query_posts($args);
$i = 0;
?>

<!-- 文章迴圈開始 -->
<?php while (have_posts()) : the_post(); //文章迴圈開始 
?>

    <!-- Bootstrap 每列3篇判斷式開始 -->
    <?php if ($i % 3 == 0) echo '<div class="row">'; ?>
    <div class="col-md-4">
        <?php
        //判斷是否為置頂文章
        if (is_sticky())
            echo '<div class="panel panel-primary">';
        else
            echo '<div class="panel panel-info">';
        ?>
        <!-- 文章主題 -->
        <?php the_title('<div class="panel-heading"><h3>', '</h3></div>'); ?>
        <!-- 文章內文短述 -->
        <div class="panel-body">
            <?php the_excerpt(); ?>
        </div>
        <!-- 文章註腳 -->
        <div class="panel-footer">
            <em>Posted：<?php the_date(); ?>
                at <?php the_time(); ?>
        </div>
    </div>
    </div>
    <!-- Bootstrap 每列3篇判斷式結束 -->
    <?php if ($i++ % 3 == 2) echo '</div>'; ?>

    <!-- 文章迴圈結束 -->
<?php endwhile; ?>

<!-- 引入 footer footer.php -->
<?php get_footer(); ?>