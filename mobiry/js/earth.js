



var swiper = new Swiper('.swiper-container', {
    spaceBetween: 100,
    centeredSlides: true,
    autoHeight: true,
    autoplay: {
      delay: 4500,
      speed:10,
      disableOnInteraction: false,
    },
   
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });


  window.onload = function() {
	lax.setup() // init

	const updateLax = () => {
		lax.update(window.scrollY)
		window.requestAnimationFrame(updateLax)
	}

	window.requestAnimationFrame(updateLax)
}

// window.onscroll = function(){
//     console.log(document.documentElement.scrollTop);
// }

