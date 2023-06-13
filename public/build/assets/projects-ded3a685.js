import{n as f}from"./nouislider-2a461308.js";import{S as _}from"./swiper-bundle.min-17f9adeb.js";import{i as j}from"./project-item-5c3e1fdf.js";j(_);const m=document.querySelector(".project-wrapper");function w(e){e.sort((r,o)=>r.price_kit>o.price_kit?1:r.price_kit<o.price_kit?-1:0),Window.data=e}function q(e){e.sort((r,o)=>r.price_kit<o.price_kit?1:r.price_kit>o.price_kit?-1:0),Window.data=e}function v(){if(console.log(Window.data.length),Window.data.length==1){console.log("ERRR");return}Window.data.length!==0?(m.innerHTML="",Window.data.forEach(e=>{let r=`
            <article class="project-item">
            <div class="swiper project-swiper">
                <div class="swiper-wrapper">
                    ${e.big_slider_images.map(o=>'<div class="swiper-slide"><div class="project-slide" style="background-image: url('+o+')"></div></div>').join("")}
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
                    ${e.tags.map(o=>'<p class="house-tag__item">'+o+"</p>").join("")}
                    </div>
                </div>
                <hr class="project-item__hr" />
                <div class="project-item__option">
                    <a class="default__button" href="/projects/${e.id}">Подробнее</a>
                    <button class="default__button project-item__call">Хочу такой дом</button>
                </div>
            </div>
        </article>
        `;m.innerHTML+=r,y()})):g()}function g(){const e="<div>По заданым параметрам нет домов</div>";m.innerHTML=e}function y(){new _(".project-swiper",{pagination:{clickable:!0,el:".pagination-swiper"}});const e=document.querySelectorAll(".project-item__info"),r=document.querySelectorAll(".project-item");e.forEach(o=>{o.addEventListener("mouseover",c=>{const s=c.target.closest(".project-item");s.classList.add("project-item--active");const n=s.querySelectorAll(".project-slide");s.querySelector(".project-swiper").classList.add("project-slide--acitve"),n.forEach(a=>{a.classList.add("project-slide--acitve")})})}),r.forEach(o=>{o.addEventListener("mouseleave",c=>{const s=c.target.closest(".project-item");s.classList.remove("project-item--active");const n=s.querySelectorAll(".project-slide");s.querySelector(".project-swiper").classList.remove("project-slide--acitve"),n.forEach(a=>{a.classList.remove("project-slide--acitve")})})})}const b=()=>{const e=document.querySelector(".rangees"),r=document.querySelector(".rangees-square"),o={from:function(t){return Number(t)},to:function(t){return(Math.round(t)/1e6).toFixed(1).toString().replace(".",",")}};f.create(e,{connect:!0,behaviour:"tap",start:[3e6,157e5],range:{min:[3e6],max:[157e5]},format:o});const c={from:function(t){return Number(t)},to:function(t){return Math.round(t/10)*10}};f.create(r,{connect:!0,behaviour:"tap",start:[50,250],range:{min:[50],max:[250]},format:c}),r.noUiSlider.set(["50","250"]),e.noUiSlider.set(["3000000","15700000"]);const s=[document.querySelector(".formatting-end"),document.querySelector(".formatting-start")],n=[document.querySelector(".hide-end"),document.querySelector(".hide-start")];e.noUiSlider.on("update",function(t,i,p){const d=t[i].replace(",",".");n[i].value=d,s[i].innerHTML=t[i]});const l=[document.querySelector(".square-end"),document.querySelector(".square-start")],a=[document.querySelector(".square-hide-end"),document.querySelector(".square-hide-start")];r.noUiSlider.on("update",function(t,i,p){const d=t[i];a[i].value=d,l[i].innerHTML=t[i]});const u=document.querySelector(".filter__form"),h=document.querySelector(".cls__button"),S=document.querySelector(".dropdown-select-items");u.addEventListener("submit",async t=>{t.preventDefault();const p=await(await fetch("/api/houses",{method:"POST",body:new FormData(u)})).json();Window.data=[],p.data.forEach(d=>{Window.data.push(d)}),console.log(Window.data),v()}),h.addEventListener("click",t=>{t.preventDefault(),u.reset(),e.noUiSlider.set(["3000000","15700000"]),r.noUiSlider.set(["50","250"]),S.firstChild.click()})},L=()=>{document.querySelectorAll(".project-info__sort .dropdown-select-items div").forEach(r=>{r.addEventListener("click",o=>{document.querySelector("select[name='house-short']").value==="Сначала дешевле"?w(Window.data):q(Window.data),v()})})},E=()=>{b(),L()};window.addEventListener("DOMContentLoaded",E);
