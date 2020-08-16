//registering validation.js event handlers;

//product pages
document.getElementById("addToCart").onclick = checkQty; //check if input is a number
document.getElementById("qty").oninput = store; //stores new values to localstorage upon changes

var pricecheck=document.getElementById("Price");
pricecheck.addEventListener("change", checkPrice, false);

var Inventorycheck=document.getElementById("Inventory");
Inventorycheck.addEventListener("change", checkInventory, false);

var description=document.getElementById("Productdescription");
description.addEventListener("change", checkdescritpion, false);

document.getElementById("qty").onload = getValue(); //gets value from localstorage upon page load