import './bootstrap';
document.addEventListener('DOMContentLoaded', function() {
    const btn = document.getElementById('mobile-menu-button');
    const menu = document.getElementById('mobile-menu');

    if(btn && menu) {
        btn.addEventListener('click', function() {
            menu.classList.toggle('hidden');
        });
    }
});
function updateBackground() {
    const body = document.body;
    const w = window.innerWidth;

    const mobile = body.dataset.backgroundMobile;
    const tablet = body.dataset.backgroundTablet;
    const desktop = body.style.backgroundImage.match(/url\((.*)\)/)[1];

    if (w < 768 && mobile) {
        body.style.backgroundImage = `url(${mobile})`;
    } else if (w < 1024 && tablet) {
        body.style.backgroundImage = `url(${tablet})`;
    } else {
        body.style.backgroundImage = `url(${desktop})`;
    }
}

window.addEventListener('resize', updateBackground);
document.addEventListener('DOMContentLoaded', updateBackground);
