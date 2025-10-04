<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>ABC Coaching Centre — Shaping Bright Futures</title>
  <meta name="description" content="ABC Coaching Centre: Classroom & online coaching, practice tests, study materials, mentorship, and crash courses for school & competitive exams." />
  <meta name="keywords" content="coaching, tuition, study material, test series, demo class, competitive exam coaching" />
  <meta name="author" content="ABC Coaching Centre" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="style.css">

  <style>
  /* Full screen loader background */
  #loading-screen {
    position: fixed;
    width: 100%;
    height: 100%;
    background: #ffffff;
    top: 0;
    left: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
    transition: opacity 0.5s ease, visibility 0.5s ease;
    flex-direction: column;
  }

  /* Hide smoothly */
  #loading-screen.hidden {
    opacity: 0;
    visibility: hidden;
  }

  /* Loader wrapper */
  .loader {
    width: 120px;
    height: 120px;
    position: relative;
  }

  /* Pulse rings */
  .loader::before,
  .loader::after {
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
    width: 120px;
    height: 120px;
    border-radius: 50%;
    transform: translate(-50%, -50%);
    border: 4px solid transparent;
    border-top-color: #004080;
    border-bottom-color: #ffd700;
    animation: pulse 1.5s ease-in-out infinite;
  }

  .loader::after {
    border-top-color: #ff4500;
    border-bottom-color: #1e90ff;
    animation-delay: 0.75s;
  }

  /* Logo in center */
  .loader img {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    animation: logoScale 1.5s ease-in-out infinite;
  }

  /* Animations */
  @keyframes pulse {
    0%, 100% {
      transform: translate(-50%, -50%) scale(0.8);
      opacity: 0.7;
    }
    50% {
      transform: translate(-50%, -50%) scale(1.2);
      opacity: 0.3;
    }
  }

  @keyframes logoScale {
    0%, 100% { transform: translate(-50%, -50%) scale(1); }
    50% { transform: translate(-50%, -50%) scale(1.1); }
  }

  /* Optional loader text */
  .loader-text {
    margin-top: 20px;
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    font-size: 1.2rem;
    color: #004080;
    animation: fadeText 1.5s ease-in-out infinite;
  }

  @keyframes fadeText {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.5; }
  }
</style>
</head>
<body>
  <!-- Splash Screen Loader -->
  <div id="loading-screen">
  <div class="loader">
    <img src="assets/Images/Hero-image.jpg" alt="Logo">
  </div>
  <div class="loader-text">Loading...</div>
