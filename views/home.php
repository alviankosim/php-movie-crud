<div class="hero" style="background-image: url('/movie/assets/images/hero<?= mt_rand(1, 5) ?>.jpeg')">
    <span style="margin:20px" class="brand">
        <a href="javascript:alert('Place for reviewing the movie!');">daMOVIES </a>
    </span>
</div>
<div class="wrapper">
    <h2 style="margin-top:20px"><span class="hashtag">#</span> Best Movies by daMOVIES</h2>
    <div class="movie-list">
        <?php foreach ($result as $row) : ?>
            <a style="text-decoration: none;" href="/movie/main/movie/detail.php?id=<?= $row['id'] ?>">
                <div style="background-image: url('<?= $row['image_link'] ?>');background-position:center;background-size:cover" class="movie">
                    <span><?= $row['title'] ?></span>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>
<div class="wrapper" style="display: inline-flex;align-items:center">
    <h2><span class="hashtag">#</span> This Weekend Recommendation</h2>
    <small>&nbsp; (Provided by <a class="links" href="https://www.themoviedb.org/">TMDb)</a></small>
</div>
<div class="most">
    <?php foreach ($result_weekend as $row) : ?>
        <a style="text-decoration: none;" target="_blank" href="https://www.themoviedb.org/movie/<?= $row->id ?>">
            <div style="background-image: url('https://image.tmdb.org/t/p/w500/<?= $row->poster_path ?>');background-position:center;background-size:cover" class="movie">
                <span><?= $row->title ?></span>
            </div>
        </a>
    <?php endforeach; ?>
</div>