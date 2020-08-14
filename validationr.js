//registering validation.js event handlers;

//product pages
document.getElementById("addToCart").onclick = checkQty; //check if input is a number
document.getElementById("qty").oninput = store; //stores new values to localstorage upon changes
document.getElementById("qty").onload = getValue(); //gets value from localstorage upon page load