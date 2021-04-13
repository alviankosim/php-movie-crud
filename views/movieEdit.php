<div class="wrapper">
    <?= show_message() ?>
    <div class="wrapper">
        <h2>Edit Movie</h2>
    </div>
    <div class="daadd">
        <form action="/movie/main/movie/edit_action.php" method="post">
            <input type="hidden" name="id" value="<?= $result['id'] ?>">
            <div class="group-form">
                <label for="title">Movie Title <span class="required">* </span></label>
                <input required type="text" name="title" id="title" placeholder="Enter the title" value="<?= htmlentities($result['title']) ?>" maxlength="250">
            </div>
            <div class="group-form">
                <label for="description">Movie Description <span class="required">* </span></label>
                <textarea required name="description" id="description" placeholder="Enter the description" rows="30"  maxlength="9000"><?= htmlentities($result['description']) ?></textarea>
            </div>
            <div class="group-form">
                <label for="image_link">Movie Image Link <span class="required">* </span></label>
                <input required type="text" name="image_link" id="image_link" placeholder="Enter the image link" value="<?= htmlentities($result['image_link']) ?>" maxlength="250">
            </div>
            <div class="group-form">
                <label for="trailer_link">Movie Trailer YouTube Link <span class="required">* </span></label>
                <input required type="text" name="trailer_link" id="trailer_link" placeholder="Enter the image link" value="<?= htmlentities($result['trailer_link']) ?>" maxlength="250">
            </div>
            <input class="btn-login" type="submit" value="Save" name="submit">
        </form>
    </div>
</div>