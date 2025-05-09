<!DOCTYPE html>
<html lang="en">
<body>
<div class="scroll_up" id="scrollBtn">
  <a href="#" id="scrollToTop">
  page top
  </a>
</div>


</body>
<script>
document.addEventListener("DOMContentLoaded", function () {
  const scrollBtn = document.getElementById("scrollBtn");
  scrollBtn.style.display = "none"; //hide on page load

  window.addEventListener("scroll", function () {
    if (window.scrollY > window.innerHeight / 2) {
      scrollBtn.style.display = "block";
    } else {
      scrollBtn.style.display = "none";
    }
  });
});

</script>
</html>
