/* Product list/edit back-store */
var pricecheck=document.getElementById("Price");
pricecheck.addEventListener("change", checkPrice, false);
var Inventorycheck=document.getElementById("Inventory");
Inventorycheck.addEventListener("change", checkInventory, false);
var description=document.getElementById("Productdescription");
description.addEventListener("change", checkdescritpion, false);

function checkPrice(event){
    var myPrice = event.currentTarget;
    var position = myPrice.value.search(/^\d+(,\d{1,2})?$/);
    if(position!=0){
        alert("The Price input is not a number or the number is not in the right format. The format should be as follow: dd(can be more than two):dd");  
        myPrice.focus();
        myPrice.select();
    }
}
function checkInventory(event){
    var myPosition = event.currentTarget;
    var position = myPosition.value.search(/^[0-9]+$/);

    if(position!=0){
        alert("The Inventory input is not a number");  
        myPosition.focus();
        myPosition.select();
    }
}
function checkdescritpion(event){
    var mydescrption = event.currentTarget;
    var position = mydescrption.value.search(/\w*\:\w*/);
    if(position!=0){
        alert("The Description format is not in the right format. The format should be as follows:  Category:name");  
        mydescrption.focus();
        mydescrption.select();
    }
}
function selectALL(isChecked){

    if(isChecked){
    var checkboxes = document.getElementsByName('select');
    for(var i=0;i<checkboxes.length;i++){
        if(checkboxes[i].type=='checkbox')
        checkboxes[i].checked=true;
    }
}
else{
    var checkboxes = document.getElementsByName('select');
    for(var i=0;i<checkboxes.length;i++){
        if(checkboxes[i].type=='checkbox')
        checkboxes[i].checked=false;
    }
}
}
function cannotedittwo(){
    var check=document.getElementsByName('select');
    var count=0;
    for(var i=0;i<check.length;i++){
     if (check[i].checked==true){
         count++;
     }
    }

    if(count>1){
        alert("You Cannot edit more than one product at the time");
        return false;
    }

}
function Delete(tableID){
    var check=document.getElementsByName('select');
    var table=document.getElementById('datatable');
    for(var i=0;i<check.length;i++){
        if(check[i].checked==true){
            table.deleteRow(i);
        }
    }
}
function validateImage() {
    var formData = new FormData();
 
    var file = document.getElementById("image").files[0];
 
    formData.append("Filedata", file);
    var t = file.type.split('/').pop().toLowerCase();
    if (t != "jpeg" && t != "jpg" && t != "png" && t != "bmp" && t != "gif") {
        alert('Please select a valid image file');
        document.getElementById("image").value = '';
        return false;
    }
    return true;
}

//store value after changes
function storeProduct(){
    var nb = this.value;
    localStorage.setItem("Price", nb);
}
    //local storage to keep values after refresh
    function getValueProduct(){
    var storedNb = localStorage.getItem("Price");

    if(storedNb != null){
        document.getElementById("Price").value = storedNb; 
    }
    else
        document.getElementById("Price").value = 0;
}

function store1(){
    var nb = this.value;
    localStorage.setItem("name", nb);
}
    //local storage to keep values after refresh
    function getValue1(){
    var storedNb = localStorage.getItem("name");

    if(storedNb != null){
        document.getElementById("name").value = storedNb; 
    }
    else
        document.getElementById("name").value = 0;
}

function store2(){
    var nb = this.value;
    localStorage.setItem("Inventory", nb);
}
    //local storage to keep values after refresh
    function getValue2(){
    var storedNb = localStorage.getItem("Inventory");

    if(storedNb != null){
        document.getElementById("Inventory").value = storedNb; 
    }
    else
        document.getElementById("Inventory").value = 0;
}

function store3(){
    var nb = this.value;
    localStorage.setItem("Productdescription", nb);
}
    //local storage to keep values after refresh
    function getValue3(){
    var storedNb = localStorage.getItem("Productdescription");

    if(storedNb != null){
        document.getElementById("Productdescription").value = storedNb; 
    }
    else
        document.getElementById("Productdescription").value = 0;
}

function store4(){
    var nb = this.value;
    localStorage.setItem("Ingredient description", nb);
}
    //local storage to keep values after refresh
    function getValue4(){
    var storedNb = localStorage.getItem("Ingredient description");

    if(storedNb != null){
        document.getElementById("Ingredient description").value = storedNb; 
    }
    else
        document.getElementById("Ingredient description").value = 0;
}