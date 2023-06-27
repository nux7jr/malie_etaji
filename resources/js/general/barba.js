// import barba from "@barba/core";
// import gsap from "gsap";

// const transition = () => {
//     let tl = gsap.timeline();
//     tl.to(".page-transition", {
//         duration: 0.5,
//         scaleX: 1,
//         transformOrigin: "bottom right",
//         stagger: 0.2,
//     });
//     tl.to(".page-transition", {
//         duration: 0.5,
//         scaleX: 0,
//         transformOrigin: "bottom right",
//         stagger: 0.1,
//         delay: 0.1,
//     });
// };

// barba.init({
//     schema: {
//         prefix: "data-transition",
//         wrapper: "malie-wrap",
//     },
//     transitions: [
//         {
//             name: "opacity-transition",
//             leave(data) {
//                 return gsap.to(data.current.container, {
//                     opacity: 0,
//                 });
//             },
//             enter(data) {
//                 return gsap.from(data.next.container, {
//                     opacity: 0,
//                 });
//             },
//         },
//     ],
// });
