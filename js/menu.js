var burger = document.querySelector('.category__burger a');
var windowW = window.innerWidth;
var arrows = document.querySelectorAll('.category__arrow');

burger.addEventListener('click', function(e) {
  if (windowW <= 991) {
    e.preventDefault();

    this.closest('li').classList.toggle('active');
    console.log(1111)
  }
});

arrows.forEach(function(arrow) {
  arrow.addEventListener('click', function(e) {
    if (windowW <= 991) {
      e.preventDefault();

      var parent = arrow.closest('li');
      parent.classList.toggle('active');

      if (parent.classList.contains('active')) {
        parent.querySelector('ul').style.maxHeight = 'none';
      } else {
        parent.querySelector('ul').style.maxHeight = '';
      }
    }
  });
})