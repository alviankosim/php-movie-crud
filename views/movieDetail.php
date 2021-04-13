<style>
    .video-wrapper {
        position: relative;
        padding-bottom: 56.25%; /* 16:9 */
        height: 0;
    }
    .video-wrapper iframe {
        border-radius: 20px;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    .movie-plot p {
        white-space: pre-wrap;
        text-align: justify;
    }
</style>
<div class="wrapper">
    <?= show_message() ?>
    <div class="wrapper" style="display: inline-flex;">
        <h1><span class="hashtag">#</span> <?= htmlentities($result['title']) ?> &nbsp; </h1>
        <?= my_sess('username') ? '<a class="links" href="'. (base_url('main/movie/edit.php?id=' . $result["id"]) .'"><i class="fa fa-pencil"></i>Edit</a>') : '' ?>
    </div>
    <div class="video-wrapper">
        <iframe width="560" height="349" src="https://www.youtube-nocookie.com/embed/<?= $url ?>?controls=1&autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>
<div class="wrapper movie-plot">
    <div class="wrapper">
        <h2><span class="hashtag">#</span> Plot</h2>
    </div>
    <p><?= htmlentities($result['description']) ?></p>
</div>
<div class="wrapper">
    <h2><span class="hashtag">#</span> User Reviews</h2>
    <div class="wrapper">
        <div class="wrapper">
            <h3 style="padding:0"><?= substr(floatval($result['review']), 0, 3) ?><i class="fa fa-star"></i> out of 5<i class="fa fa-star"></i></h3>
            <small>from <?= $result['count_review'] ?> user</small>
        </div>
        <div class="wrapper">
            <div class="wrapper">
                <h4>Top 10 User Review</h4>
            </div>
            <div style="height: 300px;background-color:#eee;border-radius:20px;overflow:scroll" class="review-box">
                <?= (count($user_review) < 1 ? '<p style="text-align:center;margin-top:20px">There are no review for this movie</p>' : '') ?>
                <?php foreach($user_review as $single_review): ?>
                    <div style="background-color: #ddd;border-radius:10px;margin:15px 5px;padding:10px" class="item">
                        <small><?= censor_name($single_review['username']) ?> &mdash; <?= print_stars($single_review['stars']) ?></small>
                        <p style="white-space: pre-wrap;"><?= htmlentities($single_review['review']) ?></p>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <div class="review-wrapper">
            <div class="wrapper">
                <h4><?= ($result['movie_stars_id'] ? 'Your review about this movie' : 'Write your review about this movie') ?></h4>
            </div>
            <form action="<?= ($result['movie_stars_id'] ? '' : '/movie/main/rankings/add_action.php') ?>" method="POST">
                <input type="hidden" name="movie_id" value="<?= $result['id'] ?>">
                <div class="group-form">
                    <label for="stars"> Your Rating <span class="required">*</span></label>
                    <select <?= ($result['movie_stars_id'] ? 'disabled' : '') ?> style="width: 20%;" name="stars" id="stars">
                    <? foreach([5,4,3,2,1] as $star): ?>
                        <option <?= ($result['movie_stars_id'] && $result['movie_stars_stars'] == $star ? 'selected' : '') ?> value="<?= $star ?>"><?= $star . print_stars($star) ?> </option>
                    <? endforeach ?>
                    </select>
                </div>
                <div class="group-form">
                    <label for="review">Your Review</label>
                    <textarea <?= ($result['movie_stars_id'] ? 'disabled' : '') ?> name="review" id="review" cols="30" rows="10" maxlength="200" placeholder="Write your own review here"><?= ($result['movie_stars_id'] ? $result['movie_stars_review'] : '') ?></textarea>
                </div>
                <? if(!$result['movie_stars_id']): ?>
                    <? if(my_sess('username')): ?>
                        <input class="btn-login" type="submit" value="Submit" name="submit">
                    <? else: ?>
                        <a class="btn-login" href="/movie/main/login">Login to create a review</a>
                    <? endif ?>
                <? endif ?>
            </form>
        </div>
    </div>
</div>
<div class="wrapper">
    <h2><span class="hashtag">#</span> Other Movies You Might Like</h2>
    <div class="most">
    <?php foreach($other_movie as $row): ?>
        <a style="text-decoration: none;" href="/movie/main/movie/detail.php?id=<?= $row['id'] ?>">
            <div style="background-image: url('<?= $row['image_link'] ?>');background-position:center;background-size:cover" class="movie">
                <span><?= $row['title'] ?></span>
            </div>
        </a>
    <?php endforeach; ?>
    </div>
</div>