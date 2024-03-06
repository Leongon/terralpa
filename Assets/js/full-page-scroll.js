/* 
Pure JS https://github.com/alvarotrigo/fullPage.js/tree/master/pure%20javascript%20(Alpha)
Jquery Version

*/
fullpage.initialize('#fullpage', {
	autoScrolling: true, // Se activa el scroll.
	scrollHorizontally: true,
	fitToSection: false, // Acomoda el scroll automaticamente para que la seccion se muestre en pantalla.
	fitToSectionDelay: 300, // Delay antes de acomodar la seccion automaticamente.
	easing: 'easeInOutCubic', // Funcion de tiempo de la animacion.
	scrollingSpeed: 700, // Velocidad del scroll. Valores: en milisegundos.
	css3: true, // Si usara CSS3 o javascript.
	easingcss3: 'ease-out', // Curva de velocidad del efecto.
	loopBottom: false, // Regresa a la primera seccion siempre y cuando se ya haya llegado a la ultima sección y el ususario siga scrolleando.


	navigation: false, // Muesta la barra de navegación.
	menu: '#menu', // Menu de navegación.
	sectionsColor: ['yellow', 'orange', '#C0C0C0', '#ADD8E6'],
	anchors: ['inicio', 'nosotros', 'constructora','Concretera','inmobiliaria','contactanos'], // Anclas, las usamos para identificar cada seccion y poder acceder a ellas con el menu.
	slidesNavigation: true

});