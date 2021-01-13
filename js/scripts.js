// Namespace
const reykr = {}

reykr.navIcon = document.getElementById('navIcon');
reykr.mobileNav = document.getElementById('mobileNav');

// Mobile menu functionality
reykr.hamburgerMenu = function () {
  // // On click, toggle mobile menu
  navIcon.addEventListener('click', function () {
    this.classList.toggle('open');
    mobileNav.classList.toggle('openNav')
  });

  // // When link is clicked in mobile menu, close the menu
  mobileNav.addEventListener('click', function (event) {
    if (event.target.tagName.toLowerCase() === 'a') {
      mobileNav.classList.toggle('openNav');
      navIcon.classList.toggle('open');
    }
  });

  // // If screen is clicked outside the mobile menu, close the menu
  document.addEventListener('click', function (event) {
    const hamburger = document.getElementById('hamburger');
    const isClickInside = hamburger.contains(event.target);
    if (!isClickInside) {
      mobileNav.classList.remove('openNav');
      navIcon.classList.remove('open');
    }
  });
}

// Back to top button
reykr.backToTop = function () {
  const up = document.getElementById('up');
  // Hide back to top button by default
  up.style.opacity = "0%";
  // Display back to top button on scroll
  window.onscroll = function () {
    const currentScrollPos = window.pageYOffset;
    if (currentScrollPos > 300) { // 300px from top
      up.style.opacity = "50%";
    } else {
      up.style.opacity = "0%";
    }
  };
}

// Smooth scroll
reykr.smoothScroll = function () {
  // Smooth scroll
  const scroll = new SmoothScroll('a[href*="#"]');
}

// Animate page elements on scroll
reykr.animateOnScroll = function () {
  // animate-on-scroll
  AOS.init({
    // Global settings:
    disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
    startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
    initClassName: 'aos-init', // class applied after initialization
    animatedClassName: 'aos-animate', // class applied on animation
    useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
    disableMutationObserver: false, // disables automatic mutations' detections (advanced)
    debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
    throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
    
    // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
    offset: 120, // offset (in px) from the original trigger point
    delay: 0, // values from 0 to 3000, with step 50ms
    duration: 400, // values from 0 to 3000, with step 50ms
    easing: 'ease', // default easing for AOS animations
    once: false, // whether animation should happen only once - while scrolling down
    mirror: false, // whether elements should animate out while scrolling past them
    anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
  });
}

// Initialize app
reykr.init = function () {
  reykr.hamburgerMenu();
  reykr.backToTop();
  reykr.smoothScroll();
  reykr.animateOnScroll();
}

// Document ready
document.addEventListener('DOMContentLoaded', reykr.init);