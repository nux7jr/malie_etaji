import{i as o}from"./nouislider-1ddc2e5b.js";const m=()=>{const r=document.querySelector(".rangees");o(r,{connect:!0,behaviour:"tap",start:[3e6,157e5],range:{min:[3e6],max:[157e5]},format:{from:function(e){return Number(e)},to:function(e){return(Math.round(e)/1e6).toFixed(1).toString().replace(".",",")}}}),r.noUiSlider.set(["3000000","15700000"]);const u=[document.querySelector(".formatting-end"),document.querySelector(".formatting-start")],a=[document.querySelector(".hide-end"),document.querySelector(".hide-start")];r.noUiSlider.on("update",function(e,t,d){const s=e[t].replace(",",".");a[t].value=s,u[t].innerHTML=e[t]});const n=document.querySelector(".rangees-square");o(n,{connect:!0,behaviour:"tap",start:[50,250],range:{min:[50],max:[250]},format:{from:function(e){return Number(e)},to:function(e){return Math.round(e/10)*10}}}),n.noUiSlider.set(["50","250"]);const i=[document.querySelector(".formatting-end-square"),document.querySelector(".formatting-start-square")],c=[document.querySelector(".hide-end-square"),document.querySelector(".hide-start-square")];n.noUiSlider.on("update",function(e,t,d){c[t].value=e[t],i[t].innerHTML=e[t]}),selection__form.addEventListener("submit",async e=>{e.preventDefault();const t=await fetch("/kek",{method:"POST",body:new FormData(selection__form)});console.log(t)})},f=()=>{m()};window.addEventListener("DOMContentLoaded",f);
