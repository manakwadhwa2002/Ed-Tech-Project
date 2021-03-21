// Dropdown Functionality Options

var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}

// My Profile Page

function loadpd(){
  document.getElementById('display-my-profile-content-tab-id').innerHTML = document.getElementById('personal-details').innerHTML;
  document.getElementById('pdtbtn').focus();
}
loadpd();