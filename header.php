<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- 載入 style.css -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <title><?php bloginfo('name'); ?></title>
</head>

<body>
    <div class="testArea"><?php bloginfo('home') ?></div>
    <!-- <div class="jumbotron"></div> -->
    <div class="container">
        <div class="well well-md">
            <h1><?php bloginfo('name'); ?></h1>
            <em><?php bloginfo('description'); ?></em>
        </div>
        <!-- <nav class="navbar navbar-default"></nav> -->
        <!-- wp_nav_navbar 的 class 為 menu-all-pages-container 故無法正確顯示 -->
        <!-- 這邊的疑問點，將來查到後再回頭來做 -->
        <?php
        wp_nav_menu(
            array(
                'theme-location' => 'primary-menu',
                'container' => 'div',
                'container_class' => 'navbar navbar-default',
                'container_id' => 'navbar',
                'menu_class' => 'navbar',
                'menu_id' => 'navbar',
            )
        );
        ?>

        <!-- header結束 -->