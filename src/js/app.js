
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
   const prefiereDarkMode = window.matchMedia('(prefers-color-scheme: dark)');
   // console.log(prefiereDarkMode.matches)

   if(prefiereDarkMode.matches) {
      document.body.classList.add('dark-mode');
   } else {
      document.body.classList.remove('dark-mode');
   }

   prefiereDarkMode.addEventListener('change', function() {
      if(prefiereDarkMode.matches) {
         document.body.classList.add('dark-mode');
      } else {
         document.body.classList.remove('dark-mode');
      }
   })

   const botonDarkMode = document.querySelector('.dark-mode-boton');
   botonDarkMode.addEventListener('click', toggleDarkMode)
}

function toggleDarkMode() {
   document.body.classList.toggle('dark-mode')
}
