const check = document.querySelector(".subscription__check");
const form = document.querySelector(".subscription__form");
const closeTelegram = document.querySelector(".telegram__close");

const examination = document.getElementById("examination");

const nextPage = document.getElementById("next__page");

let toggel = true;

function openNextPage() {
  nextPage.href = "info.html";
  toggel = false;
}

check.addEventListener("click", () => {
  if (toggel) {
    form.style.display = "block";
    setTimeout(openNextPage, 15000);

    closeTelegram.addEventListener("click", () => {
      form.style.display = "none";
    });

    examination.addEventListener("click", () => {
      const name = "@" + document.querySelector(".text__input input").value;
      console.log("name: " + name);
      form.style.display = "none";
    });
  }
});
