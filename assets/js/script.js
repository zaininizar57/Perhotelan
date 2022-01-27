$(document).ready(function () {
  const burgerButton = $("#burger-button");
  const ButtonMobileNavAuth = $("#burger-mobile-nav-auth");
  const mobileNav = $("#mobile-nav");
  const mobileNavAuth = $("#mobile-nav-auth");
  const burger = $("#burger");
  const close = $("#close");

  burgerButton.click(function () {
    burger.toggleClass("hidden");
    close.toggleClass("hidden");
    mobileNav.toggleClass("flex");
    mobileNav.toggleClass("hidden");
  });

  ButtonMobileNavAuth.click(function () {
    mobileNavAuth.toggleClass("flex");
    mobileNavAuth.toggleClass("hidden");
  });
});
