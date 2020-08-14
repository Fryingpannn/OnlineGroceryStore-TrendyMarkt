function checkName(){
var cust=document.getElementById("name");

var position= cust.value.search(/^[A-Z][a-z]+, ?[A-Z][a-z]+/);
if(position!=0)
{
alert("The name you entered (" + cust.value + 
          ") is not in the correct form. \n" +
          "The correct form is: " +
          "last-name, first-name \n" +
          "Please go back and fix the name");
          cust.focus();
          cust.select();
    return false;}else return true;}
    
function validate(){
    var order=document.getElementById("orderno");
    var date=document.getElementById("create");
    var customer=document.getElementById("name");
    var ship=document.getElementById("address");
   if(order.value==""){
        alert("You did not enter an order number \n"+"please enter an order number");
        order.focus();
        return false; }
    else
   
    if(date.value==""){
        alert("You left the date of purchase empty \n "+"please go back and enter a date");
        date.focus();
        return false;}
    else 
   if(customer.value=="")
      { alert("You did not enter the customer's name \n"+"please go back and enter a name");
    customer.focus();
    return false;}
    else
if(ship.value=="")
   { alert("You left the customer's shipping address empty \n"+"please go back and enter an address");
    ship.focus();
    return false;}
    else
    return true;
}


