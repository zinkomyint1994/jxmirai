document.addEventListener("DOMContentLoaded", function () {
    const track = document.querySelector(".slider-track");
    const images = document.querySelectorAll(".slider-track img");
    const prevBtn = document.querySelector(".prev");
    const nextBtn = document.querySelector(".next");
  
    let index = 0;
    const imageCount = images.length;
  
    // Clone images for infinite loop effect
    const firstClone = images[0].cloneNode(true);
    const lastClone = images[imageCount - 1].cloneNode(true);
    track.appendChild(firstClone);
    track.insertBefore(lastClone, images[0]);
  
    let currentIndex = 1;
    const imageWidth = images[0].clientWidth;
  
    track.style.transform = `translateX(-${imageWidth * currentIndex}px)`;
  
    nextBtn.addEventListener("click", () => {
      if (currentIndex >= imageCount) return;
      currentIndex++;
      track.style.transition = "transform 0.4s ease-in-out";
      track.style.transform = `translateX(-${imageWidth * currentIndex}px)`;
    });
  
    prevBtn.addEventListener("click", () => {
      if (currentIndex <= 0) return;
      currentIndex--;
      track.style.transition = "transform 0.4s ease-in-out";
      track.style.transform = `translateX(-${imageWidth * currentIndex}px)`;
    });
  
    track.addEventListener("transitionend", () => {
      if (currentIndex === imageCount) {
        track.style.transition = "none";
        currentIndex = 1;
        track.style.transform = `translateX(-${imageWidth * currentIndex}px)`;
      }
      if (currentIndex === 0) {
        track.style.transition = "none";
        currentIndex = imageCount - 1;
        track.style.transform = `translateX(-${imageWidth * currentIndex}px)`;
      }
    });
  
    // Optional: Auto resize images if window resizes
    window.addEventListener("resize", () => {
      const newImageWidth = images[0].clientWidth;
      track.style.transform = `translateX(-${newImageWidth * currentIndex}px)`;
    });
  });
  
  function toggleMenu() {
    const sidebar = document.getElementById("sidebar");
    const menuBtn = document.getElementById("menuBtn");

    // Toggle sidebar
    if (sidebar.style.right === "0px") {
        sidebar.style.right = "-800px"; // Close menu
        menuBtn.classList.remove("active"); // Reset icon
    } else {
        sidebar.style.right = "0px"; // Open menu
        menuBtn.classList.add("active"); // Animate icon
    }
}

// Close menu when a link is clicked & reset icon
document.querySelectorAll(".sidebar a").forEach(link => {
    link.addEventListener("click", () => {
        toggleMenu();
    });
});

