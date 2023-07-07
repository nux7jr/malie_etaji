document.addEventListener("DOMContentLoaded", (evt) => {
  const menuItem = document.querySelectorAll(".footer-pages__title")
  console.log(menuItem)
  menuItem.forEach((elem) => {
    elem.addEventListener('click', (evt) => {
      // console.log(evt)
      // builtins.EventTarget.parentElement
      evt.target.parentElement.classList.toggle('footer__item--active');
    })
  })
})