<div class="login-wrapper">
    <?= show_message() ?>
    <h2>Register</h2>
    <div class="dalogin">
        <form action="/movie/main/register/register_action.php" method="post">
            <div class="group-form">
                <label for="username">Username <span class="required">*</span></label>
                <input required type="text" name="username" id="username" placeholder="Enter your username" maxlength="50">
            </div>
            <div class="group-form">
                <label for="password">Password <span class="required">*</span></label>
                <input required type="password" name="password" id="password" placeholder="Enter your password" maxlength="25">
            </div>
            <div class="group-form">
                <label for="password_conf">Password Confirmation <span class="required">*</span></label>
                <input required type="password" name="password_conf" id="password_conf" placeholder="Enter your password confirmation" maxlength="25">
            </div>
            <!-- <div class="group-form">
                <label for="email">Email Address</label>
                <input required type="email" name="email" id="email" placeholder="Enter your email address" maxlength="250">
            </div> -->
            <input class="btn-login" type="submit" value="Register" name="submit">
        </form>
    </div>
    <hr style="margin-top: 20px;">
    <div style="margin-top: 20px;" class="reminder">
        <h3>Already have an account?</h3>
        <a class="btn-register" href="/movie/main/login">Login Now!</a>
    </div>
</div>