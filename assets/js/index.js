// https://splidejs.com/
window.onload = () =>{
    const el = document.querySelector('#loading_content');
    el.style.opacity= 0;
    el.style.zIndex = "-1000";
}

document.addEventListener('DOMContentLoaded', function () {
    new Splide('#slider-promotion', {
        type: 'loop',
        perPage: 1,
        autoplay: true,
        interval: 15000, // How long to display each slide
        pauseOnHover: false, // must be false
        pauseOnFocus: false, // must be false
        resetProgress: false,
        autoHeight: true,
        pagination :false
    }).mount();
    new Splide('#slider-testimony', {
        type: 'loop',
        perPage: 1,
        autoplay: true,
        interval: 15000, // How long to display each slide
        pauseOnHover: false, // must be false
        pauseOnFocus: false, // must be false
        resetProgress: false,
        autoHeight: true,
        pagination :false
    }).mount();
});