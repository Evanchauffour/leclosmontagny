const button = document.querySelector('.more-picture')
const containerCarousel = document.querySelector('.container-carousel-background')
const carouselCells = document.querySelector('.flickity-viewport')
const body = document.querySelector('body')
const containerGite = document.querySelector('.container-gite')
const close = document.querySelector('.close')

button.addEventListener('click', () =>{
    containerCarousel.style.visibility = "visible"
    body.style.overflow = "hidden"
    body.classList.add('active')
})

close.addEventListener('click', () =>{
    containerCarousel.style.visibility = "hidden"
    body.style.overflow = "scroll"
    body.classList.remove('active')
})

containerCarousel.addEventListener('click', (evt) =>{
    if(evt.target.isSameNode(containerCarousel)){
        containerCarousel.style.visibility = "hidden"
        body.style.overflow = "scroll"
        body.classList.remove('active')
        console.log(evt.target);
    }
})



var flkty = new Flickity( '.carousel', {
    // options
  });

  var flkty = new Flickity( '.carousel-responsive', {
    // options
  });