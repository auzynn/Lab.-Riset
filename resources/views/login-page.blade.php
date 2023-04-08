<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css'>
</head>
<body>

<div id="login-page" class="flex-h">
    <div class="login-container flex-v center">
        <div class="login-title">
            <h1>Login</h1>
        </div>
        <form class="form" action="/login" method="POST">
            @csrf
            <div class="login-form" >
            <div class="mb-30">
                <input autofocus class="form-ctrl input-solid login-input" name="email" placeholder="Email">
            </div>
            <div class="mb-30">
                <input class="form-ctrl input-solid login-input" type="password" name="password" placeholder="Password">
            </div>
            <div class="mt-50">
                <button name="submit" type="submit" class="btn btn-navy-solid btn-login">Masuk</button>
            </div>
        </div>
    </form>
        <div class="login-unsil">
            <div>
                <p align="center">Atau login dengan</p>
            </div>
            <div class="flex-h center" style="margin-top: 15px">
<!--                <a href="#" class="btn btn-log-unsil btn-navy-border"></i>UNSIL Mail</a>-->
                <img src="assets/google.png" style="width: 20px; height: 20px; margin-right: 5px">
                <a href="{{Route('auth.google')}}">UNSIL Mail</a>
            </div>
        </div>
    </div>
    <div class="jumbotron-login">

    </div>
</div>

</body>
</html>