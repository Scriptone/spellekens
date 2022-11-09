function menuToggle () {
    var nav = document.querySelector("nav");
    nav.classList.toggle("nav-active");
    console.log(nav.classList.contains("nav-active"));
}

function navline() {
    console.log("Navline init");
    var navElements = document.querySelectorAll("nav ul li");
    var navElementsA = document.querySelectorAll("nav ul li a");
    const navLine = document.querySelector(".nav-line");
    const contact = document.querySelector(".button");
    navElements.forEach((element, index, fullArray) => {
        element.addEventListener("mouseover", () => {
            positionNavLine(navElementsA[index]);
        });
    });

    contact.addEventListener("mouseover", function() {
        navLine.style.display = "none";
    })
    contact.addEventListener("mouseleave", function() {
        navLine.style.display = "block";
    })


    navElements.forEach(element => {
        element.addEventListener("mouseleave", () => {
            var activeElement = document.getElementsByClassName("active")[0]
            positionNavLine(activeElement);
        });
    });

    const positionNavLine = (element) => {
        navLine.style.display = "block";
        var left = element.offsetLeft+ 8;
        var width = element.offsetWidth - 16;
        var top = element.offsetTop + element.offsetHeight - .8 * 16;
        navLine.style.left = left + "px";
        navLine.style.width = width + "px";
        navLine.style.top = top + "px";
    };

    window.addEventListener("DOMContentLoaded", () => {
        var activeElement = document.getElementsByClassName("active")[0]
        positionNavLine(activeElement);
    });

    window.addEventListener("resize", () => {
        var activeElement = document.getElementsByClassName("active")[0]
        positionNavLine(activeElement);
    });

    var activeElement = document.getElementsByClassName("active")[0]
    positionNavLine(activeElement);
}
navline();