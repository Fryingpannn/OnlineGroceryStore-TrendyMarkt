/* event handlers for product pages quantity + login refresh value saving */

//checks if product quantity is a number
function checkQty(){
    var qty = document.getElementById("qty"); //qty = the textbox form
    var regex = qty.value.search(/^[0-9]+$/);   //search through the VALUE of the form for only numbers

    if(regex == 0)  //if number found
        return true
    else{ 
        alert("Please enter a valid number.");
        qty.focus();    //focus on the textbox
        qty.select();   //highlight the text
        return false;
    }
}
//store value after changes
function store(){
    var nb = this.value;
    localStorage.setItem("qty", nb);
}
//local storage to keep values after refresh
function getValue(){
var storedNb = localStorage.getItem("qty");

if(storedNb != null){
    document.getElementById("qty").value = storedNb; 
   }
else
   document.getElementById("qty").value = 1;
}
//store login email
function storeEmail(){
    var email = this.value;
    localStorage.setItem("loginEmail", email);
}
//local storage to keep email value after refresh
function getEmail(){
    var email = localStorage.getItem("loginEmail");

    if(email == null)
        document.getElementById("loginEmail").value = " ";
    else
        document.getElementById("loginEmail").value = email; 
}
//email empty validation
function emptyLogin(){
    var emptyE = document.getElementById("loginEmail");
    var emptyP = document.getElementById("loginPass");

    if(emptyE.value == "" || emptyP.value == ""){
        if(emptyE == ""){
            alert("Email or password missing.");
            emptyE.focus();
            emptyE.select();
        }
        else {
            alert("Email or password missing.");
            emptyP.focus();
            emptyP.select();
        }
        return false;
    }
    else
        return true;
}