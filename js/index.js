$('.image_slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    infinite: true,
    autoplaySpeed: 2000,
    arrows: true,
    dots: true,
    speed: 300,
    draggable: false,
    prevArrow: `<button type='button' class='slick-prev slick-arrow '><ion-icon name="arrow-back-outline">
    </ion-icon></button>`,
    nextArrow: `<button type='button' class='slick-next slick-arrow '><ion-icon name="arrow-forward-outline"></ion-icon></button>`,
});
