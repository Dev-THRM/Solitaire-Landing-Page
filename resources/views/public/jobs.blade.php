<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careers | Solitaire Consultancy</title>
    
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

    <!-- Jobs Section -->
    <section class="blogs dark-section" style="padding-top: 220px; min-height: 80vh; background-color: var(--clr-bg-secondary);">
        <div class="container">
            <div class="section-header text-center reveal-up">
                <h4 class="section-subtitle">Careers</h4>
                <h2 class="section-title text-white">All Job Listings</h2>
                <p class="subtitle-text">Explore elite opportunities in household and estate management.</p>
            </div>
            
            @if(session('success'))
            <div style="background-color: #1abc9c; color: white; padding: 15px; border-radius: 4px; text-align: center; margin-bottom: 30px;">
                {{ session('success') }}
            </div>
            @endif

            <div class="blog-grid">
                @foreach($jobs as $index => $job)
                <article class="blog-card reveal-up">
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span>{{ $job->location }}</span>
                            <span>{{ $job->type }}</span>
                        </div>
                        <h3 class="blog-title">{{ $job->title }}</h3>
                        <p class="blog-excerpt">{{ Str::limit(html_entity_decode(strip_tags($job->description)), 120) }}</p>
                        <button class="read-more" style="background:none; border:none; padding:0; cursor:pointer; font:inherit; color:var(--clr-accent);" onclick="document.getElementById('job-modal-{{ $job->id }}').classList.add('active'); document.body.style.overflow='hidden';">View Job</button>
                    </div>
                </article>
                
                <!-- Modal for this job -->
                <div class="job-modal-overlay" id="job-modal-{{ $job->id }}">
                    <div class="job-modal">
                        <span class="close-modal" onclick="document.getElementById('job-modal-{{ $job->id }}').classList.remove('active'); document.body.style.overflow='auto';">&times;</span>
                        <h2>{{ $job->title }}</h2>
                        <div class="job-meta">
                            <span>{{ $job->location }}</span>
                            <span>{{ $job->type }}</span>
                        </div>
                        <div class="job-desc">
                            {!! $job->description !!}
                        </div>
                        
                        <!-- Apply Now Button -->
                        <button class="btn-primary mt-4" style="margin-top: 20px;" onclick="document.getElementById('apply-form-{{ $job->id }}').style.display='block'; this.style.display='none';">Apply Now</button>
                        
                        <!-- Apply Form -->
                        <div id="apply-form-{{ $job->id }}" style="display: none; margin-top: 20px;">
                            <form action="{{ route('jobs.apply', $job->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" name="name" class="form-control w-100" placeholder="Full Name" required style="padding: 10px; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); color: white; border-radius: 4px; width: 100%; box-sizing: border-box;">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="email" name="email" class="form-control w-100" placeholder="Email Address" required style="padding: 10px; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); color: white; border-radius: 4px; margin-top:10px; width: 100%; box-sizing: border-box;">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="tel" name="phone" class="form-control w-100" placeholder="Phone Number" required style="padding: 10px; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); color: white; border-radius: 4px; margin-top:10px; width: 100%; box-sizing: border-box;">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" name="location" class="form-control w-100" placeholder="Your Location" required style="padding: 10px; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); color: white; border-radius: 4px; margin-top:10px; width: 100%; box-sizing: border-box;">
                                </div>
                                <div class="form-group mb-3">
                                    <label style="color: rgba(255,255,255,0.7); display:block; margin-top:10px; margin-bottom: 5px; font-size: 0.9rem;">Upload Resume (PDF/DOC)</label>
                                    <input type="file" name="resume" class="form-control w-100" accept=".pdf,.doc,.docx" required style="padding: 10px; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); color: white; border-radius: 4px; width: 100%; box-sizing: border-box;">
                                </div>
                                <button type="submit" class="btn-primary w-100" style="margin-top: 15px; width: 100%; padding: 12px; cursor: pointer;">Submit Application</button>
                            </form>
                        </div>
                    </div>
                </div>
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
