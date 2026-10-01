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
    
    renderBlogs();
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

// --- Blog Data (Add blogs here through code) ---
// Instructions: To add a new blog, simply add a new object to this array.
const blogs = [
    {
        id: 1,
        title: "The Evolving Role of the Modern Estate Manager",
        excerpt: "Discover how the responsibilities of estate managers have shifted from traditional oversight to comprehensive lifestyle management for high-net-worth individuals.",
        date: "Oct 12, 2026",
        category: "Management",
        image: "https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80",
        link: "#"
    },
    {
        id: 2,
        title: "Why Vetting is the Most Crucial Step in Domestic Staffing",
        excerpt: "When your home is your sanctuary, ensuring absolute trust in your staff is paramount. We detail our rigorous multi-stage vetting process.",
        date: "Sep 28, 2026",
        category: "Security & Trust",
        image: "https://images.unsplash.com/photo-1574682737604-85949d1078bf?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80",
        link: "#"
    },
    {
        id: 3,
        title: "Retaining Top Household Talent in a Competitive Market",
        excerpt: "Expert advice on creating a positive working environment, competitive compensation, and clear communication to keep your elite staff long-term.",
        date: "Sep 15, 2026",
        category: "Retention",
        image: "https://images.unsplash.com/photo-1556910103-1c02745aae4d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80",
        link: "#"
    }
];

// --- Render Blogs ---
function renderBlogs() {
    if (!blogContainer) return;
    
    blogContainer.innerHTML = '';
    
    blogs.forEach((blog, index) => {
        const delay = index * 0.2; // Staggered animation delay
        
        const blogHtml = `
            <article class="blog-card reveal-up" style="transition-delay: ${delay}s">
                <div class="blog-img-wrapper">
                    <img src="${blog.image}" alt="${blog.title}" class="blog-img" loading="lazy">
                </div>
                <div class="blog-content">
                    <div class="blog-meta">
                        <span>${blog.category}</span>
                        <span>${blog.date}</span>
                    </div>
                    <h3 class="blog-title">${blog.title}</h3>
                    <p class="blog-excerpt">${blog.excerpt}</p>
                    <a href="${blog.link}" class="read-more">Read Article</a>
                </div>
            </article>
        `;
        
        blogContainer.innerHTML += blogHtml;
    });
}

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
    }, 4500); // 4.5 seconds

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

