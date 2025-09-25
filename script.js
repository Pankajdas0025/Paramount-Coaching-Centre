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