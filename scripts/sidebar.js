// sidebar.js
document.querySelectorAll('.accordion-toggle').forEach(toggle => {
    toggle.addEventListener('click', function () {
        const submenu = this.nextElementSibling;
        submenu.classList.toggle('show');
    });
});