<div class="login-wrapper">
    <?= show_message() ?>
    <h2>Login</h2>
    <div class="dalogin">
        <form action="/movie/main/login/login_action.php" method="post">
            <div class="group-form">
                <label for="username">Username</label>
                <input required type="text" name="username" id="username" placeholder="Enter your username" maxlength="50">
            </div>
            <div class="group-form">
                <label for="password">Password</label>
                <input required type="password" name="password" id="password" placeholder="Enter your password" maxlength="25">
            </div>
            <input class="btn-login" type="submit" value="Login" name="submit">
        </form>
    </div>
    <hr style="margin-top: 20px;">
    <div style="margin-top: 20px;" class="reminder">
        <h3>Didn't have any account yet?</h3>
        <a class="btn-register" href="/movie/main/register">Register Now!</a>
    </div>
</div>