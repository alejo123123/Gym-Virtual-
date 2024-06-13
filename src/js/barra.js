const barraob = document.querySelector('#barra')
const navob =document.querySelector('#nav')

barraob.addEventListener('click', function() {

    if(barraob) {
        navob.classList.toggle('dentro')
    } else {
        console.log('hola')
    }

})