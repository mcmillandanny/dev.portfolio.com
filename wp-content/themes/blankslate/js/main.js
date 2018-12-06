console.log('Hello from the console');


// console.log(TweenMax);
var tl = new TimelineMax();

const hamburger = document.getElementById('hamburger');
const lines = document.querySelectorAll('.hamburger-lines');




function hamburgerToggle() {
    lines.forEach(function(line) {
        console.log(line);
        line.classList.toggle("change");
    });

    const navOpen = document.querySelector('.menu-menu-1-container')
        navOpen.style.display = navOpen.style.display === 'block' ? '' : 'block';
};
   

hamburger.addEventListener("click", hamburgerToggle);