export function loginAuthentication() {
  $(document).on("submit", "#login-form", function (e) {
    e.preventDefault();
    const formData = $(this).serialize();

    $.ajax({
      type: "POST",
      url: "/modules/authentications/login-auth.php",
      data: formData,
      dataType: "json", // Expect JSON response
      success: function (response) {
        if (response.success) {
          window.location.href = response.redirectUrl;
        } else {
          $("#login-error").text(response.message).removeClass("is-hidden");
        }
      },
      error: function () {
        $("#login-error")
          .text("An error occurred. Please try again.")
          .removeClass("is-hidden");
      },
    });
  });
}
