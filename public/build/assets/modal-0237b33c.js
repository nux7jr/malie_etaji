document.addEventListener("DOMContentLoaded",o=>{document.addEventListener("click",e=>{if(e.target.dataset.modal_id){const t=e.target.dataset.modal_id,d=document.getElementById(t);d.style.display="flex",document.querySelector(".modal__close")}}),document.querySelectorAll(".modal__close").forEach(e=>{e.addEventListener("click",t=>{t.target.parentNode.parentNode.parentNode.style.display="none"},!1)})});