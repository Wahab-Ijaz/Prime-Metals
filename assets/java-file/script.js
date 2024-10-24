// slidebar
function toggleContent() {
  const content = document.getElementById("slideshow");
  const showIcon = document.getElementById("show-icon");
  const hideIcon = document.getElementById("hide-icon");

  if (content.style.display === "none") {
    content.style.display = "block";
    showIcon.style.display = "none";
    hideIcon.style.display = "block";
  } else {
    content.style.display = "none";
    showIcon.style.display = "block";
    hideIcon.style.display = "none";
  }
}
window.addEventListener("scroll", function () {
  const content = document.getElementById("slideshow");
  const showIcon = document.getElementById("show-icon");
  const hideIcon = document.getElementById("hide-icon");

  if (content.style.display === "block") {
    content.style.display = "none";
    showIcon.style.display = "block";
    hideIcon.style.display = "none";
  }
});
// slidebar-end

// topscroll btn
const button = document.querySelector(".top-btn");

const displayButton = () => {
  window.addEventListener("scroll", () => {
    console.log(window.scrollY);

    if (window.scrollY > 100) {
      button.style.display = "block";
    } else {
      button.style.display = "none";
    }
  });
};

const scrollToTop = () => {
  button.addEventListener("click", () => {
    window.scroll({
      top: 0,
      left: 0,
      behavior: "smooth",
    });
    console.log(event);
  });
};

displayButton();
scrollToTop();
// topscroll btn end
// whatsapp logo
let scrollTopBtn = document.getElementById("scrollTopBtn");

window.onscroll = function () {
  if (
    document.body.scrollTop > 2800 ||
    document.documentElement.scrollTop > 2800
  ) {
    scrollTopBtn.style.display = "block";
  } else {
    scrollTopBtn.style.display = "none";
  }
};
// card
document.querySelectorAll(".card-3d").forEach((card) => {
  card.addEventListener("click", function () {
    this.querySelector(".card-inner").classList.toggle("is-flipped");
  });
});
// card-end
