document.querySelectorAll(".slider-container").forEach((slider) => {
	let mainImage = slider.querySelector(".main-image img");
	let thumbnails = slider.querySelectorAll(".thumb");

	thumbnails.forEach((thumb) => {
		thumb.addEventListener("click", function () {
			// Update main image
			mainImage.src = this.src;

			// Remove "active" from all thumbnails in this slider
			thumbnails.forEach((img) => img.classList.remove("active"));

			// Add "active" class to clicked thumbnail
			this.classList.add("active");
		});
	});
});
