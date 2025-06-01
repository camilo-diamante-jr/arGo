import { bulmaNavbar } from "./components/bulma-navbar.js";
import { argoDashboard } from "./modules/dashboard/argo-dashboard.js";
import { accomplishmentRegistry } from "./modules/registries/accomplishment/accomplishment-registry.js";

$(document).ready(function () {
  bulmaNavbar();
  argoDashboard();
  accomplishmentRegistry();
});
