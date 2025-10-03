<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Your Coaching Name</title>

  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="animation.css">

   <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>

  <!-- Header -->
  <header>
    <div class="brand">
      <img src="assets/Images/Hero-image - Copy.jpg" alt="logo" style="width:44px;height:44px;border-radius:8px;object-fit:cover;">
      <h1>XYZ Coaching Centre</h1>
    </div>

    <!-- Desktop Nav -->
    <nav class="desktop-nav" aria-label="Main Navigation">
      <a href="#home">Home</a>
      <a href="#about">About</a>
      <a href="#results">Results</a>
      <a href="#results">Materials</a>
      <a href="#gallery">Gallery</a>
      <a href="#contact">Contact</a>
    </nav>

    <!-- Hamburger for mobile -->
    <button class="hamburger" id="hamburger" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-menu">
      <span class="bar" aria-hidden="true"></span>
    </button>
  </header>

  <!-- Mobile slide-down menu -->
  <div class="mobile-menu" id="mobile-menu" aria-hidden="true">
    <a href="#home" class="mobile-link">Home</a>
    <a href="#about" class="mobile-link">About</a>
    <a href="#results" class="mobile-link">Results</a>
    <a href="#results">Materials</a>
    <a href="#gallery" class="mobile-link">Gallery</a>
    <a href="#contact" class="mobile-link">Contact</a>
    <a href="#contact" class="cta">Join Now</a>
  </div>

  <!-- Hero -->
  <section class="hero animationtype1" id="home">
    <div>
      <h1>Your tagline ............</h1>
      <h2>Shaping Bright Futures</h2>
      <p>Quality education for Classes 5–8, 9–10, and Intermediate students</p>
      <button class="btn">Join Now</button>
    </div>
  </section>

  <!-- About -->
  <section id="about" aria-labelledby="about-title">
    <h2 id="about-title" class="section-title">About Us</h2>
    <div class="about">
      <div>
        <p class="animationtype3">XYZ .... Coaching Centre enthu students ke liye ek supportive aur result-oriented environment provide karta hai.
          Hum 5th se Intermediate tak students ko conceptual clarity, doubt clearing sessions aur exam-focused practice dete hain. Experienced teachers aur personalised attention hamari khasiyat hai.
        <mark>Write your own About</mark>
        </p>
        <button class="btn">Explore</button>
      </div>
      <img src="assets/Images/picture2.jpg" alt="Classroom" class="animationtype2">
    </div>
  </section>

  <!-- Results -->
  <section id="results" aria-labelledby="results-title" class="animationtype1">
    <h2 id="results-title" class="section-title">Our Results</h2>
    <div class="results">
      <div class="card"><h3>Topper 2024</h3><p>ABC</p><small>Roll-code: 230134</small><p>91.03% in Class 10 Board Exams</p></div>
      <div class="card"><h3>Topper 2023</h3><p>PQR</p><small>Roll-code: 230134</small><p>91% in Class 12 Board Exams</p></div>
      <div class="card"><h3>Consistent Growth</h3><p>Over 500+ students with 90%+ scores</p></div>
    </div>
  </section>

<!-- Study Material Section -->
<section id="materials" aria-labelledby="materials-title" class="animationtype1">
  <h2 id="materials-title" class="section-title">BSEB 10th Previous Year Papers</h2>
  <div class="accordion">
    <!-- 2025 Papers -->
    <div class="accordion-item">
      <button class="accordion-header">📂 2025 Question Papers</button>
      <div class="accordion-content">
        <a href="downloads/bseb-10th-2025-math.pdf" download>Download</a>
      </div>
    </div>

    <!-- 2024 Papers -->
    <div class="accordion-item">
      <button class="accordion-header">📂 2024 Question Papers</button>
      <div class="accordion-content">
         <a href="downloads/bseb-10th-2025-math.pdf" download>Download</a>
      </div>
    </div>

    <!-- 2023 Papers -->
    <div class="accordion-item">
      <button class="accordion-header">📂 2023 Question Papers</button>
      <div class="accordion-content">
      <a href="downloads/bseb-10th-2025-math.pdf" download>Download</a>
      </div>
    </div>

  </div>
</section>

<!-- Gallery Carousel -->
<section id="gallery" aria-labelledby="gallery-title" class="animationtype1">
  <h2 id="gallery-title" class="section-title">Gallery</h2>

  <div class="carousel">
    <div class="carousel-track">
      <img src="assets/Images/picture1.jpg" alt="Students">
      <img src="assets/Images/picture2.jpg" alt="Classroom">
      <img src="assets/Images/picture3.jpg" alt="Library">
      <img src="assets/Images/picture4.jpg" alt="Coaching">
    </div>

    <!-- Carousel Controls -->
    <button class="carousel-btn prev">&#10094;</button>
    <button class="carousel-btn next">&#10095;</button>
  </div>
</section>


  <!-- Contact -->
  <section id="contact" aria-labelledby="contact-title" >
    <h2 id="contact-title" class="section-title">Contact Us</h2>
    <div class="contact">
      <div class="contact-info animationtype3">
        <h3>Address</h3>
        <p>XYZ... Coaching Centre, Near XYZ Chowk, Your City</p>
        <h3>Phone</h3>
        <p>+91 98********</p>
        <h3>Email</h3>
        <p>info@xyz.com</p>
     </div>
      <div class="contact-form animationtype2">
        <h3>Send a Message</h3>
        <form onsubmit="event.preventDefault(); alert('Message sent (demo)');">
          <input type="text" placeholder="Your Name" required />
          <input type="email" placeholder="Your Email" required />
          <textarea rows="5" placeholder="Your Message"></textarea>
          <button type="submit" class="btn">Send</button>
        </form>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include "footer.php" ?>
  <script src="script.js"></script>
</body>
</html>
