<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $blog->title }} | Solitaire Consultancy</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <style>
        .blog-hero {
            position: relative;
            min-height: 50vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 120px 0 60px;
            background-color: var(--clr-bg-primary);
        }
        .blog-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 12px;
            margin-bottom: 40px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.4);
        }
        .blog-content {
            color: var(--clr-text-main); 
            font-size: 1.15rem; 
            line-height: 1.9; 
            font-family: var(--font-body);
        }
        .blog-content p {
            margin-bottom: 20px;
        }
        .blog-content h1, .blog-content h2, .blog-content h3, .blog-content h4, .blog-content h5, .blog-content h6 {
            color: var(--clr-white);
            font-family: var(--font-heading);
            margin-top: 40px;
            margin-bottom: 20px;
        }
        .blog-content ul, .blog-content ol {
            margin-bottom: 20px;
            padding-left: 20px;
        }
        .blog-content li {
            margin-bottom: 10px;
        }
        .blog-content a {
            color: var(--clr-accent);
            text-decoration: underline;
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

    <!-- Blog Content Section -->
    <section class="blog-hero dark-section">
        <div class="container" style="max-width: 900px; padding-bottom: 80px;">
            <div class="section-header text-center reveal-up">
                <p class="subtitle-text" style="color: var(--clr-accent); font-size: 0.9rem; margin-bottom: 15px; text-transform: uppercase; letter-spacing: 2px;">{{ $blog->created_at->format('M d, Y') }}</p>
                <h2 class="section-title text-white" style="font-size: 2.5rem; margin-bottom: 20px;">{{ $blog->title }}</h2>
                <div class="accent-line mx-auto mt-6" style="margin: 30px auto;"></div>
            </div>
            
            @if($blog->image)
            <div class="reveal-up delay-1">
                <img src="{{ Str::startsWith($blog->image, 'http') ? $blog->image : asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="blog-image">
            </div>
            @endif

            <div class="reveal-up delay-2 blog-content">
                {!! $blog->content !!}
                
                <div class="text-center mt-12" style="margin-top: 50px;">
                    <a href="/blogs" class="btn-primary" style="display: inline-block;">Back to Blogs</a>
                </div>
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
