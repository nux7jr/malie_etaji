document.addEventListener("DOMContentLoaded",e=>{});const a=document.querySelectorAll(".faq__item");a.forEach(e=>{e.addEventListener("click",t=>{t.target.classList.contains("faq__item")?t.target.classList.toggle("faq__item-active"):t.target.closest(".faq__item").classList.toggle("faq__item-active")},!1)});
