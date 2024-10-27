<script type="text/javascript" src="assets/js/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
  crossorigin="anonymous"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script type="text/javascript" src="assets/js/custom.js"></script>
<script>
  document.querySelectorAll(".toggle-btn").forEach((button) => {
    button.addEventListener("click", (event) => {
      const content = event.target
        .closest(".app-feature")
        .querySelector(".toggle-content");

      if (content.style.maxHeight === "80px") {
        content.style.maxHeight = content.scrollHeight + "px";
        event.target.textContent = "See Less...";
      } else {
        content.style.maxHeight = "80px";
        event.target.textContent = "See More...";
      }
    });
  });
</script>

<script>
Fancybox.bind("[data-fancybox]", {
  // Transition effect when changing gallery items
  Carousel: {
    transition: "slide",
  },
  // Disable image zoom animation on opening and closing
  Images: {
    zoom: false,
  },
  // Custom CSS transition on opening
  showClass: "f-fadeIn",
});


</script>