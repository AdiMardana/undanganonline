// Audio Start
// const myAudio = document.getElementById("audio");
// const btn = document.getElementById("btn-playback");
// const btnIcon = document.querySelector("#btn-playback > i");

// const toggleMusic = () => {
//     const dataPlay = btn.getAttribute('data-play');

//     if (dataPlay === 'false') {
//         btn.setAttribute('data-play', 'true');
//         myAudio.play();
//         btnIcon.classList.remove("bx-volume-mute");
//         btnIcon.classList.add("bx-volume-full");
//     } else {
//         btn.setAttribute('data-play', 'false');
//         myAudio.pause();
//         btnIcon.classList.remove("bx-volume-full");
//         btnIcon.classList.add("bx-volume-mute");
//     }
// };

function popupToggle() {
    const modal = document.getElementById('modal');
    modal.classList.toggle('active');
}

var btnmodal = document.getElementById("btn-modal");
var button = document.getElementById("buttonmusic");
var audio = document.getElementById("player");
// var videonya = document.getElementById("videonya");

audio.loop = true;

button.addEventListener("click", function() {
    if (audio.paused) {
        audio.play();
        button.innerHTML = "<i class='btn bx bx-volume-full'></i>";
    } else {
        audio.pause();
        button.innerHTML = "<i class='btn bx bx-volume-mute'></i>";
    }
});

btnmodal.addEventListener("click", function() {
    // $('.js-hero-slider').slick('slickPlay');
    if (audio.paused) {
        audio.play();
        button.innerHTML = "<i class='btn bx bx-volume-full'></i>";
    } else {
        audio.pause();
        button.innerHTML = "<i class='btn bx bx-volume-mute'></i>";
    }
});

// // Backup
// const myAudio = document.getElementById("audio");
// const btn = document.getElementById("btn-playback");
// const btnIcon = document.querySelector("#btn-playback > i");
// const btnmodal = document.getElementById("btn-modal");

// const toggleMusic = () => {
//     const dataPlay = btn.getAttribute('data-play');

//     if (dataPlay === 'false') {
//         btn.setAttribute('data-play', 'true');
//         myAudio.play();
//         btnIcon.classList.remove("bx-volume-mute");
//         btnIcon.classList.add("bx-volume-full");
//     } else {
//         btn.setAttribute('data-play', 'false');
//         myAudio.pause();
//         btnIcon.classList.remove("bx-volume-full");
//         btnIcon.classList.add("bx-volume-mute");
//     }
// };
// // Backup

// Audio End

// Audio End

// Swiper JS Start
// var swiper = new Swiper(".mySwiper", {
//     centeredSlides: true,
//     spaceBetween: 30,
//     pagination: {
//         el: ".swiper-pagination",
//         dynamicBullets: true,
//     },
//     autoplay: {
//         delay: 2000
//     },
//     navigation: {
//         nextEl: ".swiper-button-next",
//         prevEl: ".swiper-button-prev",
//     },
// });

var swiper = new Swiper(".mySwiperGallery", {
    centeredSlides: true,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
    },
    autoplay: {
        delay: 1000,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
// Swiper JS End

AOS.init();