document.addEventListener("DOMContentLoaded", function () {
	const nexBtn = document.querySelector(".next");
	const preBtn = document.querySelector(".prev");
	const carouselTab = document.querySelector(".carousel");
	const li = document.querySelector(".list");
	const itemsArr = Array.from(document.querySelectorAll(".item"));

	// Create and append the progress bar
	const arrowsContainer = document.querySelector(".arrows");

	if (!arrowsContainer) {
		console.error("Error: .arrows element not found.");
		return;
	}

	const progressBarContainerTab = document.createElement("div");
	progressBarContainerTab.className = "progress-bar-container";

	const progressBarTab = document.createElement("div");
	progressBarTab.className = "progress-bar";

	progressBarContainerTab.appendChild(progressBarTab);
	arrowsContainer.appendChild(progressBarContainerTab);

	// Event listeners for navigation buttons
	nexBtn.addEventListener("click", () => handleSliderNavigation("next"));
	preBtn.addEventListener("click", () => handleSliderNavigation("prev"));

	// Add attribute to each item
	itemsArr.forEach((item, index) => {
		const title = item.querySelector(".title");
		if (title) {
			title.setAttribute("data-item", index + 1);
		}
	});

	// Handles slider navigation (next/prev)
	function handleSliderNavigation(direction) {
		const sliderItems = li.querySelectorAll(".item");

		if (sliderItems.length === 0) return;

		// Find the current active item
		const currentActive = document.querySelector(".item.active");
		if (currentActive) {
			currentActive.classList.remove("active");
			currentActive.querySelector(".content").classList.add("fade-out");
		}

		if (direction === "next") {
			li.appendChild(sliderItems[0]); // Move the first item to the end
			carouselTab.classList.add("next");
		} else if (direction === "prev") {
			li.prepend(sliderItems[sliderItems.length - 1]); // Move last item to start
			carouselTab.classList.add("prev");
		}

		setTimeout(() => {
			afterSlideChange();
		}, 300); // Wait before showing new content
	}

	// Logs the current active slide's index
	function afterSlideChange() {
		const slideNumberElement = document.querySelector(".slide-number");
		if (slideNumberElement) slideNumberElement.remove();

		const sliderItems = Array.from(li.querySelectorAll(".item"));

		if (sliderItems.length < 2) return;

		const activeItem = sliderItems[1]; // Middle item is the new active one
		activeItem.classList.add("active");
		const content = activeItem.querySelector(".content");
		if (content) {
			content.classList.remove("fade-out");
			content.classList.add("fade-in");
			setTimeout(() => content.style.opacity = 1, 50);
		}

		const activeIndex = parseInt(
			activeItem.querySelector(".title")?.getAttribute("data-item") || "1"
		);

		const div = document.createElement("div");
		div.classList.add("slide-number");
		div.textContent = `${activeIndex < 10 ? "0" : ""}${activeIndex}/${sliderItems.length}`;

		arrowsContainer.appendChild(div);
		updateProgressBar();
	}

	// Updates the progress bar
	function updateProgressBar() {
		const totalSlides = itemsArr.length;
		const sliderItems = Array.from(li.querySelectorAll(".item"));

		if (sliderItems.length === 0) return;

		const activeItem = parseInt(
			sliderItems[0].querySelector(".title")?.getAttribute("data-item") || "1"
		);

		const progressPercentage = (activeItem / totalSlides) * 100;
		progressBarTab.style.width = `${progressPercentage}%`;
	}

	// Initialize the first active item
	itemsArr[0].classList.add("active");
	const firstContent = itemsArr[0].querySelector(".content");
	if (firstContent) {
		firstContent.classList.add("fade-in");
		setTimeout(() => firstContent.style.opacity = 1, 50);
	}

	afterSlideChange();
});
