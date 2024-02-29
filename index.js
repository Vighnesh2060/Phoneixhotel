

document.addEventListener("DOMContentLoaded", function() {
    const images = document.querySelectorAll(".slideshow-image");
    let currentImageIndex = 0;

    function showImage(index) {
      images.forEach(function(image) {
        image.classList.remove("active");
      });

      images[index].classList.add("active");
    }

    function nextImage() {
      currentImageIndex = (currentImageIndex + 1) % images.length;
      showImage(currentImageIndex);
    }

    setInterval(nextImage, 3000);
  });


  // Function to toggle the navigation bar
  function toggleNavbar() {
    var navbar = document.getElementById("navbarTogglerDemo01");
    navbar.classList.toggle("show");
  }

  // redirect in home page
function redirectToHome() {
  window.location.href = "#home";
}