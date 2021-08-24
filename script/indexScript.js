$(document).ready(function () {
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll > 100) {
      $(".navbar-brand").css("color", "#000");
      $("nav").removeClass("navbar-dark bg-dark");
      $("nav").addClass("navbar-light bg-light");
    } else {
      $(".navbar-brand").css("color", "#fff");
      $("nav").removeClass("navbar-light bg-light");
      $("nav").addClass("navbar-dark bg-dark");
    }
  });

  $(".section5TextColor1").toggleClass("changeColor");
  $(".section5TextColor2").toggleClass("changeColor");
  $(".section5TextColor3").toggleClass("changeColor");
  $(".section5TextColor4").toggleClass("changeColor");
  $(".section5TextColor5").toggleClass("changeColor");
  $(".section5TextColor6").toggleClass("changeColor");

  //FAQ slide
  $(".question1").click(function () {
    $(".text1").slideToggle();
    $(".section5TextColor1").toggleClass("changeColor");
    $(".iconeFlecheJS1").toggleClass("fa-caret-right");
    $(".iconeFlecheJS1").toggleClass("fa-caret-down");
  });

  $(".question2").click(function () {
    $(".text2").slideToggle();
    $(".section5TextColor2").toggleClass("changeColor");
    $(".iconeFlecheJS2").toggleClass("fa-caret-right");
    $(".iconeFlecheJS2").toggleClass("fa-caret-down");
  });

  $(".question3").click(function () {
    $(".text3").slideToggle();
    $(".section5TextColor3").toggleClass("changeColor");
    $(".iconeFlecheJS3").toggleClass("fa-caret-right");
    $(".iconeFlecheJS3").toggleClass("fa-caret-down");
  });

  $(".question4").click(function () {
    $(".text4").slideToggle();
    $(".section5TextColor4").toggleClass("changeColor");
    $(".iconeFlecheJS4").toggleClass("fa-caret-right");
    $(".iconeFlecheJS4").toggleClass("fa-caret-down");
  });

  $(".question5").click(function () {
    $(".text5").slideToggle();
    $(".section5TextColor5").toggleClass("changeColor");
    $(".iconeFlecheJS5").toggleClass("fa-caret-right");
    $(".iconeFlecheJS5").toggleClass("fa-caret-down");
  });

  $(".question6").click(function () {
    $(".text6").slideToggle();
    $(".section5TextColor6").toggleClass("changeColor");
    $(".iconeFlecheJS6").toggleClass("fa-caret-right");
    $(".iconeFlecheJS6").toggleClass("fa-caret-down");
  });
});