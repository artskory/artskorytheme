// window.addEventListener('scroll',function(){
//   scrollValue = window.pageYOffset;
//   var pic = document.querySelector('.filter-video');
//   pic.style.transform = 'translateY('+(-scrollValue*.5)+'%)';
// });

window.addEventListener('scroll',function(){
  scrollValue = window.pageYOffset;
  var pic = document.querySelector('.superpose');
  pic.style.transform = 'translateY('+(-scrollValue/6-60)+'%)';
});
