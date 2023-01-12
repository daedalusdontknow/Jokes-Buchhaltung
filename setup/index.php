<?php

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Jokes Setup</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/styles/css_setup.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        <link rel="icon" href="img/logo.png">
    </head>

    <div class="title">
        <h1>Jokes Buchhaltung</h1>
        <h2>Setup</h2>
        <p>https://github.com/daedalusdontknow/Jokes-Buchhaltung</p>
        <br>
    </div>

    <div class="container">

        <h3>General</h3>

        <label for="title">Title</label>
        <input type="text" id="siteName" placeholder="Jokes Buchhaltung">
        <label for="url">Icon URL</label>
        <input type="url" id="imgUrl" placeholder="https://github.com/daedalusdontknow/Jokes-Buchhaltung/icon.png">
        <br>

        <h3>MySQL - Database</h3>

        <label for="host">Host</label>
        <input type="text" name="host" id="host" placeholder="localhost">
        <br>
        <label for="user">User</label>
        <input type="text" name="user" id="user" placeholder="root">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="password">
        <br>
        <label for="database">Database</label>
        <input type="text" name="database" id="database" placeholder="jokes">
        <br>

        <h3>Design</h3>

        <label for="color1">Primary Color</label>
        <input type="color" name="color1" id="color1">
        <br>
        <label for="color2">Secondary Color</label>
        <input type="color" name="color2" id="color2">
        <br>
        <label for="color3">Tertiary Color</label>
        <input type="color" name="color3" id="color3">
        <br>

        <h3>Admin</h3>

        <!--if a checkbox is active (asking if there should be a login) pop up a new input field for the password and name-->
        <label for="login">Login</label>
        <input type="checkbox" name="login" id="login">

        <script>
            document.getElementById("login").addEventListener("change", function() {
                if (this.checked) {
                    document.getElementById("login_password").style.display = "block";
                    document.getElementById("login_name").style.display = "block";
                } else {
                    document.getElementById("login_password").style.display = "none";
                    document.getElementById("login_name").style.display = "none";
                }
            });
        </script>

        <input type="text" name="login_name" id="login_name" style="display: none" placeholder="Joke">
        <input type="password" name="login_password" id="login_password" style="display: none;" placeholder="ILoveJoke<3">
        <br>

        <button type="submit" class="btn">Submit</button>
    </div>

    <div class="footer">
        <p>© 2021 Jokes Buchhaltung</p>
        <p>Made by daedalusdontknow (PhilippG)</p>
    </div>

</html>