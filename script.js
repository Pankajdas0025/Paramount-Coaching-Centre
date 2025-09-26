 // Hamburger toggle
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileLinks = document.querySelectorAll('.mobile-link');

    function openMenu(){
      hamburger.classList.add('active');
      hamburger.setAttribute('aria-expanded','true');
      mobileMenu.classList.add('open');
      mobileMenu.setAttribute('aria-hidden','false');
    }
    function closeMenu(){
      hamburger.classList.remove('active');
      hamburger.setAttribute('aria-expanded','false');
      mobileMenu.classList.remove('open');
      mobileMenu.setAttribute('aria-hidden','true');
    }

    hamburger.addEventListener('click',()=>{
      if(mobileMenu.classList.contains('open')) closeMenu(); else openMenu();
    });

    // Close menu when any mobile link is clicked (good UX)
    mobileLinks.forEach(link=>{
      link.addEventListener('click', ()=> {
        // small timeout so link navigation feels natural on click
        setTimeout(()=> closeMenu(), 150);
      });
    });

    // Close mobile menu on ESC
    document.addEventListener('keydown', (e)=>{
      if(e.key === 'Escape' && mobileMenu.classList.contains('open')) closeMenu();
    });

    // Optional: close menu on resize to desktop
    window.addEventListener('resize', ()=>{
      if(window.innerWidth > 768 && mobileMenu.classList.contains('open')){
        closeMenu();
      }
    });








// Previous year Question

  const headers = document.querySelectorAll(".accordion-header");
  headers.forEach(header => {
    header.addEventListener("click", () => {
      const content = header.nextElementSibling;
      content.style.display = content.style.display === "block" ? "none" : "block";
    });
  });








// For Caresoul Effects


  const track = document.querySelector(".carousel-track");
  const slides = document.querySelectorAll(".carousel-track img");
  const prevBtn = document.querySelector(".carousel-btn.prev");
  const nextBtn = document.querySelector(".carousel-btn.next");

  let index = 0;

  function showSlide(i) {
    index = (i + slides.length) % slides.length;
    track.style.transform = `translateX(-${index * 100}%)`;
  }

  // Buttons
  prevBtn.addEventListener("click", () => showSlide(index - 1));
  nextBtn.addEventListener("click", () => showSlide(index + 1));

  // Auto-slide every 4s
  setInterval(() => showSlide(index + 1), 4000);

