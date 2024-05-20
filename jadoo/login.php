<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadoo</title>
    <link rel="stylesheet" href="CSS/login.css">
</head>

<body>
    <div class="hero">
        <div class="form-box">
            <div class="buttom-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <!-- <button type="button" class="toggle-btn" onclick="register()">Register</button> -->
            </div>

            <form id="login" class="input-grp">
                <input type="text" class="input-field" placeholder="User I'd" required>
                <input type="text" class="input-field" placeholder="Enter Password" required>
                <input type="checkbox" class="check-box"><span>Remember Password</span>
                <button type="submit"  onclick="myFunction()" class="submit-btn">Log In</button>
            </form>
           
        </div>

    </div>
    <!-- <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");


        function register() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }

        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";
        }

 

    </script> -->
</body>

</html>