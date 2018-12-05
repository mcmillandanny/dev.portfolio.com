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
};
   

hamburger.addEventListener("click", hamburgerToggle);