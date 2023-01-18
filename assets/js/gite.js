const button = document.querySelector('.more-picture')
const carousel = document.querySelector('.carousel')
const carouselCells = document.querySelector('.flickity-viewport')
const body = document.querySelector('body')
const containerGite = document.querySelector('.container-gite')

button.addEventListener('click', () =>{
    carousel.style.visibility = "visible"
    body.style.overflow = "hidden"
    body.classList.add('active')
})



var flkty = new Flickity( '.carousel', {
    // options
  });