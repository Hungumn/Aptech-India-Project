//Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}


var barBtn = document.querySelector('.js-bar')
var modal = document.querySelector('.menu-modal')
var closeBtn = document.querySelector('.js-close')
var overlay = document.querySelector('.menu-overlay')

barBtn.onclick = function() {
    modal.style.transform = "translateX(0)";
    overlay.style.display = "block";
}
closeBtn.onclick = function() {
    modal.style.transform = "translateX(100%)";
    overlay.style.display = "none";
}
overlay.onclick = function(event) {
    modal.style.transform = "translateX(100%)";
    overlay.style.display = "none";
}



var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1
    }
    slides[slideIndex - 1].style.display = "flex";
    setTimeout(showSlides, 7500); // Change image every 3 seconds
}



const dot1 = document.querySelector('.js-dot-1')
const dot2 = document.querySelector('.js-dot-2')

dot2.addEventListener('click', function() {
    dot2.classList.add('manual-btn--active')
    dot1.classList.remove('manual-btn--active')
})

dot1.addEventListener('click', function() {
    dot1.classList.add('manual-btn--active')
    dot2.classList.remove('manual-btn--active')
})



const navMobileBtn = document.querySelector('.js-mobile-btn')
const mobileMenu = document.querySelector('.js-mobile-menu')
var mobileOverlay = document.querySelector('.mobile-menu-overlay')

navMobileBtn.onclick = function() {
    mobileMenu.style.transform = "scaleY(1)";
    mobileOverlay.style.display = "block";
}

mobileOverlay.onclick = function() {
    mobileMenu.style.transform = "scaleY(0)";
    mobileOverlay.style.display = "none";
}


$(document).ready(function() {
    $('.dropdown-submenu a.test').on("click", function(e) {
        $(this).next('ul').toggle();
        e.stopPropagation();
        e.preventDefault();
    });
});