const check = document.querySelector(".subscription__check");
const form = document.querySelector(".subscription__form");
const closeTelegram = document.querySelector(".telegram__close");

const examination = document.querySelector(".examination");

check.addEventListener("click", () => {
  form.style.display = "block";
});

closeTelegram.addEventListener("click", () => {
  form.style.display = "none";
  console.log("close form");
});

examination.addEventListener("click", () => {
  const name = "@" + document.querySelector(".text__input input").value;
  console.log("name: " + name);
});
