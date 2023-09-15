import AOS from "aos";
import anime from "animejs/lib/anime.es.js";
const bootstrap_min = "";
const bootstrapIcons = "";
const animate = "";
const app = "";
const aos = "";
AOS.init({
  duration: 1e3,
  easing: "ease-out-back",
  once: true,
  mirror: true
});
anime({
  targets: "#hero",
  backgroundPosition: ["0%", "100%"],
  easing: "linear",
  direction: "alternate",
  loop: true,
  duration: 25e3
});
anime({
  targets: "#firstSection .img-card-1",
  translateY: -20,
  easing: "easeInOutQuad",
  direction: "alternate",
  loop: true,
  duration: 2e3
});
anime({
  targets: "#firstSection .img-card-2",
  translateY: 20,
  easing: "easeInOutQuad",
  direction: "alternate",
  loop: true,
  duration: 2e3
});
const selectors = "";
var selectElements = document.querySelectorAll("select");
selectElements.forEach(function(select) {
  var numberOfOptions = select.children.length;
  select.classList.add("select-hidden");
  var selectWrapper = document.createElement("div");
  selectWrapper.classList.add("select");
  select.parentNode.insertBefore(selectWrapper, select.nextSibling);
  var selectStyled = document.createElement("div");
  selectStyled.classList.add("select-styled");
  selectStyled.textContent = select.children[0].textContent;
  selectWrapper.appendChild(selectStyled);
  var selectOptions = document.createElement("ul");
  selectOptions.classList.add("select-options");
  selectWrapper.appendChild(selectOptions);
  for (var i = 0; i < numberOfOptions; i++) {
    var option = select.children[i];
    var listItem = document.createElement("li");
    listItem.textContent = option.textContent;
    listItem.setAttribute("rel", option.value);
    selectOptions.appendChild(listItem);
  }
  var listItems = selectOptions.children;
  selectStyled.addEventListener("click", function(e) {
    e.stopPropagation();
    var activeSelects = document.querySelectorAll("div.select-styled.active");
    for (var i2 = 0; i2 < activeSelects.length; i2++) {
      var activeSelect = activeSelects[i2];
      if (activeSelect !== this) {
        activeSelect.classList.remove("active");
        activeSelect.nextElementSibling.style.display = "none";
      }
    }
    this.classList.toggle("active");
    this.nextElementSibling.style.display = this.classList.contains("active") ? "block" : "none";
  });
  for (var i = 0; i < listItems.length; i++) {
    listItems[i].addEventListener("click", function(e) {
      e.stopPropagation();
      selectStyled.textContent = this.textContent;
      selectStyled.classList.remove("active");
      select.value = this.getAttribute("rel");
      selectOptions.style.display = "none";
    });
  }
  document.addEventListener("click", function() {
    selectStyled.classList.remove("active");
    selectOptions.style.display = "none";
  });
});
const wizard$1 = "";
class Steps {
  constructor(wizard2) {
    this.wizard = wizard2;
    this.steps = this.getSteps();
    this.stepsQuantity = this.getStepsQuantity();
    this.currentStep = 0;
  }
  setCurrentStep(currentStep) {
    this.currentStep = currentStep;
  }
  getSteps() {
    return this.wizard.getElementsByClassName("step");
  }
  getStepsQuantity() {
    return this.getSteps().length;
  }
  handleConcludeStep() {
    this.steps[this.currentStep].classList.add("-completed");
  }
  handleStepsClasses(movement) {
    if (movement > 0)
      this.steps[this.currentStep - 1].classList.add("-completed");
    else if (movement < 0)
      this.steps[this.currentStep].classList.remove("-completed");
  }
}
class Panels {
  constructor(wizard2) {
    this.wizard = wizard2;
    this.panelsContainer = this.getPanelsContainer();
    this.panels = this.getPanels();
    this.currentStep = 0;
    this.updatePanelsPosition(this.currentStep);
  }
  // getCurrentPanelHeight() {
  // return `${this.getPanels()[this.currentStep].offsetHeight}px`;
  // }
  getPanelsContainer() {
    return this.wizard.querySelector(".panels");
  }
  getPanels() {
    return this.wizard.getElementsByClassName("panel");
  }
  // updatePanelsContainerHeight() {
  // this.panelsContainer.style.height = this.getCurrentPanelHeight();
  // }
  updatePanelsPosition(currentStep) {
    const panels = this.panels;
    this.panelWidth;
    for (let i = 0; i < panels.length; i++) {
      panels[i].classList.remove(
        "movingIn",
        "movingOutBackward",
        "movingOutFoward"
      );
      if (i !== currentStep) {
        if (i < currentStep)
          panels[i].classList.add("movingOutBackward");
        else if (i > currentStep)
          panels[i].classList.add("movingOutFoward");
      } else {
        panels[i].classList.add("movingIn");
      }
    }
  }
  setCurrentStep(currentStep) {
    this.currentStep = currentStep;
    this.updatePanelsPosition(currentStep);
  }
}
class Wizard {
  constructor(obj) {
    this.wizard = obj;
    this.panels = new Panels(this.wizard);
    this.steps = new Steps(this.wizard);
    this.stepsQuantity = this.steps.getStepsQuantity();
    this.currentStep = this.steps.currentStep;
    this.concludeControlMoveStepMethod = this.steps.handleConcludeStep.bind(this.steps);
    this.wizardConclusionMethod = this.handleWizardConclusion.bind(this);
  }
  updateButtonsStatus() {
    if (this.currentStep === 1)
      this.nextControl.innerHTML = '<i class="bi bi-chat-square-text-fill me-2"></i>До опису<i class="bi bi-arrow-right-short ms-2"></i>';
    if (this.currentStep === 2)
      this.nextControl.innerHTML = '<i class="bi bi-chat-square-text-fill me-2"></i>Підтвердження<i class="bi bi-arrow-right-short ms-2"></i>';
    if (this.currentStep === 0)
      this.previousControl.classList.add("d-none");
    else
      this.previousControl.classList.remove("d-none");
  }
  updtadeCurrentStep(movement) {
    this.currentStep += movement;
    this.steps.setCurrentStep(this.currentStep);
    this.panels.setCurrentStep(this.currentStep);
    this.handleNextStepButton();
    this.updateButtonsStatus();
    const animateActiveIconClass = ["d-block", "animate__animated", "animate__tada", "animate__infinite"];
    const stepIcons = document.querySelectorAll("p.step__number > i");
    for (let i = 0; i < stepIcons.length; i++) {
      stepIcons[i].classList.remove(...animateActiveIconClass);
      stepIcons[this.currentStep].classList.add(...animateActiveIconClass);
    }
  }
  handleNextStepButton() {
    if (this.currentStep === this.stepsQuantity - 1) {
      this.nextControl.innerHTML = '<i class="bi bi-send-fill me-2"></i>Відправити заявку';
      this.nextControl.removeEventListener("click", this.nextControlMoveStepMethod);
      this.nextControl.addEventListener("click", this.concludeControlMoveStepMethod);
      this.nextControl.addEventListener("click", this.wizardConclusionMethod);
    } else {
      this.nextControl.innerHTML = '<i class="bi bi-camera-fill me-2"></i>До фото<i class="bi bi-arrow-right-short ms-2"></i>';
      this.nextControl.addEventListener("click", this.nextControlMoveStepMethod);
      this.nextControl.removeEventListener("click", this.concludeControlMoveStepMethod);
      this.nextControl.removeEventListener("click", this.wizardConclusionMethod);
    }
  }
  handleWizardConclusion() {
    this.wizard.classList.add("completed");
  }
  addControls(previousControl, nextControl) {
    this.previousControl = previousControl;
    this.nextControl = nextControl;
    this.previousControlMoveStepMethod = this.moveStep.bind(this, -1);
    this.nextControlMoveStepMethod = this.moveStep.bind(this, 1);
    previousControl.addEventListener("click", this.previousControlMoveStepMethod);
    nextControl.addEventListener("click", this.nextControlMoveStepMethod);
    this.updateButtonsStatus();
  }
  moveStep(movement) {
    if (this.validateMovement(movement)) {
      this.updtadeCurrentStep(movement);
      this.steps.handleStepsClasses(movement);
    } else {
      throw "This was an invalid movement";
    }
  }
  validateMovement(movement) {
    const fowardMov = movement > 0 && this.currentStep < this.stepsQuantity - 1;
    const backMov = movement < 0 && this.currentStep > 0;
    return fowardMov || backMov;
  }
}
let wizardElement = document.getElementById("wizard");
let wizard = new Wizard(wizardElement);
let buttonNext = document.querySelector(".next");
let buttonPrevious = document.querySelector(".previous");
wizard.addControls(buttonPrevious, buttonNext);
(function() {
  const select = (el, all = false) => {
    el = el.trim();
    if (all) {
      return [...document.querySelectorAll(el)];
    } else {
      return document.querySelector(el);
    }
  };
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all);
    if (selectEl) {
      if (all) {
        selectEl.forEach((e) => e.addEventListener(type, listener));
      } else {
        selectEl.addEventListener(type, listener);
      }
    }
  };
  const onscroll = (el, listener) => {
    el.addEventListener("scroll", listener);
  };
  let header = select("#header");
  if (header) {
    let navbarlinks = select("#navbar .scrollto", true);
    const navbarlinksActive = () => {
      let position = window.scrollY + 200;
      navbarlinks.forEach((navbarlink) => {
        if (!navbarlink.hash)
          return;
        let section = select(navbarlink.hash);
        if (!section)
          return;
        if (position >= section.offsetTop && position <= section.offsetTop + section.offsetHeight) {
          navbarlink.classList.add("active");
        } else {
          navbarlink.classList.remove("active");
        }
      });
    };
    window.addEventListener("load", navbarlinksActive);
    onscroll(document, navbarlinksActive);
    const scrollto = (el) => {
      let header2 = select("#header");
      let offset2 = header2.offsetHeight;
      let elementPos = select(el).offsetTop;
      window.scrollTo({
        top: elementPos - offset2,
        behavior: "smooth"
      });
    };
    let selectHeader = select("#header");
    if (selectHeader) {
      const headerScrolled = () => {
        if (window.scrollY > 100) {
          selectHeader.classList.add("header-scrolled");
        } else {
          selectHeader.classList.remove("header-scrolled");
        }
      };
      window.addEventListener("load", headerScrolled);
      onscroll(document, headerScrolled);
    }
    var progressPath = document.querySelector(".progress-wrap path");
    var pathLength = progressPath.getTotalLength();
    progressPath.style.transition = progressPath.style.WebkitTransition = "none";
    progressPath.style.strokeDasharray = pathLength + " " + pathLength;
    progressPath.style.strokeDashoffset = pathLength;
    progressPath.getBoundingClientRect();
    progressPath.style.transition = progressPath.style.WebkitTransition = "stroke-dashoffset 10ms linear";
    var updateProgress = function() {
      var scroll = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
      var height = document.documentElement.scrollHeight - window.innerHeight;
      var progress = pathLength - scroll * pathLength / height;
      progressPath.style.strokeDashoffset = progress;
    };
    updateProgress();
    window.addEventListener("scroll", updateProgress);
    var offset = 150;
    window.addEventListener("scroll", function() {
      if (window.pageYOffset > offset) {
        document.querySelector(".progress-wrap").classList.add("active-progress");
      } else {
        document.querySelector(".progress-wrap").classList.remove("active-progress");
      }
    });
    document.querySelector(".progress-wrap").addEventListener("click", function(event) {
      event.preventDefault();
      window.scrollTo({
        top: 0,
        behavior: "smooth"
      });
    });
    on("click", ".mobile-nav-toggle", function(e) {
      select("#navbar").classList.toggle("navbar-mobile");
      this.classList.toggle("bi-list");
      this.classList.toggle("bi-x");
    });
    on("click", ".navbar .dropdown > a", function(e) {
      if (select("#navbar").classList.contains("navbar-mobile")) {
        e.preventDefault();
        this.nextElementSibling.classList.toggle("dropdown-active");
      }
    }, true);
    on("click", ".scrollto", function(e) {
      if (select(this.hash)) {
        e.preventDefault();
        let navbar = select("#navbar");
        if (navbar.classList.contains("navbar-mobile")) {
          navbar.classList.remove("navbar-mobile");
          let navbarToggle = select(".mobile-nav-toggle");
          navbarToggle.classList.toggle("bi-list");
          navbarToggle.classList.toggle("bi-x");
        }
        scrollto(this.hash);
      }
    }, true);
    window.addEventListener("load", () => {
      if (window.location.hash) {
        if (select(window.location.hash)) {
          scrollto(window.location.hash);
        }
      }
    });
    var accordionBoxes = document.getElementsByClassName("accordion-box");
    if (accordionBoxes.length) {
      for (var i = 0; i < accordionBoxes.length; i++) {
        accordionBoxes[i].addEventListener("click", function(event) {
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
  let preloader = select("#preloader");
  if (preloader) {
    window.addEventListener("load", () => {
      preloader.remove();
    });
  }
  window.addEventListener("load", function() {
    var header2 = document.getElementById("hero");
    if (header2) {
      var windowHeight = window.innerHeight;
      header2.offsetHeight;
      var addressBarHeight = windowHeight - document.documentElement.clientHeight;
      header2.style.height = windowHeight - addressBarHeight + "px";
    }
  });
})();
