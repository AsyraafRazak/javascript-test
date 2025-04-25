<?php
$pageheader = 'php';
$page = 'php';
include($_SERVER['DOCUMENT_ROOT'] . '/js-test/layout/header.php');
include($_SERVER['DOCUMENT_ROOT'] . '/js-test/layout/phpsidebar.php');
?>

<div class="main-content">
    <h1>PHP Tutorial 1 (Introduction)</h1>

    <div class="secondary-content">
        <p>Basic understanding of</p>
        <ul>
            <li>HTML</li>
            <li>CSS</li>
            <li>JavaScript</li>
        </ul>

        <p>"PHP: Hypertext Preprocessor"</p>
    </div>

    <div class="secondary-content">
        <p>Version php :
            <?php
            echo phpversion();
            ?></p>
    </div>

    <div class="secondary-content">
        <p>Set Up PHP</p>
        <ul>
            <li>Web server (XAMPP or Laragon)</li>
            <li>Install PHP</li>
            <li>Database (MySQL)</li>
        </ul>
        <pre><code>&lt;?php
echo "Hello, world!";
?&gt;</code></pre>

        <p>PHP Case Sensitivity</p>
        <ul>
            <li>In PHP, keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are not case-sensitive.</li>
            <li><b>Note:</b> However; all variable names are case-sensitive!</li>
        </ul>

    </div>

    <div class="secondary-content">
        <p>Function</p>
        <ul>
            <li>Generate dynamic page content</li>
            <li>Create, open, read, write, delete, and close files on the server</li>
            <li>Collect form data</li>
            <li>Send and receive cookies</li>
            <li>Add, delete, modify data in your database</li>
            <li>Be used to control user-access</li>
            <li>Encrypt data</li>
        </ul>
    </div>


</div>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/js-test/layout/footer.php'); ?>