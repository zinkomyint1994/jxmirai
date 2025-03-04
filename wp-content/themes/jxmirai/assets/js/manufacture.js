document.querySelectorAll(".slider-container").forEach((slider) => {
	let mainImage = slider.querySelector(".main-image img");
	let thumbnails = slider.querySelectorAll(".thumb");
	let prevBtn = slider.querySelector(".prev");
	let nextBtn = slider.querySelector(".next");

	let currentIndex = 0;

	// Function to update the main image
	function updateImage(index) {
		mainImage.src = thumbnails[index].src;
		thumbnails.forEach((img) => img.classList.remove("active"));
		thumbnails[index].classList.add("active");
		currentIndex = index;
	}

	// Thumbnail click event
	thumbnails.forEach((thumb, index) => {
		thumb.addEventListener("click", () => updateImage(index));
	});

	// Previous button event
	prevBtn.addEventListener("click", () => {
		let newIndex = currentIndex - 1;
		if (newIndex < 0) newIndex = thumbnails.length - 1;
		updateImage(newIndex);
	});

	// Next button event
	nextBtn.addEventListener("click", () => {
		let newIndex = currentIndex + 1;
		if (newIndex >= thumbnails.length) newIndex = 0;
		updateImage(newIndex);
	});
});
