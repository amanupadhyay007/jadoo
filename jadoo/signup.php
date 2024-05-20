<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadoo</title>
    <link rel="stylesheet" href="CSS/signup.css">
</head>

<body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="register()">Sign Up</button>
            </div>
            <form id="register" class="input-grp" action="" method="post">
                <input type="text" class="input-field" placeholder="Enter your name" name="username" required>
                <input type="text" class="input-field" placeholder="Create user ID" name="user_id" required>
                <input type="email" class="input-field" placeholder="Email ID" name="user_mail" required>
                <input type="password" class="input-field" placeholder="Enter Password" name="password" required>
                <input type="checkbox" id="agree" class="check-box"><label for="agree">I agree to the terms & conditions.</label>
                <button type="submit" class="submit-btn">Sign Up</button>
            </form>
        </div>
    </div>

</body>

</html>
