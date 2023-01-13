<?php
    $jbconfig = file_get_contents('../jbconfig.json');
    $jbconfig = json_decode($jbconfig, true);
    $includedLogin = $jbconfig['includedLogin'];

    if($includedLogin) {
        session_start();
        if(!isset($_SESSION['loggedIn'])) {
            header('Location: /login');
            exit();
        }
    }

    $title = $jbconfig['title'];
    $icon = $jbconfig['icon'];

?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/css_setup.css">
    <link rel="icon" href="<?php echo $icon ?>">
</head>