</div>

 <!-- Splash Screen Loader -->

  <header>
    <div class="brand container" style="display:flex;align-items:center;justify-content:flex-start;padding:0;">
      <img src="assets/Images/Hero-image - Copy.jpg" alt="logo" style="width:44px;height:44px;border-radius:8px;object-fit:cover;">
      <h1 style="margin-left:8px">XYZ Coaching Centre</h1>
    </div>

    <nav class="desktop-nav" aria-label="Main Navigation">
  <a href="#home"><i class="fas fa-house"></i> Home</a>
  <a href="#about"><i class="fas fa-user-graduate"></i> About</a>
  <a href="#results"><i class="fas fa-chart-line"></i> Results</a>
  <a href="#materials"><i class="fas fa-book-open"></i> Materials</a>
  <a href="#gallery"><i class="fas fa-images"></i> Gallery</a>
  <a href="#contact"><i class="fas fa-envelope"></i> Contact</a>
    </nav>

    <button class="hamburger" id="hamburger" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-menu">
      <span class="bar" aria-hidden="true"></span>
    </button>
  </header>

  <div class="mobile-menu" id="mobile-menu" aria-hidden="true">
    <div class="container" style="padding:0;">
      <a href="#home" class="mobile-link">Home</a>
      <a href="#about" class="mobile-link">About</a>
      <a href="#results" class="mobile-link">Results</a>
      <a href="#materials" class="mobile-link">Materials</a>
      <a href="#gallery" class="mobile-link">Gallery</a>
      <a href="#contact" class="mobile-link">Contact</a>
      <a href="#contact" class="cta">Join Now</a>
    </div>
  </div>

  <!-- HERO -->
  <main id="home" class="hero" role="main">
    <div class="hero-inner">
      <div data-aos="fade-right">
        <h2>Shaping Bright Futures — <span style="color:var(--accent)">ABC Coaching Centre</span></h2>
        <p>Comprehensive study materials, structured classroom & online coaching, test series, and mentorship for school & competitive exams.</p>
        <div class="cta-row">
          <button class="btn" onclick="document.getElementById('contact').scrollIntoView({behavior:'smooth'})">Enroll Now</button>
          <button class="btn-outline" onclick="bookDemo()">Book Demo Class</button>
        </div>
      </div>

      <aside class="hero-card center" data-aos="fade-left" aria-label="Quick info">
        <div style="text-align:left;">
          <strong>Upcoming Batches</strong>
          <ul class="small muted" style="margin-top:8px">
            <li>Class 9-10 | Morning & Evening</li>
            <li>Class 11-12 (Science & Commerce)</li>
            <li>Crash Course - Board Exams</li>
          </ul>
          <div style="margin-top:12px;">
            <strong>Contact</strong>
            <div class="small muted">+91 - XXXXXXXXXX</div>
            <div class="small muted">info@abc-coaching.com</div>
          </div>
        </div>
      </aside>
    </div>
  </main>

  <!-- WHY CHOOSE US -->
  <section aria-labelledby="why-title" class="section" id="about">
    <div class="container">
      <h3 id="why-title" class="section-title" data-aos="fade-up">Why Choose ABC Coaching?</h3>
      <p class="section-sub" data-aos="fade-up">We combine experienced teachers, small batches, focused test series, and personalized mentoring to ensure every student achieves their best.</p>

      <div class="grid grid-3" style="margin-top:24px" data-aos="fade-up">
        <div class="why-card">
          <h4>Expert Teachers</h4>
          <p class="small muted">Qualified faculty with years of teaching & exam experience. Concept-first approach for lasting understanding.</p>
        </div>
        <div class="why-card">
          <h4>Structured Study Material</h4>
          <p class="small muted">Concise notes, chapter-wise practice sheets & previous-year solved papers for quick revision.</p>
        </div>
        <div class="why-card">
          <h4>Regular Tests & Feedback</h4>
          <p class="small muted">Weekly tests, detailed answer discussions and one-on-one feedback to correct mistakes early.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- (Other sections kept same structure) -->
  <!-- HOW IT WORKS -->
  <section aria-labelledby="how-title" class="section" style="background:transparent">
    <div class="container">
      <h3 id="how-title" class="section-title" data-aos="fade-up">How It Works</h3>
      <p class="section-sub" data-aos="fade-up">Simple 4-step process to join a batch or take services.</p>
      <div class="steps" style="margin-top:22px">
        <div class="step" data-aos="fade-up" data-aos-delay="50">
          <div class="num">1</div>
          <h4>Choose Program</h4>
          <p class="small muted">Pick the course or program you want (school, board, or competitive).</p>
        </div>
        <div class="step" data-aos="fade-up" data-aos-delay="100">
          <div class="num">2</div>
          <h4>Book Demo / Enroll</h4>
          <p class="small muted">Attend a free demo or directly enroll online/offline.</p>
        </div>
        <div class="step" data-aos="fade-up" data-aos-delay="150">
          <div class="num">3</div>
          <h4>Attend Classes</h4>
          <p class="small muted">Join live classes, access study-material & take tests regularly.</p>
        </div>
        <div class="step" data-aos="fade-up" data-aos-delay="200">
          <div class="num">4</div>
          <h4>Performance Review</h4>
          <p class="small muted">Get periodic reviews & mentorship for continuous improvement.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- PROGRAMS -->
  <section id="programs" aria-labelledby="programs-title" class="section">
    <div class="container">
      <h3 id="programs-title" class="section-title" data-aos="fade-up">Programs We Offer</h3>
      <p class="section-sub" data-aos="fade-up">Tailored courses for different needs — choose what fits you best.</p>
      <div class="programs" style="margin-top:22px" data-aos="fade-up">
        <article class="card">
          <h3>Nursery to 5th </h3>
          <p class="small muted">Core concepts, chapter tests, and doubt-clearing sessions designed for strong fundamentals.</p>
          <div style="margin-top:12px"><button class="btn" onclick="enroll('School Coaching')">Enroll</button></div>
        </article>
        <article class="card">
          <h3>Class 5th-10th</h3>
          <p class="small muted">Stream-wise focused coaching (Science & Commerce) to master board and entrance exams.</p>
          <div style="margin-top:12px"><button class="btn" onclick="enroll('Class 11-12')">Enroll</button></div>
        </article>
        <article class="card">
          <h3>Competitive Exam Crash</h3>
          <p class="small muted">Focused short-burst programs for bank/SSC/railway & other state-level exams.</p>
          <div style="margin-top:12px"><button class="btn" onclick="enroll('Crash Course')">Enroll</button></div>
        </article>
      </div>
    </div>
  </section>

  <!-- MATERIALS -->
  <section id="materials" aria-labelledby="materials-title" class="section">
    <div class="container">
      <h3 id="materials-title" class="section-title" data-aos="fade-up">Study Materials & Downloads</h3>
      <p class="section-sub" data-aos="fade-up">Prepared by teachers — concise notes, solved papers & practice worksheets.</p>
      <div class="grid" style="margin-top:18px;grid-template-columns:repeat(3,1fr);">
        <div class="card" data-aos="fade-up">
          <h4>BSEB 10th — Previous Year Papers</h4>
          <p class="small muted">Download topic-wise solved papers for quick revision.</p>
          <p style="margin-top:10px"><a href="#" download class="small">Download <i class="fas fa-download"></i></a></p>
        </div>
        <div class="card" data-aos="fade-up" data-aos-delay="50">
          <h4>Revision Notes — Physics</h4>
          <p class="small muted">Short & to-the-point revision sheets for every chapter.</p>
          <p style="margin-top:10px"><a href="#" class="small">Download <i class="fas fa-download"></i></a></p>
        </div>
        <div class="card" data-aos="fade-up" data-aos-delay="100">
          <h4>Question Bank — Mathematics</h4>
          <p class="small muted">Practice hundreds of quality questions with solutions.</p>
          <p style="margin-top:10px"><a href="#" class="small">Download <i class="fas fa-download"></i></a></p>
        </div>
      </div>
    </div>
  </section>

  <!-- Auto Scrolling Gallery -->
  <section class="scroll-gallery"  id="gallery">
    <div class="scroll-track">
