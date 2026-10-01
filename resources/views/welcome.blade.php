<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Domestic Staffing Agency in Mumbai | Solitaire Consultancy</title>
    <meta name="description" content="Mumbai's leading luxury domestic staffing agency. We specialize in sourcing elite household staff, estate managers, personal assistants, and private chefs for high-net-worth individuals.">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    
    <!-- Navbar -->
    <nav id="navbar" class="navbar">
        <div class="nav-container">
            <div class="logo">
                <a href="#"><img src="{{ asset('solitaire-logo.png') }}" alt="Solitaire Consultancy" class="logo-img"></a>
            </div>
            <ul class="nav-links">
                <li><a href="/dashboard">Dashboard</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#blogs">Insights</a></li>
                <li><a href="#contact" class="btn-primary">Contact Us</a></li>
            </ul>
            <div class="mobile-menu-icon" id="mobile-menu-icon">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero transcend-hero">
        <!-- Background -->
        <div class="transcend-bg">
            <img src="{{ asset('hero-bg.jpg') }}" alt="Background">
            <div class="bg-gradient-mask"></div>
        </div>

        <div class="hero-container transcend-container">
            <div class="hero-content-left">
                <h1 class="transcend-title fade-up">
                    We bring a touch of<br>brilliance into the<br>lives of our clients.
                </h1>
                <div class="transcend-subtitle-wrap fade-up delay-1">
                    <div class="accent-line"></div>
                    <p class="transcend-subtitle">
                        Mumbai's premier domestic staffing agency providing elite household staff for high-net-worth individuals. Hire professional estate managers, private chefs, personal assistants, and luxury chauffeurs tailored to your bespoke lifestyle.
                    </p>
                </div>
            </div>
            
            <div class="hero-stats-right fade-up delay-2">
                <ul class="stats-list">
                    <li>
                        <div class="stat-number"><span class="counter" data-target="2500">0</span>+</div>
                        <div class="stat-label">Clients Served</div>
                    </li>
                    <li>
                        <div class="stat-number"><span class="counter" data-target="15">0</span>+</div>
                        <div class="stat-label">Quality Team Member</div>
                    </li>
                    <li>
                        <div class="stat-number"><span class="counter" data-target="4000">0</span>+</div>
                        <div class="stat-label">Candidates Placed</div>
                    </li>
                    <li>
                        <div class="stat-number"><span class="counter" data-target="10">0</span>+</div>
                        <div class="stat-label">Years of Experience</div>
                    </li>
                </ul>
            </div>
        </div>
    </section>


    <!-- About Section -->
    <section id="about" class="transcend-about">
        <div class="transcend-about-container">
            <h4 class="transcend-section-subtitle fade-up"><span>/</span> ABOUT US</h4>
            <h2 class="transcend-about-title fade-up delay-1">
                <span id="typewriter" data-text="Solitaire Consultancy isn't just about staffing services; "></span><span class="typewriter-cursor">|</span>
                <span id="typewriter-reveal" style="opacity: 0; transition: opacity 1s ease; background: linear-gradient(90deg, #1abc9c, #3498db, #7b61ff); -webkit-background-clip: text; -webkit-text-fill-color: transparent; display: inline-block;">it's about crafting perfect fits</span>
            </h2>
            <div class="transcend-about-text fade-up delay-2">
                <p>Solitaire Consultancy did not originate out of a boardroom; rather, it originated out of a mere discussion. Initially, it all started out of two visionary individuals thinking about an enquiry made by a wealthy client. However, this single question soon turned out to be a much larger prospect. Therefore, it became their common aim to redefine premium staffing in Mumbai.</p>
                <a href="#about" class="btn-primary" style="margin-top: 1rem; display: inline-block; background-color: #333; color: #fff; border: none; padding: 14px 28px; font-size: 1rem; text-transform: none; letter-spacing: 0;">Read More</a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services dark-section">
        <div class="container">
            <div class="section-header text-center reveal-up">
                <h4 class="section-subtitle">Our Expertise</h4>
                <h2 class="section-title text-white">Elite Personnel Solutions</h2>
            </div>
            
            <div class="services-carousel" id="services-carousel">
                <div class="carousel-item active-left">
                    <div class="service-card">
                        <div class="icon">✧</div>
                        <h3>House Manager/Estate Managers</h3>
                        <p>Experienced professionals to oversee the seamless operation of your multiple properties and estates with precision.</p>
                    </div>
                </div>
                <div class="carousel-item active-right">
                    <div class="service-card">
                        <div class="icon">✦</div>
                        <h3>Executive Assistants/Personal Assistants</h3>
                        <p>Highly capable executive and personal assistants to manage your schedule, travel, and lifestyle requirements.</p>
                    </div>
                </div>
                <div class="carousel-item next-1">
                    <div class="service-card">
                        <div class="icon">✧</div>
                        <h3>Chefs/Cook</h3>
                        <p>Culinary experts capable of designing bespoke menus tailored to your dietary preferences and entertaining needs.</p>
                    </div>
                </div>
                <div class="carousel-item next-2">
                    <div class="service-card">
                        <div class="icon">✦</div>
                        <h3>Personal Butler</h3>
                        <p>Impeccably trained housekeepers, butlers, and nannies dedicated to maintaining the sanctuary of your home.</p>
                    </div>
                </div>
                <div class="carousel-item prev-2">
                    <div class="service-card">
                        <div class="icon">✧</div>
                        <h3>Chauffeurs/Drivers</h3>
                        <p>Professional, discreet, and highly trained drivers ensuring your safe and timely arrival at every destination.</p>
                    </div>
                </div>
                <div class="carousel-item prev-1">
                    <div class="service-card">
                        <div class="icon">✦</div>
                        <h3>Nanny/Babysitter</h3>
                        <p>Elite close protection and estate security experts providing absolute peace of mind for you and your family.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trusted Clients Section -->
    <section id="clients" class="clients-section">
        <div class="container text-center">
            <h2 class="clients-title reveal-up">Trusted by 2500+ Clients for Premium Housekeeping & Staffing Services in Mumbai</h2>
            
            <div class="marquee-container reveal-up delay-1">
                <div class="marquee-track">
                    <!-- Client Logos (First Set) -->
                    <div class="client-logo"><img src="{{ asset('clients/99acres.png') }}" alt="Client"></div>
                    <div class="client-logo"><img src="{{ asset('clients/apollo.png') }}" alt="Client"></div>
                    <div class="client-logo"><img src="{{ asset('clients/apparel.png') }}" alt="Client"></div>
                    <div class="client-logo"><img src="{{ asset('clients/aza.png') }}" alt="Client"></div>
                    <div class="client-logo"><img src="{{ asset('clients/bajaj.png') }}" alt="Client"></div>
                    <div class="client-logo"><img src="{{ asset('clients/bajaj_energy.png') }}" alt="Client"></div>
                    
                    <!-- Client Logos (Second Set for seamless infinite scrolling) -->
                    <div class="client-logo"><img src="{{ asset('clients/essar.png') }}" alt="Client"></div>
                    <div class="client-logo"><img src="{{ asset('clients/gar.png') }}" alt="Client"></div>
                    <div class="client-logo"><img src="{{ asset('clients/godrej.png') }}" alt="Client"></div>
                    <div class="client-logo"><img src="{{ asset('clients/havmor.png') }}" alt="Client"></div>
                    <div class="client-logo"><img src="{{ asset('clients/imi.png') }}" alt="Client"></div>
                    <div class="client-logo"><img src="{{ asset('clients/inspira.png') }}" alt="Client"></div>

                     <div class="client-logo"><img src="{{ asset('clients/jsw.png') }}" alt="Client"></div>
                    <div class="client-logo"><img src="{{ asset('clients/k_raheja.png') }}" alt="Client"></div>
                    <div class="client-logo"><img src="{{ asset('clients/kataria.png') }}" alt="Client"></div>
                    <div class="client-logo"><img src="{{ asset('clients/manu.png') }}" alt="Client"></div>
                    <div class="client-logo"><img src="{{ asset('clients/manubhai.png') }}" alt="Client"></div>
                    <div class="client-logo"><img src="{{ asset('clients/maximal.png') }}" alt="Client"></div>

                     <div class="client-logo"><img src="{{ asset('clients/sal.png') }}" alt="Client"></div>
                    <div class="client-logo"><img src="{{ asset('clients/ukreality.png') }}" alt="Client"></div>
                    <div class="client-logo"><img src="{{ asset('clients/viraj.png') }}" alt="Client"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blogs Section -->
    <section id="blogs" class="blogs">
        <div class="container">
            <div class="section-header text-center reveal-up">
                <h4 class="section-subtitle">Insights & Articles</h4>
                <h2 class="section-title">Latest from Solitaire</h2>
                <p class="subtitle-text">Expert advice on luxury lifestyle management and household staffing.</p>
            </div>
            
            <!-- Blog Grid (Populated by JavaScript) -->
            <div class="blog-grid" id="blog-container">
                <!-- Blogs will be injected here dynamically -->
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section id="reviews" class="reviews">
        <div class="container">
            <div class="section-header text-center reveal-up">
                <h4 class="section-subtitle">Testimonials</h4>
                <h2 class="section-title">What Our Clients Say</h2>
                <p class="subtitle-text">Hear from those who have experienced the Solitaire difference.</p>
            </div>
            
            <div class="reviews-marquee-container">
                <div class="reviews-track">
                    <!-- First Set of 6 Reviews -->
                    <div class="review-card">
                        <div class="review-stars">★★★★★</div>
                        <p class="review-text">"Thank you, David. I am truly grateful for your unwavering support and would like to sincerely thank you for helping me secure this job. From start to finish, you and your team were exceptionally helpful and consistently supportive throughout the entire process. Because of your expert guidance, everything went smoothly and efficiently."</p>
                        <div class="review-author">
                            <h4>Akshay</h4>
                            <p>House Manager</p>
                        </div>
                    </div>
                    
                    <div class="review-card">
                        <div class="review-stars">★★★★★</div>
                        <p class="review-text">"I had a great experience with Solitaire Consultancy Services. The nanny they provided was professional, well-trained, and caring. She took excellent care of my children while I was at work, which gave me a lot of peace of mind. I would definitely recommend their services to parents."</p>
                        <div class="review-author">
                            <h4>Beth Mooney</h4>
                            <p>Manager</p>
                        </div>
                    </div>

                    <div class="review-card">
                        <div class="review-stars">★★★★★</div>
                        <p class="review-text">"The Solitaire Consultancy, led by Mr. David Eda, is truly a standout in the recruitment industry. I highly recommend this agency to anyone looking to take the next step in their career. Right from the beginning, the team ensures that the entire recruitment process is handled smoothly and efficiently."</p>
                        <div class="review-author">
                            <h4>Amol Pereira</h4>
                            <p>Senior Butler (JSW)</p>
                        </div>
                    </div>
                    
                    <div class="review-card">
                        <div class="review-stars">★★★★★</div>
                        <p class="review-text">"Outstanding service from Wilson at Solitaire! He was truly instrumental in helping me secure my dream job. His professionalism, industry expertise, and consistent updates made the entire recruitment process feel effortless and well-organized. I am deeply grateful for his support."</p>
                        <div class="review-author">
                            <h4>Nitin Kadam</h4>
                            <p>Executive Assistant</p>
                        </div>
                    </div>
                    
                    <div class="review-card">
                        <div class="review-stars">★★★★★</div>
                        <p class="review-text">"I have had the privilege of being associated with Solitaire Consultancy Services for the past three years. Throughout this time, they have consistently demonstrated a high level of professionalism and dedication. In particular, David and Wilson have been incredibly helpful and supportive."</p>
                        <div class="review-author">
                            <h4>Ashley Lobo</h4>
                            <p>House Manager</p>
                        </div>
                    </div>
                    
                    <div class="review-card">
                        <div class="review-stars">★★★★★</div>
                        <p class="review-text">"It's my pleasure to enthusiastically recommend Solitaire Consultancy. They are committed, dedicated and very responsible. They are very detailed and communication is very effective and sincere. Highly recommended!"</p>
                        <div class="review-author">
                            <h4>Patricia Newnes</h4>
                            <p>House Manager</p>
                        </div>
                    </div>

                    <!-- Second Set of 6 Reviews (For seamless looping) -->
                    <div class="review-card">
                        <div class="review-stars">★★★★★</div>
                        <p class="review-text">"Thank you, David. I am truly grateful for your unwavering support and would like to sincerely thank you for helping me secure this job. From start to finish, you and your team were exceptionally helpful and consistently supportive throughout the entire process. Because of your expert guidance, everything went smoothly and efficiently."</p>
                        <div class="review-author">
                            <h4>Akshay</h4>
                            <p>House Manager</p>
                        </div>
                    </div>
                    
                    <div class="review-card">
                        <div class="review-stars">★★★★★</div>
                        <p class="review-text">"I had a great experience with Solitaire Consultancy Services. The nanny they provided was professional, well-trained, and caring. She took excellent care of my children while I was at work, which gave me a lot of peace of mind. I would definitely recommend their services to parents."</p>
                        <div class="review-author">
                            <h4>Beth Mooney</h4>
                            <p>Manager</p>
                        </div>
                    </div>

                    <div class="review-card">
                        <div class="review-stars">★★★★★</div>
                        <p class="review-text">"The Solitaire Consultancy, led by Mr. David Eda, is truly a standout in the recruitment industry. I highly recommend this agency to anyone looking to take the next step in their career. Right from the beginning, the team ensures that the entire recruitment process is handled smoothly and efficiently."</p>
                        <div class="review-author">
                            <h4>Amol Pereira</h4>
                            <p>Senior Butler (JSW)</p>
                        </div>
                    </div>
                    
                    <div class="review-card">
                        <div class="review-stars">★★★★★</div>
                        <p class="review-text">"Outstanding service from Wilson at Solitaire! He was truly instrumental in helping me secure my dream job. His professionalism, industry expertise, and consistent updates made the entire recruitment process feel effortless and well-organized. I am deeply grateful for his support."</p>
                        <div class="review-author">
                            <h4>Nitin Kadam</h4>
                            <p>Executive Assistant</p>
                        </div>
                    </div>
                    
                    <div class="review-card">
                        <div class="review-stars">★★★★★</div>
                        <p class="review-text">"I have had the privilege of being associated with Solitaire Consultancy Services for the past three years. Throughout this time, they have consistently demonstrated a high level of professionalism and dedication. In particular, David and Wilson have been incredibly helpful and supportive."</p>
                        <div class="review-author">
                            <h4>Ashley Lobo</h4>
                            <p>House Manager</p>
                        </div>
                    </div>
                    
                    <div class="review-card">
                        <div class="review-stars">★★★★★</div>
                        <p class="review-text">"It's my pleasure to enthusiastically recommend Solitaire Consultancy. They are committed, dedicated and very responsible. They are very detailed and communication is very effective and sincere. Highly recommended!"</p>
                        <div class="review-author">
                            <h4>Patricia Newnes</h4>
                            <p>House Manager</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container text-center reveal-up">
            <h2>Ready to transform your household management?</h2>
            <p>Connect with our consultants today for a confidential discussion about your staffing requirements.</p>
            <a href="#contact" class="btn-primary large">Contact Us Now</a>
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
                        <li><a href="/dashboard">Dashboard</a></li>
                         <li><a href="#about">About Us</a></li>
                        <li><a href="#services">Our Services</a></li>
                        <li><a href="#blogs">Insights</a></li>
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

    <!-- Scripts -->
    <script src="{{ asset('script.js') }}"></script>
</body>
</html>
