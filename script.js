//tailwind configuration
tailwind.config = {
    theme: {
        container: {
            center: true,
        },
    }
}

// Hotjar Tracking Code for https://www.masharket.com/
(function(h,o,t,j,a,r){
    h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
    h._hjSettings={hjid:3657628,hjsv:6};
    a=o.getElementsByTagName('head')[0];
    r=o.createElement('script');r.async=1;
    r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
    a.appendChild(r);
})(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');

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

