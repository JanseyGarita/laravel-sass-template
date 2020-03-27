$(document).ready(() => {
  $(".navbar-toggler").click(() => {
    $(".navbar-toggler").toggleClass("collapsed");
    $(".navbar-content").fadeToggle(400);

    if ($(".navbar-toggler").css("position") === "absolute") {
      $(".navbar-toggler").css("position", "fixed");
      $(".logo").css({
        position: "fixed",
        top: "0%"
      });
    } else {
      $(".navbar-toggler").css("position", "absolute");
      $(".logo").css({ position: "relative" });
    }
  });
});
