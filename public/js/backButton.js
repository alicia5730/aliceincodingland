document.addEventListener('DOMContentLoaded', () => {
    const back = document.querySelector('.back-btn');

    back.addEventListener('click', (e) => {
        e.preventDefault();

        if (window.parent !== window) {
            // Inside iframe → close overlay
            const btn = window.parent.document.getElementById('backButton');
            btn.click();
        } else {
            // Opened normally → go to homepage
            window.location.href = 'Homepage.html';
        }
    });
});
