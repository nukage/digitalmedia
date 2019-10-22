var responsivelyLazy=function(){var e=!1,t=null,n=null,r="undefined"!=typeof IntersectionObserver,i=function(e){if(null===t)return!0;var r=e.getBoundingClientRect(),i=r.top,o=r.left,a=r.width,l=r.height;return n>i&&i+l>0&&t>o&&o+a>0},o=function(t,n){var r=n.getAttribute("data-envira-srcset");if(null!==r)if(r=r.trim(),r.length>0){r=r.split(",");for(var i=[],o=r.length,a=0;o>a;a++){var l=r[a].trim();if(0!==l.length){var d=l.lastIndexOf(" ");if(-1===d)var u=l,s=999998;else var u=l.substr(0,d),s=parseInt(l.substr(d+1,l.length-d-2),10);var f=!1;-1!==u.indexOf(".webp",u.length-5)?e&&(f=!0):f=!0,f&&i.push([u,s])}}i.sort(function(e,t){if(e[1]<t[1])return-1;if(e[1]>t[1])return 1;if(e[1]===t[1]){if(-1!==t[0].indexOf(".webp",t[0].length-5))return 1;if(-1!==e[0].indexOf(".webp",e[0].length-5))return-1}return 0}),r=i}else r=[];else r=[];for(var c=t.offsetWidth*window.devicePixelRatio,v=null,o=r.length,a=0;o>a;a++){var w=r[a];if(w[1]>=c){v=w;break}}if(null===v&&(v=[n.getAttribute("src"),999999]),"undefined"==typeof t.lastSetOption&&(t.lastSetOption=["",0]),t.lastSetOption[1]<v[1]){var A=0===t.lastSetOption[1],m=v[0],y=new Image;y.addEventListener("load",function(){if(n.setAttribute("srcset",m),A){var e=t.getAttribute("data-onlazyload");null!==e&&new Function(e).bind(t)()}},!1),y.addEventListener("error",function(){t.lastSetOption=["",0]},!1),y.src=m,t.lastSetOption=v}},a=function(){t=window.innerWidth,n=window.innerHeight},l=function(){var e=function(e,t){for(var n=e.length,r=0;n>r;r++){var a=e[r],l=t?a:a.parentNode;i(l)&&o(l,a)}};e(document.querySelectorAll(".envira-lazy > img"),!1),e(document.querySelectorAll("img.envira-lazy"),!0)};if("srcset"in document.createElement("img")&&"undefined"!=typeof window.devicePixelRatio&&"undefined"!=typeof window.addEventListener&&"undefined"!=typeof document.querySelectorAll){a();var d=new Image;d.src="data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoCAAEADMDOJaQAA3AA/uuuAAA=",d.onload=d.onerror=function(){if(e=2===d.width,r){var t=function(){for(var e=document.querySelectorAll(".envira-lazy"),t=e.length,r=0;t>r;r++){var i=e[r];"undefined"==typeof i.responsivelyLazyObserverAttached&&(i.responsivelyLazyObserverAttached=!0,n.observe(i))}},n=new IntersectionObserver(function(e){for(var t in e){var n=e[t];if(n.intersectionRatio>0){var r=n.target;if("img"!==r.tagName.toLowerCase()){var i=r.querySelector("img");null!==i&&o(r,i)}else o(r,r)}}});l()}else{var i=window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||function(e){window.setTimeout(e,1e3/60)},u=!0,s=function(){u&&(u=!1,l()),i.call(null,s)},f=function(){u=!0},c=function(){for(var e=document.querySelectorAll(".envira-lazy"),t=e.length,n=0;t>n;n++)for(var r=e[n].parentNode;r&&"html"!==r.tagName.toLowerCase();)"undefined"==typeof r.responsivelyLazyScrollAttached&&(r.responsivelyLazyScrollAttached=!0,r.addEventListener("scroll",f)),r=r.parentNode};s()}var v=function(){if(r)var e=null;if(window.addEventListener("resize",function(){a(),r?(window.clearTimeout(e),e=window.setTimeout(function(){l()},300)):f()}),r?(window.addEventListener("load",l),t()):(window.addEventListener("scroll",f),window.addEventListener("load",f),c()),"undefined"!=typeof MutationObserver){var n=new MutationObserver(function(){r?(t(),l()):(c(),f())});n.observe(document.querySelector("body"),{childList:!0,subtree:!0})}};"loading"===document.readyState?document.addEventListener("DOMContentLoaded",v):v()}}return{run:l,isVisible:i}}();