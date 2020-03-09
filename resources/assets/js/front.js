var scrollAnimationElm = document.querySelectorAll('.sa');
var scrollAnimationFunc = function () {
  for (var i = 0; i < scrollAnimationElm.length; i++) {
    var triggerMargin = 100;
    var elm = scrollAnimationElm[i];
    var showPos = 0;
    if (elm.dataset.sa_margin != null) {
      triggerMargin = parseInt(elm.dataset.sa_margin);
    }
    if (elm.dataset.sa_trigger) {
      showPos = document.querySelector(elm.dataset.sa_trigger).getBoundingClientRect().top + triggerMargin;
    } else {
      showPos = elm.getBoundingClientRect().top + triggerMargin;
    }
    if (window.innerHeight > showPos) {
      var delay = (elm.dataset.sa_delay) ? elm.dataset.sa_delay : 0;
      setTimeout(function (index) {
        scrollAnimationElm[index].classList.add('show');
      }.bind(null, i), delay);
    }
  }
}
window.addEventListener('load', scrollAnimationFunc);
window.addEventListener('scroll', scrollAnimationFunc);
