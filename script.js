var slider = document.querySelector('.container');
var navbar = document.querySelector('.navbar');
var padd = parseFloat(getComputedStyle(slider).paddingLeft) + parseFloat(getComputedStyle(slider).marginLeft);

navbar.style.paddingLeft = padd + "px";
navbar.style.paddingRight = padd + "px";

function padding () {
    var slider = document.querySelector('.container');
    var navbar = document.querySelector('.navbar');
    var padd = parseFloat(getComputedStyle(slider).paddingLeft) + parseFloat(getComputedStyle(slider).marginLeft);

    navbar.style.paddingLeft = padd + "px";
    navbar.style.paddingRight = padd + "px";
}