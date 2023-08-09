//tailwind configuration
tailwind.config = {
    theme: {
        container: {
            center: true,
        },
    }
}

//menu toggle
function toggleMobileMenu() {
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenu.classList.toggle('hidden');
}
