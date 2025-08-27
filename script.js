function getStarted() {
  window.scrollTo({
    top: document.querySelector('.products').offsetTop,
    behavior: 'smooth'
  });
}

function addToCart(product) {
  alert(product + ' added to cart!');
}
