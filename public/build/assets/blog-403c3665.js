import{s as r}from"./sender-2b3cd42d.js";import{S as n}from"./swiper-bundle.min-43b74ea1.js";import{i}from"./reels-657b5833.js";import"./feedback-706639a7.js";i(n);document.addEventListener("DOMContentLoaded",l=>{const e=document.querySelector(".sub-form"),t=document.querySelector(".sub__thx");console.log("LOAD!"),e.addEventListener("submit",o=>{o.preventDefault(),r(e).then(s=>{s.status==404&&console.log(err),e.style.display="none",t.style.display="block"})})});
