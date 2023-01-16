const arrow = document.querySelector('.back-to-top')

arrow.addEventListener('click', () =>{
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    })
})