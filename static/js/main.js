//document.addEventListener('touchstart', onTouchStart, {passive: true});
const mobileNav = () => {
    const tag = document.getElementById('nav-mobile');
    tag.classList.toggle('nav-mobile-hidden');
}

const closeModal = (name) => {
    const ref = document.getElementById(name);
    ref.classList.add('hidden');
    document.body.classList.toggle('modal-on');
}

const openModal = (name) => {
    const ref = document.getElementById(name);
    ref.classList.remove('hidden');
    document.body.classList.toggle('modal-on');
}

const theme = () => {
    document.body.classList.toggle('theme-dark');
    localStorage.setItem('theme', document.body.classList.value);
    if (document.body.classList.value === 'theme-dark') {

    }
}

const init = () => {
    const theme = localStorage.getItem('theme');
    if (theme === 'theme-dark') {
        document.body.classList.add('theme-dark');
    }
} 


init();