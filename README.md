<h1 align="center">
Jokes Buchhaltung
</h1>

"Buchhaltung" is a german word and stands for "Bookkeeping"

This will be a repository for an accounting application that can run on web servers. 
<h3 align="center">Languages used</h3>
<h3 align="center">

![HTML](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![CSS](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)


<h1 align="center">
Table of Contents
</h1>

- Setup & Installation
- Sponsor
- How to use it
- How to use it as an developer

<h2 align="center">
Setup & Installation
</h2>

1. Get the github repo on your Webserver
2. Go to https://yourdomain.com/setup
3. Complete the setup

<h2 align="center">
Sponsor
</h2>

There is no sponsor at the moment, but you are welcome to contact me.

<a href="mailto:daedalusdontknow@gmx.de?subject=Sponsor%20or%20Partner" align="center">Contact</a>


<h2 align="center">
How to use it
</h2>

Currently nothing here

<h2 align="center">
How to use it as an developer
</h2>

- How to use the own Login System?

<h4 align="center">
Login System
</h4>

1. Remove the Admin Login in Setup by clicking the Checkbox
2. Create a Session on user login containing the data "JB_loggedIn=true" and the data "Username"
3. Your System should now work with the Bookkeeping System
4. If you want to use the Admin Panel, you need to create a Session containing the data "JB_Admin" and the data "true"

<p align="center">
<small>
PHP example code

session_start();\
session_regenerate_id();\
$_SESSION["JB_loggedIn"] = true;\
$_SESSION["Username"] = "YourUsername";\
header("Location: https://yourdomain.com/");

If you want to use the Admin Panel, change the session name "JB_loggedIn" to "JB_Admin" and the data to "true"

$_SESSION["JB_Admin"] = true;

</small>
</p>

<h2 align="center">
♥️ Thanks for using Jokes Buchhaltung ♥️
</h2>