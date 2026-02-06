document.addEventListener('DOMContentLoaded', function() {
    const characters = document.querySelectorAll('.chars');
    const infoFrame  = document.getElementById('infoFrame');
    const backButton = document.getElementById('backButton');
    const overlay    = document.getElementById('overlay');
    const mainMenu   = document.getElementById('main-menu');

    if (!characters.length) return;

    // Helper: true on phones / small screens
    const isSmallScreen = () => window.matchMedia('(max-width: 768px)').matches;

    // When you click a character
    characters.forEach(character => {
        character.addEventListener('click', function() {
            const pageUrl = this.getAttribute('data-url');
            if (!pageUrl) return;

            // 📱 On small screens: go to the page directly (no iframe)
            if (isSmallScreen()) {
                window.location.href = pageUrl;
                return;
            }

            // 💻 On bigger screens: open the popup with iframe
            if (infoFrame && overlay && mainMenu) {
                infoFrame.src = pageUrl;
                infoFrame.classList.add('active');
                overlay.style.display = 'flex';
                mainMenu.classList.add('shrink');
                // backButton can stay visually hidden – inner pages call it
            }
        });
    });

    // Close popup when the hidden backButton is clicked (from inner pages)
    if (backButton && infoFrame && overlay && mainMenu) {
        backButton.addEventListener('click', function() {
            infoFrame.classList.remove('active');
            infoFrame.src = '';
            overlay.style.display = 'none';
            mainMenu.classList.remove('shrink');
        });
    }
});
