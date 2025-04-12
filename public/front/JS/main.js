// Start Option's
let myOptions = document.querySelector(".options");
let theIconForOptions = myOptions.querySelector(".icon i");
let colorList = document.querySelectorAll(".color-box li");

// LocalStorage
let myColorFromLocal = window.localStorage.getItem("mainColor");

if (myColorFromLocal != null) {
  document.body.style.setProperty("--mainColor", myColorFromLocal);

  document.querySelectorAll(".color-box li").forEach((el) => {
    el.classList.remove("active");

    if (el.dataset.color === myColorFromLocal) {
      el.classList.add("active");
    }
  });
}

theIconForOptions.addEventListener("click", (e) => {
  e.target.classList.toggle("fa-spin");
  myOptions.classList.toggle("active");
});

colorList.forEach((item) => {
  item.addEventListener("click", (e) => {
    e.target.parentElement
      .querySelectorAll(".active")
      .forEach((el) => el.classList.remove("active"));
    e.target.classList.add("active");

    document.body.style.setProperty("--mainColor", e.target.dataset.color);
    window.localStorage.setItem("mainColor", e.target.dataset.color);
  });
});

// Start Navbar
let myIcon = document.querySelector(".toggle");
let myList = document.querySelector(".list");

myIcon.addEventListener("click", () => {
  myList.classList.toggle("active");

  if (myList.classList.contains("active")) {
    myIcon.classList.add("fa-xmark");
  } else {
    myIcon.classList.remove("fa-xmark");
  }
});

// Start Nav
let myLinkFromNav = document.querySelectorAll(".item-nav");

myLinkFromNav.forEach((el) => {
  el.addEventListener("click", (e) => {
    e.preventDefault();

    myLinkFromNav.forEach((el) => el.classList.remove("active"));

    e.target.classList.add("active");



    document.querySelector(e.target.dataset.section).scrollIntoView({
      behavior: "smooth",
    });
  });
});

const myNavbar = document.querySelector(".navbar");
const myLogo = document.querySelector(".logo")

window.addEventListener("scroll", () => {
  if (window.scrollY >= 600) {
    myNavbar.classList.add("active");
    myLogo.classList.remove("active")
  } else {
    myNavbar.classList.remove("active");
    myLogo.classList.add("active")
  } 
});
