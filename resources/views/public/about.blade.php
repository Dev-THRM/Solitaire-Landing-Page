<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Solitaire Consultancy</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body style="background-color: var(--clr-bg-primary);">
    <!-- Navbar -->
    <nav id="navbar" class="navbar" style="background: rgba(10, 10, 15, 0.95);">
        <div class="nav-container">
            <div class="logo">
                <a href="/"><img src="{{ asset('solitaire-logo.png') }}" alt="Solitaire Consultancy" class="logo-img"></a>
            </div>
            <ul class="nav-links">
                <li><a href="/">Home</a></li>
                <li><a href="/#about">About</a></li>
                <li class="dropdown">
                    <a href="/#services">Services ▾</a>
                    <ul class="dropdown-menu">
                        <li><a href="/services/house-manager">House Manager & Estate Managers</a></li>
                        <li><a href="/services/executive-assistant">Executive & Personal Assistants</a></li>
                        <li><a href="/services/chef">Private Chefs & Cooks</a></li>
                        <li><a href="/services/personal-butler">Personal Butlers</a></li>
                        <li><a href="/services/chauffeur">Chauffeurs & Drivers</a></li>
                        <li><a href="/services/nanny">Nannies & Babysitters</a></li>
                    </ul>
                </li>
                <li><a href="/blogs">Blogs</a></li>
                <li><a href="/jobs">Jobs</a></li>
                <li><a href="/contact" class="btn-primary">Contact Us</a></li>
            </ul>
            <div class="mobile-menu-icon" id="mobile-menu-icon">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        </div>
    </nav>

    <!-- About Content Section -->
    <section class="dark-section" style="padding-top: 180px; min-height: 80vh; background-color: var(--clr-bg-secondary);">
        <div class="container" style="padding-bottom: 80px;">
            <div class="section-header text-center reveal-up">
                <h4 class="section-subtitle">Our Story</h4>
                <h2 class="section-title text-white">About Us</h2>
                <div class="accent-line mx-auto mt-6" style="margin: 20px auto;"></div>
            </div>
            
            <div class="reveal-up" style="color: var(--clr-text-main); font-size: 1.1rem; line-height: 1.8; margin-top: 40px; font-family: var(--font-body);">
                <p style="margin-bottom: 15px;">
                    <strong style="color: var(--clr-white); font-size: 1.25rem;">Solitaire Consultancy isn’t just filling positions, it delivers premium staffing and the perfect match.</strong>
                </p>
                <p style="margin-bottom: 15px;">
                    Solitaire Consultancy didn’t begin in a boardroom. Rather, it all started with a conversation,a spark between two sharp minds. In 2014, a seemingly simple request from a wealthy client revealed a clear need: luxury domestic staffing in Mumbai. 
                </p>
                <p style="margin-bottom: 15px;">
                    As a result, our founders immediately recognized a major gap in the premium staffing market. Fueled by a shared vision and an unwavering commitment to quality, they set out not only to fill this gap but to redefine the world of elite staffing.
                </p>
                <p style="margin-bottom: 15px;">
                    At Solitaire Consultancy, every placement is much more than just a service, it’s a bespoke experience. Indeed, we understand that your household is not merely a living space, but a reflection of your unique lifestyle. Consequently, we ensure that every personal assistant, nanny, or domestic professional is carefully and meticulously selected, ensuring they are perfectly matched to seamlessly integrate into your world.
                </p>
                <p style="margin-bottom: 15px;">
                    Furthermore, we strongly believe in the importance of building lasting relationships, which are always founded on trust, discretion, and excellence. Therefore, our rigorous selection process, combined with continuous, ongoing training, guarantees that every professional we place consistently upholds the highest standards.
                </p>
                <p style="margin-bottom: 15px;">
                    What initially began as a simple request has, over time, evolved into a distinguished and respected name in premium staffing and elite household recruitment. By not only recognizing specific client needs but also fostering strong relationships and consistently delivering unparalleled service, Solitaire Consultancy has firmly established itself as the invisible hand that refines and elevates your lifestyle,one perfect placement at a time.
                </p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <h3>Solitaire <span>Consultancy</span></h3>
                    <p>Bringing a touch of brilliance into the lives of our discerning clients across Mumbai and beyond.</p>
                </div>
                <div class="footer-links">
                    <h4>Quick Links</h4>
                    <ul>
                         <li><a href="/#about">About Us</a></li>
                        <li><a href="/#services">Our Services</a></li>
                        <li><a href="/blogs">Blogs</a></li>
                        <li><a href="/jobs">Jobs</a></li>
                    </ul>
                </div>
                <div class="footer-contact">
                    <h4>Contact Us</h4>
                    <p>Email: info@solitaireconsultancyservices.com</p>
                    <p>Phone: +91 90044 39392</p>
                    <p>Mumbai, Maharashtra, India</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <span id="year"></span> Solitaire Consultancy Services. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <script src="{{ asset('script.js') }}"></script>
</body>
</html>
