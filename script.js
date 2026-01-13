document.addEventListener('DOMContentLoaded', () => {
    // Select DOM elements
    const mobileBtn = document.querySelector('.mobile-menu-btn');
    const closeBtn = document.querySelector('.close-menu-btn');
    const mobileDrawer = document.querySelector('.mobile-nav-drawer');
    const mobileOverlay = document.querySelector('.mobile-nav-overlay');

    // Functions to toggle menu
    const openMenu = () => {
        mobileDrawer.classList.add('active');
        mobileOverlay.classList.add('active');
        document.body.style.overflow = 'hidden'; // Prevent scrolling
    };

    const closeMenu = () => {
        mobileDrawer.classList.remove('active');
        mobileOverlay.classList.remove('active');
        document.body.style.overflow = ''; // Restore scrolling
    };

    // Event Listeners
    if (mobileBtn) {
        mobileBtn.addEventListener('click', openMenu);
    }

    if (closeBtn) {
        closeBtn.addEventListener('click', closeMenu);
    }

    if (mobileOverlay) {
        mobileOverlay.addEventListener('click', closeMenu);
    }

    // Close menu on Escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && mobileDrawer.classList.contains('active')) {
            closeMenu();
        }
    });

    // Dynamic Current Year
    const yearSpan = document.getElementById('year');
    if (yearSpan) {
        yearSpan.textContent = new Date().getFullYear();
    }
});
