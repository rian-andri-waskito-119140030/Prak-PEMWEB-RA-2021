//Nama : Rian Andri Waskito
//NIM: 119140030
//Kelas: RA
function themechange(){
    let change = document.getElementById("theme").value;
    if (change === "light"){
        lightMode()
    }else{
        darkMode()
    }
}

function lightMode(){
    let lightMode = document.getElementById("div");
    let lightMode2 = document.getElementById("body");
    lightMode2.style.background = "white";
    lightMode2.style.color = "black";
    lightMode.style.backgroundColor = "white";
    lightMode.style.color = "white";
}

function darkMode(){
    let darkMode = document.getElementById("div");
    let darkMode2 = document.getElementById("body");

    darkMode2.style.background = "black";
    darkMode2.style.color = "white";
    darkMode.style.backgroundColor = "black";
    darkMode.style.color = "white";
}

function wheaterchange(){
    let wheater = document.getElementById("wheater").value;
    if (wheater === "Sunny"){
        document.getElementById("p1").innerHTML = "It is nice and sunny outside today. Wear shorts! Go to the beach, or the park, and get an ice cream";
    }else{
        document.getElementById("p1").innerHTML = "Rain is falling outside, take a rain coat and a brolly, and don't say out for too long";
    }
}

function bilanganfaktorial(){
    let number = document.getElementById("number").value;
    let result = 1;

    for (let n = 1; n <= number; n++){
        result = result * n;
    }
    document.getElementById("p2").innerHTML = "The factorial of " + number + " is " + result;
}