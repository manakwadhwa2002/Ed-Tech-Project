// Mobile Nav Menu
function openNavMenu(){
    var x = document.getElementById("nav-links");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

// Free Consultation Button
function onLoadAnimate() {
  document.getElementById('fc-btn').style.display = 'block';
}
$(document).ready(function () {
  $("#fc-btn").animate({
    left: "-12.2vh"
  });
});

onLoadAnimate();

// Whatsapp button display on scroll

mybutton = document.getElementById("whts-btn");
fcbutton = document.getElementById("fc-btn");
window.onscroll = function () { scrollFunction() };

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
    fcbutton.style.display = "none";
  } else {
    mybutton.style.display = "none";
  }
}

// Header H1 Text Typing Effect

class TypeWriter {
  constructor(txtElement, words, wait = 1500) {
    this.txtElement = txtElement;
    this.words = words;
    this.txt = '';
    this.wordIndex = 0;
    this.wait = parseInt(wait, 10);
    this.type();
    this.isDeleting = false;
  }

  type() {
    // Current index of word
    const current = this.wordIndex % this.words.length;
    // Get full text of current word
    const fullTxt = this.words[current];

    // Check if deleting
    if (this.isDeleting) {
      // Remove char
      this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
      // Add char
      this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    // Insert txt into element
    this.txtElement.innerHTML = `<span class="txt">${this.txt}</span>`;

    // Initial Type Speed
    let typeSpeed = 100;

    if (this.isDeleting) {
      typeSpeed /= 2;
    }

    // If word is complete
    if (!this.isDeleting && this.txt === fullTxt) {
      // Make pause at end
      typeSpeed = this.wait;
      // Set delete to true
      this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
      this.isDeleting = false;
      // Move to next word
      this.wordIndex++;
      // Pause before start typing
      typeSpeed = 500;
    }

    setTimeout(() => this.type(), typeSpeed);
  }
}


// Init On DOM Load
document.addEventListener('DOMContentLoaded', init);

// Init App
function init() {
  const txtElement = document.querySelector('.txt-type');
  const words = JSON.parse(txtElement.getAttribute('data-words'));
  const wait = txtElement.getAttribute('data-wait');
  // Init TypeWriter
  new TypeWriter(txtElement, words, wait);
}

// Header Slider -> Moving Numbers

const counters = document.querySelectorAll('.counter');
const speed = 100; // The higher the slower

counters.forEach(counter => {
  const updateCount = () => {
    const target = +counter.getAttribute('data-target');
    const count = +counter.innerText;

    // Lower inc to slow and higher to slow
    const inc = Math.floor(target / 24);

    //console.log(inc);
    // console.log(count);

    // Check if target is reached
    if (count < target) {
      // Add inc to count and output in counter
      counter.innerText = count + inc;
      // Call function every ms
      setTimeout(updateCount, 10);
    } else {
      counter.innerText = target;
    }
  };

  updateCount();
});

// Get Expert Advice form

// ******* Open Form *******
function openExpertAdviceForm(){
  document.getElementById('get-expert-advice-form').style.display = 'block';
}

// ******* Close Form *******

function closeExpertAdviceForm(){
  document.getElementById('get-expert-advice-form').style.display = 'none';
}

// Display On Scroll
function displayPopup(){
  document.getElementById('get-expert-advice-form').style.display = 'block';
}

setTimeout(displayPopup, 10555555000);

// Login, Signup and Forgot Password Form

function loadLoginForm(){
  document.getElementById('load-lsfp-form').style.display = 'block';
  document.getElementById('supfr').style.display = "none";
  document.getElementById('fpfr').style.display = "none";
  document.getElementById('lsfp-form-right').innerHTML = document.getElementById('lgfr').innerHTML;
}

function loadSignUpForm(){
  document.getElementById('load-lsfp-form').style.display = 'block';
  document.getElementById('lgfr').style.display = "none";
  document.getElementById('fpfr').style.display = "none";
  document.getElementById('lsfp-form-right').innerHTML = document.getElementById('supfr').innerHTML;
}

function loadForgotPasswordForm(){
  document.getElementById('load-lsfp-form').style.display = 'block';
  document.getElementById('lgfr').style.display = "none";
  document.getElementById('supfr').style.display = "none";
  document.getElementById('lsfp-form-right').innerHTML = document.getElementById('fpfr').innerHTML;
}

function closeLsdpForm(){
  document.getElementById('load-lsfp-form').style.display = 'none';
}

// Testimonial Slider

var slideIndex = 1;

var myTimer;

var slideshowContainer;

window.addEventListener("load", function () {
  showSlides(slideIndex);
  myTimer = setInterval(function () {
    plusSlides(1)
  }, 5000)
})

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName('our-success-story-single-slide-container');
  var dots = document.getElementsByClassName('dot');

  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].classList.add("active");

}

// Your Mentors Slider

var yourMentorIndex = 1;

var ymTimer;

window.addEventListener("load", function() {
    showMentors(yourMentorIndex);
    ymTimer = setInterval(function() {
        plusMentors(1)
    }, 5000)
})

function plusMentors(n) {
    showMentors(yourMentorIndex += n);
}

function currentMentors(n) {
    showMentors(yourMentorIndex = n);
}

function showMentors(n) {
    var t;
    var mentorsSlide = document.getElementsByClassName('mtdYourMentors');
    var ympoints = document.getElementsByClassName('mentorpoints');

    if (n > mentorsSlide.length) {
        yourMentorIndex = 1;
    }
    if (n < 1) {
        yourMentorIndex = mentorsSlide.length;
    }
    for (i = 0; i < mentorsSlide.length; i++) {
        mentorsSlide[i].style.display = "none";
    }
    for (i = 0; i < ympoints.length; i++) {
        ympoints[i].className = ympoints[i].className.replace("activement", "");
    }
    mentorsSlide[yourMentorIndex - 1].style.display = "block";
    ympoints[yourMentorIndex - 1].classList.add("activement");
}


// Screen Size JS (Must be at bottom)

if (screen.width < 767) {
  document.getElementById('fc-btn').style.display = 'none';
}