<div class="sidebar">
    <h2 class="sidebar-title">PHP Tutorial</h2>
    <ul class="sidebar-nav">
        <li><a class="<?= ($page == 'php') ? 'active' : '' ?>" href="/js-test/phptutorial/phptutorial.php">PHP Tutorial 1</a></li>
        <!-- <li><a class="<?= ($page == 'php2') ? 'active' : '' ?>" href="/js-test/phptutorial/phptutorial2.php">PHP Tutorial 2</a></li>
        <li><a class="<?= ($page == 'php2-1') ? 'active' : '' ?>" href="/js-test/phptutorial/phptutorial2-1.php">PHP Tutorial 2.1</a></li> -->
        <li>
            <a href="#" onclick="event.preventDefault();" class="accordion-toggle <?= ($page == 'php2' || $page == 'php2-1') ? 'active' : '' ?>">PHP Tutorial 2</a>
            <ul class="submenu <?= ($page == 'php2' || $page == 'php2-1') ? 'show' : '' ?>">
                <a class="<?= ($page == 'php2') ? 'active' : '' ?>" href="/js-test/phptutorial/phptutorial2.php">PHP Tutorial 2</a>
                <a class="<?= ($page == 'php2-1') ? 'active' : '' ?>" href="/js-test/phptutorial/phptutorial2-1.php">PHP Tutorial 2.1</a>
            </ul>
        </li>
    </ul>
</div>