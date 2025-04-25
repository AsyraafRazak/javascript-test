<?php
$pageheader = 'php';
$page = 'php2';
include($_SERVER['DOCUMENT_ROOT'] . '/js-test/layout/header.php');
include($_SERVER['DOCUMENT_ROOT'] . '/js-test/layout/phpsidebar.php');
?>

<div class="main-content">
    <h1>PHP Tutorial 2</h1>
    <h2>Comments</h2>

    <div class="secondary-content">
        <p>Syntax</p>
        <pre><code style="color:#3cb371;">// This is a single-line comment

# This is also a single-line comment

/* This is a
multi-line comment */</code></pre>
    </div>

    <h2>Variables</h2>
    <div class="secondary-content">
        <p>A variable can have a short name (like <code class="code-box">$x</code> and <code class="code-box">$y</code>) or a more descriptive name (<code class="code-box">$age, $carname, $total_volume</code>).</p>
        <p>Rules : </p>
        <ul>
            <li>Starts with the $ sign</li>
            <li>Start with a letter or the underscore character</li>
            <li>Cannot start with a number</li>
            <li>Only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )</li>
            <li>Case-sensitive ($age and $AGE are two different variables)</li>
        </ul>
    </div>

    <div class="secondary-content">
        <p>Output (Eg1)</p>
        <div class="code-content">
            <div class="code-box">
                <pre><code>$name = "Asyraaf";
echo "I am $name";</code></pre>
            </div>
            <div class="code-output">
                <?php
                $name = "Asyraaf";
                echo "I am $name";
                ?>
            </div>
        </div>
        <p>Output (Eg2)</p>
        <div class="code-content">
            <div class="code-box">
                <pre><code>echo "I am " . $name;</code></pre>
            </div>
            <div class="code-output">
                <?php
                echo "I am " . $name;
                ?>
            </div>
        </div>
    </div>

    <div class="secondary-content">
        <p>Variable Types</p>
        <ul>
            <li>PHP has no command for declaring a variable, and the data type depends on the value of the variable</li>
        </ul>
        <p>Data types : </p>
        <ul>
            <li>String
                <ul>
                    <li>Assigning a string to a variable :</li>
                    <div class="code-content">
                        <div class="code-box">
                            <pre><code>$x = "John";
echo $x;</code></pre>
                        </div>
                        <div class="code-output">
                            <pre><?php
                                    $x = "John";
                                    echo $x;
                                    ?>
                </pre>
                        </div>
                    </div>
                </ul>
            </li>

            <li>Integer</li>
            <li>Float (floating point numbers - also called double)</li>
            <li>Boolean</li>
            <li>Array</li>
            <li>Object</li>
            <li>NULL</li>
            <li>Resource</li>
        </ul>

        <p>Assigning the same value to multiple variables in one line: </p>
        <div class="code-content">
            <div class="code-box">
                <pre><code>$x = $y = $z = "Fruit";;
echo $x;
echo $y;
echo $z;</code></pre>
            </div>
            <div class="code-output">
                <pre><?php
                        $x = $y = $z = "Fruit";
                        echo $x;
                        echo $y;
                        echo $z;
                        ?>
                </pre>
            </div>
        </div>

        <p>Get the Type</p>
        <ul>
            <li>The <code class="code-box">var_dump()</code> function returns the data type and the value</li>
        </ul>
        <div class="code-content">
            <div class="code-box">
                <pre><code>$x = 5;
var_dump($x);
var_dump("John");
var_dump(3.14);
var_dump(true);
var_dump([2, 3, 56]);
var_dump(NULL);</code></pre>
            </div>
            <div class="code-output">
                <pre><?php $x = 5;
                        var_dump($x);
                        var_dump("John");
                        var_dump(3.14);
                        var_dump(true);
                        var_dump([2, 3, 56]);
                        var_dump(NULL);
                        ?></pre>
            </div>
        </div>
    </div>

</div>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/js-test/layout/footer.php'); ?>