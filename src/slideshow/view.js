import Splide from '@splidejs/splide';

// Import our default css theme for splide
import '@splidejs/splide/css';

document.addEventListener( 'DOMContentLoaded', () => {

    // Splide
    const splides = document.querySelectorAll('.splide')
  
    if(!!splides && splides.length > 0){
      splides.forEach(splide => {
  
        // Grab the slide interval and convert it to an integer and milliseconds or fallback to 3000ms
        const interval = parseInt(splide.dataset.interval) * 1000 || 3000
  
        new Splide(splide, {type: 'loop', autoplay: true, perPage: 1, pauseOnHover: false, interval: interval}).mount()
      })
    }
  })