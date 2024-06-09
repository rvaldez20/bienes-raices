
document.addEventListener('DOMContentLoaded', function() {

   eventListeners()

   darkMode()
})

function eventListeners() {
   const mobilMenu = document.querySelector('.mobile-menu');
   mobilMenu.addEventListener('click', navegacionResponsive)
}


function navegacionResponsive() {
   const navegacion = document.querySelector('.navegacion');

   navegacion.classList.toggle('mostrar')
   // if(navegacion.classList.contains('mostrar')) {
   //    navegacion.classList.remove('mostrar')
   // } else {
   //    navegacion.classList.add('mostrar')
   // }  es lo mismo que con toogle
}

function darkMode() {
   const botonDarkMode = document.querySelector('.dark-mode-boton');
   botonDarkMode.addEventListener('click', toggleDarkMode)
}

function toggleDarkMode() {
   document.body.classList.toggle('dark-mode')
}
