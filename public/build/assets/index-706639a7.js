var ke={exports:{}};(function(oe,He){(function(k,C){oe.exports=C()})(window,function(){return function(k){var C={};function y(h){if(C[h])return C[h].exports;var p=C[h]={i:h,l:!1,exports:{}};return k[h].call(p.exports,p,p.exports,y),p.l=!0,p.exports}return y.m=k,y.c=C,y.d=function(h,p,E){y.o(h,p)||Object.defineProperty(h,p,{enumerable:!0,get:E})},y.r=function(h){typeof Symbol<"u"&&Symbol.toStringTag&&Object.defineProperty(h,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(h,"__esModule",{value:!0})},y.t=function(h,p){if(1&p&&(h=y(h)),8&p||4&p&&typeof h=="object"&&h&&h.__esModule)return h;var E=Object.create(null);if(y.r(E),Object.defineProperty(E,"default",{enumerable:!0,value:h}),2&p&&typeof h!="string")for(var z in h)y.d(E,z,function(I){return h[I]}.bind(null,z));return E},y.n=function(h){var p=h&&h.__esModule?function(){return h.default}:function(){return h};return y.d(p,"a",p),p},y.o=function(h,p){return Object.prototype.hasOwnProperty.call(h,p)},y.p="",y(y.s=0)}([function(k,C,y){y.r(C);var h,p="fslightbox-",E="".concat(p,"styles"),z="".concat(p,"cursor-grabbing"),I="".concat(p,"full-dimension"),P="".concat(p,"flex-centered"),q="".concat(p,"open"),V="".concat(p,"transform-transition"),D="".concat(p,"absoluted"),_="".concat(p,"slide-btn"),Y="".concat(_,"-container"),O="".concat(p,"fade-in"),M="".concat(p,"fade-out"),H=O+"-strong",J=M+"-strong",ie="".concat(p,"opacity-"),re="".concat(ie,"1"),W="".concat(p,"source");function G(t){return(G=typeof Symbol=="function"&&typeof Symbol.iterator=="symbol"?function(e){return typeof e}:function(e){return e&&typeof Symbol=="function"&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(t)}function se(t){var e=t.stageIndexes,o=t.core.stageManager,r=t.props.sources.length-1;o.getPreviousSlideIndex=function(){return e.current===0?r:e.current-1},o.getNextSlideIndex=function(){return e.current===r?0:e.current+1},o.updateStageIndexes=r===0?function(){}:r===1?function(){e.current===0?(e.next=1,delete e.previous):(e.previous=0,delete e.next)}:function(){e.previous=o.getPreviousSlideIndex(),e.next=o.getNextSlideIndex()},o.i=r<=2?function(){return!0}:function(n){var i=e.current;if(i===0&&n===r||i===r&&n===0)return!0;var a=i-n;return a===-1||a===0||a===1}}(typeof document>"u"?"undefined":G(document))==="object"&&((h=document.createElement("style")).className=E,h.appendChild(document.createTextNode(".fslightbox-absoluted{position:absolute;top:0;left:0}.fslightbox-fade-in{animation:fslightbox-fade-in .3s cubic-bezier(0,0,.7,1)}.fslightbox-fade-out{animation:fslightbox-fade-out .3s ease}.fslightbox-fade-in-strong{animation:fslightbox-fade-in-strong .3s cubic-bezier(0,0,.7,1)}.fslightbox-fade-out-strong{animation:fslightbox-fade-out-strong .3s ease}@keyframes fslightbox-fade-in{from{opacity:.65}to{opacity:1}}@keyframes fslightbox-fade-out{from{opacity:.35}to{opacity:0}}@keyframes fslightbox-fade-in-strong{from{opacity:.3}to{opacity:1}}@keyframes fslightbox-fade-out-strong{from{opacity:1}to{opacity:0}}.fslightbox-cursor-grabbing{cursor:grabbing}.fslightbox-full-dimension{width:100%;height:100%}.fslightbox-open{overflow:hidden;height:100%}.fslightbox-flex-centered{display:flex;justify-content:center;align-items:center}.fslightbox-opacity-0{opacity:0!important}.fslightbox-opacity-1{opacity:1!important}.fslightbox-scrollbarfix{padding-right:17px}.fslightbox-transform-transition{transition:transform .3s}.fslightbox-container{font-family:Arial,sans-serif;position:fixed;top:0;left:0;background:linear-gradient(rgba(30,30,30,.9),#000 1810%);touch-action:pinch-zoom;z-index:1000000000;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-tap-highlight-color:transparent}.fslightbox-container *{box-sizing:border-box}.fslightbox-svg-path{transition:fill .15s ease;fill:#ddd}.fslightbox-nav{height:45px;width:100%;position:absolute;top:0;left:0}.fslightbox-slide-number-container{display:flex;justify-content:center;align-items:center;position:relative;height:100%;font-size:15px;color:#d7d7d7;z-index:0;max-width:55px;text-align:left}.fslightbox-slide-number-container .fslightbox-flex-centered{height:100%}.fslightbox-slash{display:block;margin:0 5px;width:1px;height:12px;transform:rotate(15deg);background:#fff}.fslightbox-toolbar{position:absolute;z-index:3;right:0;top:0;height:100%;display:flex;background:rgba(35,35,35,.65)}.fslightbox-toolbar-button{height:100%;width:45px;cursor:pointer}.fslightbox-toolbar-button:hover .fslightbox-svg-path{fill:#fff}.fslightbox-slide-btn-container{display:flex;align-items:center;padding:12px 12px 12px 6px;position:absolute;top:50%;cursor:pointer;z-index:3;transform:translateY(-50%)}@media (min-width:476px){.fslightbox-slide-btn-container{padding:22px 22px 22px 6px}}@media (min-width:768px){.fslightbox-slide-btn-container{padding:30px 30px 30px 6px}}.fslightbox-slide-btn-container:hover .fslightbox-svg-path{fill:#f1f1f1}.fslightbox-slide-btn{padding:9px;font-size:26px;background:rgba(35,35,35,.65)}@media (min-width:768px){.fslightbox-slide-btn{padding:10px}}@media (min-width:1600px){.fslightbox-slide-btn{padding:11px}}.fslightbox-slide-btn-container-previous{left:0}@media (max-width:475.99px){.fslightbox-slide-btn-container-previous{padding-left:3px}}.fslightbox-slide-btn-container-next{right:0;padding-left:12px;padding-right:3px}@media (min-width:476px){.fslightbox-slide-btn-container-next{padding-left:22px}}@media (min-width:768px){.fslightbox-slide-btn-container-next{padding-left:30px}}@media (min-width:476px){.fslightbox-slide-btn-container-next{padding-right:6px}}.fslightbox-down-event-detector{position:absolute;z-index:1}.fslightbox-slide-swiping-hoverer{z-index:4}.fslightbox-invalid-file-wrapper{font-size:22px;color:#eaebeb;margin:auto}.fslightbox-video{object-fit:cover}.fslightbox-youtube-iframe{border:0}.fslightboxl{display:block;margin:auto;position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:67px;height:67px}.fslightboxl div{box-sizing:border-box;display:block;position:absolute;width:54px;height:54px;margin:6px;border:5px solid;border-color:#999 transparent transparent transparent;border-radius:50%;animation:fslightboxl 1.2s cubic-bezier(.5,0,.5,1) infinite}.fslightboxl div:nth-child(1){animation-delay:-.45s}.fslightboxl div:nth-child(2){animation-delay:-.3s}.fslightboxl div:nth-child(3){animation-delay:-.15s}@keyframes fslightboxl{0%{transform:rotate(0)}100%{transform:rotate(360deg)}}.fslightbox-source{position:relative;z-index:2;opacity:0}")),document.head.appendChild(h));function ae(t){var e,o=t.props,r=0,n={};this.getSourceTypeFromLocalStorageByUrl=function(a){return e[a]?e[a]:i(a)},this.handleReceivedSourceTypeForUrl=function(a,c){if(n[c]===!1&&(r--,a!=="invalid"?n[c]=a:delete n[c],r===0)){(function(s,l){for(var u in l)s[u]=l[u]})(e,n);try{localStorage.setItem("fslightbox-types",JSON.stringify(e))}catch{}}};var i=function(a){r++,n[a]=!1};if(o.disableLocalStorage)this.getSourceTypeFromLocalStorageByUrl=function(){},this.handleReceivedSourceTypeForUrl=function(){};else{try{e=JSON.parse(localStorage.getItem("fslightbox-types"))}catch{}e||(e={},this.getSourceTypeFromLocalStorageByUrl=i)}}function ce(t,e,o,r){var n=t.data,i=t.elements.sources,a=o/r,c=0;this.adjustSize=function(){if((c=n.maxSourceWidth/a)<n.maxSourceHeight)return o<n.maxSourceWidth&&(c=r),s();c=r>n.maxSourceHeight?n.maxSourceHeight:r,s()};var s=function(){i[e].style.width=c*a+"px",i[e].style.height=c+"px"}}function le(t,e){var o=this,r=t.collections.sourceSizers,n=t.elements,i=n.sourceAnimationWrappers,a=n.sources,c=t.isl,s=t.resolve;function l(u,d){r[e]=s(ce,[e,u,d]),r[e].adjustSize()}this.runActions=function(u,d){c[e]=!0,a[e].classList.add(re),i[e].classList.add(H),i[e].removeChild(i[e].firstChild),l(u,d),o.runActions=l}}function ue(t,e){var o,r=this,n=t.elements.sources,i=t.props,a=(0,t.resolve)(le,[e]);this.handleImageLoad=function(c){var s=c.target,l=s.naturalWidth,u=s.naturalHeight;a.runActions(l,u)},this.handleVideoLoad=function(c){var s=c.target,l=s.videoWidth,u=s.videoHeight;o=!0,a.runActions(l,u)},this.handleNotMetaDatedVideoLoad=function(){o||r.handleYoutubeLoad()},this.handleYoutubeLoad=function(){var c=1920,s=1080;i.maxYoutubeDimensions&&(c=i.maxYoutubeDimensions.width,s=i.maxYoutubeDimensions.height),a.runActions(c,s)},this.handleCustomLoad=function(){var c=n[e],s=c.offsetWidth,l=c.offsetHeight;s&&l?a.runActions(s,l):setTimeout(r.handleCustomLoad)}}function R(t,e,o){var r=t.elements.sources,n=t.props.customClasses,i=n[e]?n[e]:"";r[e].className=o+" "+i}function j(t,e){var o=t.elements.sources,r=t.props.customAttributes;for(var n in r[e])o[e].setAttribute(n,r[e][n])}function de(t,e){var o=t.collections.sourceLoadHandlers,r=t.elements,n=r.sources,i=r.sourceAnimationWrappers,a=t.props.sources;n[e]=document.createElement("img"),R(t,e,W),n[e].src=a[e],n[e].onload=o[e].handleImageLoad,j(t,e),i[e].appendChild(n[e])}function fe(t,e){var o=t.collections.sourceLoadHandlers,r=t.elements,n=r.sources,i=r.sourceAnimationWrappers,a=t.props,c=a.sources,s=a.videosPosters;n[e]=document.createElement("video"),R(t,e,W),n[e].src=c[e],n[e].onloadedmetadata=function(u){o[e].handleVideoLoad(u)},n[e].controls=!0,j(t,e),s[e]&&(n[e].poster=s[e]);var l=document.createElement("source");l.src=c[e],n[e].appendChild(l),setTimeout(o[e].handleNotMetaDatedVideoLoad,3e3),i[e].appendChild(n[e])}function pe(t,e){var o=t.collections.sourceLoadHandlers,r=t.elements,n=r.sources,i=r.sourceAnimationWrappers,a=t.props.sources;n[e]=document.createElement("iframe"),R(t,e,"".concat(W," ").concat(p,"youtube-iframe"));var c=a[e],s=c.split("?")[1];n[e].src="https://www.youtube.com/embed/".concat(c.match(/^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/)[2],"?").concat(s||""),n[e].allowFullscreen=!0,j(t,e),i[e].appendChild(n[e]),o[e].handleYoutubeLoad()}function he(t,e){var o=t.collections.sourceLoadHandlers,r=t.elements,n=r.sources,i=r.sourceAnimationWrappers,a=t.props.sources;n[e]=a[e],R(t,e,"".concat(n[e].className," ").concat(W)),i[e].appendChild(n[e]),o[e].handleCustomLoad()}function me(t,e){var o=t.elements,r=o.sources,n=o.sourceAnimationWrappers;t.props.sources,r[e]=document.createElement("div"),r[e].className="".concat(p,"invalid-file-wrapper ").concat(P),r[e].innerHTML="Invalid source",n[e].classList.add(H),n[e].removeChild(n[e].firstChild),n[e].appendChild(r[e])}function ge(t){var e=t.collections,o=e.sourceLoadHandlers,r=e.sourcesRenderFunctions,n=t.core.sourceDisplayFacade,i=t.resolve;this.runActionsForSourceTypeAndIndex=function(a,c){var s;switch(a!=="invalid"&&(o[c]=i(ue,[c])),a){case"image":s=de;break;case"video":s=fe;break;case"youtube":s=pe;break;case"custom":s=he;break;default:s=me}r[c]=function(){return s(t,c)},n.displaySourcesWhichShouldBeDisplayed()}}function ve(){var t,e,o,r={isUrlYoutubeOne:function(i){var a=document.createElement("a");return a.href=i,a.hostname==="www.youtube.com"||a.hostname==="youtu.be"},getTypeFromResponseContentType:function(i){return i.slice(0,i.indexOf("/"))}};function n(){if(o.readyState!==4){if(o.readyState===2){var i;switch(r.getTypeFromResponseContentType(o.getResponseHeader("content-type"))){case"image":i="image";break;case"video":i="video";break;default:i="invalid"}o.onreadystatechange=null,o.abort(),e(i)}}else e("invalid")}this.setUrlToCheck=function(i){t=i},this.getSourceType=function(i){if(r.isUrlYoutubeOne(t))return i("youtube");e=i,(o=new XMLHttpRequest).onreadystatechange=n,o.open("GET",t,!0),o.send()}}function be(t,e,o){var r=t.props,n=r.types,i=r.type,a=r.sources,c=t.resolve;this.getTypeSetByClientForIndex=function(s){var l;return n&&n[s]?l=n[s]:i&&(l=i),l},this.retrieveTypeWithXhrForIndex=function(s){var l=c(ve);l.setUrlToCheck(a[s]),l.getSourceType(function(u){e.handleReceivedSourceTypeForUrl(u,a[s]),o.runActionsForSourceTypeAndIndex(u,s)})}}function xe(t,e){var o=t.core.stageManager,r=t.elements,n=r.smw,i=r.sourceWrappersContainer,a=t.props,c=0,s=document.createElement("div");function l(d){s.style.transform="translateX(".concat(d+c,"px)"),c=0}function u(){return(1+a.slideDistance)*innerWidth}s.className="".concat(D," ").concat(I," ").concat(P),s.s=function(){s.style.display="flex"},s.h=function(){s.style.display="none"},s.a=function(){s.classList.add(V)},s.d=function(){s.classList.remove(V)},s.n=function(){s.style.removeProperty("transform")},s.v=function(d){return c=d,s},s.ne=function(){l(-u())},s.z=function(){l(0)},s.p=function(){l(u())},o.i(e)||s.h(),n[e]=s,i.appendChild(s),function(d,f){var x=d.elements,v=x.smw,w=x.sourceAnimationWrappers,m=document.createElement("div"),b=document.createElement("div");b.className="fslightboxl";for(var g=0;g<3;g++){var A=document.createElement("div");b.appendChild(A)}m.appendChild(b),v[f].appendChild(m),w[f]=m}(t,e)}function X(t,e,o,r){var n=document.createElementNS("http://www.w3.org/2000/svg","svg");n.setAttributeNS(null,"width",e),n.setAttributeNS(null,"height",e),n.setAttributeNS(null,"viewBox",o);var i=document.createElementNS("http://www.w3.org/2000/svg","path");return i.setAttributeNS(null,"class","".concat(p,"svg-path")),i.setAttributeNS(null,"d",r),n.appendChild(i),t.appendChild(n),n}function $(t,e){var o=document.createElement("div");return o.className="".concat(p,"toolbar-button ").concat(P),o.title=e,t.appendChild(o),o}function ye(t,e){var o=document.createElement("div");o.className="".concat(p,"toolbar"),e.appendChild(o),function(r,n){var i=r.componentsServices,a=r.data,c=r.fs,s="M4.5 11H3v4h4v-1.5H4.5V11zM3 7h1.5V4.5H7V3H3v4zm10.5 6.5H11V15h4v-4h-1.5v2.5zM11 3v1.5h2.5V7H15V3h-4z",l=$(n);l.title="Enter fullscreen";var u=X(l,"20px","0 0 18 18",s);i.ofs=function(){a.ifs=!0,l.title="Exit fullscreen",u.setAttributeNS(null,"width","24px"),u.setAttributeNS(null,"height","24px"),u.setAttributeNS(null,"viewBox","0 0 950 1024"),u.firstChild.setAttributeNS(null,"d","M682 342h128v84h-212v-212h84v128zM598 810v-212h212v84h-128v128h-84zM342 342v-128h84v212h-212v-84h128zM214 682v-84h212v212h-84v-128h-128z")},i.xfs=function(){a.ifs=!1,l.title="Enter fullscreen",u.setAttributeNS(null,"width","20px"),u.setAttributeNS(null,"height","20px"),u.setAttributeNS(null,"viewBox","0 0 18 18"),u.firstChild.setAttributeNS(null,"d",s)},l.onclick=c.t}(t,o),function(r,n){var i=$(n,"Close");i.onclick=r.core.lightboxCloser.closeLightbox,X(i,"20px","0 0 24 24","M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z")}(t,o)}function we(t){var e=t.props.sources,o=t.elements.container,r=document.createElement("div");r.className="".concat(p,"nav"),o.appendChild(r),ye(t,r),e.length>1&&function(n,i){var a=n.componentsServices,c=n.props.sources,s=(n.stageIndexes,document.createElement("div"));s.className="".concat(p,"slide-number-container");var l=document.createElement("div");l.className=P;var u=document.createElement("span");a.setSlideNumber=function(x){return u.innerHTML=x};var d=document.createElement("span");d.className="".concat(p,"slash");var f=document.createElement("div");f.innerHTML=c.length,s.appendChild(l),l.appendChild(u),l.appendChild(d),l.appendChild(f),i.appendChild(s),setTimeout(function(){l.offsetWidth>55&&(s.style.justifyContent="flex-start")})}(t,r)}function K(t,e,o,r){var n=t.elements.container,i=o.charAt(0).toUpperCase()+o.slice(1),a=document.createElement("div");a.className="".concat(Y," ").concat(Y,"-").concat(o),a.title="".concat(i," slide"),a.onclick=e,function(c,s){var l=document.createElement("div");l.className="".concat(_," ").concat(P),X(l,"20px","0 0 20 20",s),c.appendChild(l)}(a,r),n.appendChild(a)}function Se(t){var e=t.core,o=e.lightboxCloser,r=e.slideChangeFacade,n=t.fs;this.listener=function(i){switch(i.key){case"Escape":o.closeLightbox();break;case"ArrowLeft":r.changeToPrevious();break;case"ArrowRight":r.changeToNext();break;case"F11":i.preventDefault(),n.t()}}}function Le(t){var e=t.elements,o=t.sourcePointerProps,r=t.stageIndexes;function n(i,a){e.smw[i].v(o.swipedX)[a]()}this.runActionsForEvent=function(i){var a,c,s;e.container.contains(e.slideSwipingHoverer)||e.container.appendChild(e.slideSwipingHoverer),a=e.container,c=z,(s=a.classList).contains(c)||s.add(c),o.swipedX=i.screenX-o.downScreenX;var l=r.previous,u=r.next;n(r.current,"z"),l!==void 0&&o.swipedX>0?n(l,"ne"):u!==void 0&&o.swipedX<0&&n(u,"p")}}function Ae(t){var e=t.props.sources,o=t.resolve,r=t.sourcePointerProps,n=o(Le);e.length===1?this.listener=function(){r.swipedX=1}:this.listener=function(i){r.isPointering&&n.runActionsForEvent(i)}}function Ce(t){var e=t.core.slideIndexChanger,o=t.elements.smw,r=t.stageIndexes,n=t.sws;function i(c){var s=o[r.current];s.a(),s[c]()}function a(c,s){c!==void 0&&(o[c].s(),o[c][s]())}this.runPositiveSwipedXActions=function(){var c=r.previous;if(c===void 0)i("z");else{i("p");var s=r.next;e.changeTo(c);var l=r.previous;n.d(l),n.b(s),i("z"),a(l,"ne")}},this.runNegativeSwipedXActions=function(){var c=r.next;if(c===void 0)i("z");else{i("ne");var s=r.previous;e.changeTo(c);var l=r.next;n.d(l),n.b(s),i("z"),a(l,"p")}}}function Q(t,e){t.contains(e)&&t.removeChild(e)}function Ee(t){var e=t.core.lightboxCloser,o=t.elements,r=t.resolve,n=t.sourcePointerProps,i=r(Ce);this.runNoSwipeActions=function(){Q(o.container,o.slideSwipingHoverer),n.isSourceDownEventTarget||e.closeLightbox(),n.isPointering=!1},this.runActions=function(){n.swipedX>0?i.runPositiveSwipedXActions():i.runNegativeSwipedXActions(),Q(o.container,o.slideSwipingHoverer),o.container.classList.remove(z),n.isPointering=!1}}function Fe(t){var e=t.resolve,o=t.sourcePointerProps,r=e(Ee);this.listener=function(){o.isPointering&&(o.swipedX?r.runActions():r.runNoSwipeActions())}}function Ie(t){var e=this,o=t.core,r=o.eventsDispatcher,n=o.globalEventsController,i=o.scrollbarRecompensor,a=t.data,c=t.elements,s=t.fs,l=t.props,u=t.sourcePointerProps;this.isLightboxFadingOut=!1,this.runActions=function(){e.isLightboxFadingOut=!0,c.container.classList.add(J),n.removeListeners(),l.exitFullscreenOnClose&&a.ifs&&s.x(),setTimeout(function(){e.isLightboxFadingOut=!1,u.isPointering=!1,c.container.classList.remove(J),document.documentElement.classList.remove(q),i.removeRecompense(),document.body.removeChild(c.container),r.dispatch("onClose")},270)}}function B(t,e){var o=t.classList;o.contains(e)&&o.remove(e)}function Te(t){var e,o,r;o=(e=t).core.eventsDispatcher,r=e.props,o.dispatch=function(n){r[n]&&r[n]()},function(n){var i=n.componentsServices,a=n.data,c=n.fs,s=["fullscreenchange","webkitfullscreenchange","mozfullscreenchange","MSFullscreenChange"];function l(d){for(var f=0;f<s.length;f++)document[d](s[f],u)}function u(){document.fullscreenElement||document.webkitIsFullScreen||document.mozFullScreen||document.msFullscreenElement?i.ofs():i.xfs()}c.o=function(){i.ofs();var d=document.documentElement;d.requestFullscreen?d.requestFullscreen():d.mozRequestFullScreen?d.mozRequestFullScreen():d.webkitRequestFullscreen?d.webkitRequestFullscreen():d.msRequestFullscreen&&d.msRequestFullscreen()},c.x=function(){i.xfs(),document.exitFullscreen?document.exitFullscreen():document.mozCancelFullScreen?document.mozCancelFullScreen():document.webkitExitFullscreen?document.webkitExitFullscreen():document.msExitFullscreen&&document.msExitFullscreen()},c.t=function(){a.ifs?c.x():c.o()},c.l=function(){l("addEventListener")},c.q=function(){l("removeEventListener")}}(t),function(n){var i=n.core,a=i.globalEventsController,c=i.windowResizeActioner,s=n.fs,l=n.resolve,u=l(Se),d=l(Ae),f=l(Fe);a.attachListeners=function(){document.addEventListener("pointermove",d.listener),document.addEventListener("pointerup",f.listener),addEventListener("resize",c.runActions),document.addEventListener("keydown",u.listener),s.l()},a.removeListeners=function(){document.removeEventListener("pointermove",d.listener),document.removeEventListener("pointerup",f.listener),removeEventListener("resize",c.runActions),document.removeEventListener("keydown",u.listener),s.q()}}(t),function(n){var i=n.core.lightboxCloser,a=(0,n.resolve)(Ie);i.closeLightbox=function(){a.isLightboxFadingOut||a.runActions()}}(t),function(n){var i=n.data,a=n.core.scrollbarRecompensor;function c(){document.body.offsetHeight>innerHeight&&(document.body.style.marginRight=i.scrollbarWidth+"px")}a.addRecompense=function(){document.readyState==="complete"?c():addEventListener("load",function(){c(),a.addRecompense=c})},a.removeRecompense=function(){document.body.style.removeProperty("margin-right")}}(t),function(n){var i=n.core,a=i.slideChangeFacade,c=i.slideIndexChanger,s=i.stageManager;n.props.sources.length>1?(a.changeToPrevious=function(){c.jumpTo(s.getPreviousSlideIndex())},a.changeToNext=function(){c.jumpTo(s.getNextSlideIndex())}):(a.changeToPrevious=function(){},a.changeToNext=function(){})}(t),function(n){var i=n.componentsServices,a=n.core,c=a.slideIndexChanger,s=a.sourceDisplayFacade,l=a.stageManager,u=n.elements,d=u.smw,f=u.sourceAnimationWrappers,x=n.isl,v=n.stageIndexes,w=n.sws;c.changeTo=function(m){v.current=m,l.updateStageIndexes(),i.setSlideNumber(m+1),s.displaySourcesWhichShouldBeDisplayed()},c.jumpTo=function(m){var b=v.previous,g=v.current,A=v.next,S=x[g],F=x[m];c.changeTo(m);for(var L=0;L<d.length;L++)d[L].d();w.d(g),w.c(),requestAnimationFrame(function(){requestAnimationFrame(function(){var T=v.previous,N=v.next;function ne(){l.i(g)?g===v.previous?d[g].ne():g===v.next&&d[g].p():(d[g].h(),d[g].n())}S&&f[g].classList.add(M),F&&f[v.current].classList.add(O),w.a(),T!==void 0&&T!==g&&d[T].ne(),d[v.current].n(),N!==void 0&&N!==g&&d[N].p(),w.b(b),w.b(A),x[g]?setTimeout(ne,260):ne()})})}}(t),function(n){var i=n.core.sourcesPointerDown,a=n.elements,c=a.smw,s=a.sources,l=n.sourcePointerProps,u=n.stageIndexes;i.listener=function(d){d.target.tagName!=="VIDEO"&&d.preventDefault(),l.isPointering=!0,l.downScreenX=d.screenX,l.swipedX=0;var f=s[u.current];f&&f.contains(d.target)?l.isSourceDownEventTarget=!0:l.isSourceDownEventTarget=!1;for(var x=0;x<c.length;x++)c[x].d()}}(t),function(n){var i=n.collections.sourcesRenderFunctions,a=n.core.sourceDisplayFacade,c=n.props,s=n.stageIndexes;function l(u){i[u]&&(i[u](),delete i[u])}a.displaySourcesWhichShouldBeDisplayed=function(){if(c.loadOnlyCurrentSource)l(s.current);else for(var u in s)l(s[u])}}(t),function(n){var i=n.core.stageManager,a=n.elements,c=a.smw,s=a.sourceAnimationWrappers,l=n.isl,u=n.stageIndexes,d=n.sws;d.a=function(){for(var f in u)c[u[f]].s()},d.b=function(f){f===void 0||i.i(f)||(c[f].h(),c[f].n())},d.c=function(){for(var f in u)d.d(u[f])},d.d=function(f){if(l[f]){var x=s[f];B(x,H),B(x,O),B(x,M)}}}(t),function(n){var i=n.collections.sourceSizers,a=n.core.windowResizeActioner,c=n.data,s=n.elements.smw,l=n.stageIndexes;a.runActions=function(){innerWidth<992?c.maxSourceWidth=innerWidth:c.maxSourceWidth=.9*innerWidth,c.maxSourceHeight=.9*innerHeight;for(var u=0;u<s.length;u++)s[u].d(),i[u]&&i[u].adjustSize();var d=l.previous,f=l.next;d!==void 0&&s[d].ne(),f!==void 0&&s[f].p()}}(t)}function Ne(t){var e=t.componentsServices,o=t.core,r=o.eventsDispatcher,n=o.globalEventsController,i=o.scrollbarRecompensor,a=o.sourceDisplayFacade,c=o.stageManager,s=o.windowResizeActioner,l=t.data,u=t.elements,d=(t.props,t.stageIndexes),f=t.sws;function x(){var v,w;l.i=!0,l.scrollbarWidth=function(){var m=document.createElement("div"),b=m.style,g=document.createElement("div");b.visibility="hidden",b.width="100px",b.msOverflowStyle="scrollbar",b.overflow="scroll",g.style.width="100%",document.body.appendChild(m);var A=m.offsetWidth;m.appendChild(g);var S=g.offsetWidth;return document.body.removeChild(m),A-S}(),Te(t),u.container=document.createElement("div"),u.container.className="".concat(p,"container ").concat(I," ").concat(H),function(m){var b=m.elements;b.slideSwipingHoverer=document.createElement("div"),b.slideSwipingHoverer.className="".concat(p,"slide-swiping-hoverer ").concat(I," ").concat(D)}(t),we(t),function(m){var b=m.core.sourcesPointerDown,g=m.elements,A=m.props.sources,S=document.createElement("div");S.className="".concat(D," ").concat(I),g.container.appendChild(S),S.addEventListener("pointerdown",b.listener),g.sourceWrappersContainer=S;for(var F=0;F<A.length;F++)xe(m,F)}(t),t.props.sources.length>1&&(w=(v=t).core.slideChangeFacade,K(v,w.changeToPrevious,"previous","M18.271,9.212H3.615l4.184-4.184c0.306-0.306,0.306-0.801,0-1.107c-0.306-0.306-0.801-0.306-1.107,0L1.21,9.403C1.194,9.417,1.174,9.421,1.158,9.437c-0.181,0.181-0.242,0.425-0.209,0.66c0.005,0.038,0.012,0.071,0.022,0.109c0.028,0.098,0.075,0.188,0.142,0.271c0.021,0.026,0.021,0.061,0.045,0.085c0.015,0.016,0.034,0.02,0.05,0.033l5.484,5.483c0.306,0.307,0.801,0.307,1.107,0c0.306-0.305,0.306-0.801,0-1.105l-4.184-4.185h14.656c0.436,0,0.788-0.353,0.788-0.788S18.707,9.212,18.271,9.212z"),K(v,w.changeToNext,"next","M1.729,9.212h14.656l-4.184-4.184c-0.307-0.306-0.307-0.801,0-1.107c0.305-0.306,0.801-0.306,1.106,0l5.481,5.482c0.018,0.014,0.037,0.019,0.053,0.034c0.181,0.181,0.242,0.425,0.209,0.66c-0.004,0.038-0.012,0.071-0.021,0.109c-0.028,0.098-0.075,0.188-0.143,0.271c-0.021,0.026-0.021,0.061-0.045,0.085c-0.015,0.016-0.034,0.02-0.051,0.033l-5.483,5.483c-0.306,0.307-0.802,0.307-1.106,0c-0.307-0.305-0.307-0.801,0-1.105l4.184-4.185H1.729c-0.436,0-0.788-0.353-0.788-0.788S1.293,9.212,1.729,9.212z")),function(m){for(var b=m.props.sources,g=m.resolve,A=g(ae),S=g(ge),F=g(be,[A,S]),L=0;L<b.length;L++)if(typeof b[L]=="string"){var T=F.getTypeSetByClientForIndex(L);if(T)S.runActionsForSourceTypeAndIndex(T,L);else{var N=A.getSourceTypeFromLocalStorageByUrl(b[L]);N?S.runActionsForSourceTypeAndIndex(N,L):F.retrieveTypeWithXhrForIndex(L)}}else S.runActionsForSourceTypeAndIndex("custom",L)}(t),r.dispatch("onInit")}t.open=function(){var v=arguments.length>0&&arguments[0]!==void 0?arguments[0]:0,w=d.previous,m=d.current,b=d.next;d.current=v,l.i||se(t),c.updateStageIndexes(),l.i?(f.c(),f.a(),f.b(w),f.b(m),f.b(b),r.dispatch("onShow")):x(),a.displaySourcesWhichShouldBeDisplayed(),e.setSlideNumber(v+1),document.body.appendChild(u.container),document.documentElement.classList.add(q),i.addRecompense(),n.attachListeners(),s.runActions(),u.smw[d.current].n(),r.dispatch("onOpen")}}function Z(t,e,o){return(Z=ze()?Reflect.construct.bind():function(r,n,i){var a=[null];a.push.apply(a,n);var c=new(Function.bind.apply(r,a));return i&&ee(c,i.prototype),c}).apply(null,arguments)}function ze(){if(typeof Reflect>"u"||!Reflect.construct||Reflect.construct.sham)return!1;if(typeof Proxy=="function")return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],function(){})),!0}catch{return!1}}function ee(t,e){return(ee=Object.setPrototypeOf?Object.setPrototypeOf.bind():function(o,r){return o.__proto__=r,o})(t,e)}function Pe(t){return function(e){if(Array.isArray(e))return U(e)}(t)||function(e){if(typeof Symbol<"u"&&e[Symbol.iterator]!=null||e["@@iterator"]!=null)return Array.from(e)}(t)||function(e,o){if(e){if(typeof e=="string")return U(e,o);var r=Object.prototype.toString.call(e).slice(8,-1);if(r==="Object"&&e.constructor&&(r=e.constructor.name),r==="Map"||r==="Set")return Array.from(e);if(r==="Arguments"||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r))return U(e,o)}}(t)||function(){throw new TypeError(`Invalid attempt to spread non-iterable instance.
In order to be iterable, non-array objects must have a [Symbol.iterator]() method.`)}()}function U(t,e){(e==null||e>t.length)&&(e=t.length);for(var o=0,r=new Array(e);o<e;o++)r[o]=t[o];return r}function te(){for(var t=document.getElementsByTagName("a"),e=function(n){if(!t[n].hasAttribute("data-fslightbox"))return"continue";var i=t[n].hasAttribute("data-href")?t[n].getAttribute("data-href"):t[n].getAttribute("href");if(!i)return console.warn('The "data-fslightbox" attribute was set without the "href" attribute.'),"continue";var a=t[n].getAttribute("data-fslightbox");fsLightboxInstances[a]||(fsLightboxInstances[a]=new FsLightbox);var c=null;i.charAt(0)==="#"?(c=document.getElementById(i.substring(1)).cloneNode(!0)).removeAttribute("id"):c=i,fsLightboxInstances[a].props.sources.push(c),fsLightboxInstances[a].elements.a.push(t[n]);var s=fsLightboxInstances[a].props.sources.length-1;t[n].onclick=function(w){w.preventDefault(),fsLightboxInstances[a].open(s)},v("types","data-type"),v("videosPosters","data-video-poster"),v("customClasses","data-class"),v("customClasses","data-custom-class");for(var l=["href","data-fslightbox","data-href","data-type","data-video-poster","data-class","data-custom-class"],u=t[n].attributes,d=fsLightboxInstances[a].props.customAttributes,f=0;f<u.length;f++)if(l.indexOf(u[f].name)===-1&&u[f].name.substr(0,5)==="data-"){d[s]||(d[s]={});var x=u[f].name.substr(5);d[s][x]=u[f].value}function v(w,m){t[n].hasAttribute(m)&&(fsLightboxInstances[a].props[w][s]=t[n].getAttribute(m))}},o=0;o<t.length;o++)e(o);var r=Object.keys(fsLightboxInstances);window.fsLightbox=fsLightboxInstances[r[r.length-1]]}window.FsLightbox=function(){var t=this;this.props={sources:[],customAttributes:[],customClasses:[],types:[],videosPosters:[],slideDistance:.3},this.data={isFullscreenOpen:!1,maxSourceWidth:0,maxSourceHeight:0,scrollbarWidth:0},this.isl=[],this.sourcePointerProps={downScreenX:null,isPointering:!1,isSourceDownEventTarget:!1,swipedX:0},this.stageIndexes={},this.elements={a:[],container:null,slideSwipingHoverer:null,smw:[],sourceWrappersContainer:null,sources:[],sourceAnimationWrappers:[]},this.componentsServices={setSlideNumber:function(){}},this.resolve=function(e){var o=arguments.length>1&&arguments[1]!==void 0?arguments[1]:[];return o.unshift(t),Z(e,Pe(o))},this.collections={sourceLoadHandlers:[],sourcesRenderFunctions:[],sourceSizers:[]},this.core={eventsDispatcher:{},globalEventsController:{},lightboxCloser:{},lightboxUpdater:{},scrollbarRecompensor:{},slideChangeFacade:{},slideIndexChanger:{},sourcesPointerDown:{},sourceDisplayFacade:{},stageManager:{},windowResizeActioner:{}},this.fs={},this.sws={},Ne(this),this.close=function(){return t.core.lightboxCloser.closeLightbox()}},window.fsLightboxInstances={},te(),window.refreshFsLightbox=function(){for(var t in fsLightboxInstances){var e=fsLightboxInstances[t].props;fsLightboxInstances[t]=new FsLightbox,fsLightboxInstances[t].props=e,fsLightboxInstances[t].props.sources=[],fsLightboxInstances[t].elements.a=[]}te()}}])})})(ke);
