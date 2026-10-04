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
                <li><a href="/">Home</a></li>
                <li><a href="#about">About</a></li>
                <li class="dropdown">
                    <a href="#services">Services ▾</a>
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
        <div class="transcend-bg dual-video-bg">
            <video autoplay loop muted playsinline src="{{ asset('hero-video1.mp4') }}" class="hero-video video-left"></video>
            <video autoplay loop muted playsinline src="{{ asset('hero-video2.mp4') }}" class="hero-video video-right"></video>
            <div class="bg-gradient-mask dark-theme-mask"></div>
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
                <a href="/about" class="btn-primary" style="margin-top: 1rem; display: inline-block; background-color: #333; color: #fff; border: none; padding: 14px 28px; font-size: 1rem; text-transform: none; letter-spacing: 0;">Read More</a>
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
                    <div class="service-card" style="position: relative;">
                        <a href="/services/house-manager" style="position: absolute; inset: 0; z-index: 10;"></a>
                        <div class="icon">✧</div>
                        <h3><a href="/services/house-manager" style="color: inherit; text-decoration: none; position: relative; z-index: 20;">House Manager/Estate Managers</a></h3>
                        <p>Experienced professionals to oversee the seamless operation of your multiple properties and estates with precision.</p>
                    </div>
                </div>
                <div class="carousel-item active-right">
                    <div class="service-card" style="position: relative;">
                        <a href="/services/executive-assistant" style="position: absolute; inset: 0; z-index: 10;"></a>
                        <div class="icon">✦</div>
                        <h3><a href="/services/executive-assistant" style="color: inherit; text-decoration: none; position: relative; z-index: 20;">Executive Assistants/Personal Assistants</a></h3>
                        <p>Highly capable executive and personal assistants to manage your schedule, travel, and lifestyle requirements.</p>
                    </div>
                </div>
                <div class="carousel-item next-1">
                    <div class="service-card" style="position: relative;">
                        <a href="/services/chef" style="position: absolute; inset: 0; z-index: 10;"></a>
                        <div class="icon">✧</div>
                        <h3><a href="/services/chef" style="color: inherit; text-decoration: none; position: relative; z-index: 20;">Chefs/Cook</a></h3>
                        <p>Culinary experts capable of designing bespoke menus tailored to your dietary preferences and entertaining needs.</p>
                    </div>
                </div>
                <div class="carousel-item next-2">
                    <div class="service-card" style="position: relative;">
                        <a href="/services/personal-butler" style="position: absolute; inset: 0; z-index: 10;"></a>
                        <div class="icon">✦</div>
                        <h3><a href="/services/personal-butler" style="color: inherit; text-decoration: none; position: relative; z-index: 20;">Personal Butler</a></h3>
                        <p>Impeccably trained butlers dedicated to maintaining the sanctuary of your home and providing highly personalized service.</p>
                    </div>
                </div>
                <div class="carousel-item prev-2">
                    <div class="service-card" style="position: relative;">
                        <a href="/services/chauffeur" style="position: absolute; inset: 0; z-index: 10;"></a>
                        <div class="icon">✧</div>
                        <h3><a href="/services/chauffeur" style="color: inherit; text-decoration: none; position: relative; z-index: 20;">Chauffeurs/Drivers</a></h3>
                        <p>Professional, discreet, and highly trained drivers ensuring your safe and timely arrival at every destination.</p>
                    </div>
                </div>
                <div class="carousel-item prev-1">
                    <div class="service-card" style="position: relative;">
                        <a href="/services/nanny" style="position: absolute; inset: 0; z-index: 10;"></a>
                        <div class="icon">✦</div>
                        <h3><a href="/services/nanny" style="color: inherit; text-decoration: none; position: relative; z-index: 20;">Nanny/Babysitter</a></h3>
                        <p>Experienced and nurturing child care professionals providing absolute peace of mind for you and your family.</p>
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
            
            <!-- Blog Grid -->
            <div class="blog-grid">
                @foreach($blogs as $index => $blog)
                <article class="blog-card reveal-up" style="transition-delay: {{ $index * 0.2 }}s; position: relative;">
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
            
            <div class="text-center reveal-up" style="margin-top: 1.5rem;">
                <a href="/blogs" class="btn-primary" style="display: inline-block;">View All Blogs</a>
            </div>
        </div>
    </section>

    <!-- Jobs Section -->
    <section id="jobs" class="blogs dark-section" style="background-color: var(--clr-bg-secondary);">
        <div class="container">
            <div class="section-header text-center reveal-up">
                <h4 class="section-subtitle">Careers</h4>
                <h2 class="section-title text-white">Latest Job Listings</h2>
                <p class="subtitle-text">Explore elite opportunities in household and estate management.</p>
            </div>
            
            @if(session('success'))
            <div style="background-color: #1abc9c; color: white; padding: 15px; border-radius: 4px; text-align: center; margin-bottom: 30px;">
                {{ session('success') }}
            </div>
            @endif

            <div class="blog-grid">
                @foreach($jobs as $index => $job)
                <article class="blog-card reveal-up" style="transition-delay: {{ $index * 0.1 }}s">
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
                        <button class="btn-primary mt-4" style="margin-top: 20px;" onclick="document.getElementById('welcome-apply-form-{{ $job->id }}').style.display='block'; this.style.display='none';">Apply Now</button>
                        
                        <!-- Apply Form -->
                        <div id="welcome-apply-form-{{ $job->id }}" style="display: none; margin-top: 20px;">
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
            
            <div class="text-center reveal-up" style="margin-top: 1.5rem;">
                <a href="/jobs" class="btn-primary" style="display: inline-block;">View All Jobs</a>
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
                         <li><a href="#about">About Us</a></li>
                        <li><a href="#services">Our Services</a></li>
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

    <!-- Scripts -->
    <script src="{{ asset('script.js') }}"></script>
</body>
</html>
