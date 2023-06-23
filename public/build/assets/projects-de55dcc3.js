import{i as _}from"./nouislider-1ddc2e5b.js";import{S as v}from"./swiper-bundle.min-43b74ea1.js";import{i as S}from"./project-item-5c3e1fdf.js";S(v);const m=document.querySelector(".project-wrapper");function j(r){r.sort((e,o)=>e.price_kit>o.price_kit?1:e.price_kit<o.price_kit?-1:0),Window.data=r}function y(r){r.sort((e,o)=>e.price_kit<o.price_kit?1:e.price_kit>o.price_kit?-1:0),Window.data=r}function h(){if(Window.data.length!==0){const r=document.querySelector(".quantity-obj");r.innerHTML=" "+Window.data.length+" ",m.innerHTML="",Window.data.forEach(e=>{let o=`
            <article class="project-item">
            <div class="swiper project-swiper">
                <div class="swiper-wrapper">
                    ${e.big_slider_images.map(c=>'<div class="swiper-slide"><div class="project-slide" style="background-image: url('+c+')"></div></div>').join("")}
                </div>
                <div class="swiper-pagination pagination-swiper"></div>
            </div>
            <div class="project-item__wrapper dark">
                <div class="project-item__info">
                    <h2 class="project-item__heading">
                    ${e.name}
                    </h2>
                    <p class="project-item__price">${e.price_small}</p>
                </div>
                <hr class="project-item__hr" />
                <div class="project-item__hidden">
                    <div class="house-info">
                        <p class="house-info__paraf">${e.item_info.square} м2</p>
                        <p class="house-info__paraf">${e.formated_info.bedrooms}</p>
                        <p class="house-info__paraf">${e.formated_info.bathrooms}</p>
                        <p class="house-info__paraf">${e.formated_info.floors}</p>
                    </div>
                    <div class="house-tag">
                    ${e.tags.map(c=>'<p class="house-tag__item">'+c+"</p>").join("")}
                    </div>
                </div>
                <hr class="project-item__hr" />
                <div class="project-item__option">
                    <a class="default__button" href="/projects/${e.id}">Подробнее</a>
                    <button class="default__button project-item__call" data-modal_id="modal__income">Хочу такой дом</button>
                </div>
            </div>
        </article>
        `;m.innerHTML+=o,b()})}else w()}function w(){const r=document.querySelector(".quantity-obj");r.innerHTML=" 0 ";const e="<div>По заданым параметрам нет домов</div>";m.innerHTML=e}function b(){new v(".project-swiper",{pagination:{clickable:!0,el:".pagination-swiper"}});const r=document.querySelectorAll(".project-item__info"),e=document.querySelectorAll(".project-item");r.forEach(o=>{o.addEventListener("mouseover",c=>{const s=c.target.closest(".project-item");s.classList.add("project-item--active");const n=s.querySelectorAll(".project-slide");s.querySelector(".project-swiper").classList.add("project-slide--acitve"),n.forEach(a=>{a.classList.add("project-slide--acitve")})})}),e.forEach(o=>{o.addEventListener("mouseleave",c=>{const s=c.target.closest(".project-item");s.classList.remove("project-item--active");const n=s.querySelectorAll(".project-slide");s.querySelector(".project-swiper").classList.remove("project-slide--acitve"),n.forEach(a=>{a.classList.remove("project-slide--acitve")})})})}const g=()=>{const r=document.querySelector(".rangees"),e=document.querySelector(".rangees-square");_(r,{connect:!0,behaviour:"tap",start:[9e5,157e5],range:{min:[9e5],max:[157e5]},format:{from:function(t){return Number(t)},to:function(t){return(Math.round(t)/1e6).toFixed(1).toString().replace(".",",")}}}),_(e,{connect:!0,behaviour:"tap",start:[42,250],range:{min:[42],max:[250]},format:{from:function(t){return Number(t)},to:function(t){return Math.round(t/10)*10}}}),e.noUiSlider.set(["42","250"]),r.noUiSlider.set(["900000","15700000"]);const s=[document.querySelector(".formatting-end"),document.querySelector(".formatting-start")],n=[document.querySelector(".hide-end"),document.querySelector(".hide-start")];r.noUiSlider.on("update",function(t,i,p){const d=t[i].replace(",",".");n[i].value=d,s[i].innerHTML=t[i]});const l=[document.querySelector(".square-end"),document.querySelector(".square-start")],a=[document.querySelector(".square-hide-end"),document.querySelector(".square-hide-start")];e.noUiSlider.on("update",function(t,i,p){const d=t[i];a[i].value=d,l[i].innerHTML=t[i]});const u=document.querySelector(".filter__form"),f=document.querySelector(".cls__button"),q=document.querySelector(".dropdown-select-items");document.querySelectorAll(".cls").forEach(t=>{t.addEventListener("click",i=>{f.classList.add("cls__button--active")})}),u.addEventListener("submit",async t=>{t.preventDefault();const p=await(await fetch("/api/houses",{method:"POST",body:new FormData(u)})).json();Window.data=[],p.data.forEach(d=>{Window.data.push(d)}),h()}),f.addEventListener("click",t=>{t.preventDefault(),u.reset(),r.noUiSlider.set(["900000","15700000"]),e.noUiSlider.set(["42","250"]),q.firstChild.click(),t.target.classList.remove("cls__button--active")})},L=()=>{document.querySelectorAll(".project-info__sort .dropdown-select-items div").forEach(e=>{e.addEventListener("click",o=>{document.querySelector("select[name='house-short']").value==="Сначала дешевле"?j(Window.data):y(Window.data),h()})})},E=()=>{g(),L()};window.addEventListener("DOMContentLoaded",E);
