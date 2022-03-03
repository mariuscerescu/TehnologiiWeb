const btnScrollToTop = document.querySelector("#btnScrollToTop");

btnScrollToTop.addEventListener("click", function (){
    window.scrollTo({
    top: 0,
    left: 0,
    behavior: "smooth"
 });
});


let viewportHeight = window.innerHeight;
const btnScrollToSection = document.querySelector(".btn");
btnScrollToSection.addEventListener("click", function (){
    window.scrollTo({
    top: viewportHeight,
    left: 0,
    behavior: "smooth"
 });
});

var counter = 1;
setInterval(function(){
    document.getElementById('radio' + counter).checked = true;
    counter++;
    if(counter > 3){
        counter = 1;
    }
}, 5000);