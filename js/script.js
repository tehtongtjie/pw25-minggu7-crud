// Navbar toggle
const menu = document.querySelector("#menu");
const navbarNav = document.querySelector(".navbar-nav");

menu.addEventListener("click", function () {
  navbarNav.classList.toggle("active");
});

document.addEventListener("click", function (e) {
  if (!menu.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
});

// untuk menuju about section
const aboutBtn = document.getElementById("aboutBtn");
const aboutSection = document.getElementById("about");

if (aboutBtn && aboutSection) {
  aboutBtn.addEventListener("click", function (e) {
    e.preventDefault();
    aboutSection.scrollIntoView({ behavior: "smooth" });
  });
}

// untuk menuju home section
const homeBtn = document.getElementById("homeBtn");
const homeSection = document.getElementById("home");

if (homeBtn && homeSection) {
  homeBtn.addEventListener("click", function (e) {
    e.preventDefault();
    homeSection.scrollIntoView({ behavior: "smooth" });
  });
}

// untuk menuju umkm section
const umkmBtn = document.getElementById("umkmBtn");
const umkmSection = document.getElementById("umkm");

if (umkmBtn && umkmSection) {
  umkmBtn.addEventListener("click", function (e) {
    e.preventDefault();
    umkmSection.scrollIntoView({ behavior: "smooth" });
  });
}

// POP-UP REGISTER
const form = document.getElementById("register-form");
const popup = document.getElementById("pop-up");
const closePopupBtn = document.getElementById("close-pop-up");

form.addEventListener("submit", function (e) {
  e.preventDefault(); // Mencegah submit default
  popup.style.display = "flex"; // Munculkan pop-up
});

// Tombol untuk menutup pop-up
closePopupBtn.addEventListener("click", function () {
  popup.style.display = "none";
});
