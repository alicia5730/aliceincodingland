document.addEventListener('DOMContentLoaded', function() {
    const characters = document.querySelectorAll('.chars');
    const infoFrame = document.getElementById('infoFrame');
    const backButton = document.getElementById('backButton');
    const overlay = document.getElementById('overlay');
    const mainMenu = document.getElementById('main-menu');

    // Attach click event listeners to characters for iframe functionality
    characters.forEach(character => {
        character.addEventListener('click', function() {
            const pageUrl = this.getAttribute('data-url');
            infoFrame.src = pageUrl;
            infoFrame.classList.add('active');
            backButton.style.display = 'block';
            overlay.style.display = 'flex';
            mainMenu.classList.add('shrink');
        });
    });

    // Handle back button click
    backButton.addEventListener('click', function() {
        infoFrame.classList.remove('active');
        infoFrame.src = '';
        this.style.display = 'none';
        overlay.style.display = 'none';
        mainMenu.classList.remove('shrink');
    });
});
