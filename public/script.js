// --- DOM Elements ---
const navbar = document.getElementById('navbar');
const mobileMenuIcon = document.getElementById('mobile-menu-icon');
const navLinks = document.querySelector('.nav-links');
const yearSpan = document.getElementById('year');
const heroSection = document.querySelector('.hero');
const blogContainer = document.getElementById('blog-container');

// --- Set Current Year ---
yearSpan.textContent = new Date().getFullYear();

// --- Navbar Scroll Effect ---
window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

// --- Mobile Menu Toggle ---
mobileMenuIcon.addEventListener('click', () => {
    mobileMenuIcon.classList.toggle('active');
    navLinks.classList.toggle('active');
});

// Close mobile menu when a link is clicked
document.querySelectorAll('.nav-links li a').forEach(link => {
    link.addEventListener('click', () => {
        mobileMenuIcon.classList.remove('active');
    });
});

// --- Parallax Mouse Move Effect for Hero ---
document.addEventListener('mousemove', (e) => {
    const images = document.querySelectorAll('.parallax-img, .parallax-bg');
    const mouseX = e.clientX / window.innerWidth - 0.5;
    const mouseY = e.clientY / window.innerHeight - 0.5;

    images.forEach(img => {
        const speed = parseFloat(img.getAttribute('data-speed'));
        const x = mouseX * speed * 1000;
        const y = mouseY * speed * 1000;
        img.style.transform = `translate(${x}px, ${y}px)`;
    });
});

// --- Trigger Hero Animation on Load ---
window.addEventListener('DOMContentLoaded', () => {
    setTimeout(() => {
        heroSection.classList.add('active');
    }, 100);
});

// --- Scroll Reveal Animation ---
const revealElements = document.querySelectorAll('.reveal-up, .reveal-left, .reveal-right');

const revealOnScroll = () => {
    const windowHeight = window.innerHeight;
    const revealPoint = 100;
    
    revealElements.forEach(el => {
        const revealTop = el.getBoundingClientRect().top;
        if (revealTop < windowHeight - revealPoint) {
            el.classList.add('active');
        }
    });
};

window.addEventListener('scroll', revealOnScroll);
revealOnScroll(); // Trigger once on load

// Blogs are now rendered dynamically by Laravel Blade templates

// --- Typewriter Effect ---
const typewriterEl = document.getElementById('typewriter');
const typewriterReveal = document.getElementById('typewriter-reveal');
const cursorEl = document.querySelector('.typewriter-cursor');

if (typewriterEl) {
    const textToType = typewriterEl.getAttribute('data-text');
    let i = 0;
    let isTyping = false;

    const typeWriter = () => {
        if (i < textToType.length) {
            typewriterEl.textContent += textToType.charAt(i);
            i++;
            setTimeout(typeWriter, 35); // typing speed
        } else {
            // Finished typing
            if (cursorEl) cursorEl.style.display = 'none'; // hide cursor
            if (typewriterReveal) typewriterReveal.style.opacity = '1'; // fade in gradient text
        }
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !isTyping) {
                isTyping = true;
                // Add a small delay before typing starts so the user sees it happen
                setTimeout(typeWriter, 600);
            }
        });
    }, { threshold: 0.5 });

    observer.observe(typewriterEl);
}

// --- 6-Card Services Carousel ---
const carouselItems = document.querySelectorAll('#services-carousel .carousel-item');
if (carouselItems.length === 6) {
    let currentIndex = 0;

    const updateCarousel = () => {
        carouselItems.forEach(item => {
            item.classList.remove('active-left', 'active-right', 'prev-1', 'prev-2', 'next-1', 'next-2');
        });

        const getIdx = (offset) => (currentIndex + offset) % 6;
        
        carouselItems[getIdx(0)].classList.add('active-left');
        carouselItems[getIdx(1)].classList.add('active-right');
        carouselItems[getIdx(2)].classList.add('next-1');
        carouselItems[getIdx(3)].classList.add('next-2');
        carouselItems[getIdx(4)].classList.add('prev-2');
        carouselItems[getIdx(5)].classList.add('prev-1');
    };

    setInterval(() => {
        currentIndex = (currentIndex + 2) % 6; // Move by 2 to swap the active pair
        updateCarousel();
    }, 3000); // 3.0 seconds

    carouselItems.forEach((item, index) => {
        item.addEventListener('click', () => {
            if (!item.classList.contains('active-left') && !item.classList.contains('active-right')) {
                currentIndex = index; // bring clicked card to front
                updateCarousel();
            }
        });
    });
}

// --- Number Counter Animation ---
const counters = document.querySelectorAll('.counter');
if (counters.length > 0) {
    const animateCounters = () => {
        counters.forEach(counter => {
            counter.innerText = '0';
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                
                // Adjust increment based on target size to finish at roughly the same time
                let inc = target / 40;
                if (inc < 1) inc = 1; // minimum increment
                
                if (count < target) {
                    counter.innerText = Math.ceil(count + inc);
                    setTimeout(updateCount, 40);
                } else {
                    counter.innerText = target;
                }
            };
            updateCount();
        });
    };

    const statsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                setTimeout(animateCounters, 300); // slight delay so the fade-up completes
                statsObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });
    
    const statsContainer = document.querySelector('.hero-stats-right');
    if (statsContainer) {
        statsObserver.observe(statsContainer);
    }
}

