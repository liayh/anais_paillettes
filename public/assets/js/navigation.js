const menuButton = document.querySelector('.menu-toggle');
const navigation = document.querySelector('#main-navigation');
const mobile = window.matchMedia('(max-width: 980px)');
const submenuButtons = [...document.querySelectorAll('.submenu-toggle')];
function closeSubmenus() {
    submenuButtons.forEach(button => {
        button.setAttribute('aria-expanded', 'false');
        document.getElementById(button.getAttribute('aria-controls')).hidden = true;
    });
}
function resetMenu() {
    menuButton.hidden = !mobile.matches;
    menuButton.setAttribute('aria-expanded', 'false');
    navigation.hidden = mobile.matches;
    closeSubmenus();
}
menuButton.addEventListener('click', () => {
    const open = menuButton.getAttribute('aria-expanded') !== 'true';
    menuButton.setAttribute('aria-expanded', String(open));
    navigation.hidden = !open;
});
submenuButtons.forEach(button => {
    button.addEventListener('click', () => {
        const open = button.getAttribute('aria-expanded') !== 'true';
        closeSubmenus();
        button.setAttribute('aria-expanded', String(open));
        document.getElementById(button.getAttribute('aria-controls')).hidden = !open;
    });
});
document.addEventListener('click', event => {
    if (!event.target.closest('.nav-item')) closeSubmenus();
});
document.addEventListener('keydown', event => {
    if (event.key !== 'Escape') return;
    const openButton = submenuButtons.find(button => button.getAttribute('aria-expanded') === 'true');
    closeSubmenus();
    if (openButton) openButton.focus();
    else if (mobile.matches && !navigation.hidden) {
        resetMenu();
        menuButton.focus();
    }
});
mobile.addEventListener('change', resetMenu);
resetMenu();
