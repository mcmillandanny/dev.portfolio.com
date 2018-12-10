console.log('Hello from the console');


var tl = new TimelineMax();

const hamburger = document.getElementById('hamburger');
const lines = document.querySelectorAll('.hamburger-lines');
const navOpen = document.querySelector('.site-nav')

function hamburgerToggle() {
    lines.forEach(function(line) {
        line.classList.toggle("change");       
    });
    
    navOpen.style.display = navOpen.style.display === 'block' ? '' : 'block'; 
    navOpen.classList.add("menu-ani")
};

hamburger.addEventListener("click", hamburgerToggle);