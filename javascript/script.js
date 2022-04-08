const btnScrollToTop = document.querySelector("#btnScrollToTop");

if(btnScrollToTop){
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
}


var counter = 1;
if(counter){
setInterval(function(){
    document.getElementById('radio' + counter).checked = true;
    counter++;
    if(counter > 3){
        counter = 1;
    }
}, 5000);
}

var flights = [
    {
        originea: "Chișinău",
        destinatia: "Roma",
        data: "15/03/2022",
        aeroportul: "Aeroportul: Chișinău",
        pretul: "Prețul: 200 EURO",
        intoarcerea: "Data de întoarcere: 25/03/2022"
    },
    {
        originea: "Roma",
        destinatia: "Chișinău",
        data: "27/06/2022",
        aeroportul: "Aeroportul: Ciampino",
        pretul: "Prețul: 250 EURO",
        intoarcerea: "Data de întoarcere: 12/07/2022"
    },
    {
        originea: "Chișinău",
        destinatia: "Paris",
        data: "18/09/2022",
        aeroportul: "Aeroportul: Chișinău",
        pretul: "Prețul: 300 EURO",
        intoarcerea: "Data de întoarcere: 28/09/2022"
    },
    {
        originea: "Londra",
        destinatia: "Chișinău",
        data: "04/08/2022",
        aeroportul: "Aeroportul: Londra City",
        pretul: "Prețul: 400 EURO",
        intoarcerea: "Data de întoarcere: 14/08/2022"
    },
    {
        originea: "Chișinău",
        destinatia: "Berlin",
        data: "22/05/2022",
        aeroportul: "Aeroportul: Chișinău",
        pretul: "Prețul: 320 EURO",
        intoarcerea: "Data de întoarcere: 32/05/2022"
    }
    ]
let flag = 0;
function find_flight(){
var origin = document.getElementById("origin").value;
var destination = document.getElementById("destination").value;
var date = document.getElementById("date").value;
var table = document.getElementById("flights_table");
if(flag == 1){
    var rowCount = table.rows.length;
    for (var x = 0; x < rowCount; x++) {
       table.deleteRow(0);
    }
    flag = 0;
}

let ctr = 0;
ctr2 = 0;
mode = 1;
    for(let i = 0; i < flights.length; i++){ 
    if(origin == flights[i].originea && destination == flights[i].destinatia && date == flights[i].data){
        show_flight2(i, table);
        ctr = 1;
    }
}
if(ctr == 0){
    for(let i = 0; i < flights.length; i++){
        if(origin == flights[i].originea || destination == flights[i].destinatia || date == flights[i].data){
            show_flight2(i, table);
        }
    }
}

    if(flag == 0){
        document.getElementById("nuexista").innerHTML = "Nu există un astfel de zbor!";
    }else{
        document.getElementById("nuexista").innerHTML = '';
    }
}

function find_all(){
    var table = document.getElementById("flights_table");
    if(flag == 1){
        var rowCount = table.rows.length;
        for (var x = 0; x < rowCount; x++) {
           table.deleteRow(0);
        }
        flag = 0;
    }

    for(let i = flights.length - 1; i >= 0; i--){
            show_flight(i, table);
    }
}
let ctr2 = 0; 
let mem_row;
function show_flight(i, table){
    let btn = document.createElement("button");
    btn.innerHTML = "Find more";
    btn.onclick = function () {
        if(ctr2 == 1){
            table.deleteRow(mem_row);
        }
        var row2 = table.insertRow(i+1);
        mem_row = i+1;
        var cell1row2 = row2.insertCell(0);
        cell1row2.innerHTML = flights[i].aeroportul + "<br>" + flights[i].pretul + "<br>" + flights[i].intoarcerea;
        cell1row2.colSpan = "3";
        ctr2 = 1;
      };

    var row = table.insertRow(0);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    cell4.style.backgroundColor = "transparent";
    cell4.style.border = "none";
    cell4.appendChild(btn);
    cell1.innerHTML = "Orașul de plecare:" + " " + flights[i].originea;
    cell2.innerHTML = "Destinația:" + " " + flights[i].destinatia;
    cell3.innerHTML = "Data:" + " " + flights[i].data;
    flag = 1;
}

function show_flight2(i, table){
    var row = table.insertRow(0);
    var row2 = table.insertRow(1);
    var cell1row2 = row2.insertCell(0);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    cell1.innerHTML = "Orașul de plecare:" + " " + flights[i].originea;
    cell2.innerHTML = "Destinația:" + " " + flights[i].destinatia;
    cell3.innerHTML = "Data:" + " " + flights[i].data;
    cell1row2.innerHTML = flights[i].aeroportul + "<br>" + flights[i].pretul + "<br>" + flights[i].intoarcerea;
    cell1row2.colSpan = "3";
    flag = 1;
}



