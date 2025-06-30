window.addEventListener('load', function () {
    const preloader = document.getElementById('preloader');
    const mainContent = document.getElementById('mainContent');

    setTimeout(function () {
        preloader.classList.add('fade-out');
        setTimeout(function () {
            preloader.style.display = 'none';
            mainContent.classList.add('show');
        }, 500);
    }, 3000);
});