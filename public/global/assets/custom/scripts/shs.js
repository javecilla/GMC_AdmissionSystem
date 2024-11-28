(function () {
  "use strict";

  // Select the hero image container
  const heroImageContainer = document.querySelector(".hero-image-container");

  if (!heroImageContainer) {
    console.error("Hero image container not found.");
    return;
  }

  // Function to handle mouse movement
  const handleHeroMouseMove = (e) => {
    const { left, top, width, height } = heroImageContainer.getBoundingClientRect();
    const x = (e.clientX - left) / width;
    const y = (e.clientY - top) / height;

    // Calculate tilt
    const tiltX = (y - 0.5) * 10; // Adjust the multiplier for stronger/weaker tilt
    const tiltY = (x - 0.5) * -10;

    // Apply 3D transform
    heroImageContainer.style.transform = `perspective(1000px) rotateX(${tiltX}deg) rotateY(${tiltY}deg)`;
  };

  // Function to reset tilt
  const resetHeroTilt = () => {
    heroImageContainer.style.transform = "perspective(1000px) rotateX(0deg) rotateY(0deg)";
  };

  // Add event listeners
  heroImageContainer.addEventListener("mousemove", handleHeroMouseMove);
  heroImageContainer.addEventListener("mouseleave", resetHeroTilt);
})();
