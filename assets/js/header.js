const burger = document.querySelector('.burger')
const nav = document.querySelector('.menu-menu-principal-container')
const burgerSpans = document.querySelectorAll('.burger span')
const overlayResponsive = document.querySelector('.container-header-responsive')


burger.addEventListener('click', () =>{
    nav.classList.toggle('active')
    burgerSpans.forEach(burgerSpan =>{
        burgerSpan.classList.toggle('active')
    })
    overlayResponsive.classList.toggle('active')
})