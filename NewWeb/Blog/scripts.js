// scripts.js
const { JSDOM } = require('jsdom');

const { document } = (new JSDOM(`...`)).window;
document.addEventListener('DOMContentLoaded', function() {
    // Simulate fetching posts from an API

    const posts = [
        { id: 1, title: 'Post One', body: 'This is the body for post one' },
        { id: 2, title: 'Post Two', body: 'This is the body for post two' },
        // ... add more posts here
    ];

    const postsContainer = document.getElementById('home');
    posts.forEach(post => {
        const postElement = document.createElement('div');
        postElement.innerHTML = `
            <h2>${post.title}</h2>
            <p>${post.body}</p>
        `;
        postsContainer.appendChild(postElement);
    });

    // Search functionality
    const searchBox = document.getElementById('searchBox');
    searchBox.addEventListener('input', function(e) {
        const term = e.target.value.toLowerCase();
        const posts = document.querySelectorAll('main > div');
        posts.forEach(post => {
            const title = post.querySelector('h2').textContent.toLowerCase();
            post.style.display = title.includes(term) ? 'block' : 'none';
        });
    });

    // Modal functionality
    const modal = document.getElementById('myModal');
    const span = document.getElementsByClassName('close')[0];
    span.onclick = function() {
        modal.style.display = 'none';
    }
    window.onclick = function(event) {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    }
});

//---------slider----------

document.getElementById('camera').addEventListener('mouseover', function() {
    this.style.backgroundColor = 'yellow'; // Flash effect
});

document.getElementById('camera').addEventListener('mouseout', function() {
    this.style.backgroundColor = 'black';
});
