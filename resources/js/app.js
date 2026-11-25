const root = document.documentElement;
const themeToggle = document.querySelector('[data-theme-toggle]');
const menuToggle = document.querySelector('[data-menu-toggle]');
const mobileMenu = document.querySelector('[data-mobile-menu]');

themeToggle?.addEventListener('click', () => {
    const isDark = root.classList.toggle('dark');
    localStorage.theme = isDark ? 'dark' : 'light';
});

menuToggle?.addEventListener('click', () => {
    const isOpen = !mobileMenu.classList.contains('hidden');
    mobileMenu.classList.toggle('hidden', isOpen);
    menuToggle.setAttribute('aria-expanded', String(!isOpen));
    menuToggle.querySelector('[data-menu-open]').classList.toggle('hidden', !isOpen);
    menuToggle.querySelector('[data-menu-close]').classList.toggle('hidden', isOpen);
});

document.querySelectorAll('[data-mobile-menu] a').forEach((link) => {
    link.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
        menuToggle?.setAttribute('aria-expanded', 'false');
        menuToggle?.querySelector('[data-menu-open]')?.classList.remove('hidden');
        menuToggle?.querySelector('[data-menu-close]')?.classList.add('hidden');
    });
});
