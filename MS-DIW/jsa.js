window.addEventListener('scroll', function() {
    var card = document.querySelector('.parallax-card');
    if (window.pageYOffset > 100) {
      card.classList.add('scrolled');
    } else {
      card.classList.remove('scrolled');
    }
  });