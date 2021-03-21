// Open the Header Menu in Mobile View

function openHeaderMenuBlogs() {
    var y = document.getElementById('header-menu-container-id');
    if (y.style.display === "block") {
        y.style.display = "none";
    } else {
        y.style.display = "block";
    }
}

// Highlight the Common Page Menu Buttons

function highlightMenuButtons() {
    var hwhbtn = document.getElementById('hwh-id');
    var progid = document.getElementById('prog-id');
    var wmid = document.getElementById('wm-id');
    var faqid = document.getElementById('faq-id');
    var cuid = document.getElementById('cu-id');

    if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
        hwhbtn.classList.add('product-common-menu.active-btn');
    } else {
        hwhbtn.className.replace("product-common-menu.active-btn", "");
    }
}

// Change the price of product on click of radio button Admission Consulting

function admissionConsultingPriceUnderGraduateRadio() {
    document.getElementById('product-tile-inner-price-admission-consulting-tile').innerText = '74,999';
}

function admissionConsultingPriceGraduateRadio() {
    document.getElementById('product-tile-inner-price-admission-consulting-tile').innerText = '49,999';
}

function admissionConsultingPriceMbaGraduateRadio() {
    document.getElementById('product-tile-inner-price-admission-consulting-tile').innerText = '75,999';
}

// Change the price of product on click of radio button Essay SOP Writing

function essaySopPriceUnderGraduateRadio() {
    document.getElementById('product-tile-inner-price-essay-sop-tile').innerText = '11,999';
}

function essaySopPriceGraduateRadio() {
    document.getElementById('product-tile-inner-price-essay-sop-tile').innerText = '15,999';
}

// Change the price of product on click of radio button Mentoring and Profile Building

function mentoringProfileBuildingPriceUnderGraduateRadio() {
    document.getElementById('product-tile-inner-price-mentoring-and-profile-building-tile').innerText = '14,999'
}

function mentoringProfileBuildingPriceGraduateRadio() {
    document.getElementById('product-tile-inner-price-mentoring-and-profile-building-tile').innerText = '17,999'
}

// Login, Signup and Forgot Password Form

function loadLoginForm(){
    //document.getElementById('load-lsfp-form').style.display = 'block';
    document.getElementById('supfr').style.display = "none";
    document.getElementById('fpfr').style.display = "none";
    document.getElementById('lsfp-form-right').innerHTML = document.getElementById('lgfr').innerHTML;
  }
  
  function loadSignUpForm(){
    //document.getElementById('load-lsfp-form').style.display = 'block';
    document.getElementById('lgfr').style.display = "none";
    document.getElementById('fpfr').style.display = "none";
    document.getElementById('lsfp-form-right').innerHTML = document.getElementById('supfr').innerHTML;
  }
  
  function loadForgotPasswordForm(){
    //document.getElementById('load-lsfp-form').style.display = 'block';
    document.getElementById('lgfr').style.display = "none";
    document.getElementById('supfr').style.display = "none";
    document.getElementById('lsfp-form-right').innerHTML = document.getElementById('fpfr').innerHTML;
  }
  
  function closeLsdpForm(){
    //document.getElementById('load-lsfp-form').style.display = 'none';
  }
  loadLoginForm();