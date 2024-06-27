const barraob = document.querySelector('#barra')
const navob =document.querySelector('#nav')
const all =document.querySelector('#navegacion')

barraob.addEventListener('click', function() {

    if(barraob) {
        all.classList.toggle('mostrar')
    } else {
        console.log('hola')
    }

})