$(document).ready(async function () {
  try {
    const router = await import("./modules/router.js");
    const loginModule = await import("./modules/auth/login.js");
    const navbarModule = await import("./components/bulma-navbar.js");

    loginModule.loginAuthentication();
    navbarModule.bulmaNavbar();
    router.initRouter(); // Init the router here
  } catch (err) {
    console.error("Error loading modules:", err);
    alert("One or more required modules could not be found or loaded.");
  }
});
