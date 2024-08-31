<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;1,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./src/css/log-in-create.css">
    </head>
    <body>
        <div class="container">

            <form action="verify.php" method="post" class="form" id="login">
                <h1 class="form__title">Login</h1>
                <div class="form__message form__message--error"></div>

                <div class="form__input-group">
                    <input type="text" id="username" name="username" class="form__input" autofocus placeholder="Username">
                    <div class="form__input-error-message"></div>
                </div>

                <div class="form__input-group">
                    <input type="password" id="password" name="password" class="form__input" autofoucs placeholder="Password">
                    <div class="form__input-error-message"></div>
                </div>

                <button class="form__button" type="submit">Continue</button>
                <p class="form__text">
                    <a href="./index.php" class="form__link" id="linkCreateAccount">Don't have an account? Create account.</a>
                </p>
            </form>
        </div>
        
    </body>
</html>
