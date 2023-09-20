/**
* Template Name: Gp
* Updated: Mar 10 2023 with Bootstrap v5.2.3
* Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
(function () {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Navbar links active state on scroll
   */

  let header = select('#header')

  if (header) {
    let navbarlinks = select('#navbar .scrollto', true)

    const navbarlinksActive = () => {
      let position = window.scrollY + 200
      navbarlinks.forEach(navbarlink => {
        if (!navbarlink.hash) return
        let section = select(navbarlink.hash)
        if (!section) return
        if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
          navbarlink.classList.add('active')
        } else {
          navbarlink.classList.remove('active')
        }
      })
    }
    window.addEventListener('load', navbarlinksActive)
    onscroll(document, navbarlinksActive)


    // Корегування висоти екрану з урахуванням адресної 
    // First we get the viewport height and we multiple it by 1% to get a value for a vh unit
    // let vh = window.innerHeight * 0.01;
    // Then we set the value in the --vh custom property to the root of the document
    // document.documentElement.style.setProperty('--vh', `${vh}px`);

    /**
     * Scrolls to an element with header offset
     */
    const scrollto = (el) => {
      let header = select('#header')
      let offset = header.offsetHeight

      let elementPos = select(el).offsetTop
      window.scrollTo({
        top: elementPos - offset,
        behavior: 'smooth'
      })
    }

    /**
     * Toggle .header-scrolled class to #header when page is scrolled
     */
    let selectHeader = select('#header')
    if (selectHeader) {
      const headerScrolled = () => {
        if (window.scrollY > 100) {
          selectHeader.classList.add('header-scrolled')
        } else {
          selectHeader.classList.remove('header-scrolled')
        }
      }
      window.addEventListener('load', headerScrolled)
      onscroll(document, headerScrolled)
    }

    // Прокрутка сторінки вгору до шапки
    var progressPath = document.querySelector('.progress-wrap path');
    var pathLength = progressPath.getTotalLength();

    progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
    progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
    progressPath.style.strokeDashoffset = pathLength;
    progressPath.getBoundingClientRect();
    progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';

    var updateProgress = function () {
      var scroll = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
      var height = document.documentElement.scrollHeight - window.innerHeight;
      var progress = pathLength - (scroll * pathLength / height);

      progressPath.style.strokeDashoffset = progress;
    }

    updateProgress();

    window.addEventListener('scroll', updateProgress);

    var offset = 150;
    var duration = 550;

    window.addEventListener('scroll', function () {
      if (window.pageYOffset > offset) {
        document.querySelector('.progress-wrap').classList.add('active-progress');
      } else {
        document.querySelector('.progress-wrap').classList.remove('active-progress');
      }
    });

    document.querySelector('.progress-wrap').addEventListener('click', function (event) {
      event.preventDefault();
      window.scrollTo({
        top: 0,
        behavior: "smooth"
      });
    });

    /**
     * Mobile nav toggle
     */
    on('click', '.mobile-nav-toggle', function (e) {
      select('#navbar').classList.toggle('navbar-mobile')
      this.classList.toggle('bi-list')
      this.classList.toggle('bi-x')
    })

    /**
     * Mobile nav dropdowns activate
     */
    on('click', '.navbar .dropdown > a', function (e) {
      if (select('#navbar').classList.contains('navbar-mobile')) {
        e.preventDefault()
        this.nextElementSibling.classList.toggle('dropdown-active')
      }
    }, true)

    /**
     * Scrool with ofset on links with a class name .scrollto
     */
    on('click', '.scrollto', function (e) {
      if (select(this.hash)) {
        e.preventDefault()

        let navbar = select('#navbar')
        if (navbar.classList.contains('navbar-mobile')) {
          navbar.classList.remove('navbar-mobile')
          let navbarToggle = select('.mobile-nav-toggle')
          navbarToggle.classList.toggle('bi-list')
          navbarToggle.classList.toggle('bi-x')
        }
        scrollto(this.hash)
      }
    }, true)

    /**
     * Scroll with ofset on page load with hash links in the url
     */
    window.addEventListener('load', () => {
      if (window.location.hash) {
        if (select(window.location.hash)) {
          scrollto(window.location.hash)
        }
      }
    });



    var accordionBoxes = document.getElementsByClassName("accordion-box");
    if (accordionBoxes.length) {
      for (var i = 0; i < accordionBoxes.length; i++) {
        accordionBoxes[i].addEventListener("click", function (event) {
          var accBtn = event.target.closest(".acc-btn");
          if (accBtn) {
            var outerBox = accBtn.closest(".accordion-box");
            var target = accBtn.closest(".accordion");
            var accContent = accBtn.nextElementSibling;

            if (accContent.style.maxHeight) {
              accBtn.classList.remove("active");
              accContent.style.maxHeight = null;
              outerBox.querySelector(".accordion").classList.remove("active-block");
            } else {
              var accBtns = outerBox.querySelectorAll(".accordion .acc-btn");
              for (var j = 0; j < accBtns.length; j++) {
                accBtns[j].classList.remove("active");
              }
              accBtn.classList.add("active");
              outerBox.querySelector(".accordion").classList.remove("active-block");

              var accContents = outerBox.querySelectorAll(".accordion .acc-content");
              for (var k = 0; k < accContents.length; k++) {
                accContents[k].style.maxHeight = null;
              }
              target.classList.add("active-block");
              accContent.style.maxHeight = accContent.scrollHeight + "px";
            }
          }
        });
      }
    }
  }

  /**
     * Preloader
     */
  let preloader = select('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove()
    });
  }

  // window.addEventListener('load', function () {
  //   var header = document.getElementById('hero');
  //   if (header) {
  //     var windowHeight = window.innerHeight;
  //     var headerHeight = header.offsetHeight;
  //     var addressBarHeight = windowHeight - document.documentElement.clientHeight;

  //     header.style.height = (windowHeight - addressBarHeight) + 'px';
  //   }
  // });

})()