// Navbar scroll effect
window.addEventListener('scroll', function() {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

// Auto-hide flash messages
setTimeout(function() {
    const flashMessages = document.querySelector('.flash-messages');
    if (flashMessages) {
        flashMessages.style.animation = 'slideOutRight 0.5s ease';
        setTimeout(() => flashMessages.remove(), 500);
    }
}, 5000);
