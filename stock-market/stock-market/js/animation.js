let screenPosition = window.innerHeight+100;

console.log(screenPosition);

let element1 = document.getElementById('fadeup1');
let element2 = document.getElementById('fadeup2');
let element3 = document.getElementById('fadeup3');
let slideDown= document.getElementById('slidedown');
let plan51= document.getElementById('plan5-1');
let plan52= document.getElementById('plan5-2');
let plan53= document.getElementById('plan5-3');





window.addEventListener('scroll', function(){


    let position1 = element1.getBoundingClientRect().top;
  if (position1 < screenPosition) {
    element1.classList.add('slide-right');
  }

  let position2 = element2.getBoundingClientRect().top;

  if (position2 < screenPosition) {
    element2.classList.add('slide-left');
  }

  let position3 = element3.getBoundingClientRect().top;
  if (position3 < screenPosition) {
    element3.classList.add('slide-right');
  }

  let position4 = slideDown.getBoundingClientRect().top;
  if (position4 < screenPosition) {
    slideDown.classList.add('slide-up');
  }

  let position5 = plan51.getBoundingClientRect().top;
  if (position5 < screenPosition) {
    plan51.classList.add('slide-left');
  }

  let position6 = plan52.getBoundingClientRect().top;
  if (position6 < screenPosition) {
    plan52.classList.add('slide-up');
  }

  let position7 = plan53.getBoundingClientRect().top;
  if (position7 < screenPosition) {
    plan53.classList.add('slide-right');
  }
})