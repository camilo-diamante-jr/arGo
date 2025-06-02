export function initRouter() {
  // Intercept all link clicks with class .link
  $("a.link").on("click", function (e) {
    e.preventDefault();
    const url = $(this).attr("href");

    if (url) {
      history.pushState({}, "", url);
      routeTo(url);
    }
  });

  // Handle browser back/forward
  $(window).on("popstate", function () {
    routeTo(location.pathname);
  });

  // Handle initial page load
  routeTo(location.pathname);
}

export async function routeTo(path) {
  // Hide all sections that end with -content
  $("div[id$='-content']").addClass("is-hidden");

  switch (path) {
    case "/dashboard":
      $("#argo-dashboard-content").removeClass("is-hidden");
      const dashboardModule = await import(
        "../modules/dashboard/argo-dashboard.js"
      );
      dashboardModule.argoDashboard();
      break;

    case "/registry/accomplishment":
      $("#accomplishent-registry-content").removeClass("is-hidden");
      const registryModule = await import(
        "../modules/registries/accomplishment/accomplishment-registry.js"
      );
      registryModule.accomplishmentRegistry();
      break;

    case "/users":
      $("#users-registry-content").removeClass("is-hidden");
      // Optional: load users module
      break;

    case "/report/accomplishment":
      $("#accomplishent-report-content").removeClass("is-hidden");
      // Optional: load reports module
      break;

    default:
      history.replaceState({}, "", "/dashboard");
      routeTo("/dashboard");
  }
}
