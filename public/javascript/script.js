// Toggle Navigation Menu for Small Screens

    const menuToggle = document.querySelector('.menu-toggle');
    const navLinks = document.querySelector('.nav-links');

    menuToggle.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });


// JavaScript to trigger the animation
    document.addEventListener('DOMContentLoaded', () => {
        const content = document.querySelector('.content');
        const logos = document.querySelectorAll('.brand-logos img');
    
        // Fade-in effect for text
        content.style.opacity = '0';
        content.style.transform = 'translateY(50px)';
        setTimeout(() => {
            content.style.transition = 'opacity 1s ease, transform 1s ease';
            content.style.opacity = '1';
            content.style.transform = 'translateY(0)';
        }, 500);
    
        // Hover scale effect for logos
        logos.forEach((logo, index) => {
            setTimeout(() => {
                logo.style.transition = 'transform 0.5s ease';
                logo.style.transform = 'scale(1.1)';
                setTimeout(() => {
                    logo.style.transform = 'scale(1)';
                }, 500);
            }, index * 300); // Staggered animation
        });
    });

    

    // JavaScript to trigger the animation
        document.addEventListener('DOMContentLoaded', () => {
            const image = document.querySelector('.image-container img');
            
            // Add the "animate" class to trigger the animation
            setTimeout(() => {
                image.classList.add('animate');
            }, 500); // Delay for a smoother effect
        });




        



    