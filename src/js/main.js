/* eslint-disable no-undef */
const check = document.querySelector(".subscription__check");
const form = document.querySelector(".subscription__form");
const closeTelegram = document.querySelector(".telegram__close");

const examination = document.getElementById("examination");

const nextPage = document.getElementById("next__page");

$(document).ready(function () {
  if (window.screen.width > 600) {
    $(".transition-top").toggleClass("hidden active transition-top__active");
    $(".transition-1").toggleClass("transition-top__transition-1 transition-left transition-left__active");
    $(".transition-6").toggleClass("transition-top__transition-6 transition-left transition-left__active");
    $(".transition-3").toggleClass("transition-top__transition-3");
    $(".transition-4").toggleClass("transition-top__transition-4");
    $(".transition-5").toggleClass("transition-top__transition-5");
    $(".transition-11").toggleClass("transition-top__transition-11 transition-right transition-right__active");
    $(".transition-13").toggleClass("transition-top__transition-13");

    $(".transition-left").toggleClass("hidden active transition-left__active");
    $(".transition-8").toggleClass("transition-left__transition-8");
    $(".transition-10").toggleClass("transition-left__transition-10");
    $(".transition-12").toggleClass("transition-left__transition-12");

    $(".transition-right").toggleClass("hidden active transition-right__active");
    $(".transition-7").toggleClass("transition-right__transition-7");
    $(".transition-9").toggleClass("transition-right__transition-9");

    $(".transition-bottom").toggleClass("hidden active transition-bottom__active");
    $(".transition-2").toggleClass("transition-bottom__transition-2 transition-right transition-right__active");
  } else {
    $(".transition-left").toggleClass("hidden active transition-left__active");
    $(".transition-1").toggleClass("transition-left__transition-1 transition-top transition-top__active");
    $(".transition-6").toggleClass("transition-left__transition-6 transition-top transition-top__active");
    $(".transition-8").toggleClass("transition-left__transition-8");
    $(".transition-10").toggleClass("transition-left__transition-10");
    $(".transition-11").toggleClass("transition-left__transition-11 transition-top transition-top__active");

    $(".transition-right").toggleClass("hidden active transition-right__active");
    $(".transition-2").toggleClass("transition-right__transition-2 transition-bottom transition-bottom__active");
    $(".transition-7").toggleClass("transition-right__transition-7");
    $(".transition-9").toggleClass("transition-right__transition-9");
    $(".transition-12").toggleClass("transition-right__transition-12");

    $(".transition-top").toggleClass("hidden active transition-top__active");
    $(".transition-3").toggleClass("transition-top__transition-3");
    $(".transition-4").toggleClass("transition-top__transition-4");
    $(".transition-5").toggleClass("transition-top__transition-5");
    $(".transition-13").toggleClass("transition-top__transition-13");
  }
});

let toggel = true;

function openNextPage() {
  nextPage.href = "info.html";
  toggel = false;
}

check.addEventListener("click", () => {
  if (toggel) {
    form.style.display = "block";

    closeTelegram.addEventListener("click", () => {
      form.style.display = "none";
    });

    examination.addEventListener("click", () => {
      const name = document.querySelector(".text__input input").value;
      console.log("name: @" + name);
      form.style.display = "none";

      let nickname = document.querySelector(".text__input input").value;
      if (nickname !== "") {
        setTimeout(openNextPage, 3000);
      }
    });
  }
});
