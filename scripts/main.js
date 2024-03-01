let logo = document.querySelector("#logo");
let sidebar = document.querySelector(".sidebar");
logo.onclick = function () {
  sidebar.classList.toggle("active");
};
