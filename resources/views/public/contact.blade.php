<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Solitaire Consultancy</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <style>
        .contact-page-wrapper {
            background-color: var(--clr-bg-secondary);
            min-height: 100vh;
            padding-top: 180px;
            padding-bottom: 80px;
            font-family: 'Inter', sans-serif;
            color: var(--clr-text-main);
        }
        .contact-container {
            max-width: 1000px;
            margin: 0 auto;
            background: var(--clr-bg-tertiary);
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            display: flex;
            overflow: hidden;
            flex-wrap: wrap;
            border: 1px solid rgba(255,255,255,0.05);
        }
        .contact-left {
            flex: 1;
            padding: 50px;
            background-color: var(--clr-bg-primary);
            min-width: 300px;
            border-right: 1px solid rgba(255,255,255,0.05);
        }
        .contact-right {
            flex: 1;
            padding: 50px;
            background-color: var(--clr-bg-tertiary);
            min-width: 300px;
        }
        .contact-title {
            font-family: 'Playfair Display', serif;
            font-style: italic;
            font-size: 2.5rem;
            color: var(--clr-white);
            margin-bottom: 5px;
        }
        .contact-subtitle {
            font-size: 1.1rem;
            font-weight: 400;
            margin-bottom: 40px;
            color: var(--clr-text-muted);
        }
        .contact-info-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 30px;
        }
        .contact-icon {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: rgba(41, 128, 185, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--clr-accent-blue);
            margin-right: 15px;
            flex-shrink: 0;
            border: 1px solid rgba(41, 128, 185, 0.2);
        }
        .contact-text h4 {
            font-size: 0.85rem;
            color: var(--clr-text-muted);
            margin-bottom: 3px;
            font-weight: 400;
            font-family: 'Inter', sans-serif;
        }
        .contact-text p {
            font-size: 1rem;
            color: var(--clr-white);
            font-weight: 500;
            margin-bottom: 0;
            line-height: 1.4;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-size: 0.9rem;
            color: var(--clr-text-muted);
            font-weight: 500;
        }
        .form-control {
            width: 100%;
            padding: 12px 15px;
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.1);
            color: var(--clr-white);
            border-radius: 6px;
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            outline: none;
            transition: border-color 0.3s;
        }
        .form-control:focus {
            border-color: var(--clr-accent-blue);
        }
        textarea.form-control {
            height: 150px;
            resize: vertical;
        }
        .btn-submit {
            width: 100%;
            padding: 14px;
            background-color: var(--clr-accent-blue);
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition-smooth);
        }
        .btn-submit:hover {
            background-color: var(--clr-accent-blue-hover);
        }

        @media (max-width: 768px) {
            .contact-container {
                flex-direction: column;
            }
            .contact-left, .contact-right {
                padding: 30px;
            }
            .contact-left {
                border-right: none;
                border-bottom: 1px solid rgba(255,255,255,0.05);
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

    <!-- Contact Section -->
    <section class="contact-page-wrapper">
        <div class="container">
            <div class="contact-container">
                <div class="contact-left">
                    <h2 class="contact-title">Get In touch</h2>
                    <p class="contact-subtitle">To experience our exceptional service</p>

                    <div class="contact-info-item">
                        <div class="contact-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        </div>
                        <div class="contact-text">
                            <h4>Contact us on</h4>
                            <p>+91 9930439075</p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        </div>
                        <div class="contact-text">
                            <h4>Mail us 24/7</h4>
                            <p>help@solitaireconsultancyservices.com</p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        </div>
                        <div class="contact-text">
                            <h4>Registered Address</h4>
                            <p>Sahar Village, Andheri East, Mumbai, Maharashtra 400099.</p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        </div>
                        <div class="contact-text">
                            <h4>Branch Address</h4>
                            <p>Flat 6, 4, Berkeley Court, Lovelace Gardens, Surbiton, KT6 6SR, UK.</p>
                        </div>
                    </div>
                </div>

                <div class="contact-right">
                    @if(session('success'))
                    <div style="background-color: rgba(26, 188, 156, 0.2); color: #1abc9c; border: 1px solid #1abc9c; padding: 15px; border-radius: 6px; margin-bottom: 25px;">
                        {{ session('success') }}
                    </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Your Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>How can help you?</label>
                            <textarea name="message" class="form-control" required></textarea>
                        </div>

                        <button type="submit" class="btn-submit">Submit Now</button>
                    </form>
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
                    <p>Email: help@solitaireconsultancyservices.com</p>
                    <p>Phone: +91 99304 39075</p>
                    <p>Sahar, Andheri East, Mumbai 400099</p>
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
