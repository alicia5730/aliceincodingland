document.addEventListener('DOMContentLoaded', function() {
    const body = document.body;
    const teacupImages = [
        '../img/teacup1.png', // Update with the correct path to your image
        '../img/teacup2.png'  // Update with the correct path to your image
    ];
    const minDistance = 250; // Minimum distance between teacups
    const maxTeacups = 10; // Maximum number of teacups for simplicity

    function getRandomPosition() {
        return {
            x: Math.random() * window.innerWidth,
            y: Math.random() * window.innerHeight
        };
    }

    function isTooClose(newPos, existingPositions) {
        for (let pos of existingPositions) {
            const distance = Math.sqrt(Math.pow(newPos.x - pos.x, 2) + Math.pow(newPos.y - pos.y, 2));
            if (distance < minDistance) {
                return true;
            }
        }
        return false;
    }

    function createTeacup(src, existingPositions) {
        const teacup = document.createElement('img');
        teacup.src = src;
        teacup.classList.add('teacup');

        let position;
        do {
            position = getRandomPosition();
        } while (isTooClose(position, existingPositions));

        teacup.style.left = `${position.x}px`;
        teacup.style.top = `${position.y}px`;
        teacup.style.animationDelay = Math.random() * 5 + 's';

        existingPositions.push(position);

        return teacup;
    }

    function loadTeacups() {
        const positions = [];
        teacupImages.forEach(src => {
            for (let i = 0; i < maxTeacups; i++) {
                const teacup = createTeacup(src, positions);
                body.appendChild(teacup);
            }
        });
    }

    loadTeacups();
});
