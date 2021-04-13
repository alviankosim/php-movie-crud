<div class="wrapper">
    <?= show_message() ?>
</div>
<div class="wrapper" style="display: inline-flex;align-items:center">
    <h2><span class="hashtag">#</span> <?= (count($dataSearch) > 0 ? 'Search Movie: ' . htmlentities(daGet('q')) : 'Movie List') ?> &nbsp;</h2>
    <?= (my_sess('username') ? '<a class="links" href="/movie/main/movie/add.php">Add New</a>'  : '') ?>
</div>
<div class="movie-list">
    <?php foreach ($result as $row) : ?>
        <a style="text-decoration: none;" href="/movie/main/movie/detail.php?id=<?= $row['id'] ?>">
            <div style="background-image: url('<?= $row['image_link'] ?>');background-position:center;background-size:cover" class="movie">
                <span><?= $row['title'] ?></span>
            </div>
        </a>
    <?php endforeach; ?>
</div>
<div class="reminder" style="text-align: center;">
    <h3><span class="hashtag">#</span> Didn't find your favourite movie?</h3>
    <?= (my_sess('username') ? '<a class="links" href="/movie/main/movie/add.php">Add your favourite movie</a> to daMOVIES'  : '<small><a class="links" href="/movie/main/login">Sign in</a> to add your movie on daMOVIES</small>') ?>
</div>