<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Luxury Services | Solitaire Consultancy</title>
    <meta name="description" content="Explore luxury household and executive staffing services by Solitaire Consultancy in Mumbai. Hire house managers, private chefs, personal butlers, executive assistants, chauffeurs, and nannies.">
    <meta name="keywords" content="domestic staffing services Mumbai, luxury house manager, private chef Mumbai, personal butler India, executive assistant recruitment, chauffeur services, vetted nannies">
    <link rel="canonical" href="{{ url()->current() }}">
    
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Our Luxury Services | Solitaire Consultancy">
    <meta property="og:description" content="Explore luxury household and executive staffing services by Solitaire Consultancy in Mumbai.">
    <meta property="og:image" content="{{ asset('solitaire-logo.png') }}">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="Our Luxury Services | Solitaire Consultancy">
    <meta property="twitter:description" content="Explore luxury household and executive staffing services by Solitaire Consultancy in Mumbai.">
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
                    <a href="/services" class="active" style="color: var(--clr-accent-blue);">Services ▾</a>
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

    <!-- Services Hero Section -->
    <section class="services-hero-section">
        <div class="container text-center">
            <div class="services-breadcrumb reveal-up">
                <a href="/">Home</a>
                <span>/</span>
                <span style="color: #fff;">Services</span>
            </div>
            
            <div class="reveal-up delay-1">
                <span class="services-badge">Bespoke Personnel Solutions</span>
                <h1 class="section-title text-white" style="font-size: clamp(2.5rem, 5vw, 4rem); margin-bottom: 1.2rem;">Our Luxury Services</h1>
                <p class="subtitle-text" style="max-width: 780px; margin: 0 auto; color: var(--clr-text-muted); font-size: 1.15rem; line-height: 1.8;">
                    Solitaire Consultancy is Mumbai's premier domestic and executive staffing agency. We connect high-net-worth families, dignitaries, and executives with rigorously vetted professionals tailored to an effortless, refined lifestyle.
                </p>
                <div class="accent-line mx-auto" style="margin: 25px auto;"></div>
            </div>
        </div>
    </section>

    <!-- Services Grid Section -->
    <section class="services-grid-section">
        <div class="container">
            <div class="section-header text-center reveal-up" style="margin-bottom: 3.5rem;">
                <h4 class="section-subtitle">Excellence in Every Role</h4>
                <h2 class="section-title text-white">Elite Household & Executive Solutions</h2>
                <p style="max-width: 650px; margin: 0 auto; color: var(--clr-text-muted); font-size: 1rem;">
                    Select any service below to explore candidate profiles, specific responsibilities, and how we curate the ideal match for your private residence.
                </p>
            </div>

            <div class="services-cards-grid">
                @foreach ($services as $slug => $item)
                    <a href="/services/{{ $slug }}" class="service-card-item reveal-up">
                        <div class="service-card-image-wrap">
                            <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" loading="lazy">
                            <div class="service-card-image-overlay"></div>
                            <span class="service-card-tag">{{ $item['category'] ?? 'Luxury Staffing' }}</span>
                        </div>
                        <div class="service-card-body">
                            <h3 class="service-card-title">{{ $item['title'] }}</h3>
                            <div class="service-card-subtitle">{{ $item['subtitle'] }}</div>
                            <p class="service-card-desc">{{ $item['short_description'] }}</p>
                            
                            @if (!empty($item['highlights']))
                                <ul class="service-card-highlights">
                                    @foreach (array_slice($item['highlights'], 0, 3) as $highlight)
                                        <li>{{ $highlight }}</li>
                                    @endforeach
                                </ul>
                            @endif

                            <div class="service-card-action">
                                <span>Discover Service</span>
                                <span>&rarr;</span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

            <!-- CTA Banner -->
            <div class="services-cta-banner reveal-up">
                <span class="services-badge">Confidential Consultations</span>
                <h2 class="text-white" style="font-size: 2.2rem; margin-bottom: 1rem;">Looking for Bespoke Domestic or Executive Staff?</h2>
                <p style="max-width: 700px; margin: 0 auto 2rem; color: var(--clr-text-muted); font-size: 1.05rem; line-height: 1.8;">
                    Every private household is unique. Speak directly with our senior staffing directors to evaluate your requirements and receive hand-picked candidate profiles.
                </p>
                <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                    <a href="/contact" class="btn-primary">Schedule Consultation</a>
                    <a href="tel:+919004439392" class="btn-secondary" style="border: 1px solid rgba(255,255,255,0.2); color: #fff;">Call +91 90044 39392</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Placement Process Section -->
    <section class="service-process-section">
        <div class="container">
            <div class="section-header text-center reveal-up">
                <h4 class="section-subtitle">The Solitaire Standard</h4>
                <h2 class="section-title text-white">Our 4-Stage Placement Process</h2>
                <div class="accent-line mx-auto" style="margin: 20px auto;"></div>
            </div>

            <div class="process-grid">
                <div class="process-step-card reveal-up">
                    <div class="process-num">01</div>
                    <h3>Bespoke Consultation</h3>
                    <p>We analyze your household cadence, cultural preferences, privacy parameters, and specific role requirements in depth.</p>
                </div>
                <div class="process-step-card reveal-up delay-1">
                    <div class="process-num">02</div>
                    <h3>Rigorous Vetting</h3>
                    <p>Every candidate undergoes complete background audits, verified employment references, skill assessments, and strict background checks.</p>
                </div>
                <div class="process-step-card reveal-up delay-2">
                    <div class="process-num">03</div>
                    <h3>Private Interview & Trial</h3>
                    <p>We present a curated shortlist of top candidates and coordinate private interviews and residential trial periods with absolute discretion.</p>
                </div>
                <div class="process-step-card reveal-up delay-3">
                    <div class="process-num">04</div>
                    <h3>Seamless Onboarding</h3>
                    <p>We guide formal contracts, staff orientation, and offer ongoing check-ins with our dedicated placement guarantee.</p>
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
                        <li><a href="/services">Our Services</a></li>
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
