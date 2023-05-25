    const mobileMenuButton = document.getElementById('mobileMenuButton');
    const mobileNav = document.getElementById('mobileNav');
    const mobileCloseButton = document.getElementById('mobileCloseButton');

    mobileMenuButton.addEventListener('click', () => {
        mobileNav.classList.add('open');
    });

    mobileCloseButton.addEventListener('click', () => {
        mobileNav.style.transform = 'translateY(100%)';

        // Delay hiding the mobile navigation menu to allow the slide-down animation to play
        setTimeout(() => {
            mobileNav.style.display = 'none';
        }, 300);
    });