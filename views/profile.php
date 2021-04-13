<div class="wrapper">
    <?= show_message() ?>
    <div class="wrapper">
        <h2>My Profile</h2>
    </div>
    <div class="daadd">
        <form action="/movie/main/profile/edit_action.php" method="post">
            <input type="hidden" name="id" value="<?= $result['id'] ?>">
            <div class="group-form">
                <label for="username">Username</label>
                <input disabled type="text" name="username" id="username" placeholder="Enter the username" value="<?= htmlentities($result['username']) ?>" maxlength="250">
            </div>
            <div class="group-form">
                <label for="password">Password <span class="required">* </span></label>
                <input required type="password" name="password" id="password" placeholder="Enter the password" maxlength="50">
            </div>
            <div class="group-form">
                <label for="password_conf">Password Confirmation <span class="required">* </span></label>
                <input required type="password" name="password_conf" id="password_conf" placeholder="Enter the password confirmation" maxlength="50">
            </div>
            <input class="btn-login" type="submit" value="Update" name="submit">
        </form>
    </div>
    <div class="wrapper">
        <hr>
    </div>
    <div class="wrapper">
        <h2>Logout?</h2>
        <a class="btn-register" style="background-color: indianred;" href="/movie/main/login/logout_action.php">Logout</a>
    </div>
</div>