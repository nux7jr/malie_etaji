document.addEventListener("DOMContentLoaded", (evt) => {
  const menuItem = document.querySelectorAll(".footer-pages__title")
  menuItem.forEach((elem) => {
    elem.addEventListener('click', (evt) => {
      evt.target.parentElement.classList.toggle('footer__item--active');
    })
  })
})