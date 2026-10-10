<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Solitaire Consultancy</title>
    <meta name="description" content="Learn about Solitaire Consultancy, Mumbai's premier domestic staffing agency dedicated to providing elite household professionals and personalized service.">
    <meta name="keywords" content="about Solitaire Consultancy, premium staffing agency Mumbai, luxury domestic staff India, elite household recruitment">
    <link rel="canonical" href="{{ url()->current() }}">
    
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="About Us | Solitaire Consultancy">
    <meta property="og:description" content="Learn about Solitaire Consultancy, Mumbai's premier domestic staffing agency dedicated to providing elite household professionals and personalized service.">
    <meta property="og:image" content="{{ asset('solitaire-logo.png') }}">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="About Us | Solitaire Consultancy">
    <meta property="twitter:description" content="Learn about Solitaire Consultancy, Mumbai's premier domestic staffing agency dedicated to providing elite household professionals and personalized service.">
    <meta property="twitter:image" content="{{ asset('solitaire-logo.png') }}">
    
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

    <!-- Team Section -->
    <section class="team-section" style="background-color: var(--clr-bg-primary);">
        <div class="container">
            <div class="section-header text-center reveal-up">
                <h4 class="section-subtitle">The Faces Behind</h4>
                <h2 class="section-title text-white">Our Team</h2>
                <div class="accent-line mx-auto mt-6" style="margin: 20px auto;"></div>
            </div>
            
            <div class="team-grid mt-10">
                <!-- Static Team Member -->
                <div class="team-card reveal-up">
                    <div class="team-img-wrapper">
                        <!-- Placeholder image, user will provide actual details later -->
                        <img src="https://ui-avatars.com/api/?name=John+Doe&background=2980b9&color=fff&size=500" alt="John Doe" class="team-img">
                        <div class="team-socials">
                            <a href="#" aria-label="LinkedIn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16"><path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/></svg>
                            </a>
                            <a href="#" aria-label="Twitter">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16"><path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/></svg>
                            </a>
                        </div>
                    </div>
                    <div class="team-content">
                        <h3 class="team-name">John Doe</h3>
                        <span class="team-designation">Founder & Director</span>
                        <p class="team-desc">John brings visionary leadership and years of expertise in the premium domestic staffing industry, ensuring impeccable service delivery for all our clients.</p>
                    </div>
                </div>
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
