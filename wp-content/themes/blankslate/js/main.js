console.log('Hello from the console');


// console.log(TweenMax);
var tl = new TimelineMax();

const hamburger = document.getElementById('hamburger');
const lines = document.querySelectorAll('.hamburger-lines');
const navOpen = document.querySelector('.menu-menu-1-container')




function hamburgerToggle() {
    lines.forEach(function(line) {
        line.classList.toggle("change");       
    });
    
    navOpen.style.display = navOpen.style.display === 'block' ? '' : 'block'; 
    navOpen.classList.add("menu-ani")
};
   

hamburger.addEventListener("click", hamburgerToggle);