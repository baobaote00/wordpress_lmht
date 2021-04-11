<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./wp-content/themes/lmht/style.css">
    <link rel="profile" href="https://gmgp.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head();?>
    <style>
        #main-navigation{
            top: 101px;
        }
    </style>
</head>
<body <?php body_class();?>> 
<header id="topheader" class="clearfix">
    <div id="header-content">
        <div id="main-navigation">
            <div class="nav menugs-container gs-table">
            <?php
                wp_nav_menu(
                    array(
                        'menu_id' => 'primary-menu',
                    )
                )
            ?>
            </div>
        </div>
        <div id="groupButtonTop">
            <a href="http://taigame.lienminh.garena.vn" id="btnDownload">Tải Game</a>
            <a href="http://platform.garena.vn/register" onclick="var that=this;ga('send', 'event', 'dangkytaikhoan', 'LMHT', 'Link');setTimeout(function(){location.href=that.href;},200);return false;">Đăng Ký</a>
        </div>
    </div>
</header>