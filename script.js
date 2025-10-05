 AOS.init({once:true, duration:700});

    /* Mobile menu toggle */
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobile-menu');
    hamburger && hamburger.addEventListener('click', () => {
      const open = mobileMenu.classList.toggle('open');
      hamburger.classList.toggle('active', open);
      hamburger.setAttribute('aria-expanded', open ? 'true' : 'false');
      mobileMenu.setAttribute('aria-hidden', open ? 'false' : 'true');
    });


    /* Top button */
    document.getElementById('topBtn').addEventListener('click', () => window.scrollTo({top:0, behavior:'smooth'}));

    /* Simple enroll/bookDemo handlers */
    function enroll(plan){
      alert('Thanks — you selected: ' + plan + '. Our team will contact you soon.');
    }
    function bookDemo(){
      document.getElementById('contact').scrollIntoView({behavior:'smooth'});
      // optional: focus on message field
      const textarea = document.querySelector('#contactForm textarea');
      textarea && textarea.focus();
    }

    /* Testimonials sliding (basic) */
    const track = document.getElementById('test-track');
    const prevBtn = document.getElementById('prevTest');
    const nextBtn = document.getElementById('nextTest');
    let index = 0;
    function updateTestPosition() {
      // find width of first item (fallback)
      const item = track.querySelector('.test-item');
      const w = item ? item.offsetWidth + 16 /* gap */ : 320;
      track.style.transform = `translateX(-${index * w}px)`;
    }
    nextBtn && nextBtn.addEventListener('click', ()=> {
      const items = track.querySelectorAll('.test-item').length;
      index = Math.min(items-1, index+1);
      updateTestPosition();
    });
    prevBtn && prevBtn.addEventListener('click', ()=> {
      index = Math.max(0, index-1);
      updateTestPosition();
    });
    window.addEventListener('resize', updateTestPosition);

    /* Accordion behavior */
    document.querySelectorAll('.accordion-header').forEach(header => {
      header.addEventListener('click', () => {
        const expanded = header.getAttribute('aria-expanded') === 'true';
        header.setAttribute('aria-expanded', expanded ? 'false' : 'true');
        const content = header.nextElementSibling;
        if(!content) return;
        if(expanded){
          content.style.display = 'none';
        } else {
          content.style.display = 'block';
        }
      });
    });






    // Keep loader for 3 seconds, then hide
    window.addEventListener("load", function() {
      setTimeout(function() {
        document.getElementById("loading-screen").classList.add("hidden");
      },3000); // 3000ms = 3 seconds
    });



// contact from validation....................................................
    const Errorsms = document.getElementById('Error');
    Errorsms.style.color = "red";
    const nameInput = document.getElementById('name');
    const emailInput = document.getElementById('email');
    const mobInput = document.getElementById('telphone');
    const smsInput = document.getElementById('message');


    function Check_Name() {
      const name = nameInput.value.trim();
      if (!/^[a-zA-Z\s]{4,}$/.test(name)) {
        Errorsms.innerHTML = "Please enter a valid name (letters only, min 4 characters).";
        nameInput.style.color = "red";
        setTimeout(() => {
          Errorsms.innerHTML = "";
          nameInput.value = "";
          nameInput.style.color = "black";
        }, 3000);
      } else {
        Errorsms.innerHTML = "";
      }
    }

    function Check_Email() {
      const email = emailInput.value.trim();
      if (!/^\S+@\S+\.\S+$/.test(email)) {
        Errorsms.innerHTML = "Please enter a valid email address.";
        emailInput.style.color = "red";
        setTimeout(() => {
          Errorsms.innerHTML = "";
          emailInput.value = "";
          emailInput.style.color = "black";
        }, 3000);
      } else {
        Errorsms.innerHTML = "";
      }
    }

    function Check_Mob() {
      const mobile = mobInput.value.trim();
      if (!/^\d{10}$/.test(mobile)) {
        Errorsms.innerHTML = "Mobile number must be exactly 10 digits.";
        mobInput.style.color = "red";
        setTimeout(() => {
          Errorsms.innerHTML = "";
          mobInput.value = "";
          mobInput.style.color = "black";
        }, 3000);
      } else {
        Errorsms.innerHTML = "";
      }
    }
