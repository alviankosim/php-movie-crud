<?php include $_SERVER['DOCUMENT_ROOT'] . "/movie/utils/genhelper.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>daMOVIES &mdash; movie list and reviews </title>
    <link rel="shortcut icon" href="/movie/assets/images/movie_logo123.png">
    <link rel="stylesheet" href="/movie/assets/css/main.css">
</head>
<body>
    <div class="main">
        <div class="header-wrapper">
            <div class="left-section">
                <span class="brand">
                    <a href="/movie">daMOVIES </a>
                </span>
                <div class="menu-section">
                    <ul class="nav-menu">
                        <li><a href="/movie/main/movie/list.php">Movie List</a></li>
                        <li><a href="/movie/main/rankings/list.php">Rankings</a></li>
                        <li><a href="/movie/main/about.php">About</a></li>
                        <li><a target="_blank" href="https://github.com/alviankosim/php-movie-crud"><span class="github">Contribute on GitHub?</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="right-section">
            <div class="menu-section">
                    <ul class="nav-menu">
                        <li><a href="/movie/main/<?= (my_sess('username') ? 'profile' : 'login') ?>"><?= (my_sess('username') ? htmlentities(my_sess('username')) : 'Login') ?></a></li>
                        <li><a href="javascript:window.location.href='/movie/list?q=' + prompt('What movie do you want to search?');"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="content-wrapper">