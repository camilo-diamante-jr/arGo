$(document).ready(function () {
  const savedTheme = localStorage.getItem("theme");
  if (savedTheme) {
    $("html").attr("data-theme", savedTheme);
    $("#themeIcon").attr(
      "class",
      savedTheme === "dark" ? "fas fa-sun" : "fas fa-moon"
    );
  }

  $("#toggleThemeBtn").on("click", function () {
    const currentTheme = $("html").attr("data-theme");
    const newTheme = currentTheme === "dark" ? "light" : "dark";
    $("html").attr("data-theme", newTheme);
    localStorage.setItem("theme", newTheme);

    $("#themeIcon").attr(
      "class",
      newTheme === "dark" ? "fas fa-sun" : "fas fa-moon"
    );
  });
});
