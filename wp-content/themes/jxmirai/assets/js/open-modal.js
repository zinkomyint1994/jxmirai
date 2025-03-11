document.addEventListener("DOMContentLoaded", function () {
    var triggers = document.querySelectorAll(".trigger");
    var closeButtons = document.querySelectorAll(".close-button");

    function toggleModal(event) {
        var modalId = event.target.getAttribute("data-modal");
        var modal = document.getElementById(modalId);
        if (modal) {
            modal.classList.toggle("show-modal");
        }
    }

    function windowOnClick(event) {
        if (event.target.classList.contains("modal")) {
            event.target.classList.remove("show-modal");
        }
    }

    triggers.forEach((trigger) => trigger.addEventListener("click", toggleModal));
    closeButtons.forEach((button) => button.addEventListener("click", toggleModal));
    window.addEventListener("click", windowOnClick);
});
