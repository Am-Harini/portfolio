document.addEventListener('DOMContentLoaded', () => {
    const nav = document.querySelector('.navbar');
    window.addEventListener('scroll', () => {
        nav.classList.toggle('shadow', window.scrollY > 30);
    });

    document.querySelectorAll('.navbar .nav-link').forEach(link => {
        link.addEventListener('click', () => {
            const menu = document.querySelector('.navbar-collapse');
            if (menu.classList.contains('show')) {
                bootstrap.Collapse.getOrCreateInstance(menu).hide();
            }
        });
    });
});