<!-- Educational Image Gallery -->
<!-- Same images twice for infinite loop effect -->
<img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?w=600&h=400&fit=crop" alt="Books and Study Materials">
<img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&h=400&fit=crop" alt="Students Studying Together">
<img src="https://images.unsplash.com/photo-1584697964191-3c52a9b4b9e7?w=600&h=400&fit=crop" alt="Classroom Learning">
<img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?w=600&h=400&fit=crop" alt="Books and Study Materials">
<img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&h=400&fit=crop" alt="Students Studying Together">
<img src="https://images.unsplash.com/photo-1584697964191-3c52a9b4b9e7?w=600&h=400&fit=crop" alt="Classroom Learning">

<!-- Duplicate for smooth infinite effect -->
 <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?w=600&h=400&fit=crop" alt="Books and Study Materials">
<img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&h=400&fit=crop" alt="Students Studying Together">
<img src="https://images.unsplash.com/photo-1584697964191-3c52a9b4b9e7?w=600&h=400&fit=crop" alt="Classroom Learning"><img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?w=600&h=400&fit=crop" alt="Books and Study Materials">
<img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&h=400&fit=crop" alt="Students Studying Together">
<img src="https://images.unsplash.com/photo-1584697964191-3c52a9b4b9e7?w=600&h=400&fit=crop" alt="Classroom Learning">

    </div>
  </section>

  <!-- PRICING -->
  <section id="pricing" aria-labelledby="pricing-title" class="section">
    <div class="container">
      <h3 id="pricing-title" class="section-title" data-aos="fade-up">Fee Structure & Packages</h3>
      <p class="section-sub" data-aos="fade-up">Flexible packages for every learner. Contact for exact fee details & discounts.</p>
      <div class="pricing-grid" style="margin-top:20px" data-aos="fade-up">
        <div class="price-card">
          <h4>Basic</h4>
          <div class="price-amount">₹499 / month</div>
          <p class="small muted">Notes + Weekly Assignments</p>
          <div style="margin-top:12px"><button class="btn" onclick="enroll('Basic')">Choose Basic</button></div>
        </div>
        <div class="price-card">
          <h4>Standard</h4>
          <div class="price-amount">₹1,299 / month</div>
          <p class="small muted">Live Classes + Tests + Materials</p>
          <div style="margin-top:12px"><button class="btn" onclick="enroll('Standard')">Choose Standard</button></div>
        </div>
        <div class="price-card">
          <h4>Premium</h4>
          <div class="price-amount">₹2,499 / month</div>
          <p class="small muted">Personal Mentor + Doubt Sessions + Career Guidance</p>
          <div style="margin-top:12px"><button class="btn" onclick="enroll('Premium')">Choose Premium</button></div>
        </div>
      </div>
    </div>
  </section>

  <!-- TESTIMONIALS -->
  <section id="testimonials" aria-labelledby="testimonials-title" class="section">
    <div class="container">
      <h3 id="testimonials-title" class="section-title" data-aos="fade-up">What Students Say</h3>
      <div class="testimonials" data-aos="fade-up">
        <div id="test-track" class="test-track">
          <div class="test-item card">
            <strong>Ritu Sharma</strong><img src="assets/Images/Hero-image.jpg" height="100" width="100" style="border-radius:20px">
            <div class="small muted">Class 10 — 93%</div>
            <p class="quote">"The weekly tests helped me identify weak areas quickly. Teachers explain in a simple way."</p>
          </div>
          <div class="test-item card">
            <strong>Vikram Patel</strong><img src="assets/Images/Hero-image.jpg" height="100" width="100" style="border-radius:20px">
            <div class="small muted">Class 12 (Arts)</div>
            <p class="quote">"Crash course before boards made a huge difference. Clear strategy, great practice."</p>
          </div>
          <div class="test-item card">
            <strong>Neha Singh</strong><img src="assets/Images/Hero-image.jpg" height="100" width="100" style="border-radius:20px">
            <div class="small muted">Competitive Exam</div>
            <p class="quote">"Mocks & personalized reviews improved my speed and accuracy. Highly recommended."</p>
          </div>
        </div>

        <div style="display:flex;gap:10px;justify-content:center;margin-top:14px">
          <button class="btn-outline" id="prevTest" aria-label="Previous testimonial">‹</button>
          <button class="btn-outline" id="nextTest" aria-label="Next testimonial">›</button>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section aria-labelledby="faq-title" class="section">
    <div class="container">
      <h3 id="faq-title" class="section-title" data-aos="fade-up">Frequently Asked Questions</h3>
      <div class="accordion" data-aos="fade-up" style="margin-top:18px">
        <div class="accordion-item">
          <div class="accordion-header" role="button" aria-expanded="false">Do you provide demo classes?<span class="small muted">Yes, free demo available</span></div>
          <div class="accordion-content">We offer a free demo class so you can evaluate the teaching style and batch before enrolling.</div>
        </div>
        <div class="accordion-item">
          <div class="accordion-header" role="button" aria-expanded="false">What are the batch sizes?<span class="small muted">Small & focused</span></div>
          <div class="accordion-content">We keep batch sizes small (12–20 students) so each student gets individual attention.</div>
        </div>
        <div class="accordion-item">
          <div class="accordion-header" role="button" aria-expanded="false">Can I switch between classroom & online?<span class="small muted">Flexible</span></div>
          <div class="accordion-content">Yes — depending on your package and availability, you can switch to online classes if required.</div>
        </div>
      </div>
    </div>
  </section>

  <!-- BLOG -->
  <section aria-labelledby="blog-title" class="section">
    <div class="container">
      <h3 id="blog-title" class="section-title" data-aos="fade-up">Latest from Our Blog</h3>
      <div class="section-sub" data-aos="fade-up">Study tips, exam strategies, and important notices.</div>
      <div class="blogs" style="margin-top:18px" data-aos="fade-up">
        <article class="blog-card card">
          <img src="assets/Images/blog1.jpg" alt="blog 1">
          <h4>5 Revision Tips That Actually Work</h4>
          <p class="small muted">Short, effective techniques to make the last 30 days of revision highly productive.</p>
          <p style="margin-top:10px"><a href="#" class="small">Read more →</a></p>
        </article>
        <article class="blog-card card">
          <img src="assets/Images/blog2.jpg" alt="blog 2">
          <h4>How to Ace Math: Strategy & Practice</h4>
          <p class="small muted">A simple strategy to improve speed in arithmetic & algebra problems.</p>
          <p style="margin-top:10px"><a href="#" class="small">Read more →</a></p>
        </article>
        <article class="blog-card card">
          <img src="assets/Images/blog3.jpg" alt="blog 3">
          <h4>Mock Tests — Why They Matter</h4>
          <p class="small muted">Understand your weak points and track improvement with regular mock tests.</p>
          <p style="margin-top:10px"><a href="#" class="small">Read more →</a></p>
        </article>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section id="contact" aria-labelledby="contact-title" class="section">
    <div class="container">
      <h3 id="contact-title" class="section-title" data-aos="fade-up">Contact & Support</h3>
      <div class="contact-grid" style="margin-top:20px" data-aos="fade-up">
        <div class="card contact-info">
          <h4>Visit / Contact</h4>
          <p class="small muted">ABC Coaching Centre, Near XYZ Chowk, Your City</p>
          <p style="margin-top:8px"><strong>Phone:</strong> +91 - XXXXXXXXXX</p>
          <p><strong>Email:</strong> info@abc-coaching.com</p>
          <h4 style="margin-top:18px">Office hours</h4>
          <p class="small muted">Mon–Sat • 9:00 AM – 6:00 PM</p>
        </div>

        <div class="card contact-form" role="form" aria-label="Contact form">
          <h4>Send us a message</h4>
  <form id="contactForm" method="POST">
  <label class="small">Name</label>
  <input name="name" id="name" onchange="Check_Name()" required placeholder="Your name" />

  <label class="small">Email</label>
  <input name="email" id="email" type="email" onchange="Check_Email()" required placeholder="you@example.com" />

  <label class="small">Mobile</label>
  <input name="telphone" id="telphone" type="tel" maxlength="12" onchange="Check_Mob()" required placeholder="+9152********" />

  <label class="small">Message</label>
  <textarea name="message" id="message" rows="5" placeholder="How can we help?" required></textarea>
 <span id="Error" style="font-size: 15px;"></span>
  <div style="display:flex;gap:10px;align-items:center">
    <button class="btn" id="formbtn" type="submit">Send Message</button>
  </div>

