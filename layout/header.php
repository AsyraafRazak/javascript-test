<!DOCTYPE html>
<html lang="en">

<head>
    <title>JavaScript</title>

    <link href="css/styles.css" rel="stylesheet" />

</head>

<body>
    <ul class="navbar-nav">
    <li><a class="<?= ($page == 'home') ? 'active' : '' ?>" href="index.php">Home</a></li>
    <li><a class="<?= ($page == 'php') ? 'active' : '' ?>" href="phptutorial.php">PHP</a></li>
    <li><a class="<?= ($page == 'contact') ? 'active' : '' ?>" href="contact.php">Contact</a></li>
    <li style="float:right"><a class="<?= ($page == 'about') ? 'active' : '' ?>" href="about.php">About</a></li>
    </ul>

    <ul class="sidebar-nav">
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="#news">News</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#about">About</a></li>
    </ul>