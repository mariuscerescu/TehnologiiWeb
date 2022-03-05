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

function find_flight(){
    var origin = document.getElementById("origin").value;
    var destination = document.getElementById("destination").value;
    var date = document.getElementById("date").value;

var flight1 = document.getElementById("flight1");
var flight2 = document.getElementById("flight2");
var flight3 = document.getElementById("flight3");
var flight4 = document.getElementById("flight4");
var flight5 = document.getElementById("flight5");

flight1.style.display = "none";
flight2.style.display = "none";
flight3.style.display = "none";
flight4.style.display = "none";
flight5.style.display = "none";
   
if(origin == "Chișinău" && destination == "Roma" && date == "15/03/2022"){
    flight1.style.display = "block";
}

if(origin == "Roma" && destination == "Chișinău" && date == "27/06/2022"){
    flight2.style.display = "block";
}

if(origin == "Chișinău" && destination == "Paris" && date == "18/09/2022"){
    flight3.style.display = "block";
}

if(origin == "Londra" && destination == "Chișinău" && date == "04/08/2022"){
    flight4.style.display = "block";
}

if(origin == "Chișinău" && destination == "Berlin" && date == "22/05/2022"){
    flight5.style.display = "block";
}
}

function find_all(){
    flight1.style.display = "block";
    flight2.style.display = "block";
    flight3.style.display = "block";
    flight4.style.display = "block";
    flight5.style.display = "block";
}

function more_info1(){
    document.querySelector("#more_info1").style.display = "table-cell";
}
function more_info2(){
    document.querySelector("#more_info2").style.display = "table-cell";
}
function more_info3(){
    document.querySelector("#more_info3").style.display = "table-cell";
}
function more_info4(){
    document.querySelector("#more_info4").style.display = "table-cell";
}
function more_info5(){
    document.querySelector("#more_info5").style.display = "table-cell";
}