(function ($) {
    "use strict";

    // loader
    var loader = function () {
        setTimeout(function () {
            if ($('#loader').length > 0) {
                $('#loader').removeClass('show');
            }
        }, 1);
    };
    loader();

    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Dropdown on mouse hover
    $(document).ready(function () {
        function toggleNavbarMethod() {
            if ($(window).width() > 992) {
                $('.navbar .dropdown').on('mouseover', function () {
                    $('.dropdown-toggle', this).trigger('click');
                }).on('mouseout', function () {
                    $('.dropdown-toggle', this).trigger('click').blur();
                });
            } else {
                $('.navbar .dropdown').off('mouseover').off('mouseout');
            }
        }
        toggleNavbarMethod();
        $(window).resize(toggleNavbarMethod);
    });


    // Main carousel
    $(".carousel .owl-carousel").owlCarousel({
        autoplay: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        items: 1,
        smartSpeed: 300,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
        ]
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Testimonials carousel
    $(".testimonials-carousel").owlCarousel({
        center: true,
        autoplay: true,
        smartSpeed: 2000,
        dots: true,
        loop: true,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });


    // Related post carousel
    $(".related-slider").owlCarousel({
        autoplay: true,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            }
        }
    });

})(jQuery);

document.addEventListener('DOMContentLoaded', function(){
    let buttonConte = document.querySelector ('.popup_container');
    let button = document.querySelectorAll('.open_poput' );
    for (let i = 0; i < button.length ; i++){
        button[i].addEventListener('click', function(){
            buttonConte.style.display = 'flex';
        })
    }
    if(buttonConte !== null ){
        buttonConte.addEventListener('click', function(event){
            if(event.target == buttonConte) {
                buttonConte.style.display = 'none';
            }
        });
    }
})

let div = document.querySelector('.search-filter');
let but = document.querySelector('.btn-filter');
let isDivVisible = false;

function toggleDiv() {
    if (isDivVisible) {
        div.style = 'right: -11.5%;';
        isDivVisible = false;
    } else {
        div.style = 'right: 1%;';
        isDivVisible = true;
    }
}

let content = document.getElementById("content");
let button = document.getElementById("btn-filter");
let isRight = true; // начальное положение - правая сторона

if (button !== null ){
    button.addEventListener("click", function() {
        if (isRight) {
            content.style='text-align: end'; // сдвигаем содержимое вправо
            button.style='background-color: #a5dba9ad';
        } else {
            content.style='text-align: start'; // сдвигаем содержимое влево
            button.style='background-color: rgb(248, 120, 120)';
        }
        isRight = !isRight; // меняем положение
    });
}

let fileInput = document.getElementById('fileInput');
let fileDisplayArea = document.getElementById('fileDisplayArea');

if (fileInput !== null){
    fileInput.addEventListener('change', (event) => {
        let files = event.target.files;
        let fileArray = Array.from(files);

        fileArray.forEach(file => {
            if (file.type.match('image.*')) { // Проверяем, является ли файл изображением
                let reader = new FileReader();

                // Настраиваем reader для чтения содержимого файла
                reader.readAsDataURL(file);

                // Когда reader закончит чтение, обновляем область отображения содержимого файла
                reader.onload = (event) => {

                    if (fileDisplayArea.childElementCount < 6){
                        let fileContents = event.target.result;
                        fileDisplayArea.innerHTML += `<img src="${fileContents}">`;
                    }else{
                        alert (`xvatit`)
                    }
                }
            } else {
                alert(`Файл ${file.name} не является изображением.`);
            }
        });
    });
}
