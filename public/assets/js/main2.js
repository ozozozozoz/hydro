// let slideIndex = 0;
// showSlide()
// function showSlide(){
//       const buttons = document.querySelectorAll("[data-carousel-button]")

//     buttons.forEach(button => {
//         button.addEventListener("click", () => {
//             const offset = button.dataset.carouselButton === "nextt" ? 1 : -1
//             const slides = button
//             .closest("[data-carousel]")
//             .querySelector("[data-slides]")

//             const activeSlide = slides.querySelector("[data-active]")
//             let newIndex = [...slides.children].indexOf(activeSlide) + offset

//             if(newIndex < 0)newIndex = slides.children.length -1
//             if(newIndex >= slides.children.length) newIndex = 0

//             slides.children[newIndex].dataset.active = true
//             delete activeSlide.dataset.active
//         })       
//     })

// }

// function plusSlides(){
//   var counter = 1
//   setInterval(function(){
//     document.getElementsByClassName("ccarousel-button").checked = true
//     counter++
//     if(counter < 4){
//       counter = 1
//     }
//   }, 2000)
// }

// plusSlides()

const myslide = document.querySelectorAll('.myslide'),
	  dot = document.querySelectorAll('.dot');
let counter = 1;
slidefun(counter);

let timer = setInterval(autoSlide, 8000);
function autoSlide() {
	counter += 1;
	slidefun(counter);
}
function plusSlides(n) {
	counter += n;
	slidefun(counter);
	resetTimer();
}
function currentSlide(n) {
	counter = n;
	slidefun(counter);
	resetTimer();
}
function resetTimer() {
	clearInterval(timer);
	timer = setInterval(autoSlide, 8000);
}

function slidefun(n) {
	
	let i;
	for(i = 0;i<myslide.length;i++){
		myslide[i].style.display = "none";
	}
	for(i = 0;i<dot.length;i++) {
		dot[i].className = dot[i].className.replace(' active', '');
	}
	if(n > myslide.length){
	   counter = 1;
	   }
	if(n < 1){
	   counter = myslide.length;
	   }
	myslide[counter - 1].style.display = "block";
	dot[counter - 1].className += " active";
}


