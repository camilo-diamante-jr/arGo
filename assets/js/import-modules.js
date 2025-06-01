$(document).ready(async function () {
  try {
    const loginModule = await import("./modules/auth/login.js");
    const navbarModule = await import("./components/bulma-navbar.js");
    const dashboardModule = await import(
      "./modules/dashboard/argo-dashboard.js"
    );
    const registryModule = await import(
      "./modules/registries/accomplishment/accomplishment-registry.js"
    );

    loginModule.loginAuthentication();
    navbarModule.bulmaNavbar();
    dashboardModule.argoDashboard();
    registryModule.accomplishmentRegistry();
  } catch (err) {
    console.error("Error loading modules:", err);
    alert("One or more required modules could not be found or loaded.");
  }
});
