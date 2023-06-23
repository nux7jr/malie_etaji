const c="/build/assets/content-945da2b0.jpg",u="/build/assets/1-main-f63310eb.jpg",l="/build/assets/1-main-4d63a13c.jpg",a="/build/assets/1-main-1f919920.jpg",d="/build/assets/1-main-e2ffd85d.jpg",p="/build/assets/1-main-df89aa31.jpg",_="/build/assets/1-main-d02b2872.jpg",o={house_type:"Одноэтажный",house_size:"100",house_price:"2-5"},f=[{img:u,house_type:"Одноэтажный",house_size:"100",house_price:"2-5",square:"100 м2",floors:"1"},{img:l,house_type:"Одноэтажный",house_size:"100-150",house_price:"2-5",square:"109 м2",floors:"1"},{img:a,house_type:"Двухэтажный",house_size:"100",house_price:"2-5",square:"72 м2",floors:"2"},{img:d,house_type:"Двухэтажный",house_size:"100-150",house_price:"2-5",square:"111 м2",floors:"2"},{img:p,house_type:"Барнхаус",house_size:"100",house_price:"2-5",square:"90 м2",floors:"1"},{img:_,house_type:"Барнхаус",house_size:"100-150",house_price:"2-5",square:"110 м2",floors:"1"}],v=document.querySelectorAll(".house-filter");function m(){return f.filter(function(s){for(var e in o)if(s[e]===void 0||s[e]!=o[e])return!1;return!0})}v.forEach(s=>{s.addEventListener("click",e=>{o[e.target.previousElementSibling.name]=e.target.previousElementSibling.value,g(m())})});function g(s){console.log(s);const e=document.querySelectorAll(".prew");s[0]!==void 0?e.forEach(t=>{t.outerHTML=`<div class="constructor-preview prew" style="background-image: url(${s[0].img})">
            <div class="constructor-preview__info">
                <div class="constructor-preview__item">
                    <p class="constructor-preview__paraf">
                    ${s[0].square}</p>
                    <p class="constructor-preview__text">
                        Площадь дома</p>
                </div>
                <div class="constructor-preview__item">
                    <p class="constructor-preview__paraf">
                    ${s[0].floors}</p>
                    <p class="constructor-preview__text">
                        Кол-во этажей</p>
                </div>
            </div>
        </div>`}):e.forEach(t=>{t.outerHTML=`<div class='constructor-alternative prew' style="background-image: url(${c})">
            <div>
                <p>Данного варианта нет в наших типовых проектах. </p>
                <p>Предлагаем обратиться к нам на разработку проекта Вашего дома.</p>
                <p>Просто пройдите все этапы конструктора дома до конца.</p>
            </div>
        </div>`})}document.addEventListener("DOMContentLoaded",s=>{const e=document.querySelector(".first_slide"),t=document.querySelector(".second_slide"),r=document.querySelector(".constructor__next"),i=document.querySelector(".real-back");r.addEventListener("click",n=>{e.style.display="none",t.style.display="flex"}),i.addEventListener("click",n=>{e.style.display="flex",t.style.display="none"})});
