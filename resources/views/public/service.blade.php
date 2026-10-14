<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $service['title'] }} | Solitaire Consultancy</title>
    <meta name="description" content="{{ Str::limit($service['description'], 150) }}">
    <meta name="keywords" content="{{ strtolower($service['title']) }}, hire domestic staff, luxury staffing agency Mumbai, Solitaire Consultancy services">
    <link rel="canonical" href="{{ url()->current() }}">
    
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $service['title'] }} | Solitaire Consultancy">
    <meta property="og:description" content="{{ Str::limit($service['description'], 150) }}">
    <meta property="og:image" content="{{ $service['image'] }}">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="{{ $service['title'] }} | Solitaire Consultancy">
    <meta property="twitter:description" content="{{ Str::limit($service['description'], 150) }}">
    <meta property="twitter:image" content="{{ $service['image'] }}">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <style>
        .service-hero {
            position: relative;
            min-height: 50vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 140px 0 60px;
            background-color: var(--clr-bg-primary);
        }
        .service-image {
            width: 100%;
            height: 440px;
            object-fit: cover;
            border-radius: 12px;
            margin-bottom: 40px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.4);
            border: 1px solid rgba(255,255,255,0.08);
        }
        .service-nav-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            flex-wrap: wrap;
            gap: 15px;
        }
        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--clr-accent-blue);
            font-size: 0.95rem;
            font-weight: 500;
            transition: var(--transition-smooth);
        }
        .back-link:hover {
            color: #fff;
            transform: translateX(-4px);
        }
        .service-highlights-box {
            background: var(--clr-bg-secondary);
            border: 1px solid rgba(255, 255, 255, 0.06);
            border-radius: 10px;
            padding: 2rem;
            margin: 2.5rem 0;
        }
        .service-highlights-box h3 {
            font-size: 1.25rem;
            color: var(--clr-white);
            margin-bottom: 1.25rem;
        }
        .service-highlights-box ul {
            list-style: none;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
        }
        .service-highlights-box li {
            position: relative;
            padding-left: 24px;
            color: #d1d5db;
            font-size: 0.98rem;
            line-height: 1.5;
        }
        .service-highlights-box li::before {
            content: "✦";
            position: absolute;
            left: 0;
            color: var(--clr-accent-blue);
        }
        .other-services-section {
            padding: 80px 0;
            background: var(--clr-bg-secondary);
            border-top: 1px solid rgba(255, 255, 255, 0.05);
        }
        @media (max-width: 768px) {
            .service-highlights-box ul {
                grid-template-columns: 1fr;
            }
            .service-image {
                height: 280px;
            }
        }
    </style>
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
                    <a href="/services" style="color: var(--clr-accent-blue);">Services ▾</a>
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

    <!-- Service Content Section -->
    <section class="service-hero dark-section">
        <div class="container" style="max-width: 950px; padding-bottom: 80px;">
            <div class="service-nav-bar reveal-up">
                <a href="/services" class="back-link">&larr; Back to All Services</a>
                <div class="services-breadcrumb" style="margin-bottom: 0;">
                    <a href="/">Home</a>
                    <span>/</span>
                    <a href="/services">Services</a>
                    <span>/</span>
                    <span style="color: #fff;">{{ $service['title'] }}</span>
                </div>
            </div>

            <div class="section-header text-center reveal-up" style="margin-top: 15px;">
                <h4 class="section-subtitle">{{ $service['category'] ?? 'Premium Staffing Services' }}</h4>
                <h1 class="section-title text-white" style="font-size: clamp(2.2rem, 4vw, 3.2rem);">{{ $service['title'] }}</h1>
                <p class="subtitle-text" style="color: #bbb; font-size: 1.2rem; margin-top: 15px;">{{ $service['subtitle'] }}</p>
                <div class="accent-line mx-auto mt-6" style="margin: 25px auto;"></div>
            </div>
            
            <div class="reveal-up delay-1">
                <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}" class="service-image">
            </div>

            <div class="reveal-up delay-2" style="color: var(--clr-text-main); font-size: 1.15rem; line-height: 1.9; font-family: var(--font-body);">
                <p style="margin-bottom: 25px;">
                    {{ $service['description'] }}
                </p>

                @if (!empty($service['highlights']))
                    <div class="service-highlights-box">
                        <h3>Key Candidate Capabilities & Responsibilities</h3>
                        <ul>
                            @foreach ($service['highlights'] as $highlight)
                                <li>{{ $highlight }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="services-cta-banner" style="margin-top: 40px; text-align: center;">
                    <h3 class="text-white" style="font-size: 1.8rem; margin-bottom: 12px;">Hire a Vetted {{ $service['title'] }}</h3>
                    <p style="max-width: 600px; margin: 0 auto 25px; color: var(--clr-text-muted); font-size: 1rem;">
                        Our placement specialists are ready to discuss your specific estate requirements with absolute confidentiality.
                    </p>
                    <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                        <a href="/contact" class="btn-primary">Enquire for This Role</a>
                        <a href="/services" class="btn-secondary" style="border: 1px solid rgba(255,255,255,0.2); color: #fff;">View All Services</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Other Services Preview -->
    @if (!empty($otherServices))
        <section class="other-services-section">
            <div class="container">
                <div class="section-header text-center reveal-up" style="margin-bottom: 3rem;">
                    <h4 class="section-subtitle">Comprehensive Staffing</h4>
                    <h2 class="section-title text-white">Explore Other Services</h2>
                </div>
                <div class="services-cards-grid">
                    @foreach (array_slice($otherServices, 0, 3) as $oSlug => $oService)
                        <a href="/services/{{ $oSlug }}" class="service-card-item reveal-up">
                            <div class="service-card-image-wrap" style="height: 200px;">
                                <img src="{{ $oService['image'] }}" alt="{{ $oService['title'] }}" loading="lazy">
                                <div class="service-card-image-overlay"></div>
                                <span class="service-card-tag">{{ $oService['category'] ?? 'Luxury Staffing' }}</span>
                            </div>
                            <div class="service-card-body">
                                <h3 class="service-card-title" style="font-size: 1.25rem;">{{ $oService['title'] }}</h3>
                                <div class="service-card-subtitle" style="font-size: 0.8rem;">{{ $oService['subtitle'] }}</div>
                                <p class="service-card-desc" style="font-size: 0.9rem;">{{ Str::limit($oService['short_description'] ?? $oService['description'], 110) }}</p>
                                <div class="service-card-action">
                                    <span>Learn More</span>
                                    <span>&rarr;</span>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
                <div class="text-center" style="margin-top: 40px;">
                    <a href="/services" class="btn-primary">Browse All 6 Services</a>
                </div>
            </div>
        </section>
    @endif

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
