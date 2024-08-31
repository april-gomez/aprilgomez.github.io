<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>Create Account</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;1,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./src/css/log-in-create.css">
    </head>
    <body>
        <div class="container">

            <form action="insert.php" method="post" class="form" id="createAccount">
                <h1 class="form__title">Create Account</h1>
                <div class="form__message form__message--error"></div>

                <div class="form__input-group">
                    <input type="text" id="username" name="username" class="form__input" autofocus placeholder="Username">
                    <div class="form__input-error-message"></div>
                </div>

                <div class="form__input-group">
                    <input type="email" id="email" name="email" class="form__input" autofocus placeholder="Email Address">
                    <div class="form__input-error-message"></div>
                </div>

                <div class="form__input-group">
                    <input type="password" id="password" name="password" class="form__input" autofocus placeholder="Password">
                    <div class="form__input-error-message"></div>
                </div>

                <!-- <div class="form__input-group">
                    <input type="password" id="password1" class="form__input" autofoucs placeholder="Confirm Password">
                    <div class="form__input-error-message"></div>
                </div> -->

                <button class="form__button" id="rgbutton" type="submit">Continue</button>
                <p class="form__text">
                    <a href="./login.php" class="form__link" id="linkLogin">Already have an account? Sign in.</a>
                </p>

            </form>

        </div>
        <script src="./src/js/main.js"></script>
    </body>
    <script src="main.js"></script>
</html>