</form>

        </div>
      </div>
    </div>
  </section>

  <a id="whatsapp" href="https://wa.me/91XXXXXXXXXX" aria-label="Chat on WhatsApp" title="Chat on WhatsApp">
    <img src="assets/Images/whatsapp-logo.png" alt="WhatsApp" style="width:28px;height:28px">
  </a>
  <button id="topBtn" aria-label="Scroll to top" title="Back to top"> <img src="assets/Images/Scrolltotop.png" alt="top" style="width:28px;height:28px"></button>
<?php  include "footer.php"?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function () {
  $("#formbtn").click(function (e) {
    e.preventDefault(); // Prevent default form submission

    // Get input values
    var $form = $("#contactForm"); // Store form as jQuery object
    var nameInput = $form.find("#name").val().trim();
    var emailInput = $form.find("#email").val().trim();
    var mobInput = $form.find("#telphone").val().trim();
    var smsInput = $form.find("#message").val().trim();

    // Validate fields
    if(nameInput === "" || emailInput === "" || mobInput === "" || smsInput === "") {
      $("#Error").html("All fields are required!").show();
      return;
    }

    // AJAX call
    $.ajax({
      type: "POST",
      url: "send.php",
      data: {
        name: nameInput,
        email: emailInput,
        telphone: mobInput,
        message: smsInput
      },
      success: function (response) {
        // Show response message
        $("#Error").html(response).show();

        // Properly reset the form
        $form[0].reset(); // Make sure to use the DOM element, not jQuery object

        // Optionally, clear focus
        $form.find("input, textarea").blur();

        // Hide message after 5 seconds
        setTimeout(function () {
          $("#Error").fadeOut();
        }, 5000);
      },
      error: function () {
        $("#Error").html("Something went wrong. Try again.").show();
        setTimeout(function () {
          $("#Error").fadeOut();
        }, 5000);
      }
    });
  });
});
</script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="script.js"></script>
</body>
</html>
