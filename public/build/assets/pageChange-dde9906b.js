const a=[...document.getElementsByTagName("a")];function n(r,t){var e;if(!(r===null||t==="")){for(e=r.parentNode,t=t.toUpperCase();e.tagName!=="HTML";){if(e.tagName===t)return e;e=e.parentNode}return e}}a.forEach(r=>{r.addEventListener("click",t=>{let e;t.target.tagName!=="A"?e=n(t.target,"A"):e=t.target,e.href&&e.getAttribute("href")[0]!=="#"&&e.getAttribute("data-fslightbox")===null&&(t.preventDefault(),window.location.href=e.href)})});document.addEventListener("DOMContentLoaded",()=>{const r=document.querySelector(".page-transition-container"),t=document.querySelector(".preloader-page");t.style.animationPlayState="paused",r.style.display="none"});
