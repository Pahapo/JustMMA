const check = document.querySelector(".subscription__check");
const form = document.querySelector(".subscription__form");
const closeTelegram = document.querySelector(".telegram__close");

check.addEventListener("click", () => {
  form.style.display = "block";
});

closeTelegram.addEventListener("click", () => {
  form.style.display = "none";
  console.log("close form");
});
