// Define the smoke particle class
class SmokeParticle {
    constructor(x, y) {
        this.x = x;
        this.y = y;
        this.size = Math.random() * 5 + 1;
        this.speedY = Math.random() * 1 - 0.5;
        this.color = 'rgba(200, 200, 200,'; // Semi-transparent grey
    }

    // Update the particle properties
    update() {
        this.y -= 0.5; // Moves the smoke up
        this.size += 0.1; // Gradually increases the size
    }

    // Draw the particle
    draw(ctx) {
        ctx.fillStyle = this.color + (1 - this.size / 25) + ')';
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2, false);
        ctx.fill();
    }
}

let particles = [];

function initParticles() {
    for (let i = 0; i < 10; i++) { // Initialize 10 smoke particles
        particles.push(new SmokeParticle(150, 300)); // Assuming the smoke originates from (150, 300)
    }
}

function drawSmoke() {
    ctx.clearRect(0, 0, canvas.width, canvas.height); // Clear the canvas
    for (let i = 0; i < particles.length; i++) {
        particles[i].update(); // Update each particle's properties
        particles[i].draw(ctx); // Draw each particle
        if (particles[i].size >= 25) {
            // Reset particle when it grows too large
            particles[i] = new SmokeParticle(150, 300);
        }
    }
}

// Canvas setup
const canvas = document.getElementById('smokeCanvas');
const ctx = canvas.getContext('2d');
canvas.width = 300;
canvas.height = 300;
// glitter for background


//zoom in start screen
document.getElementById('welcome').addEventListener('click', function(event) {
    event.preventDefault();
    const button = event.target;
    button.classList.add('zoom-in');
    setTimeout(() => {
        window.location.href = 'Homepage.html';
    }, 500); // Duration should match the CSS transition duration
});
document.addEventListener('DOMContentLoaded', function() {
    const welcomeButton = document.getElementById('welcome');
    const keyholeOverlay = document.getElementById('keyhole-overlay');
    const glitterOverlay = document.getElementById('glitter-overlay');

    welcomeButton.addEventListener('click', function() {
        keyholeOverlay.classList.add('show');
        glitterOverlay.classList.add('show');
        createGlitterEffect();
        setTimeout(() => {
            window.location.href = 'Homepage.html'; // Redirect to the homepage after the animation
        }, 10000); // Match the timeout duration to the new animation duration
    });

    function createGlitterEffect() {
        for (let i = 0; i < 100; i++) {
            const glitter = document.createElement('div');
            glitter.classList.add('glitter');
            glitter.style.left = `${Math.random() * 100}%`;
            glitter.style.top = `${Math.random() * 100}%`;
            glitterOverlay.appendChild(glitter);
        }
    }
});
