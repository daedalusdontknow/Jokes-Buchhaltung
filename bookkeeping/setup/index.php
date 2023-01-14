<?php
    function generateKey($length): string {
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!';
        $pass = array();
        $charLength = strlen($chars) - 1;

        for ($i = 0; $i < $length; $i++) {
            $n = rand(0, $charLength);
            $pass[] = $chars[$n];
        }

        return implode($pass);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Jokes Setup</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/bookkeeping/styleseping/styles/css_setup.css">
        <link rel="icon" href="img/logo.png">
    </head>

    <div class="title">
        <h1>Jokes Buchhaltung</h1>
        <h2>Setup</h2>
        <p>Jokes Buchhaltung is a simple accounting software for small businesses, it's free and Opensource!</p>
        <a href="https://github.com/daedalusdontknow/Jokes-Buchhaltung" target="_blank"><img src="../img/github.png" alt="github" width="50" height="50"></a>
    </div>

    <div class="content">
        <div id="progress">
            <div id="progress-bar"></div>
            <ul id="progress-num">
                <li class="step active">1</li>
                <li class="step">2</li>
                <li class="step">3</li>
                <li class="step">4</li>
                <li class="step">5</li>
            </ul>
        </div>

        <div class="steps" id="step-1">
            <h2>Welcome to "Jokes Buchhaltung"</h2>
            <p>Click next to continue</p>
        </div>

        <div class="steps" id="step-2">
            <h2>Enter your credentials</h2>
            <form action="index.php" method="post">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" placeholder="Title" required>
                <br>
                <label for="icon">Icon</label>
                <input type="text" name="icon" id="icon" placeholder="Icon" required>
            </form>
        </div>

        <div class="steps" id="step-3">
            <h2>Enter your database credentials</h2>
            <form action="index.php" method="post">
                <label for="host">Host</label>
                <input type="text" name="host" id="host" placeholder="Host" required>
                <br>
                <label for="user">User</label>
                <input type="text" name="user" id="user" placeholder="User" required>
                <br>
                <label for="password">Password</label>
                <input type="text" name="password" id="password" placeholder="Password" required>
                <br>
                <label for="database">Database</label>
                <input type="text" name="database" id="database" placeholder="Database" required>
            </form>
        </div>

        <div class="steps" id="step-4">
            <h2>Enter your website colors</h2>
            <form action="index.php" method="post">
                <label for="color1">Color 1</label>
                <input type="color" name="color1" id="color1" required>
                <br>
                <label for="color2">Color 2</label>
                <input type="color" name="color2" id="color2" required>
                <br>
                <label for="color3">Color 3</label>
                <input type="color" name="color3" id="color3" required>
            </form>
        </div>

        <div class="steps" id="step-5">
            <h2>Do you want to have a login system?</h2>
            <form action="index.php" method="post">
                <input type="checkbox" name="login" id="login">
            </form>

            <label id="login-username-label" for="login-username">Username</label>
            <input type="text" name="loginUsername" id="login-username" placeholder="Joke" required>
            <br>

            <label id="login-password-label" for="login-password">Password</label>
            <input type="text" name="loginUsername" id="login-password" placeholder="Password1234" required>

                <script>
                    document.getElementById("login-username-label").style.display = "none";
                    document.getElementById("login-password-label").style.display = "none";
                    document.getElementById("login-username").style.display = "none";
                    document.getElementById("login-password").style.display = "none";

                    document.getElementById("login").addEventListener("change", function() {
                        if (this.checked) {
                            document.getElementById("login-username-label").style.display = "block";
                            document.getElementById("login-password-label").style.display = "block";
                            document.getElementById("login-username").style.display = "block";
                            document.getElementById("login-password").style.display = "block";
                        } else {
                            document.getElementById("login-username-label").style.display = "none";
                            document.getElementById("login-password-label").style.display = "none";
                            document.getElementById("login-username").style.display = "none";
                            document.getElementById("login-password").style.display = "none";
                        }
                    });
                </script>
            </form>
        </div>

        <button id="progress-prev" class="btn" disabled>Previous</button>
        <button id="progress-next" class="btn" ">Next</button>
    </div>

    <div class="footer">
        <p>Jokes Buchhaltung</p>
        <p>Made by daedalusdontknow (PhilippG)</p>
    </div>

    <script>
        const progressBar = document.getElementById("progress-bar");
        const progressNext = document.getElementById("progress-next");
        const progressPrev = document.getElementById("progress-prev");
        const steps = document.querySelectorAll(".step");
        let active = 1;

        progressNext.addEventListener("click", () => {
            active++;
            if (active > steps.length) {
                active = steps.length;
            }
            updateProgress();
        });

        progressPrev.addEventListener("click", () => {
            active--;
            if (active < 1) {
                active = 1;
            }
            updateProgress();
        });

        const updateProgress = () => {
            // toggle active class on list items
            steps.forEach((step, i) => {
                if (i < active) {
                    step.classList.add("active");
                } else {
                    step.classList.remove("active");
                }
            });
            // set progress bar width
            progressBar.style.width =
                ((active - 1) / (steps.length - 1)) * 100 + "%";
            // enable disable prev and next buttons
            if (active === 1) {
                progressPrev.disabled = true;
            } else if (active === steps.length) {
                progressNext.disabled = true;
            } else {
                progressPrev.disabled = false;
                progressNext.disabled = false;
            }

            //show the current step
            hideSteps();
            showStep("step-" + active);
        };

        const hideSteps = () => {
            document.querySelectorAll(".steps").forEach((step) => {
                step.style.display = "none";
            });
        };

        const showStep = (step) => {
            document.getElementById(step).style.display = "block";
        };

        hideSteps();
        showStep("step-1");
    </script>

</html>