var frontend_block_progress_bar;(()=>{"use strict";var e,t={};(e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})})(t),window.stackableProgressBar=new class{callback=e=>{e.forEach((e=>{e.isIntersecting&&e.target.classList.add("stk-animate")}))};init=()=>{const e=document.querySelectorAll(".stk-progress-bar");"IntersectionObserver"in window||e.forEach((e=>{e.classList.add("stk-animate")})),this.io&&this.io.disconnect(),this.io=new IntersectionObserver(this.callback,{threshold:.25}),e.forEach((e=>{this.io.observe(e)}))}},e=window.stackableProgressBar.init,"undefined"!=typeof document&&("complete"!==document.readyState&&"interactive"!==document.readyState?document.addEventListener("DOMContentLoaded",e):e()),frontend_block_progress_bar=t})();