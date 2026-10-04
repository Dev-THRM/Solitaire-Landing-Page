<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs | Solitaire Consultancy</title>
    
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
                <li><a href="/#contact" class="btn-primary">Contact Us</a></li>
            </ul>
            <div class="mobile-menu-icon" id="mobile-menu-icon">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        </div>
    </nav>

    <!-- Blogs Section -->
    <section class="blogs dark-section" style="padding-top: 220px; min-height: 80vh;">
        <div class="container">
            <div class="section-header text-center reveal-up">
                <h4 class="section-subtitle">Insights & Articles</h4>
                <h2 class="section-title text-white">All Blogs</h2>
                <p class="subtitle-text">Expert advice on luxury lifestyle management and household staffing.</p>
            </div>
            
            <div class="blog-grid">
                @foreach($blogs as $index => $blog)
                <article class="blog-card reveal-up" style="position: relative;">
                    <a href="/blog/{{ $blog->slug }}" style="position: absolute; inset: 0; z-index: 10;"></a>
                    <div class="blog-img-wrapper">
                        @if($blog->image)
                        <img src="{{ Storage::url($blog->image) }}" alt="{{ $blog->title }}" class="blog-img" loading="lazy">
                        @else
                        <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="{{ $blog->title }}" class="blog-img" loading="lazy">
                        @endif
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span>Article</span>
                            <span>{{ $blog->created_at->format('M d, Y') }}</span>
                        </div>
                        <h3 class="blog-title"><a href="/blog/{{ $blog->slug }}" style="color: inherit; text-decoration: none; position: relative; z-index: 20;">{{ $blog->title }}</a></h3>
                        <p class="blog-excerpt">{{ Str::limit(html_entity_decode(strip_tags($blog->content)), 120) }}</p>
                        <a href="/blog/{{ $blog->slug }}" class="read-more" style="position: relative; z-index: 20;">Read Article</a>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="footer">
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
