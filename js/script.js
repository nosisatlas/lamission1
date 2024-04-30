function toggleDropdown() {
  const dropdownMenu = document.getElementById("dropdownMenu");
  dropdownMenu.classList.toggle("hidden");
  const button = document.querySelector(".dropdown-toggle");
  const expanded = button.getAttribute("aria-expanded") === "true" || false;
  button.setAttribute("aria-expanded", !expanded);
}

// Mobile menu toggle
const mobileMenuButton = document.querySelector(".mobile-menu-button");
const mobileMenu = document.querySelector(".navigation-menu");

mobileMenuButton.addEventListener("click", () => {
  mobileMenu.classList.toggle("hidden");
});
