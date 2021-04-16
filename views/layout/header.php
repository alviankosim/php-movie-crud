<?php include $_SERVER['DOCUMENT_ROOT'] . "/movie/utils/genhelper.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>daMOVIES - place for having best movie review and recommendation </title>
    <link rel="shortcut icon" href="/movie/assets/images/movie_logo123.png">
    <link rel="stylesheet" href="/movie/assets/css/main.css">
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- DNS PREFETCH -->
    <link rel="preconnect" href="https://upload.wikimedia.org/" crossorigin>
    <link rel="dns-prefetch" href="https://upload.wikimedia.org/">
    <!-- Start SEO Tags -->
    <meta name="description" content="Remove any boring time by watching some movies recommended by daMOVIES. Chill and enjoy">
    <meta property="og:title" content="daMOVIES - movie recommendation" />
    <meta property="og:description" content="Remove boring time by watching a movie recommended by daMOVIES">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://app.codeseem.com/movie" />
    <meta property="og:image" content="https://app.codeseem.com/movie/assets/images/damovies_logo.jpg" />
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
                        <li><a href="javascript:window.location.href='/movie/main/movie/list.php?q=' + prompt('What movie do you want to search?');"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="content-wrapper">