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


    // Carousel

var flkty = new Flickity( '.carousel', {
    // options
});


//   Carousel responsive

var flkty = new Flickity( '.carousel-responsive', {
    // options
});



//   Menu responsive


const items = document.querySelectorAll('.items');
const tab = document.querySelectorAll('.tab');
index = 0;
  
items.forEach(item =>{
  
    item.addEventListener('click', (e) =>{
        index = e.target.getAttribute('data-tab');
        console.log(index)
        for(i = 0; i < tab.length; i++){
            if(tab[i].getAttribute('data-tab') == index){
                  tab[i].style.display = "flex"
            }else{
                tab[i].style.display = "none"

            }
        }
        for(j = 0; j < items.length; j++){
            if(items[j].getAttribute('data-tab') != index){
                  items[j].classList.remove('active')
            }else{
                items[j].classList.add('active')

            }
        }
    })
})