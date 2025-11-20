// main.js - small helpers for preloader, mobile menu, scroll-to-top
document.addEventListener('DOMContentLoaded', function(){
  // Preloader
  const pre = document.getElementById('preloader');
  if(pre){
    setTimeout(()=>{ pre.classList.add('hidden'); }, 600);
  }

  // Mobile menu toggle
  const btn = document.getElementById('mobile-menu-button');
  const menu = document.getElementById('mobile-menu');
  const openI = document.getElementById('menu-open');
  const closeI = document.getElementById('menu-close');
  if(btn && menu){
    btn.addEventListener('click', ()=>{
      const open = menu.classList.toggle('hidden');
      openI.classList.toggle('hidden');
      closeI.classList.toggle('hidden');
    });
  }

  // Scroll to top
  const scrollBtn = document.getElementById('scrollTop');
  window.addEventListener('scroll', ()=>{
    if(window.scrollY > 300){
      scrollBtn.classList.remove('hidden');
    } else {
      scrollBtn.classList.add('hidden');
    }
  });
  if(scrollBtn){
    scrollBtn.addEventListener('click', ()=>{ window.scrollTo({top:0,behavior:'smooth'}); });
  }
});
