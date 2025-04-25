<!DOCTYPE html>
<html lang="en">

<head>
    <title>Learn Coding</title>

    <link href="/js-test/css/styles.css" rel="stylesheet" />

</head>

<body>
    <ul class="navbar-nav">
    <li><a class="<?= ($pageheader == 'home') ? 'active' : '' ?>" href="/js-test/index.php">Home</a></li>
    <li><a class="<?= ($pageheader == 'php') ? 'active' : '' ?>" href="/js-test/phptutorial/phptutorial.php">PHP</a></li>
    <li style="float:right"><a class="<?= ($page == 'about') ? 'active' : '' ?>" href="about.php">About</a></li>
    </ul>

    