var dropdownBtn = document.getElementById("dropdownBtn");
var dropdownContent = document.getElementById("dropdownContent");

dropdownBtn.addEventListener("click", function() {
  dropdownContent.classList.toggle("show");
});

