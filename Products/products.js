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
    document.getElementById('adms-whsm-pkg-frm').action = '../Payment/index.php?product=admsn_under_grad';
}

function admissionConsultingPriceGraduateRadio() {
    document.getElementById('product-tile-inner-price-admission-consulting-tile').innerText = '49,999';
    document.getElementById('adms-whsm-pkg-frm').action = '../Payment/index.php?product=admsn_post_grad';
}

function admissionConsultingPriceMbaGraduateRadio() {
    document.getElementById('product-tile-inner-price-admission-consulting-tile').innerText = '75,999';
    document.getElementById('adms-whsm-pkg-frm').action = '../Payment/index.php?product=admsn_mba';
}

// Change the price of product on click of radio button Essay SOP Writing

function essaySopPriceUnderGraduateRadio() {
    document.getElementById('product-tile-inner-price-essay-sop-tile').innerText = '11,999';
    document.getElementById('essay-pkg-frm').action = '../Payment/index.php?product=ess_sop_under_grad';
}

function essaySopPriceGraduateRadio() {
    document.getElementById('product-tile-inner-price-essay-sop-tile').innerText = '15,999';
    document.getElementById('essay-pkg-frm').action = '../Payment/index.php?product=ess_sop_post_grad';
}

// Change the price of product on click of radio button Mentoring and Profile Building

function mentoringProfileBuildingPriceUnderGraduateRadio() {
    document.getElementById('product-tile-inner-price-mentoring-and-profile-building-tile').innerText = '14,999'
}

function mentoringProfileBuildingPriceGraduateRadio() {
    document.getElementById('product-tile-inner-price-mentoring-and-profile-building-tile').innerText = '17,999'
}