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

// Function to check if an element is in view
function isElementInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Function to check if an element is in view
function isElementInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Function to handle animation on scroll
function handleAnimation() {
    const elements = document.querySelectorAll('.animate-on-scroll');
    elements.forEach(element => {
        if (isElementInViewport(element)) {
            const animationType = element.getAttribute('data-animation');
            element.classList.add(animationType);
        }
    });
}

// Attach event listener to window scroll event
window.addEventListener('scroll', handleAnimation);

// collapsible section
document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.collapsible-button');
    const contents = document.querySelectorAll('.collapsible-content');

    buttons.forEach((button, index) => {
        button.addEventListener('click', () => {
            const isOpen = contents[index].classList.toggle('hidden');
            // Push down other open sections
            if (isOpen) {
                contents.forEach((content, i) => {
                    if (i !== index && !content.classList.contains('hidden')) {
                        content.style.transform = 'translateY(100%)';
                        content.style.opacity = '0';
                    }
                });
            } else {
                // If closing, remove push-down for all
                contents.forEach((content) => {
                    content.style.transform = '';
                    content.style.opacity = '';
                });
            }

            // Close other collapsible sections
            contents.forEach((content, i) => {
                if (i !== index) {
                    content.classList.add('hidden');
                }
            });

        });
    });
});

// Function to show the content and hide the loader
function showContent() {
    document.getElementById('loader').style.display = 'none';
    document.getElementById('content').style.display = 'block';
}

// Function to show the "Amend your Registration" content
function showAmendContent() {
    document.getElementById('content').style.display = 'none';
    document.getElementById('amendContent').style.display = 'block';
}

// Hide the content and amendContent initially
document.getElementById('content').style.display = 'none';
document.getElementById('amendContent').style.display = 'none';

// Show the content after 3 seconds
setTimeout(showContent, 3000); // 3000 milliseconds = 3 seconds

// Show the "Amend your Registration" content when the button is clicked
document.getElementById('amendButton').addEventListener('click', showAmendContent);