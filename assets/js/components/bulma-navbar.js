export function bulmaNavbar() {
  const navbar = document.querySelector(".navbar");
  if (!navbar) return;

  const burger = navbar.querySelector(".navbar-burger");
  const menu = navbar.querySelector(".navbar-menu");

  if (burger && menu) {
    burger.addEventListener("click", () => {
      burger.classList.toggle("is-active");
      menu.classList.toggle("is-active");
    });
  }

  // Close the menu when clicking outside
  document.addEventListener("click", (event) => {
    if (
      !navbar.contains(event.target) &&
      burger.classList.contains("is-active")
    ) {
      burger.classList.remove("is-active");
      menu.classList.remove("is-active");
    }
  });
}
