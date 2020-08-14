//product list/edit/add backstore

document.getElementById("Price").oninput = storeProduct; //stores new values to localstorage upon changes
document.getElementById("Price").onload = getValueProduct(); //gets value from localstorage upon page load
document.getElementById("name").oninput = store1; //stores new values to localstorage upon changes
document.getElementById("name").onload = getValue1(); //gets value from localstorage upon page load

document.getElementById("Inventory").oninput = store2; //stores new values to localstorage upon changes
document.getElementById("Inventory").onload = getValue2(); //gets value from localstorage upon page load

document.getElementById("Productdescription").oninput = store3; //stores new values to localstorage upon changes
document.getElementById("Productdescription").onload = getValue3(); 

document.getElementById("Ingredient description").oninput = store4; //stores new values to localstorage upon changes
document.getElementById("Ingredient description").onload = getValue4(); //gets value from localstorage upon page load